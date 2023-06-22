<?php

use Illuminate\Support\Facades\Route;


Route::get('/benvenuti', function () {
    return view('benvenuti');
});

Route::get('/laravel', function () {
    return view('laravel');
});
