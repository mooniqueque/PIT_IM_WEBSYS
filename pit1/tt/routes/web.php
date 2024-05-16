<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admission', function () {
    return view('admission');
});

Route::get('/AdminDashboard', function () {
    return view('AdminDashboard');
});

Route::get('/Login', function () {
    return view('Login');
});