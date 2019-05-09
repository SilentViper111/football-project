<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function ekipe(Request $request){
        try{
            \DB::table('ekipe')->insert(
                ['ime' => $request->ime_ekipe, 'st_tekem' => $request->st_tekem, 'st_zmag' => $request->st_zmag, 'st_porazov' => $request->st_porazov, 'zmage_porazi' => ($request->st_zmag - $request->st_porazov), 'dani_goli' => $request->dani_goli, 'prejeti_goli' => $request->prejeti_goli]
            );
            \DB::table('trenerji')->insert(
                ['ime' => $request->ime_trenerja, 'priimek' => $request->priimek_trenerja, 'id_ekipe' => \DB::table('ekipe')->max('id')]
            );

            return redirect('/');
        }
        catch (\Exception $e){
            echo 'error <a href="/">Home</a>';
        }
    }
    public function drzave(Request $request){
        try{
            \DB::table('drzave')->insert(
                ['ime' => $request->ime_drzave, 'celina' => $request->celina, 'kratica' => $request->kratica, 'zastava' => $request->zastava]
            );
            return redirect('/drzave');
        }
        catch (\Exception $e){
            echo 'error <a href="/">Home</a>';
        }
    }
    public function igralci(Request $request){
        try{
            \DB::table('igralci')->insert(
                ['ime' => $request->ime_igralca, 'priimek' => $request->priimek_igralca, 'id_ekipe' => $request->id_ekipe, 'pozicija' => $request->pozicija, 'starost' => $request->starost, 'st_dresa' => $request->st_dresa, 'id_drzave' => $request->id_drzave]
            );
            return redirect('/igralci');
        }
        catch (\Exception $e){
            echo 'error <a href="/">Home</a>';
        }
    }
    public function tekme(Request $request){
            $goli_prve = $request->st_golov_prve_ekipe;
            $goli_druge = (int)$request->st_golov_druge_ekipe;
            if($goli_prve > $goli_druge){
                $prva_ekipa=1;
                $druga_ekipa=0;
            }
            elseif($goli_prve < $goli_druge){
                $prva_ekipa=0;
                $druga_ekipa=1;
            }
            else{
                $prva_ekipa=2;
                $druga_ekipa=2;
            }
            echo $prva_ekipa . $druga_ekipa;
            $id = \DB::table('tekme')->max('id');
            $id++;
            \DB::table('tekme')->insert(
                ['id_stadiona' => $request->id_stadiona, 'id_lige' => $request->id_lige, 'datum_tekme' => $request->datum_tekme, 'st_gledalcev' => $request->st_gledalcev, 'dodatek1' => $request->dodatek1, 'dodatek2' => $request->dodatek2]
            );
            \DB::table('tekme_ekipe')->insert(
                ['id_tekme' => $id, 'id_ekipe' => $request->id_prve_ekipe, 'zmaga_poraz' => $prva_ekipa, 'st_golov' => $request->st_golov_prve_ekipe]
            );
            \DB::table('tekme_ekipe')->insert(
                ['id_tekme' => $id, 'id_ekipe' => $request->id_druge_ekipe, 'zmaga_poraz' => $druga_ekipa, 'st_golov' => $request->st_golov_druge_ekipe]
            );
            return redirect('/tekme');
    }
    public function lige(Request $request){
        try{
            \DB::table('lige')->insert(
                ['naziv' => $request->ime_lige, 'sezona' => $request->sezona]
            );
            return redirect('/lige');
        }
        catch (\Exception $e){
            echo 'error <a href="/">Home</a>';
        }
    }
    public function stadioni(Request $request){
        try{
            \DB::table('stadioni')->insert(
                ['naziv' => $request->ime_stadiona, 'kraj' => $request->kraj, 'st_sedezev' => $request->st_sedezev, 'id_drzave' => $request->id_drzave, 'id_ekipe' => $request->id_ekipe]
            );
            return redirect('/stadioni');
        }
        catch (\Exception $e){
            echo 'error <a href="/">Home</a>';
        }
    }
    public function trenerji(Request $request){
        try{
            \DB::table('trenerji')->insert(
                ['ime' => $request->ime, 'priimek' => $request->priimek, 'id_ekipe' => $request->id_ekipe]
            );
            return redirect('/trenerji');
        }
        catch (\Exception $e){
            echo 'error <a href="/">Home</a>';
        }
    }
}
