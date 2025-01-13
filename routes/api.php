<?php

use App\Actions\task\addTask;
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
