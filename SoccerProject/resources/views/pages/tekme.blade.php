@extends('layouts.main')

@section('content')
<center>
<table>
    <tr>
        <th>Ekipa 1</th>
        <th>Ekipa 2</th>
        <th>Stadion</th>
        <th>Liga</th>
        <th>Datum</th>
        <th>Število gledalcev</th>
        <th>Prvi dodatek</th>
        <th>Drugi dodatek</th>
    </tr>
    <?php
        $length = count($data);
        $p = 0;
        $t = 0;
        for ($i = 0; $i < $length / 2; $i++) {
            echo '<tr>';
            echo '<td>';
            if ($data[$p]->zmaga_poraz == 1) {
                echo '<label class = "green">';
            }
            else {
                echo '<label class = "red">';
            }
            echo $data[$p]->ime_ekipe;
            echo '(<b>'.$data[$p]->st_golov.'</b>)';
            echo '</label>';
            echo '</td>';
            $p++;
            echo '<td>';
            if ($data[$p]->zmaga_poraz == 1) {
                echo '<label class = "green">';
            }
            else {
                echo '<label class = "red">';
            }
            echo $data[$p]->ime_ekipe;
            echo '(<b>'.$data[$p]->st_golov.'</b>)';
            echo '</label>';
            echo '</td>';
            $p++;
            echo '<td>' . $data[$t]->naziv_stadiona . '</td>';
            echo '<td>' . $data[$t]->naziv_lige . '</td>';
            echo '<td>' . $data[$t]->datum_tekme . '</td>';
            echo '<td>' . $data[$t]->st_gledalcev . '</td>';
            echo '<td>' . $data[$t]->dodatek1 . '</td>';
            echo '<td>' . $data[$t]->dodatek2. '</td>';
            echo '</tr>';
            $t += 2;
        }
    ?>

</table>
@stop
@section('aside')
    @if(\Auth::user()->lvl == "admin" || \Auth::user()->lvl == "manage")
        <form action="/tekme/insert" method='POST'>
            {{ csrf_field() }}
            <center><legend>Vstavi novo tekmo</legend><br>

            Prva ekipa:<br>
            <select name="id_prve_ekipe">
                @foreach($menu as $menu)
                    <option value='{{$menu->id}}'>{{$menu->ime}}</option>
                @endforeach
            </select><br>

            Št. golov prve ekipe:<br>
            <input type="text" name="st_golov_prve_ekipe"><br>

            Druga ekipa:<br>
            <select name="id_druge_ekipe">
                @foreach($menu2 as $menu2)
                    <option value='{{$menu2->id}}'>{{$menu2->ime}}</option>
                @endforeach
            </select><br>

            Št. golov druge ekipe:<br>
            <input type="text" name="st_golov_druge_ekipe"><br>

            Stadion:<br>
            <select name="id_stadiona">
                @foreach($menu3 as $menu3)
                    <option value='{{$menu->id}}'>{{$menu3->naziv}}</option>
                @endforeach
            </select><br>

            Liga:<br>
            <select name="id_lige">
                @foreach($menu4 as $menu4)
                    <option value='{{$menu->id}}'>{{$menu4->naziv}}</option>
                @endforeach
            </select><br>

            Datum tekme:<br>
            <input type="date" name="datum_tekme"><br>
            Število gledalcev:<br>
            <input type="text" name="st_gledalcev"><br>
            Prvi dodatek:<br>
            <input type="text" name="dodatek1"><br>
            Drugi dodatek:<br>
            <input type="text" name="dodatek2"><br>
            <input id="vstavi" type="submit" value="Vstavi">
        </form>
    @endif
@stop
