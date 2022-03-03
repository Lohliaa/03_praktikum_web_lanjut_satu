<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactUsController extends Controller
{
    public function index()
    {
        return view('layouts.contactus')
        ->with('contactus','Contact Us');
    }
}