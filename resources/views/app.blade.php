<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', '') }}</title>

        <!-- Fonts -->
        <link rel="icon" type="image/png" href="/images/home/icon.png">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>

        <!-- Start of Async Drift Code -->
        
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        @inertia
    </body>
</html>
