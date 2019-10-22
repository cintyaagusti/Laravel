<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('HalamanHome');
    }
    public function pertama(){
        return view('HalamanPertama');
    }
    public function kedua(){
        return view('HalamanKedua');
    }
    public function ketiga(){
        return view('HalamanKetiga');
    }
}
