@extends('layouts.main')

@section('content')
<table>
    <tr>
        <th>Ime</th>
        <th>Celina</th>
        <th>Kratica</th>
        <th>Zastava</th>
    </tr>

    @foreach($data as $data)
    <tr>
        <td>{{$data->ime}}</td>
        <td>{{$data->celina}}</td>
        <td>{{$data->kratica}}</td>
        <td><center><img src = '{{$data->zastava}}' id = 'zastava' height="30"></center></td>
    </tr>
    @endforeach

</table>
@stop
