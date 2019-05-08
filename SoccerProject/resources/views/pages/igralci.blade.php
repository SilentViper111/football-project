@extends('layouts.main')

@section('content')
<table>
    <tr>
        <th>Ime</th>
        <th>Priimek</th>
        <th>Ekipa</th>
        <th>Pozicija</th>
        <th>Starost</th>
        <th>Št. dresa</th>
        <th>Država</th>
    </tr>

    @foreach($igralci as $igralci)
    <tr>
        <td>{{$igralci->ime}}</td>
        <td>{{$igralci->priimek}}</td>
        <td>{{$igralci->ime_ekipe}}</td>
        <td>{{$igralci->pozicija}}</td>
        <td>{{$igralci->starost}}</td>
        <td>{{$igralci->st_dresa}}</td>
        <td>{{$igralci->ime_drzave}}</td>
    </tr>
    @endforeach

</table>
@stop
