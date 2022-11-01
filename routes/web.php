<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group([], function () {    //group function for "home" route (same route name "home")
    Route::get('/', [HomeController::class, 'home_new_arrivals'])->name('home');
    Route::get('/home', [HomeController::class, 'home_new_arrivals'])->name('home');
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/compare-page', function () {
    return view('compare-page');
})->name('compare-page');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/lookbook', function () {
    return view('lookbook');
})->name('lookbook');

Route::get('/product-page', function () {
    return view('product-page');
})->name('product-page');

Route::get('/shop-grid', function () {
    return view('shop-grid');
})->name('shop-grid');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

//all routes for register, login and logout are built-in ---- but you can call out


//******************** single route with single middleware *******************//
//after the route here->middleware('');
//****************************************************************************//


//******************* group routes (that holds one or more route and middleware) *******************//
Route::group([
    'middleware' => ['', '', ''] // all the middlewares here
], function () {
    // all the routes here
});
//**************************************************************************************************//