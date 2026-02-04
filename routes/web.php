<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){
    return View('test');
});

// Route::get('/test', function(){
//     return "Welcome";
// });