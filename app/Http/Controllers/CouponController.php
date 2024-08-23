<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function applyCoupon(Request $request, Coupon $coupon)
    {
        //dd($request->coupon_code);

        //Set this coupon code in session
        $couponCode = $request->coupon_code;

        //dd($couponCode);
        //Check with coupon table if the coupon is valid or not
        //Check if you code is available in coupon table
        $couponData = Coupon::where('coupon_code', $couponCode)
                             ->first();
        
        //dd($couponData);
        if ($couponData === null) {
            dd('Coupon is invalid');
            // Coupon code is not found
            return redirect()->back()->with('error', 'Coupon code is invalid.');
        }
    
        // Get the current date and time
        $now = now();
        echo '<pre>';
        echo $now->format('Y-m-d H:i:s'); // Format the date and time
        echo '<pre>';
        $now2 = $now->format('Y-m-d H:i:s');
        var_dump($couponData->coupon_expire_start_date);
        var_dump($couponData->coupon_expire_end_date);
        // Check if the coupon is within the valid date range
        if ($couponData->coupon_expire_start_date > $now2 || $couponData->coupon_expire_end_date < $now2) {
            dd('Coupon is invalid1');
            // Coupon is not within the valid date range
            return redirect()->back()->with('error', 'Coupon code has expired.');
        }
        // Check if the coupon usage limit is exceeded
        if ($couponData->usage_limit >= $couponData->used_count) {
            var_dump($couponData->usage_limit);
            var_dump($couponData->used_count);
            dd('Coupon is invalid2');
            // Coupon usage limit has been reached
            return redirect()->back()->with('error', 'Coupon usage limit has been reached.');
        }

        dd('Coupon is valid');
        // Coupon is valid and within the date range
        // Set the coupon code in the session
        session()->put('applied_coupon', $couponCode);
    
        // Optionally, you can return a response or redirect
        return redirect()->back()->with('success', 'Coupon code applied successfully!');

    }
}
