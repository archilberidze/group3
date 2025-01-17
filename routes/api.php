<?php

use App\Actions\addProduct\addProduct as AddProductAddProduct;
use App\Actions\book\addBook;
use App\Actions\book\deleteBook;
use App\Actions\product\getProduct;
use App\Actions\task\addTask;
use App\Actions\product\addProduct;
use App\Actions\task\getTask;
use App\Actions\book\getBook;
use App\Actions\book\updateBook;
use App\Actions\task\updateTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Actions\task\deleteTask;
use App\Actions\task\completeTask;


Route::prefix('task')->group(function() {
    Route::post('add_task',addTask::class);
    Route::put('update_task/{id}',updateTask::class);
    Route::delete('delete_task/{id}', deleteTask::class);
    Route::put('complete_task/{id}', completeTask::class);
    Route::get('get_tasks', getTask::class);
});

Route::prefix('product')->group(function() {
    Route::post('add_product',  addProduct::class);
    Route::get('get_products',  getProduct::class);
});

Route::prefix('book')->group(function() {
    Route::post('add_book',  addBook::class);
    Route::get('get_author', getBook::class);
    Route::delete('delete_book/{id}', deleteBook::class);
    Route::put('update_book/{id}',updateBook::class);
});
