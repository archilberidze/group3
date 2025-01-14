<?php

use App\Actions\addProduct\addProduct as AddProductAddProduct;
use App\Actions\book\addBook;
use App\Actions\task\addTask;
use App\Actions\product\addProduct;
use App\Actions\task\updateTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('task')->group(function() {
    Route::post('add_task',addTask::class);
    Route::put('update_task/{id}',updateTask::class);
});

Route::prefix('product')->group(function() {
    Route::post('add_product',  addProduct::class);
});

Route::prefix('book')->group(function() {
    Route::post('add_book',  addBook::class);
});
