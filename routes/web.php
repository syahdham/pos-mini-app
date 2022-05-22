<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {

    $products = \App\Models\Product::all();

    return view('pages.homepage', compact('products'));
})->name('homepage');

Route::view('/login', 'pages.auth.login')->name('form.login');
Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

    Route::resource('products', \App\Http\Controllers\ProductController::class)->only(['index', 'create', 'store']);
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);

    Route::post('product_image_upload', \App\Http\Controllers\ProductImageUploadController::class);
});
