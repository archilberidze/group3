<?php


use App\Actions\task\addTask;
use App\Actions\task\updateTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Actions\task\deleteTask;
use App\Actions\task\completeTask;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('task')->group(function() {
    Route::post('add_task',addTask::class);
    Route::put('update_task/{id}',updateTask::class);
    // Route::delete('delete_task/{id}', deleteTask::class);
    Route::put('complete_task/{id}', completeTask::class);
});
