<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){
		return view('login');
    }

    public function postLogin(){

    }

    public function logout(){

    }
}
