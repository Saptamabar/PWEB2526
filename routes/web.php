<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingPageController::class,'index'])->name('landingpage.index');

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
