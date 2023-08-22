<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $req){
        if(Auth::attempt($req->only('email','password'))){
            return redirect()->route('main');
        }
        return back();
    }
}
