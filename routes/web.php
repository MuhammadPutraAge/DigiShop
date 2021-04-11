<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

Route::get('/add', [ProductController::class, 'add'])->name('products.add');
Route::post('/add', [ProductController::class, 'create'])->name('products.create');

Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
