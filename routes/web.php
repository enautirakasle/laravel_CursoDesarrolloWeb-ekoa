<?php

 // Start of Selection
use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function(){
    
    $tasks = Task::take(20)->get();
    dd($tasks);
});