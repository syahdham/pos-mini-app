<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title> @yield('title', '') &mdash; {{ env('APP_NAME') }} </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/fontawesome.min.css') }}">

        @stack('styles')
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                @include('includes.topnav')

                <div class="main-content">
                    @yield('content')
                </div>
                @include('includes.footer')
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        @stack('scripts')

    </body>
</html>
