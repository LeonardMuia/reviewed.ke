<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', '') }}</title>

        <!-- Fonts -->
        <link rel="icon" type="image/png" href="images/favicon.svg">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="plugin/build/css/main.css">

        @routes

        <!-- Scripts -->
        <script src="js/jquery.js"></script>
        <script src="js/iconscout.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="plugin/build/js/main.js"></script>
        <script src="plugin/build/js/utils.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body>
        @inertia
    </body>
</html>
