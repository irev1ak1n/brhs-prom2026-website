<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/faq', 'pages.faq')->name('faq');
