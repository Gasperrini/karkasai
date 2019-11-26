<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <script src="{{ asset('js/custom.js') }}" defer></script>
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>


        <img class="myBtn-image" src="img/up.png" onclick="topFunction()" id="myBtn">

<div id="body">
    <div id="header">
        <img class="img-gitaristas" src="img/gitaristas.png">
        <h3 id="slogan">GitarosMeistrai.lt</h3>
    </div>

    <div id="changeables">
    @yield('content')
    </div>

    <div id="footer">
        <p>Copyright © Ignas Gasparavičius IFAi/7, 2019</p>
    </div>

    @yield('scripts')

</div>
    </div>
</body>
</html>
