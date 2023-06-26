@extends('layouts.frontend-app')

@section('title', 'Under Maintenance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/page-misc.css') }}" />

@section('content')
<div class="container-xxl">
    <div class="misc-wrapper">
		<div class="">
			<div class="text-center">
				<img src="{{ url('/images/logo_wo_tagline_2.png') }}" class="img-fluid" style="width: 25%;">
			</div>
			<Br>
          	<img src="{{ url('/images/under_maintenance.png') }}" class="img-fluid" width="600" />
          	<h3 class="fw-semibold">Coming Back Soon</h3>
          	<p style="padding: 0px 200px">AYA Bank website is temporarily unavailable and we are working diligently to upgrade the page you requested.</p>
          	<p>We will be back on 28th June (Wednesday) 6:00AM MMT, You will find our new facelift.</p>
          	<p>Follow us on <a class="text-decoration-underline" href="https://www.linkedin.com/company/ayabank/">LinkedIn</a> or <a class="text-decoration-underline" href="https://www.facebook.com/ayabank">Facebook</a> for updates, We apologize for any inconvenience.</p>
        </div>
	</div>
</div>