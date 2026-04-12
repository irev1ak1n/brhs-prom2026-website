<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'first_name' => ['nullable', 'string', 'max:255'],
            'brhs_role' => ['nullable', 'in:student,parent,other'],
        ]);

        $apiKey = config('services.mailerlite.api_key');
        $groupId = config('services.mailerlite.group_id');

        if (!$apiKey || !$groupId) {
            return back()->with('newsletter_error', 'Newsletter is not configured yet.');
        }

        try {
            $response = Http::withToken($apiKey)
                ->acceptJson()
                ->post('https://connect.mailerlite.com/api/subscribers', [
                    'email' => $validated['email'],
                    'groups' => [(string) $groupId],
                    'fields' => [
                        'name' => $validated['first_name'] ?? '',
                        'brhs_role' => $validated['brhs_role'] ?? '',
                    ],
                    'status' => 'active',
                ]);

            if ($response->successful()) {
                return back()->with('newsletter_success', 'You have been subscribed successfully.');
            }

            $body = $response->json();

            if (
                $response->status() === 422 &&
                isset($body['message']) &&
                str_contains(strtolower($body['message']), 'already')
            ) {
                return back()->with('newsletter_success', 'This email is already subscribed.');
            }

            Log::error('MailerLite subscribe failed', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return back()->with('newsletter_error', 'Something went wrong. Please try again.');
        } catch (\Throwable $e) {
            Log::error('MailerLite subscribe exception', [
                'message' => $e->getMessage(),
            ]);

            return back()->with('newsletter_error', 'Something went wrong. Please try again.');
        }
    }
}
