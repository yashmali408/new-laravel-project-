<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cartDatas2 = DB::table('carts')
            ->join('users', 'users.id', '=', 'carts.customer_id')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->where('users.id', Auth::id())
            ->select(
                'products.id as product_id',
                'products.*', // Select all columns from the products table
                'carts.*' // Select all columns from the carts table
            ) 
            ->get();

        $cartDatas = [];

        foreach ($cartDatas2 as $index => $item) {
            $cartDatas["cartItem" . ($index + 1)] = [
                'product_id' => $item->product_id,
                'product_name' => $item->product_name,
                'unit_price' => $item->sell_price,
                'qty' => $item->qty,
                'total' => $item->sell_price * $item->qty,
            ];
        }

        //dd($cartDatas);
        $grandTotal = collect($cartDatas)->sum('total');

        //echo $grandTotal; // Output: 10200
        //$grandTotal = 10200;
        return view('shop/cart',[
                                'cartDatas'=>$cartDatas,
                                'grandTotal'=>$grandTotal
                                ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //dd($request->all());

        $data = $request->only('product_id','qty');
        $data['customer_id'] = Auth::id();

         // Check if the product is already in the cart for the current customer
        $existingCart = Cart::where('customer_id', $data['customer_id'])
                            ->where('product_id', $data['product_id'])
                            ->first();

        if ($existingCart) {
            // If the product already exists, update the quantity
            $existingCart->qty += $data['qty'];
            $existingCart->save();
        } else {
            // If the product does not exist in the cart, create a new entry
            Cart::create($data);
        }
        // Redirect back with a success message
        return back()->with('success', 'Product added to Cart successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
       // Debugging: Dump all request data
        // dd($request->all());
        
        // Parse the product IDs and quantities from the request
        $productIds = json_decode($request->input('productIds'), true);
        $productIdsQty = json_decode($request->input('productIdsQty'), true);
        
        // Ensure both arrays are of the same length
        if (count($productIds) !== count($productIdsQty)) {
            return response()->json(['error' => 'Mismatch between product IDs and quantities'], 400);
        }

        // Get the current user ID
        $userId = Auth::id();
         // Debugging: Log product IDs and quantities
        //var_dump($productIds);
        //var_dump($productIdsQty);
        //dd('OK');

        // Iterate over each product ID and update the corresponding cart item
        foreach ($productIds as $index => $productId) {
            // Find the cart item for the current product and user
            $cartItem = Cart::where('customer_id', $userId)
                            ->where('product_id', $productId)
                            ->first();

            if ($cartItem) {
                // Update the quantity if the cart item exists
                $cartItem->qty = $productIdsQty[$index];
                $cartItem->save();
            } else {
                // Optionally handle the case where the cart item does not exist
                // For example, you could create a new cart item if needed
            }
        }

        //
        // Return back with a success message
        return redirect()->back()->with('success', 'Cart updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //var_dump($cart->id);
        //dd('Cart Destroy');
         // Delete the cart item
        $cart->delete();

        // Return back to the same page with a success message (optional)
        return redirect()->back()->with('success', 'Item removed from cart.');
    }

    public function destroyAll(Request $request)
    {
        //dd('Cart DestroyAll');
         // Get the currently authenticated user's ID
        $customerId = Auth::id();

        // Delete all cart items for the authenticated user
        Cart::where('customer_id', $customerId)->delete();

        // Return back to the same page with a success message (optional)
        return redirect()->back()->with('success', 'Cart Emptied Succesffull');
    }
}
