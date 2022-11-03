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
    <h2> $currentTime: {{ $currentTime }}</h2>

    <h2>$onlyDate: {{ $today }}</h2>

    <h2>{{ $newFormat }}</h2>
</body>

</html>
