<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Signin;
use Hash;
use Session;


class LoginController extends Controller
{
   public function loginroute()
   {
      return view('home.login');
   }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:8'
     ]);

     $user = Signin::where('email','=',$request->email)->first();
     if ($user) {
        if(Hash::check($request->password,$user->password)){
            $request->session()->put('loginId',$user->id);
            return redirect('/mainhome');
        }else{
         return back()->with('loginfail','This password doesn`t match!');
        }
     } else {
        return back()->with('loginfail','This email doesn`t exist!');
     }
     
   }

   public function logout()
   {
      if (Session::has('loginId')){
         Session::pull('loginId');
         return redirect('/');
      }
   }
}