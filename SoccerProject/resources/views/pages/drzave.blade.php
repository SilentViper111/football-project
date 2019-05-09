@extends('layouts.main')

@section('content')
<center>
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
        @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")<td class = 'uredi-container'><a href = '/edit/drzave/{{$data->id}}' class = 'uredi'>Uredi</a></td>@endif
        @if(\Auth::user()->lvl == "admin")<td class = 'uredi-container'><a href = '/delete/drzave/{{$data->id}}' class = 'uredi'>Briši</a></td>@endif
    </tr>
    @endforeach

</table>
@stop
@section('aside')
    @if(\Auth::user()->lvl == "admin")
        <form action="/drzave/insert" method='POST'>
            {{ csrf_field() }}
            <center><legend>Vstavi novo drzavo</legend><br>
            Ime drzave:<br>
            <input type="text" name="ime_drzave"><br>
            Celina:<br>
            <input type="text" name="celina"><br>
            Kratica:<br>
            <input type="text" name="kratica"><br>
            Zastava:<br>
            <input type="text" name="zastava"><br>
            <input id="vstavi" type="submit" value="Vstavi">
        </form>
    @endif
@stop
