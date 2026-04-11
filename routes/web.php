<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

// home page
Route::get('/', function () {
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



Route::get('/', function () {
    if (Request::getHost() === 'brhsprom26.com') {
        return redirect('https://www.brhsprom26.com', 301);
    }

    return view('welcome'); // or your homepage
});
