@extends('layouts.frontend-app')

@section('title', 'Under Maintenance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/page-misc.css') }}" />

@section('content')
<div class="container-xxl">
    <div class="misc-wrapper">
		<div class="">
          	<img src="{{ url('/images/under_maintenance.png') }}" alt="girl-doing-yoga-light" class="img-fluid" width="600" data-app-dark-img="illustrations/girl-doing-yoga-dark.png" data-app-light-img="illustrations/girl-doing-yoga-light.png" />
          	<h3 class="fw-semibold">Coming Back Soon</h3>
          	<p style="padding: 0px 200px">AYA Bank website is temporarily unavailable and we are working diligently to upgrade the page you requested.</p>
          	<p>We will be back on 28th June (Wednesday) 6:00AM MMT.</p>
          	<p>You will find our new facelift.</p>
          	<p>Follow us on LinkedIn or Facebook for updates.</p>
          	<p>We apologize for any inconvenience.</p>
        </div>
	</div>
</div>