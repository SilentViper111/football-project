@extends('layouts.main')

@section('content')
<center>
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
        @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")<td class = 'uredi-container'><a href = '/edit/stadioni/{{$data->id}}' class = 'uredi'>Uredi</a></td>@endif
        @if(\Auth::user()->lvl == "admin")<td class = 'uredi-container'><a href = '/delete/stadioni/{{$data->id}}' class = 'uredi'>Briši</a></td>@endif
    </tr>
    @endforeach

</table>
@stop
@section('aside')
    @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")
        <form action="/stadioni/insert" method='POST'>
            {{ csrf_field() }}
            <center><legend>Vstavi nov stadion</legend><br>
            Ime stadiona:<br>
            <input type="text" name="ime_stadiona"><br>
            Kraj:<br>
            <input type="text" name="kraj"><br>
            Število sedežev:<br>
            <input type="text" name="st_sedezev"><br>

            Država:<br>
            <select name="id_drzave">
                @foreach($menu as $menu)
                    <option value='{{$menu->id}}'>{{$menu->ime}}</option>
                @endforeach
            </select><br>

            Ekipa:<br>
            <select name="id_ekipe">
                @foreach($menu1 as $menu1)
                    <option value='{{$menu1->id}}'>{{$menu1->ime}}</option>
                @endforeach
            </select><br>
            <input id="vstavi" type="submit" value="Vstavi">
        </form>
    @endif
@stop
