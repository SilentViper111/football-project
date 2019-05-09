<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        if(\Auth::check()){
            $ekipe = \DB::select('select * from ekipe');
            return view('pages.homepage', compact('ekipe'));
        }
        else{
            return view('auth.login');
        }
    }
    public function igralci(){
        if(\Auth::check()){
            $igralci = \DB::select('select i.*, e.ime as ime_ekipe, d.ime as ime_drzave from igralci i join ekipe e on e.id = i.id_ekipe join drzave d on d.id = i.id_drzave');
            $menu = \DB::select('select i.*,e.id as id_ekipe, e.ime as ime_ekipe, d.ime as ime_drzave from igralci i join ekipe e on e.id = i.id_ekipe join drzave d on d.id = i.id_drzave');
            $menues = \DB::select('select i.*,e.id as id_ekipe, e.ime as ime_ekipe, d.id as id_drzave, d.ime as ime_drzave from igralci i join ekipe e on e.id = i.id_ekipe join drzave d on d.id = i.id_drzave');
            return view('pages.igralci', compact(['igralci','menu','menues']));
        }
        else{
            return view('auth.login');
        }
    }
    public function tekme(){
        if(\Auth::check()){
            $data = \DB::select('select s.naziv as naziv_stadiona, l.naziv as naziv_lige, t.*, te.*, e.ime as ime_ekipe
            from tekme t join stadioni s on t.id_stadiona = s.id
            join lige l on l.id = t.id_lige
            join tekme_ekipe te on te.id_tekme = t.id
            join ekipe e on te.id_ekipe = e.id');
            $menu = \DB::select('select * from ekipe');
            $menu2 = \DB::select('select * from ekipe');
            $menu3 = \DB::select('select * from stadioni');
            $menu4 = \DB::select('select * from lige');
            return view('pages.tekme', compact(['data', 'menu', 'menu2', 'menu3', 'menu4']));
        }
        else{
            return view('auth.login');
        }
    }
    public function stadioni(){
        if(\Auth::check()){
            $data = \DB::select('select s.*, d.ime as ime_drzave, e.ime as ime_ekipe from stadioni s join drzave d on s.id_drzave = d.id join ekipe e on s.id_ekipe = e.id');
            $menu = \DB::select('select * from drzave');
            $menu1 = \DB::select('select * from ekipe');
            return view('pages.stadioni', compact(['data', 'menu', 'menu1']));
        }
        else{
            return view('auth.login');
        }
    }
    public function trenerji(){
        if(\Auth::check()){
            $data = \DB::select('select t.*, e.ime as ime_ekipe from trenerji t join ekipe e on t.id_ekipe = e.id');
            $menu = \DB::select('select * from ekipe');
            return view('pages.trenerji', compact(['data','menu']));
        }
        else{
            return view('auth.login');
        }
    }
    public function lige(){
        if(\Auth::check()){
            $data = \DB::select('select * from lige');
            return view('pages.lige', compact('data'));
        }
        else{
            return view('auth.login');
        }
    }
    public function drzave(){
        if(\Auth::check()){
            $data = \DB::select('select * from drzave');
            return view('pages.drzave', compact('data'));
        }
        else{
            return view('auth.login');
        }
    }
}
