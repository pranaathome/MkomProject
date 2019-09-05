<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap_4_3_1/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('bootstrap_3_3_6/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <title>SISTEM INFORMASI | PASCASARJANA ILMU KOMPUTER</title>
</head>
<body>


    <div class='container'>
        @include('navbar')
        @yield('main')
    </div>

    @yield('footer')

    <script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
    <script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/mkomproject.js') }}"></script>
</html>

