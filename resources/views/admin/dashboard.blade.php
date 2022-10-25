@extends('layouts.app')

@section('title', 'Dashboard – AYA Bank')

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Dashboard'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'Dashboard'])
		</div>
	</div>
</div>

@endsection('content')