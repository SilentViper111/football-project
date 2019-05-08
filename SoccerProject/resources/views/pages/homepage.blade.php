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
    </tr>
    @endforeach

</table>
@stop
