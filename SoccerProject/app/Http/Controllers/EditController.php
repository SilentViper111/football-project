<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function ekipe($id){
        $result = \DB::select("select id as '1', ime as '2', st_tekem as '3', st_zmag as '4', st_porazov as '5', zmage_porazi as '6', dani_goli as '7', prejeti_goli as '8' from ekipe where id = '$id'");
        $base = 'ekipe';
        return view('pages.edit', compact(['result','base']));
    }
    public function ekipeE($id, Request $request){
        $two = 2;
        $three = 3;
        $four = 4;
        $five = 5;
        $six = 6;
        $seven = 7;
        $eight = 8;

        \DB::table('ekipe')->where('id', $id)->update(['ime'=>$request->$two, 'st_tekem'=>$request->$three, 'st_zmag'=>$request->$four, 'st_porazov'=>$request->$five, 'zmage_porazi'=>$request->$six, 'dani_goli'=>$request->$seven, 'prejeti_goli'=>$request->$eight]);
        return redirect('/');
    }

    public function igralci($id){
        $result = \DB::select("select id as '1', ime as '2', priimek as '3', id_ekipe as '4', pozicija as '5', starost as '6', st_dresa as '7', id_drzave as '8' from igralci where id = '$id'");
        $base = 'igralci';
        return view('pages.edit', compact(['result','base']));
    }
    public function igralciE($id, Request $request){
        $two = 2;
        $three = 3;
        $four = 4;
        $five = 5;
        $six = 6;
        $seven = 7;
        $eight = 8;

        \DB::table('igralci')->where('id', $id)->update(['ime'=>$request->$two, 'priimek'=>$request->$three, 'id_ekipe'=>$request->$four, 'pozicija'=>$request->$five, 'starost'=>$request->$six, 'st_dresa'=>$request->$seven, 'id_drzave'=>$request->$eight]);
        return redirect('/igralci');
    }

    public function drzave($id){
        $result = \DB::select("select id as '1', ime as '2', celina as '3', kratica as '4', zastava as '5' from drzave where id = '$id'");
        $base = 'drzave';
        return view('pages.edit', compact(['result','base']));
    }
    public function drzaveE($id, Request $request){
        $two = 2;
        $three = 3;
        $four = 4;
        $five = 5;

        \DB::table('drzave')->where('id', $id)->update(['ime'=>$request->$two, 'celina'=>$request->$three, 'kratica'=>$request->$four, 'zastava'=>$request->$five]);
        return redirect('/drzave');
    }

    public function lige($id){
        $result = \DB::select("select id as '1', naziv as '2', sezona as '3' from lige where id = '$id'");
        $base = 'lige';
        return view('pages.edit', compact(['result','base']));
    }
    public function ligeE($id, Request $request){
        $two = 2;
        $three = 3;

        \DB::table('lige')->where('id', $id)->update(['naziv'=>$request->$two, 'sezona'=>$request->$three]);
        return redirect('/lige');
    }

    public function stadioni($id){
        $result = \DB::select("select id as '1', naziv as '2', kraj as '3', st_sedezev as '4', id_drzave as '5', id_ekipe as '6' from stadioni where id = '$id'");
        $base = 'stadioni';
        return view('pages.edit', compact(['result','base']));
    }
    public function stadioniE($id, Request $request){
        $two = 2;
        $three = 3;
        $four = 4;
        $five = 5;
        $six = 6;

        \DB::table('stadioni')->where('id', $id)->update(['naziv'=>$request->$two, 'kraj'=>$request->$three, 'st_sedezev'=>$request->$four, 'id_drzave'=>$request->$five, 'id_ekipe'=>$request->$six]);
        return redirect('/stadioni');
    }

    public function trenerji($id){
        $result = \DB::select("select id as '1', ime as '2', priimek as '3', id_ekipe as '4' from trenerji where id = '$id'");
        $base = 'trenerji';
        return view('pages.edit', compact(['result','base']));
    }
    public function trenerjiE($id, Request $request){
        $two = 2;
        $three = 3;
        $four = 4;

        \DB::table('trenerji')->where('id', $id)->update(['ime'=>$request->$two, 'priimek'=>$request->$three, 'id_ekipe'=>$request->$four]);
        return redirect('/trenerji');
    }
}
