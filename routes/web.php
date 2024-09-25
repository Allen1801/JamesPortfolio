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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Pages
Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/projects', [App\Http\Controllers\PageController::class, 'projects'])->name('projects');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contacts'])->name('contacts');
