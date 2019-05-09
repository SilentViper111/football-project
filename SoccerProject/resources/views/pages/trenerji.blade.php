@extends('layouts.main')

@section('content')
<center>
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
        @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")<td class = 'uredi-container'><a href = '/edit/trenerji/{{$data->id}}' class = 'uredi'>Uredi</a></td>@endif
        @if(\Auth::user()->lvl == "admin")<td class = 'uredi-container'><a href = '/delete/trenerji/{{$data->id}}' class = 'uredi'>Briši</a></td>@endif
    </tr>
    @endforeach

</table>
@stop
@section('aside')
    @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")
        <form action="/trenerji/insert" method='POST'>
            {{ csrf_field() }}
            <center><legend>Vstavi novega trenerja</legend><br>
            Ime:<br>
            <input type="text" name="ime"><br>
            Priimek:<br>
            <input type="text" name="priimek"><br>

            Ekipa:<br>
            <select name="id_ekipe">
                @foreach($menu as $menu)
                    <option value='{{$menu->id}}'>{{$menu->ime}}</option>
                @endforeach
            </select><br>
            <input id="vstavi" type="submit" value="Vstavi">
        </form>
    @endif
@stop
