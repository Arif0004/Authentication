<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){

        return view('auth.login');

    }
    function register(){

        return view('auth.register');

    }
   public function store(Request $request){
        return $request->all();

    }



}
