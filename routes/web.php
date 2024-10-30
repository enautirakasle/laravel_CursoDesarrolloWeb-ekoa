<?php

 // Start of Selection
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', [HelloWorldController::class, 'index']);