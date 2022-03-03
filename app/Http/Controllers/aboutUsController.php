<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function aboutus(){
        return view('layouts.aboutus')
            ->with('aboutus','about us ');
    }
}