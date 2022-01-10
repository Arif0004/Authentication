<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        return view('auth.dashboard');

    }
    function login(){

        return view('auth.login');

    }
    function register(){

        return view('auth.register');

    }

   public function store(Request $request){
    $user=User::create([
        'name' => $request->input('name'),
        'email'=>$request->input('email'),
        'password'=>bcrypt($request->input('password')),
    ]);
        event(new Registered($user));
        return redirect()->route('login');


    }
    public function auth(Request $request){

        $credentials = $request->validate([

            'email' => ['required','exists:users,email'],
            'password' => ['required'],
        ]);


        if( Auth::attempt( $credentials )){

           $request->session()->regenerate();

            return redirect()->route('dashboard');



        }
        else{
            return back()->withErrors(['email'=>'Something is wrong!! ']);

        }

    }
        public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerate();
            return redirect()->route('login');
            //return 5;



        }



}
