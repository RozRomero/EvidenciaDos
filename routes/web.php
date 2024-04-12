<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


//CRUD
//1. INDEX, 

Route::get('/books', [BookController::class, 'index']) ->name('books.index');

//2. CREATE
Route::get('/books/create', [BookController::class, 'create']) ->name('books.create');

//3. STORE
Route::post('/books', [BookController::class, 'store']) ->name('books.store');

//4. EDIT
Route::get('/books/{id}/edit', [BookController::class, 'edit']) ->name('books.edit');

//5.UPDATE el metodo para editar recursos es put
Route::put('/books/{id}', [BookController::class, 'update']) ->name('books.update');

//6.DELETE
Route::delete('/books/{id}', [BookController::class, 'destroy']) ->name('books.destroy');
