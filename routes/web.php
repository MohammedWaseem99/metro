<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// client route
// Route::get('/home', 'UserController@home');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/cart', [UserController::class, 'cart'])->name('cart');
Route::get('/wishlist', [UserController::class, 'wishlist'])->name('wishlist');
Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');

// dashboard route
Route::get('/dash_board', [DashboardController::class, 'dash'])->name('dash');
Route::get('/add_cat', [DashboardController::class, 'add_cat'])->name('add_cat');
Route::get('/list_cat', [DashboardController::class, 'list_cat'])->name('list_cat');

Route::get('/add_product', [DashboardController::class, 'add_product'])->name('add_product');

Route::get('/edit_product', [DashboardController::class, 'edit_product'])->name('edit_product');

Route::get('/add_sale', [DashboardController::class, 'add_sale'])->name('add_sale');
Route::get('/list_sale', [DashboardController::class, 'list_sale'])->name('list_sale');

Route::get('/add_purchases', [DashboardController::class, 'add_purchases'])->name('add_purchases');
Route::get('/list_purchases', [DashboardController::class, 'list_purchases'])->name('list_purchases');

Route::get('/add_returns', [DashboardController::class, 'add_returns'])->name('add_returns');
Route::get('/list_returns', [DashboardController::class, 'list_returns'])->name('list_returns');

Route::get('/add_banner', [DashboardController::class, 'add_banner'])->name('add_banner');
Route::get('/add_testimonial', [DashboardController::class, 'add_testimonial'])->name('add_testimonial');
Route::get('/add_team', [DashboardController::class, 'add_team'])->name('add_team');






Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/list', [ProductController::class, 'list_product'])->name('products.list');
Route::get('/products/edit/{id}', [ProductController::class, 'edit_product'])->name('products.edit');
Route::post('/products/update/{id}', [ProductController::class, 'update_product'])->name('products.update');
Route::get('/products/delete/{id}', [ProductController::class, 'delete_product'])->name('products.destroy');


Route::get('/categories', [CategoryController::class, 'index_categories'])->name('categories.index');
Route::post('/categories/store', [CategoryController::class, 'store_categories'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit_categories'])->name('categories.edit');
Route::post('/categories/{id}/update', [CategoryController::class, 'update_categories'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy_categories'])->name('categories.destroy');
