<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingPageController::class,'index'])->name('landingpage.index');
Route::get('/produk',[LandingPageController::class,'produk'])->name('landingpage.produk');

Route::get('/index',function(){
    return "Ini halaman index";
});

Route::get('/profile/{nama}',function($nama){
    return "Nama saya $nama";
});
