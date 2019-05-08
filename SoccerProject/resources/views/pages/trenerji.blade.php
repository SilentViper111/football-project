@extends('layouts.main')

@section('content')
<table>
    <tr>
        <th>Ime</th>
        <th>Priimek</th>
        <th>Ekipa</th>
    </tr>

    @foreach($data as $data)
    <tr>
        <td>{{$data->ime}}</td>
        <td>{{$data->priimek}}</td>
        <td>{{$data->ime_ekipe}}</td>
    </tr>
    @endforeach

</table>
@stop
