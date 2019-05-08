@extends('layouts.main')

@section('content')
<table>
    <tr>
        <th>Ime ekipe</th>
        <th>Število tekem</th>
        <th>Število zmag</th>
        <th>Število porazov</th>
        <th>Dani goli</th>
        <th>Prejeti goli</th>
        <th>Trener</th>
    </tr>

    @foreach($ekipe as $ekipe)
    <tr>
        <td>{{$ekipe->ime}}</td>
        <td>{{$ekipe->st_tekem}}</td>
        <td>{{$ekipe->st_zmag}}</td>
        <td>{{$ekipe->st_porazov}}</td>
        <td>{{$ekipe->dani_goli}}</td>
        <td>{{$ekipe->prejeti_goli}}</td>
        <td>{{$ekipe->priimek}}</td>
        <td><a href = '/edit/{{$ekipe->id}}'>Uredi</a></td>
    </tr>
    @endforeach

</table>
@stop
@section('aside')
    <form action="/ekipe/vstavi">
        <legend>Vstavi novo ekipo:</legend><br>
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
        <input type="submit" value="Vstavi">
    </form>
@stop
