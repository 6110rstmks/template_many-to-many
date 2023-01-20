<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/styles.css') }}" />

        @vite([
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css'
                ])
    </head>
    <body>
        <div class="container grid h-screen place-items-center">
            {{ $slot }}
        </div>
    </body>
    <script src="{{ url('js/main.js') }}"></script>
</html>
</html>
