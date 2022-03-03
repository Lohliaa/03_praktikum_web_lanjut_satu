<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function halo_1(){
        return view('layouts.contoh')
        ->with('nama','Lia');
    }
}
