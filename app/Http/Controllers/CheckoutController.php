<?php

namespace App\Http\Controllers;

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

        return view('shop/checkout',[
            'userInfo' => $userInfo,
            'country' => $country->meta_value,
            'house_no' => $house_no->meta_value?$house_no->meta_value:'',
            'street_address'=> $street_address->meta_value?$street_address->meta_value:''
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
}
