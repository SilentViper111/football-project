@extends('layouts.main')

@section('content')
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
            echo '<td>' . $data[$p]->ime_ekipe . '</td>';
            $p++;
            echo '<td>' . $data[$p]->ime_ekipe . '</td>';
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
