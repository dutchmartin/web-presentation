<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class slidescontroller extends Controller
{
    //
    public function index()
     {
       return view('edit');
     }
     public function show()
     {
         return view('edit');
     }
}
