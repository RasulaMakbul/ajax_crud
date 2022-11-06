<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;




Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');
Route::post('/product/delete', [ProductController::class, 'destroy'])->name('product.delete');
Route::get('/pagination/paginate-data', [ProductController::class, 'pagination']);
Route::get('/search-Product', [ProductController::class, 'searchProduct'])->name('product.search');
