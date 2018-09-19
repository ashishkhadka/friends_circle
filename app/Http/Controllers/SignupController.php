<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class SignupController extends Controller
{
  public function store(){
  $this->validate(request(),[
    'email'=>'required|email|max:255|min:4',
    'password'=>'required|min:8',
    'password2'=>'required|min:8',
  ]);
  $user=User::create(request(['email','password']));
  return redirect()->route('getloginpage');
}
}
