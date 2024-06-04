<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/shop')->group(function () {
    Route::get('/cart',function(){
        return view('shop/cart');
    });
    Route::get('/shop-grid',function(){
        return view('shop/shop-grid'); //shop-grid.blade.php
    });
    Route::get('/my-account',function(){
        return view('shop/my-account'); //my-account.blade.php
    });
    Route::get('/my-account',function(){
        return view('shop/my-account'); //my-account.blade.php
    });
    Route::get('/track-your-order',function(){
        return view('shop/track-your-order'); //my-account.blade.php
    });
    Route::get('/compare',function(){
        return view('shop/compare'); //compare.blade.php
    });
    Route::get('/shop',function(){
        return view('shop/shop'); //shop.blade.php
    });
});

Route::get('/faq',function(){
    return view('faq'); //faq.blade.php
});

