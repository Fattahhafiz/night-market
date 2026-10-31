<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome', ['products' => Product::latest()->get()]);
});

Route::resource('products', ProductController::class);
