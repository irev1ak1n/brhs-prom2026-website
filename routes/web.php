<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

// home page
Route::get('/', function () {
    $host = request()->getHost();

    if ($host === 'brhsprom26.com') {
        return redirect()->to('https://www.brhsprom26.com', 301);
    }

    return view('pages.home');
});

// frequently asked questions page
Route::view('/faq', 'pages.faq')->name('faq');

// contact us info
Route::view('/contact', 'pages.contact')->name('contact');

// general info about prom
Route::view('/night-guide', 'pages.night-guide')->name('night-guide');

// tickets page
Route::view('/tickets', 'pages.tickets')->name('tickets');

// gallery page
Route::view('/gallery', 'pages.gallery')->name('gallery');

// contact form submit
Route::post('/contact-submit', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::raw(
        "Name: {$data['name']}\nEmail: {$data['email']}\nMessage: {$data['message']}",
        function ($msg) use ($data) {
            $msg->to('brhsprom2026@gmail.com')
                ->replyTo($data['email'], $data['name'])
                ->subject('New Contact Form Submission');
        }
    );

    return back()->with('success', 'Message sent!');
})->name('contact.submit');
