<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Edit Blog – AYA Bank</title>

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />

    <style type="text/css">
    	.tox-statusbar__branding {
    		display: none;
    	}
    	.file_section {
    		margin-bottom: 20px;
    	}
    </style>

    <link rel="stylesheet" href="{{ url('/css/core.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/design.css') }}" />

    <link rel="stylesheet" href="{{ url('/css/perfect-scrollbar.css') }}" />

    <script src="{{ url('/js/helpers.js') }}"></script>

    <script src="{{ url('/js/config.js') }}"></script>
</head>
<body>
	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">
			@include('layouts.admin_sidebar', ['page'=>'Blog'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'Add Blog', 'page'=>'Page'])

			
			</div>
		</div>
	</div>

	<script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/popper.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('/js/menu.js') }}"></script>
    <script src="{{ url('/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="{!! url('/assets/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
	
</body>
</html>