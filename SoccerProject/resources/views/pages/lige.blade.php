@extends('layouts.main')

@section('content')
<table>
    <tr>
        <th>Ime</th>
        <th>Sezona</th>
    </tr>

    @foreach($data as $data)
    <tr>
        <td>{{$data->naziv}}</td>
        <td>{{$data->sezona}}</td>
    </tr>
    @endforeach

</table>
@stop
