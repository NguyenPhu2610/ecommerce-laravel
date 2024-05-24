<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\ProductController;
use App\Http\Middleware\Localization;

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
Route::get('lang/{locale}', [HomeController::class, 'lang']);

Route::name('user.')->group(function () {
    Route::get('/shop', function () {
        return view('user.pages.product');
    })->name('shop');
    
    Route::get('/product/shop', [ProductController::class, 'shop'])->name('shop');

    Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('detail');

    Route::get('/test', [ProductController::class, 'cart'])->name('cart');

    Route::get('/cart', function () {
        return view('user.pages.cart');
    })->name('cart');

    Route::get('/login', function () {
        return view('user.pages.login');
    })->name('login');

    Route::get('/register', function () {
        return view('user.pages.register');
    })->name('register');

    Route::get('/', function () {
        return view('user.pages.home');
    })->name('home');
});


