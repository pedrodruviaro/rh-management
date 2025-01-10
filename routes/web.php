<?php

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/email', function () {
    dd("Hello RH Management");
});

// Testing mailhog
Route::get('/mailhog', function () {
    Mail::raw('Hello from Laravel App!', function (Message $message) {
        $message->to('teste@gmail.com')
            ->subject('Welcome to RH Management!')
            ->from('rh@rhmanagement.com');
    });

    dd("Email sent!");
});
