<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Docente</title>

        <div style="display: flex; justify-content: space-between;">
            <img src="https://www.tecvalles.mx/wp/wp-content/uploads/2023/07/pleca-gob1.png" style="width: 25.00%; height: 100px; object-fit: cover;">
            <img src="https://www.tecvalles.mx/wp/wp-content/uploads/2023/07/pleca-gob2.png" style="width: 25.00%; height: 100px; object-fit: cover;">
            <img src="https://www.tecvalles.mx/wp/wp-content/uploads/2023/07/pleca_tecnm.jpg" style="width: 25.00%; height: 100px; object-fit: cover;">
        </div>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        -->
        </head>
    <body class="font-sans antialiased" style="background: rgb(255, 255, 255)">
        <div class="min-h-screen">
            <div>
            @include('layouts.docente.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow" style="background:rgb(27,57,107);">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            </div>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
