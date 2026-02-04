<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){
    return View('test');
});

Route::get('/crud', function (){
    return View('crud/index');
});

// Route::get('/test', function(){
//     return "Welcome";
// });