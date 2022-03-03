<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    public function news(){
        return view('layouts.news')
                    ->with('news','News');
    }

    public function news1($title){
        return view('layouts.news')
                    ->with('news', $title);
    }
    
}