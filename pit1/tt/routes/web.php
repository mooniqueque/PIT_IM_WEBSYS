<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admission', function () {
    return view('admission');
});


Route::post('/submitForm', [FormController::class, 'submitForm']);
