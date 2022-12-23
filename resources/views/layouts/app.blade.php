<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,300;0,600;0,700;0,900;1,300;1,600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b8372efe.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class=>

    <header>
        @include('partials.header')
    </header>

    @include('partials.jumbo')

    <main class="bg-danger">
        <div>
            @yield('content')
        </div>






    </main>

    @include('partials.footer')

</body>

</html>
