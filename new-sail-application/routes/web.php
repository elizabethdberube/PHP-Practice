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

// Route::get('/dashboard/user/{id}', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');

Route::get('/checkout/{id}/book', [App\Http\Controllers\CheckoutController::class, 'store'])->name('store');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'settings'])->name('settings');




