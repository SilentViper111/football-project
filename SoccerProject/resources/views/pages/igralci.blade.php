@extends('layouts.main')

@section('content')
<center>
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
        @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")<td class = 'uredi-container'><a href = '/edit/igralci/{{$igralci->id}}' class = 'uredi'>Uredi</a></td>@endif
        @if(\Auth::user()->lvl == "admin")<td class = 'uredi-container'><a href = '/delete/igralci/{{$igralci->id}}' class = 'uredi'>Briši</a></td>@endif
    </tr>
    @endforeach

</table>
@stop
@section('aside')
    @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")
        <form action="/igralci/insert" method='POST'>
            {{ csrf_field() }}
            <center><legend>Vstavi novega igralca</legend><br>
            Ime:<br>
            <input type="text" name="ime_igralca"><br>
            Priimek:<br>
            <input type="text" name="priimek_igralca"><br>

            Ekipa:<br>
            <select name="id_ekipe">
                @foreach($menu as $menu)
                    <option value='{{$menu->id_ekipe}}'>{{$menu->ime_ekipe}}</option>
                @endforeach
            </select><br>

            Pozicija:<br>
            <input type="text" name="pozicija"><br>
            Starost:<br>
            <input type="text" name="starost"><br>
            Številka dresa:<br>
            <input type="text" name="st_dresa"><br>

            Država:<br>
            <select name='id_drzave'>
                @foreach($menues as $menues)
                    <option value='{{$menues->id_drzave}}'>{{$menues->ime_drzave}}</option>
                @endforeach
            </select><br>

            <input id="vstavi" type="submit" value="Vstavi">
        </form>
    @endif
@stop
