@extends('template') <!-- Estendo la view che funge da template -->

@section('content') <!-- Specifico la sezione da riempire -->

    @if ($nome == 'Davide')
        <h1>Ciao Davide</h1>
    @else
        <h1>Else</h1>
    @endif

    <p>
        <!-- 3 modi per prendere dati: -->
        <h1>About Me: <?= $nome ?> {{ $cognome }} {!! $eta !!} </h1>

        @if(count($interests))
            <h2>I miei interessi:</h2>

            <ul>
                @foreach($interests as $interest)
                    <li>{{ $interest }}</li>
                @endforeach
            </ul>
        @endif

        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

@stop <!-- Specifico la fine della sezone -->