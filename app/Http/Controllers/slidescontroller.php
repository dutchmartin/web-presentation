<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slides;

class slidescontroller extends Controller
{
    //
    public function index()
     {
       $slides = slides::all();
       return view('edit', compact('slides'));
     }
     public function submit()
     {
         if(count(request()->all()) <= 2 )
         {
           //delete all records
           //slides::getQuery()->delete();
         foreach(request()->all() as $slide)
         {
           if(key($slide) != "_token")
           {
             dd($slide);
           }
           }
         }
     }
}
