@extends('layouts.main')

@section('content')
<table>
    <tr>
        <th>Ime</th>
        <th>Kraj</th>
        <th>Število sedežev</th>
        <th>Država</th>
        <th>Ekipa</th>
    </tr>

    @foreach($data as $data)
    <tr>
        <td>{{$data->naziv}}</td>
        <td>{{$data->kraj}}</td>
        <td>{{$data->st_sedezev}}</td>
        <td>{{$data->ime_drzave}}</td>
        <td>{{$data->ime_ekipe}}</td>
    </tr>
    @endforeach

</table>
@stop
