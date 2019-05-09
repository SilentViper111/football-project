@extends('layouts.main')

@section('content')
<center>
<table>
    <tr>
        <th>Ime</th>
        <th>Sezona</th>
    </tr>

    @foreach($data as $data)
    <tr>
        <td>{{$data->naziv}}</td>
        <td>{{$data->sezona}}</td>
        @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")<td class = 'uredi-container'><a href = '/edit/lige/{{$data->id}}' class = 'uredi'>Uredi</a></td>@endif
        @if(\Auth::user()->lvl == "admin")<td class = 'uredi-container'><a href = '/delete/lige/{{$data->id}}' class = 'uredi'>Briši</a></td>@endif
    </tr>
    @endforeach

</table>
@stop
@section('aside')
    @if(\Auth::user()->lvl == "admin")
        <form action="/lige/insert" method='POST'>
            {{ csrf_field() }}
            <center><legend>Vstavi novo ligo</legend><br>
            Ime lige:<br>
            <input type="text" name="ime_lige"><br>
            Sezona:<br>
            <input type="text" name="sezona"><br>
            <input id="vstavi" type="submit" value="Vstavi">
        </form>
    @endif
@stop
