<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{

    public function productproduct(){
        return view('layouts.product')
            ->with('product','Product');
    }

        // public function product1(){
    //     return redirect('https://www.educastudio.com/category/marbel-edu-games');
    // }
    // public function product2(){
    //     return redirect('https://www.educastudio.com/category/riri-story-books');
    // }
    // public function product3(){
    //     return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    // }

}