<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/kt-logo.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/kt-logo.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/kt-logo.png') }}" sizes="270x270" />

	<title>@yield('title')</title>

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />

    <link rel="stylesheet" href="{{ url('/css/core.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/design.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/perfect-scrollbar.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style type="text/css">
        html, body{
            font-family: 'Sora', sans-serif;
            background-color: #23225C;
        }
        .navbar-nav > .nav-item {
            font-size: 16px !important;
/*            text-transform: uppercase !important;*/
        }
        .form-control, .form-select, input::file-selector-button {
            color: #566a7f !important;
        }
        .js-cookie-consent {
            display: none;
        }
    </style>

    <script src="{{ url('/js/helpers.js') }}"></script>
    <script src="{{ url('/js/config.js') }}"></script>
</head>
<body>
	@yield('content')

	<script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/popper.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('/js/menu.js') }}"></script>
    <script src="{{ url('/js/main.js') }}"></script>
    <script src="{{ url('/js/function.js') }}"></script>
</body>
</html>