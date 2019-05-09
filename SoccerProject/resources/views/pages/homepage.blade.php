@extends('layouts.main')

@section('content')
<center>
    <table>
        <tr>
            <th>Ime ekipe</th>
            <th>Število tekem</th>
            <th>Število zmag</th>
            <th>Število porazov</th>
            <th>Zmage : Porazi</th>
            <th>Dani goli</th>
            <th>Prejeti goli</th>
        </tr>

        @foreach($ekipe as $ekipe)
        <tr>
            <td>{{$ekipe->ime}}</td>
            <td>{{$ekipe->st_tekem}}</td>
            <td>{{$ekipe->st_zmag}}</td>
            <td>{{$ekipe->st_porazov}}</td>
            <td>{{$ekipe->zmage_porazi}}</td>
            <td>{{$ekipe->dani_goli}}</td>
            <td>{{$ekipe->prejeti_goli}}</td>
            @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")<td class = 'uredi-container'><a href = '/edit/ekipe/{{$ekipe->id}}' class = 'uredi'>Uredi</a></td>@endif
            @if(\Auth::user()->lvl == "admin")<td class = 'uredi-container'><a href = '/delete/ekipe/{{$ekipe->id}}' class = 'uredi'>Briši</a></td>@endif
        </tr>
        @endforeach

    </table>
@stop

@section('aside')
    @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")
        <form action="/ekipe/insert" method='POST'>
            {{ csrf_field() }}
            <center><legend>Vstavi novo ekipo</legend><br>
            Ime ekipe:<br>
            <input type="text" name="ime_ekipe"><br>
            Število tekem:<br>
            <input type="text" name="st_tekem"><br>
            Število zmag:<br>
            <input type="text" name="st_zmag"><br>
            Število porazov:<br>
            <input type="text" name="st_porazov"><br>
            Dani goli:<br>
            <input type="text" name="dani_goli"><br>
            Prejeti goli:<br>
            <input type="text" name="prejeti_goli"><br>
            Ime trenerja:<br>
            <input type="text" name="ime_trenerja"><br>
            Priimek trenerja:<br>
            <input type="text" name="priimek_trenerja"><br>
            <input id="vstavi" type="submit" value="Vstavi">
        </form>
    @endif
@stop
