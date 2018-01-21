<!doctype html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <title>{{ config('app.name', 'Laravel') }}</title>
            
            <title>Warner</title>

            <!-- Styles 
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                -->
            @include('links.css')
            @include('links.js')

        </head>
        <body>
            @include('inc.navbar')
            <br />
            <div class="container">
                    @include('inc.errors')
            </div>
            @yield('details')  
            @yield('gotoLogins')
            @yield('content')

            {{--  CKEDITOR  --}}
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
    
            </script>
            <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}"></script>

        </body>
    </html>


