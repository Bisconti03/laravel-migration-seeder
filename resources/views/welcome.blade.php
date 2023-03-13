<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row">

                    @foreach ($trains as $train)
                    <div class="col text-center">

                        <div class="card">
                            <div class="card-body">
                                <h3> Codice Treno: {{ $train->Codice_treno }}</h3>
                                <p>In partenza da: {{ $train->Stazione_di_partenza }}</p>
                                <p>In arrivo a: {{ $train->Stazione_di_arrivo }}</p>
                                <p>In data: {{ $train->Data }}</p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    
                </div>
            </div>
        </main>

    </body>
</html>
