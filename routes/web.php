<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/shop/cart',function(){
    return view('shop/cart');
});
Route::get('/shop/shop-grid',function(){
    return view('shop/shop-grid'); //shop-grid.blade.php
});