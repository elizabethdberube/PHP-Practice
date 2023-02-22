<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;

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
    return view('main');
});



Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });

Route::get('/library', [App\Http\Controllers\LibraryController::class, 'library'])->name('library');
Route::get('/library/{category_id}', [App\Http\Controllers\LibraryController::class, 'libraryCategory'])->name('libraryCategory');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::post('/home/returnBook', [App\Http\Controllers\HomeController::class, 'returnBook'])->name('returnBook');

Route::get('/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'checkout']);

Route::post('/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'store'])->name('store');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'settings'])->name('settings');

Route::post('/settings/updateName', [App\Http\Controllers\SettingsController::class, 'updateName'])->name('updateName');
Route::post('/settings/updateEmail', [App\Http\Controllers\SettingsController::class, 'updateEmail'])->name('updateEmail');
Route::post('/settings/updatePassword', [App\Http\Controllers\SettingsController::class, 'updatePassword'])->name('updatePassword');

Route::group(['middleware' => ['auth', 'permission']], function() {

Route::group(['prefix' => 'users'], function() {
    Route::get('/', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
    Route::get('/create', [App\Http\Controllers\UsersController::class, 'create'])->name('users.create');
    Route::post('/create', [App\Http\Controllers\UsersController::class, 'store'])->name('users.store');
    Route::get('/{user}/show', [App\Http\Controllers\UsersController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [App\Http\Controllers\UsersController::class, 'edit'])->name('users.edit');
    Route::patch('/{user}/update', [App\Http\Controllers\UsersController::class, 'update'])->name('users.update');
    Route::delete('/{user}/delete', [App\Http\Controllers\UsersController::class, 'destroy'])->name('users.destroy');
});

/**
 * User Routes
 */
Route::group(['prefix' => 'roles'], function() {
    Route::get('/', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.index');
    Route::get('/create', [App\Http\Controllers\RolesController::class, 'create'])->name('roles.create');
    Route::post('/create', [App\Http\Controllers\RolesController::class, 'store'])->name('roles.store');
    Route::get('/{role}/show', [App\Http\Controllers\RolesController::class, 'show'])->name('roles.show');
    Route::get('/{role}/edit', [App\Http\Controllers\RolesController::class, 'edit'])->name('roles.edit');
    Route::patch('/{role}/update', [App\Http\Controllers\RolesController::class, 'update'])->name('roles.update');
    Route::delete('/{role}/delete', [App\Http\Controllers\RolesController::class, 'destroy'])->name('roles.destroy');
});

Route::group(['prefix' => 'permissions'], function() {
    Route::get('/', [App\Http\Controllers\PermissionsController::class, 'index'])->name('permissions.index');
    Route::get('/create', [App\Http\Controllers\PermissionsController::class, 'create'])->name('permissions.create');
    Route::post('/create', [App\Http\Controllers\PermissionsController::class, 'store'])->name('permissions.store');
    Route::get('/{permission}/show', [App\Http\Controllers\PermissionsController::class, 'show'])->name('permissions.show');
    Route::get('/{permission}/edit', [App\Http\Controllers\PermissionsController::class, 'edit'])->name('permissions.edit');
    Route::patch('/{permission}/update', [App\Http\Controllers\PermissionsController::class, 'update'])->name('permissions.update');
    Route::delete('/{permission}/delete', [App\Http\Controllers\PermissionsController::class, 'destroy'])->name('permissions.destroy');
});

Route::resource('roles', RolesController::class);
Route::resource('permissions', PermissionsController::class);
});



