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


    <section class="departing py-5">
        <div class="container">
            <h2>Orario treni</h2>
            <div class="row row-cols-sm-2 row-cols-md-4">
                @forelse ($trains as $train)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <div><strong>Nome Azienda</strong> {{ $train->Azienda }}</div>
                                <span>Orario di Partenza</span>
                                <h5>{{ $train->Orario_di_Partenza }}</h5>

                                <span>Stazione di Partenza</span>
                                <h3>{{ $train->Stazione_di_Partenza }}</h3>

                                <span>Codice Treno</span>
                                <h3>{{ $train->Codice_Treno }}</h3>

                                <span>Giorno di Partenza</span>
                                <h3>{{ $train->Giorno_di_Partenza }}</h3>

                                @if ($train->In_orario)
                                    <div><strong>Stato:</strong> In orario</div>
                                @elseif ($train->Cancellato)
                                    <strong>Treno Cancellato</strong>
                                @else
                                    <div><strong>Stato :</strong> In ritardo</div>
                                @endif
                            </div>
                            {{-- /.card-body --}}
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
        <div>

        </div>

    </section>






</body>

</html>
