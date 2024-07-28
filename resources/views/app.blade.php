<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link crossorigin="anonymous" rel="preconnect" href="https://fonts.bunny.net">
        <link crossorigin="anonymous" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link crossorigin="anonymous" rel="preconnect" href="https://fonts.googleapis.com">
        <link crossorigin="anonymous" rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link crossorigin="anonymous" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="antialiased font-poppins">
        @inertia
    </body>
</html>
