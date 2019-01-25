<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flatium</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script>
            window.App = {!! json_encode([
                'csrfToken' => csrf_token()
            ]) !!};
        </script>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
