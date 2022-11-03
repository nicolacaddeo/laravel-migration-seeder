<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h2>Treni in partenza oggi:</h2>

    <div class="card-container">
        @foreach ($trainsToday as $train)
            <div class="train-card">
                <p>Codice treno: {{ $train->codice_treno }}</p>
                <p>Stazione di partenza: {{ $train->stazione_di_partenza }}</p>
                <p>Stazione di arrivo: {{ $train->stazione_di_arrivo }}</p>
                <p>Orario di partenza: {{ $train->orario_di_partenza }}</p>
                <p>Orario di arrivo: {{ $train->orario_di_arrivo }}</p>
                <p>Numero carrozze: {{ $train->numero_carrozze }}</p>
                <p>
                    In orario:
                    @if ($train->in_orario == true)
                        <strong>Si</strong>
                    @else
                        <strong>In ritardo</strong>
                    @endif
                </p>
                <p>
                    Cancellato:
                    @if ($train->cancellato == true)
                        <strong>Treno soppresso</strong>
                    @else
                        <strong>No</strong>
                    @endif
                </p>
            </div>
        @endforeach
    </div>

</body>

</html>
