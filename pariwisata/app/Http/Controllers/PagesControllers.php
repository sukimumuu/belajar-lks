<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesControllers extends Controller
{
    public function index(){
        return view('index');
    }
    public function login(){
        return view('auth.login');
    }
    public function main(){
        return view('main.main');
    }
    public function destination(){
        return view('menu.destination.index');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
