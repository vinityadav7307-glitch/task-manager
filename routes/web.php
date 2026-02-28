<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\TaskViewController;

Route::get('/tasks', [TaskViewController::class, 'index']);
Route::post('/tasks', [TaskViewController::class, 'store']);
Route::patch('/tasks/{task}/done', [TaskViewController::class, 'markDone']);
Route::delete('/tasks/{task}', [TaskViewController::class, 'destroy']);