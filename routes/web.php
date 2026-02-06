<?php

use App\Http\Controllers\Dashboard\CategorieController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\firstController;
use App\Http\Middleware\TestMiddlewate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('/test', firstController::class);

Route::get('/test', [firstController::class, 'index']);
Route::get('/test/{post}', [firstController::class, 'other']);

// Route::get('/test', function (){
//     return redirect('crud', 303);
    // return redirect()->route('crud');
    // return to_route('crud');
// });

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

Route::group(['prefix' => 'dashboard'],function (){
    Route::resource('post', PostController::class);
    Route::resource('categorie', CategorieController::class);

    Route::resources([
        'postis' => PostController::class,
        'category' => CategorieController::class,
    ]);

});

Route::get('test2/{id?}/{name?}', function ($id=28394750938745, $name="cesario"){
    echo $id;
    echo $name;
});

Route::controller(PostController::class)->group(function(){
    Route::get('post', 'index')->name("post.index");
    Route::get('post/{post}', 'show')->name("post.show");
    Route::get('post/create', 'create')->name("post.create");
    Route::get('post/{post}/edit', 'edit')->name("post.edit");

    Route::post('post', 'store')->name("post.store");
    Route::put('post/{post}', 'update')->name("post.update");
    Route::delete('post/{post}', 'destroy')->name("post.destroy");
});

Route::middleware([TestMiddlewate::class])->group(function (){
    Route::get('/test3', function(){
        echo "welcome to test3";
    });
});