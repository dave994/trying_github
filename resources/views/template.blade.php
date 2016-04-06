<!-- Creo un template definendo la struttura di ogni pagina. Le varie sezioni le creo con yield('nome_sezione') -->
<!doctype html>
<html lang="it">

<head>

    <meta charset="UTF-8">
    <title>{{ $titolo }}</title>
    <link rel="stylesheet" href=""/>

    <style>

        #header, #footer{ background: lightgreen; text-align: center; }
        #menu{ padding: 0px; }
        #menu li{ display: inline; }
        .div-prova{ text-align: center }

    </style>

</head>

<body>

    <div id="header">
        <h3>MENU</h3>
        <ul id="menu">
            <li><a href="/">HOME</a></li>
            <li><a href="about">About</a></li>
            <li><a href="progetto">Progetto</a></li>
        </ul>
    </div>

    <div class="container">
        @yield('content') <!-- Creo una sezione -->
    </div>

    <div id="footer">
        <h3>FOOTER</h3>
    </div>

</body>

</html>