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
        $product = Product::where('slug',$slug)
        ->join('categories','products.category_id','=','categories.category_id')
        ->join('brands','products.brand_id','=','brands.id')
        ->join('sellers','products.seller_id','=','sellers.id')
        ->select('products.*', 'categories.category_name','brands.brand_name','brands.brand_logo','sellers.seller_name') // Selecting product fields and category name
        ->first();
        //dd($product->id);
        // Join with the reviews table and count the number of reviews for this product
        $customerReviewCount = DB::table('reviews')
        ->where('product_id', 1)
        ->count();

        $averageRating = DB::table('reviews')
        ->where('product_id', $product->id)
        ->avg('rating');
        //dd($averageRating);

        $product_gallery_images = Product::join('product_gallery_images','products.id','=','product_gallery_images.product_id')
        ->get();
        
        return view('shop/single-product-fullwidth',[
                                                        'product'=>$product,
                                                        'product_gallery_images'=>$product_gallery_images,
                                                        'customerReviewCount'=>$customerReviewCount,
                                                        'averageRating'=>$averageRating
                                                    ]); //shop.blade.php
    }
}
