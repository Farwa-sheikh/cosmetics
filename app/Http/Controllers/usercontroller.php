<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;


class usercontroller extends Controller
{
   

    function index() {
        return view('user.index');
    }
    function makeup() {
        return view('user.makeup');
    }
    function jewellery() {
        return view('user.jewellery');
    }

    function contact() {
        return view('user.contact');
    }

    function sign_in() {
        return view('user.sign_in');
    }

    function sign_up() {
        return view('user.sign_up');
    }

    public function signin_logic (Request $request){
        $req= $request->validate([
            'email'=> "required|email",
            'Pass'=> "required|string",
        ]);
    }

   
}

