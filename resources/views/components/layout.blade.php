<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        body {
            padding-top: 89px; /* Altezza della navbar fissa */
        }
    </style>
    <link rel="icon" href="{{ asset('images/favicon_ilsanpietro.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <x-navbar/> 
    {{$slot}}
   

    <x-footer/>
    
    @stack('scripts')
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>