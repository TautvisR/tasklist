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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource("tasks", \App\Http\Controllers\TaskController::class);
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::post("users/{id}/addTask", [\App\Http\Controllers\UserController::class, "addTask"])->name("users.addTask");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
