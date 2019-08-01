<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap_4_3_1/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Program Magister Ilmu Komputer IPB</title>
</head>
<body>

    @include('navbar')

    <div class='container'>
        @yield('main')
    </div>

    @yield('footer')

    <script src="{{ asset('js/jquery_3_4_1.min.js') }}"></script>
    <script src="{{ asset('bootstrap_4_3_1/js/bootstrap.min.js') }}"></script>
</body>
</html>
