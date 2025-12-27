<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/book', function () {
    return view('book');
});
