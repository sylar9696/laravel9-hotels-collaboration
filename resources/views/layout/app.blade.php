<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titlePage')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <!-- includiamo l'header per tutte le pagine -->
    @include( 'partials.header' )

    <main class="container">
        <!-- Contenuto variabile in base alle pagine -->
        @yield( 'content' )
        <span class="test">ciao</span>
    </main>

    <!-- includiamo il footer per tutte le pagine -->
    @include( 'partials.footer' )
</body>
</html>
