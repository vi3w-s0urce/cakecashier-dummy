<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MainController;
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

Route::controller(IndexController::class)->middleware('guest')->group(function() {
    Route::get('/', 'index');
    Route::get('/tentang', 'tentang');
});

Route::controller(AuthController::class)->middleware('guest')->group(function() {
    Route::get('/login', 'indexLogin');
    Route::post('/login', 'login')->name('login');
    Route::get('/signup', 'indexSignup');
    Route::post('/signup', 'signup');
});

Route::middleware('auth')->group(function() {
    Route::get('/home', [MainController::class, 'indexHome']);
    Route::get('/keranjang', [MainController::class, 'indexCart']);
    Route::post('/keranjang/{kue:id}', [MainController::class, 'cartAdd']);
    Route::post('/keranjang/delete/{kue:id}', [MainController::class, 'cartDelete']);
    Route::post('/keranjang/incrementQuantity/{kue:id}', [MainController::class, 'incrementQuantity']);
    Route::post('/keranjang/decrementQuantity/{kue:id}', [MainController::class, 'decrementQuantity']);
    Route::post('/invoice', [MainController::class, 'invoice']);
    Route::resource('/kue', MainController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});

