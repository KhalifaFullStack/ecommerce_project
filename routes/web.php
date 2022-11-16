<?php

use App\Http\Controllers\CartController;
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

//start of Cart routes ----------------------
Route::group(['middleware' => ['notCustomer', 'auth']], function () {
    Route::get('/cart', [CartController::class, 'index'])->name('show_cart');
    Route::Post('/create_cart/{id}', [CartController::class, 'create_cart'])->name('create_cart');
    //update cart routes ------
    Route::patch('/update_cart/{id}', [CartController::class, 'update_cart'])->name('update_cart');
    Route::put('/update_all', [CartController::class, 'update_all'])->name('update_all');
    //delete cart routes ------
    Route::delete('/delete_all', [CartController::class, 'delete_all'])->name('delete_all');
    Route::delete('/delete_row/{id}', [CartController::class, 'delete_row'])->name('delete_row');
});
//End of Cart routes ----------------------

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

Route::group([], function () {
    route::get('/input', [ProductController::class, 'products'])->name('input');
    route::get('/shop', [ProductController::class, 'products'])->name('shop');
    route::get('/price_filter', [ProductController::class, 'price_filter'])->name('price_filter');

    //get categories for the header and the home page's 1st slider
    route::get('/men_shop', [ProductController::class, 'men_shop'])->name('men_shop');
    route::get('/women_shop', [ProductController::class, 'women_shop'])->name('women_shop');
    route::get('/kids_shop', [ProductController::class, 'kids_shop'])->name('kids_shop');
    route::get('/shoes_shop', [ProductController::class, 'shoes_shop'])->name('shoes_shop');
    route::get('/accessories_shop', [ProductController::class, 'accessories_shop'])->name('accessories_shop');
    route::get('/cosmetics_shop', [ProductController::class, 'cosmetics_shop'])->name('cosmetics_shop');

    //search-bar routs
    route::get('/search', [ProductController::class, 'search'])->name('search-criteria');
});

Route::get('/shop-grid', function () {
    return view('shop-grid');
})->name('shop-grid');

//all routes for register, login and logout are built-in ---- but you can call out


//******************** single route with single middleware *******************//
//after the route here->middleware('');
//****************************************************************************//


//******************* group routes (that holds one or more route and middleware) *******************//
Route::group([
    'middleware' => ['', '', ''] //** all the middlewares here**// 
], function () {
    // all the routes here
});
//**************************************************************************************************//s