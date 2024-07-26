<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    //1. Properties

    //2. Constructor

    //3. Methods
    public function home(){
        //MV   C (Business Logic)
        $categories = Category::whereNotNull('rank')->orderBy('rank', 'asc')->get();
        return view('home',['categories'=>$categories]); //home.blade.php
    }
    public function show($slug){
        //dd($slug);
        $product = Product::where('slug',$slug)->first();
        return view('shop/single-product-fullwidth',['product'=>$product]); //shop.blade.php
    }
}
