<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', '') }}</title>

        <!-- Fonts -->
        <link rel="icon" type="image/png" href="images/favicon.svg">
        
        <!-- icons -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release-pro/v4.0.0/css/solid.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @routes

        <!-- Scripts -->
        <script src="{{ mix('js/main.js') }}"></script>
        <script src="{{ mix('js/utils.js') }}"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body>
        @inertia
    </body>
</html>
