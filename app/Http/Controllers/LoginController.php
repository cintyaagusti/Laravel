<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('HalamanLogin');
    }
    public function register(){
        return view('HalamanRegister');
    }
}
