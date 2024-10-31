<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index']);

// Visitor
Route::get('/visitor', [VisitorController::class, 'get']);
Route::post('/visitor', [VisitorController::class, 'insert']);

// Book
Route::get('/book', [BookController::class, 'all']);
Route::get('/book/{id}', [BookController::class, 'find']);
Route::get('/book/pengarang/{pengarang}', [BookController::class, 'where']);
Route::post('/book', [BookController::class, 'insert']);
Route::put('/book/{id}', [BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'delete']);