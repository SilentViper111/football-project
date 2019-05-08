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
    public function tekme(){
        if(\Auth::check()){
            $data = \DB::select('select s.naziv as naziv_stadiona, l.naziv as naziv_lige, t.*, te.*, e.ime as ime_ekipe
            from tekme t join stadioni s on t.id_stadiona = s.id
            join lige l on l.id = t.id_lige
            join tekme_ekipe te on te.id_tekme = t.id
            join ekipe e on te.id_ekipe = e.id');
            return view('pages.tekme', compact('data'));
        }
        else{
            return view('auth.login');
        }
    }
    public function stadioni(){
        if(\Auth::check()){
            $data = \DB::select('select s.*, d.ime as ime_drzave, e.ime as ime_ekipe from stadioni s join drzave d on s.id_drzave = d.id join ekipe e on s.id_ekipe = e.id');
            return view('pages.stadioni', compact('data'));
        }
        else{
            return view('auth.login');
        }
    }
    public function trenerji(){
        if(\Auth::check()){
            $data = \DB::select('select t.*, e.ime as ime_ekipe from trenerji t join ekipe e on t.id_ekipe = e.id');
            return view('pages.trenerji', compact('data'));
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
