<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\CategoryController;
// Route::controller(CategoryController::class)->group(function() {
//     Route::get('/', 'index')
//         ->name('home');

//     Route::get('categories/{category}', 'show')
//         ->name('show')
//         ->where('category', '[0-9]+');

//     Route::post('categories/store', 'store')
//         ->name('category.store');

// });

// Route::controller(ProductController::class)->group(function() {

//     Route::post('categories/{category}/products', 'store')
//         ->name('product.sotre')
//         ->where('category', '[0-9]+');
// });


Route::get('/', [CategoryController::class, 'index'])
    ->name('home');

Route::get('/category/0', function() {
    return view('independent');
});


Route::get('categories/{category}', [CategoryController::class, 'show'])
    ->name('show')
    ->where('category', '[0-9]+');


Route::post('categories/store', [CategoryController::class, 'store'])
    ->name('category.store');

Route::delete('categories/{category}/delete', [CategoryController::class, 'destroy'])
    ->name('category.destroy');


Route::post('categories/{category}/products', [ProductController::class, 'store'])
    ->name('product.store')
    ->where('category', '[0-9]+');


Route::post('categories/{category}/{product}/{dropDownCategory}/check', [ProductController::class, 'checkbox'])
    ->name('checkbox')
    ->where('category', '[0-9]+')
    ->where('product', '[0-9]+')
    ->where('dropDownProduct', '[0-9]+');


