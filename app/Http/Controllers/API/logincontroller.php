<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(Request $request){
        $user=User::where('email',$request->email);
        if(!Hash::check($request->password,$user->password)){
            return "cannot login";
        }
       $token=$user->createToken($user->name);
       return response()->json(['token' => $token->plainTextToken,'user'=>$user]);
    }
}
