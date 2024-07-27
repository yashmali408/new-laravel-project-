<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Add this import if not already present
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
        //dd($product->id);
        // Join with the reviews table and count the number of reviews for this product
        $customerReviewCount = DB::table('reviews')
        ->where('product_id', $product->id)
        ->count();

        $averageRating = DB::table('reviews')
        ->where('product_id', $product->id)
        ->avg('rating');
        return view('shop/single-product-fullwidth',[
                                                        'product'=>$product,
                                                        'customerReviewCount'=>$customerReviewCount,
                                                        'averageRating'=>$averageRating
                                                    ]); //shop.blade.php
    }
}
