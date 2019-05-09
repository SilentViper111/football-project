<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function ekipe($id){
        $nrd = \DB::table('ekipe')->where('id', $id)->delete();
        return redirect('/');
    }
    public function tekme($id){
        $nrd = \DB::table('tekme')->where('id', $id)->delete();
        return redirect('/tekme');
    }
    public function igralci($id){
        $nrd = \DB::table('igralci')->where('id', $id)->delete();
        return redirect('/igralci');
    }
    public function lige($id){
        $nrd = \DB::table('lige')->where('id', $id)->delete();
        return redirect('/lige');
    }
    public function stadioni($id){
        $nrd = \DB::table('stadioni')->where('id', $id)->delete();
        return redirect('/stadioni');
    }
    public function trenerji($id){
        $nrd = \DB::table('trenerji')->where('id', $id)->delete();
        return redirect('/trenerji');
    }
    public function drzave($id){
        $nrd = \DB::table('drzave')->where('id', $id)->delete();
        return redirect('/drzave');
    }
}
