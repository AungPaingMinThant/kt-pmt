<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
        <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

    	<title>@yield('title')</title>

        <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />
        <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
        <link rel="stylesheet" href="{{ url('/css/core.css') }}" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="{{url('../fonts/Pyidaungsu-1.8_Regular.ttf')}}">
        <link href="{{url('../fonts/Sora-Regular.ttf')}}">

        <style type="text/css">
            @font-face {
                font-family: 'Pyidaungsu';
                font-style: normal;
                src: url('../../fonts/Pyidaungsu-1.8_Regular.ttf');
            }
            @font-face {
                font-family: 'Sora';
                font-style: normal;
                src: url('../../fonts/Sora-Regular.ttf');
            }
            html, body, table{
                font-family: 'Sora', sans-serif;
                background-color: #ffffff;
                font-size: 14px;
                color: #2e2e2e !important;
            }
            h1 {
                font-family: 'Sora', sans-serif;
            }
            .menu > .nav-item {            
                text-transform: uppercase !important;
                color: #222222 !important;
            }
            .menu > .nav-item:hover {
                color: #a02226 !important;
            }
            .menu > .nav-item.active > a {
                color: #a02226 !important;
            }
            .why_use_AYA{
                background-color: #fff;
                border: 1px solid #dedede;
                border-radius: 10px;
                padding: 20px 20px;
                cursor: pointer;
            }
            .why_use_AYA:hover{
                cursor: pointer;  
                -webkit-box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
                -moz-box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
                box-shadow: 10px 8px 10px 6px rgba(0,0,0,0.09);
                border: 1px solid #fff;
            }
            .mb20 {
                margin-bottom: 20px;
            }
            .space-6 {
                height: 6px;
            }
            .space-20 {
                height: 20px;
            }  
            .space-29 {
                height: 29px;
            }
            .space-30 {
                height: 30px;
            }
            .space-33 {
                height: 33px;
            }
            .space-40 {
                height: 40px;
            }
            .space-50 {
                height: 50px;
            }
            .space-60 {
                height: 60px;
            }
            .space-80 {
                height: 80px;
            }
            .space-86 {
                height: 86px;
            }
            .space-90 {
                height: 90px;
            }
            .space-100 {
                height: 100px;
            }
            .secure_req_application_icon {
                background-color: #a02226;
                color: #fff;
                border-radius: 50%;
                font-size: 20px;
            }
        </style>

        <script src="{{ url('/js/helpers.js') }}"></script>
    </head>
    <body>
    	@yield('content')

    	<script src="{{ url('/js/jquery.js') }}"></script>
        <script src="{{ url('/js/popper.js') }}"></script>
        <script src="{{ url('/js/bootstrap.js') }}"></script>
        <script src="{{ url('/js/util.js') }}"></script>
        <script src="{{ url('/js/moment.js') }}"></script>
        <script src="{{ url('/js/menu.js') }}"></script>
        <script src="{{ url('/js/main.js') }}"></script>
    </body>
</html>
