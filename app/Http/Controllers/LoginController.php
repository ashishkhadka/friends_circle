<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function getloginpage(){
    return view('login');
  }
    public function login(request $request){
      $credentials = $request->only('email','password');
      if(Auth::attempt($credentials)){
        return redirect()->route('create_profile');
      }
      else {
        return redirect()->intended('login');
      }
    }
}
