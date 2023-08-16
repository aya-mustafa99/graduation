<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutheController extends Controller
{
    public  function login(){
        return view ('auth.login');
        
    }
     public  function  authnticate( Request $request){
            $login_data =['email'=>$request->email  , 'password'=>$request->password];
            if(Auth::attempt($login_data)){
                //change the route 
                return  redirect()->route('dashbord');
            }
            else{
                return redirect()->back()->with('error','invalid username or password');
            }
    
        }
        public  function  logout(){
            if(Auth::check()){
                Auth::logout();
            }
            //change the route
            return redirect()->route('dashbord');
    
        }
        public function Register(){
            return view('auth.register');
        }
        public  function doRegister(Request $request){
            $request->validate([
                'email'=> 'required|email',
                'password'=> 'required|confirmed'
            ]);
            User::create(['email'=>$request->email , 'name'=>$request->name , 'password'=>Hash::make($request->password)]);
            return redirect()->route('login');
        }
    }    

