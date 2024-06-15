<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\{
    DashboardController
};
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ContentController::class, 'homepage'])->name('homepage');
Route::get('/about', [ContentController::class, 'about'])->name('about');
Route::get('/client', [ContentController::class, 'client'])->name('client');
Route::get('/contact', [ContentController::class, 'contact'])->name('contact');
Route::get('/search', [ContentController::class, 'search'])->name('search');

Route::group(['prefix' => env('APP_ADMIN_SECTION'), 'namespace' => 'Admin'], function() {
    Route::get('/login', [AuthController::class, 'indexRender'])->name('login');
    Route::post('/auth-login', [AuthController::class, 'loginHandle'])->name('authlogin');
    
    // tambahkan rute lain yang memerlukan otentikasi admin di sini
    Route::group(['middleware' => 'admin'], function() {
        
        // Home
        Route::get('/admin', [DashboardController::class, 'index']);
    });
});