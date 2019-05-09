@extends('layouts.main')

@section('content')
<center>
        <?php
            $i=1;
            $yes = $result[0];
            echo '<form action="/e/'. $base .'/'. $yes->$i .'" method="POST">';
            ?>
            {{ csrf_field() }}
            <?php
            $array = json_decode(json_encode($yes), true);
            $length = count($array)+1;
            for ($i=1; $i < $length; $i++) {
                echo '<input type="text" name="'.$i.'" value="'.$yes->$i.'"><br>';
            }
        ?>
        <input id="vstavi" type="submit" value="Spremeni">
    </form>
@stop
