<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        if(\Auth::check()){
            $user = \Auth::user();
            return view('pages.homepage', compact('user'));
        }
        else{
            return view('auth.login');
        }
    }
}
