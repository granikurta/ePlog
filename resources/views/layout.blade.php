<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <style>

    </style>

    <style>
        html,
        body {
            margin: 0;
            /* font-family: 'Nunito'; */
            font-family: 'Open Sans';
            height: 100%;
        }

        .topnav-right {
            float: right;
        }
        .topnav-right a{
            font-family: 'Galada', sans-serif;
            color: rgba(0, 0, 0, 1);
            float: left;
            text-align: center;
            padding: 30px 34px;
            text-decoration: none;
            font-size: 20px;
        }
        .logo{
            font-family: 'Galada';
            float: left;
            color: rgba(0, 0, 0, 1);
            text-align: center;
            padding: 30px 34px 30px 0;
            text-decoration: none;
            font-size: 20px;
        }

        .topnav {
            overflow: hidden;
            padding: 0 9%;
        }

        #app {
            /* background: #00467F; */
            /* background: -webkit-linear-gradient(to right, #A5CC82, #00467F); */
            /* background: linear-gradient(to right, #A5CC82, #00467F); */
            height: 100%;
        }

    </style>
</head>
<body class="main"">
        <div class=" topnav">
    <a class="logo"  href="/">ePlog</a>
    {{-- <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a> --}}
    <div class="topnav-right">
        <a href="/lib">Lib</a>
        <a href="#search">Tests</a>
        <a href="#about">About</a>
    </div>
    </div>
    <div id="app">
        @yield('content')
    </div>
       @yield('contentVue')
</body>
</html>
