<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get Brands
        $brands = Brand::all();
        // Get Category
        $categories = Category::all();
        // Get Unit
        $units = Unit::all();

        return view('admin.products.create',['units'=>$units,'brands'=>$brands,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());

        //Skippig validation
        //1. Client Side Javascript
        
        //2. ServerSide PHP/Laravel Fraemwork MVC

        //Direct INsert

        $data = $request->only('product_name','product_desc','unit_id','brand_id','category_id','mrp','sell_price','qty_available');
        // ClassName::method();

        //dd($data);

        Product::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
