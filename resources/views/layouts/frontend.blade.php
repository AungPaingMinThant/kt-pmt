<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
        <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" />
        <meta
  name="description"
  content="AYA Bank is a leading private sector bank in Myanmar. The Bank was licensed by the Central Bank of Myanmar as a development bank on 2nd July 2010 and relicensed under the Financial Institutions Law 2016 as a full service bank.">

    	<title>@yield('title')</title>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-228606560-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-228606560-1');
        </script>

        <link rel="preload" href="{{ url('/fonts/boxicons.min.css') }}" as="style"  onload="this.onload=null;this.rel='stylesheet'" />
        <noscript><link rel="stylesheet" href="{{ url('/fonts/boxicons.min.css') }}"></noscript>
        <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
        <link rel="preload" href="{{ url('/css/core.min.css') }}" as="style"  onload="this.onload=null;this.rel='stylesheet'" />
        <noscript><link rel="stylesheet" href="{{ url('/css/core.min.css') }}"></noscript>

        <link rel="stylesheet" href="{{url('/fonts/Pyidaungsu-1.8_Regular.ttf')}}">
        <link rel="stylesheet" href="{{url('/fonts/Sora-Regular.ttf')}}">

        <style type="text/css">
            @font-face{font-family:Pyidaungsu;font-style:normal;src:url('/fonts/Pyidaungsu-1.8_Regular.ttf');font-display:swap}@font-face{font-family:Sora;font-style:normal;src:url('/fonts/Sora-Regular.ttf');font-display:swap}body,h1,html,table{font-family:Sora,sans-serif}body,html,table{background-color:#fff;font-size:14px;color:#2e2e2e!important}.prevent-select{-webkit-user-select:none;-ms-user-select:none;user-select:none}img{pointer-events:none}.menu>.nav-item{text-transform:uppercase!important;color:#222!important}.menu>.nav-item.active>a,.menu>.nav-item:hover{color:#a5000b!important}.why_use_AYA{background-color:#fff;border:1px solid #dedede;border-radius:10px;padding:20px;cursor:pointer}.why_use_AYA:hover{cursor:pointer;-webkit-box-shadow:10px 8px 10px 6px rgba(0,0,0,.09);-moz-box-shadow:10px 8px 10px 6px rgba(0,0,0,.09);box-shadow:10px 8px 10px 6px rgba(0,0,0,.09);border:1px solid #fff}.mb20{margin-bottom:20px}.space-6{height:6px}.space-20{height:20px}.space-29{height:29px}.space-30{height:30px}.space-33{height:33px}.space-40{height:40px}.space-50{height:50px}.space-60{height:60px}.space-80{height:80px}.space-86{height:86px}.space-90{height:90px}.space-100{height:100px}.secure_req_application_icon{background-color:#a5000b;color:#fff;border-radius:50%;font-size:20px}
        </style>
    </head>
    <body class="prevent-select">
    	@yield('content')
        <!-- @include('cookieConsent::index') -->

        <script rel="modulepreload" src="{{ url('/js/helpers.js') }}" as="script"></script>
    	<script rel="modulepreload" src="{{ url('/js/jquery.js') }}" as="script"></script>
        <script rel="modulepreload" src="{{ url('/js/popper.js') }}" as="script"></script>
        <script rel="modulepreload" src="{{ url('/js/bootstrap.js') }}" as="script"></script>
        <script rel="modulepreload" src="{{ url('/js/util.js') }}" as="script"></script>
        <script rel="modulepreload" src="{{ url('/js/moment.min.js') }}" as="script"></script>
        <script rel="modulepreload" src="{{ url('/js/menu.js') }}" as="script"></script>
        <script rel="modulepreload" src="{{ url('/js/main.js') }}" as="script"></script>
    </body>
</html>
