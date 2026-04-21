<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/authors', [App\Http\Controllers\AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}', [App\Http\Controllers\AuthorController::class, 'show'])->name('authors.show');
