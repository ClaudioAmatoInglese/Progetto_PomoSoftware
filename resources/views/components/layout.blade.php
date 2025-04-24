<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto By Pomosoftware</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boldonse&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lobster&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    {{-- vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/style.css', 'resources/js/main.js'])
    {{-- font --}}
    
    
</head>
<body>
    <x-navbar/>
    
    <div class="">
        {{$slot}}
    </div>

    <x-footer/>
</body>
</html>