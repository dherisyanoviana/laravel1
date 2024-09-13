<?php

//use App\Http\Controllers\BookController;
//use App\Http\Controllers\RumahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\StoreController;
//use App\Models\product;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/form', function () {
    return view('form');
});


//Route::get('/rumah', [RumahController::class, "index"]);

//Route::get('/book', [BookController::class, 'index']);

//Route::get('/home', [HomeController::class, 'index']); // Untuk menampilkan form
//st('/home', [HomeController::class, 'submit']); // Untuk mengirim form

Route::get("/create", [StoreController::class, "store"]);

//Route::get("/show", [HomeController::class, "show"]);

Route::get("/show", [TableController::class, "show"]);

Route::get('/products/{id}/edit', [TableController::class, 'edit']);

Route::put('/products/{id}', [TableController::class, 'update']);

Route::delete('/products/{id}', [TableController::class, 'destroy']);