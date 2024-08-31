<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Checkout;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userInfo = UserInfo::where('user_id', 7);
       
        /*  $userInfo = DB::table('user_infos')
                    ->where('user_id', 7); */
        $country = UserInfo::where('user_id', Auth::id())
                    ->where('meta_key', 'country')
                    ->first();
        $street_address = UserInfo::where('user_id', Auth::id())
                    ->where('meta_key', 'street_address')
                    ->first();
        $house_no = UserInfo::where('user_id', Auth::id())
                    ->where('meta_key', 'house_no')
                    ->first();

        
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


        return view('shop/checkout',[
            'cartDatas'=>$cartDatas,
            'grandTotal'=>$grandTotal,
            'userInfo' => $userInfo,
            'country' => '',
            'house_no' => '',
            'street_address'=> ''
        ]); //checkout.blade.php
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
        //
        //dd($request->all());
        // Get the current user's ID
        $userId = auth()->user()->id;

        // Iterate over the request data and store in user_infos
       
        //Empty the cart if Payment MOD is COD
        if($request->paymentMode == 'COD'){
            
            foreach ($request->except('_token') as $key => $value) {

                // Check if the meta_key already exists for the user
                $exists = DB::table('user_infos')
                    ->where('user_id', $userId)
                    ->where('meta_key', $key)
                    ->exists();

                // If the key doesn't exist, insert it
                if (!$exists) {
                    DB::table('user_infos')->insert([
                        'user_id' => $userId,
                        'meta_key' => $key,
                        'meta_value' => $value
                    ]);
                }
            }
            //Save the cart data in order table
            // Prepare the order details (you may need to customize this based on your application's structure)
            $orderDetails = Cart::where('customer_id', $userId)->get(); // Assuming Cart holds the order details
            $orderDetailsSerialized = json_encode($orderDetails); // Convert to JSON or any preferred format

            // Generate a unique order number
            $orderNumber = $this->generateOrderNumber();

            // Insert into the orders table
            $order = \DB::table('orders')->insertGetId([
                'customer_id' => $userId,
                'order_no' => $orderNumber,
                'order_details' => $orderDetailsSerialized,
                'payment_mode' => $request->paymentMode,
                'order_note' => $request->order_note, // Ensure this comes from the request
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $cart = Cart::where('customer_id', auth()->user()->id)->delete();
        }
        // Destroy coupon session data
        session()->forget('coupon_code');
        session()->forget('coupon_value');
        session()->forget('coupon_type');
        return redirect('checkout/success');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }

    public function success(){
        return view('shop.success');
    }
    /**
     * Generate a unique order number.
     *
     * @return string
     */
    protected function generateOrderNumber()
    {
        // Prefix for the order number
        $prefix = 'OD';

        // Generate a unique number using the current timestamp and a random integer
        $uniqueNumber = $prefix . mt_rand(100, 999) . time();

        return $uniqueNumber;
    }
}
