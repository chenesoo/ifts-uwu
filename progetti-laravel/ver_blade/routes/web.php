<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\BookController;

Route::get('/', [
    \App\Http\Controllers\HomeController::class,
'home'
]);

Route::get('/books', [
    \App\Http\Controllers\BookController::class,
'index'
]);

Route::get('/books/delete/{id}', [
    \App\Http\Controllers\BookController::class,
'delete'
]);

Route::get('/books/create', [
    \App\Http\Controllers\BookController::class,
'create'
]);

Route::post('/books/create', [
    \App\Http\Controllers\BookController::class,
'save'
]);

Route::get('/books/edit/{id}', [
    \App\Http\Controllers\BookController::class,
'edit'
]);

Route::post('/books/edit/{id}', [
    \App\Http\Controllers\BookController::class,
'update'
]);