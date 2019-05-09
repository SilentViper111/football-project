<!DOCTYPE html>
<html>
<head>
<title>@yield('title', 'Domača stran')</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="<?php echo asset('css/mainStyles.css')?>" type="text/css">
</head>
<body>

    <div id="background"></div>

    <div class="grid-container">
        <div class="item1">Nogometne tekme</div>
        <div class="item2">
            <h2 id="prijavljeni">Prijavljeni kot <label class="ime">{{ \Auth::user()->name }}</label></h2>
            <a id="logout" href="/logout">Odjava</a>
        </div>
        <div class="item3">
            <center>
                <li><a class="linki" href="/">Ekipe</a></li>
                <li><a class="linki" href="/igralci">Igralci</a></li>
                <li><a class="linki" href="/tekme">Tekme</a></li>
                <li><a class="linki" href="/drzave">Države</a></li>
                <li><a class="linki" href="/lige">Lige</a></li>
                <li><a class="linki" href="/stadioni">Stadioni</a></li>
                <li><a class="linki" href="/trenerji">Trenerji</a></li>
                @if(\Auth::user()->lvl == "admin")
                    <li><a class="linki" href="/uporabniki"><b>Uporabniki</b></a></li>
                @endif
            </center>
        </div>
        <div class="item4">@yield('content')</div>
        <div class="item5">@yield('aside')</div>
        <div class="item6"><center>Copyright <label class="ime">Jernej Žuraj</label></center></div>
    </div>

</body>
</html>
