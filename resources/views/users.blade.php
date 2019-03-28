<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>3</title>

        <!-- vuetifyCSS -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet"/>
        <link href="{{ asset('css/app.css') }}" />
    </head>

    <body>

        <div class="flex-center position-ref full-height">
            <div class="content">
                {{-- <div id="app">
                    <user></user>
                </div> --}}
            </div>
        </div>
        
        
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
