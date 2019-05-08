<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        if(\Auth::check()){
            $ekipe = \DB::select('select e.*, t.priimek from ekipe e join trenerji t on e.id = t.id_ekipe');
            return view('pages.homepage', compact('ekipe'));
        }
        else{
            return view('auth.login');
        }
    }
    public function igralci(){
        if(\Auth::check()){
            $igralci = \DB::select('select i.*, e.ime as ime_ekipe, d.ime as ime_drzave from igralci i join ekipe e on e.id = i.id_ekipe join drzave d on d.id = i.id_drzave');
            return view('pages.igralci', compact('igralci'));
        }
        else{
            return view('auth.login');
        }
    }
    // Finish
    public function tekme(){
        if(\Auth::check()){
            $igralci = \DB::select('select i.*, e.ime as ime_ekipe, d.ime as ime_drzave from igralci i join ekipe e on e.id = i.id_ekipe join drzave d on d.id = i.id_drzave');
            return view('pages.igralci', compact('igralci'));
        }
        else{
            return view('auth.login');
        }
    }
    public function stadioni(){
        if(\Auth::check()){
            $igralci = \DB::select('select i.*, e.ime as ime_ekipe, d.ime as ime_drzave from igralci i join ekipe e on e.id = i.id_ekipe join drzave d on d.id = i.id_drzave');
            return view('pages.igralci', compact('igralci'));
        }
        else{
            return view('auth.login');
        }
    }
    public function trenerji(){
        if(\Auth::check()){
            $igralci = \DB::select('select i.*, e.ime as ime_ekipe, d.ime as ime_drzave from igralci i join ekipe e on e.id = i.id_ekipe join drzave d on d.id = i.id_drzave');
            return view('pages.igralci', compact('igralci'));
        }
        else{
            return view('auth.login');
        }
    }
    public function lige(){
        if(\Auth::check()){
            $igralci = \DB::select('select i.*, e.ime as ime_ekipe, d.ime as ime_drzave from igralci i join ekipe e on e.id = i.id_ekipe join drzave d on d.id = i.id_drzave');
            return view('pages.igralci', compact('igralci'));
        }
        else{
            return view('auth.login');
        }
    }
    public function drzave(){
        $drzave = \app\drzava::get();
        var_dump($drzave);
    }
}
