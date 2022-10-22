<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibraryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show']);
Route::get('/admin/{id}', [App\Http\Controllers\AdminController::class, 'showAdmin']);
Route::get('/library', [App\Http\Controllers\LibraryController::class, 'library'])->name('library');
Route::get('/library/category/{category_id}', [App\Http\Controllers\LibraryController::class, 'libraryCategory'] );

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');




