<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programController extends Controller
{
    public function programprogram(){
        return view('layouts.program')
            ->with('program','program');
    }

        // public function karir(){
    //     return redirect('https://www.educastudio.com/program/karir');
    // }

    // public function magang(){
    //     return redirect('https://www.educastudio.com/program/magang');
    // }

    // public function kunjunganIndustri(){
    //     return redirect('https://www.educastudio.com/program/kunjungan-industri');
    // }
    
}