<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

// PHP Class
class CustomerAuthController extends Controller
{
    //1. Properties

    //2. Constructor


    //3. Method can be many
    //
    public function register(Request $request){
        //dd($request->all());
        $request->validate([
                                'email' => 'required|email|unique:users',
                                'password'=>'required|min:8'
                           ]);

        // User::
        // classObject = new ClassName();
        $userco = new User();
        //Set the fields
        // L = R
        /* $userco->name = '';
        $userco->surname = ''; */
        $userco->name = $request->fname;
        $userco->surname = $request->sname;
        $userco->email = $request->email;
        $userco->password = $request->password;

        $result = $userco->save();
        if($result){
            //True
            //user store ho gaya hai
            return back()->with('success','You have registered successfully.');
        }else{
            //False
            //user store nahi hua hai
            //with() method will create session variable
            return back()->with('failed','You have registered successfully.');
        }


        //dd($request->all());
        //Every function return somethig
        return 'register ';
    }

    // public function method(Formal Argument)
    public function login(Request $request){
        dd($request->all());

        //Every function return something
        return 'Login';
    }
}
