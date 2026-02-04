<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){
    return View('test');
});

// Route::get('/crud', function (){
//     return View('crud/index');
// });

// Route::get('/test', function(){
//     return "Welcome";
// });

Route::get('/crud', function(){
    $age = 33;
    $data = ['name' => 'Cesar', 'age' => $age];

    return view('crud/index', $data);
})->name('crud');

Route::get('contact1', function(){
    $data = ['name' => 'Hector'];
    return view('contacts/contact1', $data);
})->name('contact1');

Route::get('contact2', function(){
    $data = ['name' => 'Garcia'];
    return view('contacts/contact2', $data);
})->name('contact2');