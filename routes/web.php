<?php

// use App\Http\Controllers\RegisterController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::post('/', function (Request $request) {
//   dd($request->all());
 
// });
// common route prefix
Route::resource('category',CategoryController::class);

Route::get('/create', [RegisterController::class, 'create']);


// Route::post('/register', [RegisterController::class, 'register'])->name('register');
