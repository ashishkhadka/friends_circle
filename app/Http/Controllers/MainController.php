<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create_profile(){
      return view('create_profile');
    }
}
