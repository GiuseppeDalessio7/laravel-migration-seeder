<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Train</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="">
        @forelse ($trains as $train)
            <span>Nome Azienda:</span>
            <h5>{{ $train->Azienda }}</h5>

            <span>Orario di Partenza</span>
            <h5>{{ $train->Orario_di_Partenza }}</h5>

            <span>Stazione di Partenza</span>
            <h3>{{ $train->Stazione_di_Partenza }}</h3>

            <span>Codice Treno</span>
            <h3>{{ $train->Codice_Treno }}</h3>

            <span></span>
        @empty
        @endforelse
    </main>

</body>

</html>
