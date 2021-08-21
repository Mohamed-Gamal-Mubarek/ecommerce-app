<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Home;
use App\Http\Livewire\Shop;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', Home::class);
Route::get('/shop',Shop::class);
Route::get('/cart',Cart::class)->name('product.cart');
Route::get('/checkout',Checkout::class);
