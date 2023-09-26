<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Mission, Corporate Values and Brand Promise</title>

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/core.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{url('/fonts/Pyidaungsu-1.8_Regular.ttf')}}">
    <link href="{{url('/fonts/Sora-Regular.ttf')}}">
	<style type="text/css">
		@font-face {
            font-family: 'Pyidaungsu';
            font-style: normal;
            src: url('/fonts/Pyidaungsu-1.8_Regular.ttf');
        }
        @font-face {
            font-family: 'W35Art House';
            font-style: normal;
            src: url('/fonts/W35Art House.TTF');
        }
        @font-face {
            font-family: 'Sora';
            font-style: normal;
            src: url('/fonts/Sora-Regular.ttf');
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
        .prevent-select {
            -webkit-user-select: none; /* Safari */
            -ms-user-select: none; /* IE 10 and IE 11 */
            user-select: none; /* Standard syntax */
        }
        img {
            pointer-events: none;
        }
        label {
        	text-transform: none !important;
        }
        .menu > .nav-item {            
            text-transform: uppercase !important;
            color: #222222 !important;
        }
        .menu > .nav-item:hover {
            color: #A5000B !important;
        }
        .menu > .nav-item.active > a {
            color: #A5000B !important;
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
        .space-10 {
            height: 10px;
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
            background-color: #A5000B;
            color: #fff;
            border-radius: 50%;
            font-size: 20px;
        }
        .tox-statusbar__branding {
        	display: none !important;
        }
        .page_edit_icon {
        	font-size: 18px;
		    line-height: 18px;
		    cursor: pointer;
		    border: 1px solid #2e2e2e;
		    padding: 10px;
		    border-radius: 50%;
		    color: #2e2e2e;
        }
        .page_edit_icon_red {
        	border: 1px solid #fff;
        	color: #fff;
        }
        .page_edit_icon:hover {
        	background-color: #2e2e2e80;
        	color: #fff;
        }
        .page_edit_icon_red:hover {
        	border: 1px solid #fff;
        	background-color: #fff;
        	color: #a02226;
        }
	
	</style>
	<script src="{{ url('/js/helpers.js') }}"></script>
</head>
<body>
@extends('layouts.frontend-app')

@section('title', 'Mission, Corporate Values, Brand Promise – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/mission_promise.css') }}">

@section('content')

@php
	$page_data = App\Models\AboutAYA\MissionCopBrandPromise::first();
	$excellence_info = App\Models\AboutAYA\MissionCopBrandProiseAspectExcellence::get();
	$sinceriy_info = App\Models\AboutAYA\MissionCopBrandPromiseAspectSincerity::get();
@endphp
<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">
	<div class="layout-page">
		@include('layouts.nav', ['nav'=>'AYA Bank Profile'])
		<br>
		@include('layouts.admin_banner', ['page'=>'mission_promise', 'mobilebanking'=>''])

		<div class="container">
			<div class="space-40"></div>
			<div class="row">
				<h4 class="fw-">
					{!!$page_data->page_title_1!!}&nbsp;
					<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#our_mission_modal"></i>
				</h4><p>{!!$page_data->page_desc_1!!}</p>
				
			</div>
			<div class="space-20"></div>
			<div class="row">
				<h4 class="fw-bold">
					{!!$page_data->page_title_2!!}&nbsp;
					<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#corporate_values_modal"></i>
				</h4>
				<p>{!!$page_data->page_desc_2!!}</p>
			</div>
			<div class="space-20"></div>
		</div>

		<div class="ethics_section">
			<div class="container">
				<div class="row ethics_box_row">
					<div class="col-2 text-center ethics_box">
						<div class="text-center">
							{!!$page_data->aspect_1!!}
						</div>
					</div>
					<div class="col-2 text-center ethics_box">
						<div class="text-center">
							{!!$page_data->aspect_2!!}
						</div>
					</div>
					<div class="col-2 text-center ethics_box">
						<div class="text-center">
							{!!$page_data->aspect_3!!}
						</div>
					</div>
					<div class="col-2 text-center ethics_box">
						<div class="text-center">							
							{!!$page_data->aspect_4!!}
						</div>
					</div>
					<div class="col-2 text-center ethics_box">
						<div class="text-center">
							{!!$page_data->aspect_5!!}
						</div>
					</div>
					<div class="col-2 text-center ethics_box">
						<div class="text-center">							
							{!!$page_data->aspect_6!!}
						</div>
					</div>

					<div class="col-12 space-60"></div>

					<div class="col-12 ethics_des_col">
						<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_1_title!!}&nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#excellance_modal"></i></p>
						<p>{!!$page_data->aspect_1_desc!!}
							<ul style="margin-left: 16px;padding-left: 0px;color: #4e4e4e;">
								<li class="mb-20">Delivering excellence is the continued effort AYA Bank makes to improve our services, products, business deals and communications on a daily basis, both peer-to-peer, company-wide and with customers.</li>
								<li class="mb-20">Delivering excellence is filling in the gaps between what our customers voice their needs and what we offer.</li>
								<li>Delivering excellence is to be supportive, responsive and above all, reliable in every performance no matter how big or small</li>
							</ul>
						</p>
					</div>

					<div class="col-12 space-30"></div>

					<div class="col-12 ethics_des_col">
						<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_2_title!!} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#team_modal"></i></p>
						<p>{!!$page_data->aspect_2_desc!!}</p>
					</div>

					<div class="col-12 space-30"></div>

					<div class="col-12 ethics_des_col">
						<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_3_title!!} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#honesty_modal"></i></p>
						<p>{!!$page_data->aspect_3_desc!!}</p>
					</div>

					<div class="col-12 space-30"></div>

					<div class="col-12 ethics_des_col">
						<p class="theme_text_color fw-bold" style="font-size: 16px;">{{$page_data->aspect_4_title}} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#integrity_modal"></i></p>
						<p>{!!$page_data->aspect_4_desc!!}</p>
					</div>

					<div class="col-12 space-30"></div>

					<div class="col-12 ethics_des_col">
						<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_5_title!!} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#care_modal"></i></p>
						<p>{!!$page_data->aspect_5_desc!!}</p>
						<p>{!!$page_data->aspect_5_desc_text!!}</p>
					</div>

					<div class="col-12 space-30"></div>

					<div class="col-12 ethics_des_col">
						<p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_6_title!!} &nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#sincerity_modal"></i></p>
						<p>{!!$page_data->aspect_6_desc!!}</p>
						<div class="row">
							<div class="col-1 sincerity_check_icon_col text-right">
								<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
							</div>
							<div class="col-11 sincerity_check_text_col">
								<p class="sincerity_check_text">We are able to attract more clients</p>
							</div>
							<div class="col-1 sincerity_check_icon_col text-right">
								<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
							</div>
							<div class="col-11 sincerity_check_text_col">
								<p class="sincerity_check_text">Our employees trust us more</p>
							</div>
							<div class="col-1 sincerity_check_icon_col text-right">
								<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
							</div>
							<div class="col-11 sincerity_check_text_col">
								<p class="sincerity_check_text">People want to work for us again and continuously</p>
							</div>
							<div class="col-1 sincerity_check_icon_col text-right">
								<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
							</div>
							<div class="col-11 sincerity_check_text_col">
								<p class="sincerity_check_text">We build stronger relationships with your partners and suppliers</p>
							</div>
							<div class="col-1 sincerity_check_icon_col text-right">
								<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
							</div>
							<div class="col-11 sincerity_check_text_col">
								<p class="sincerity_check_text">We are respected by others who know that sincerity is a core value </p>
							</div>
						</div>

						<div class="space-30"><i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#image_modal"></i></div>
						<br>
						<div class="row">
							<div class="col-md-4 cat_card">
								<div class="card h-100">
									@php $section_1_img_link =  URL::to('/').'/'.$page_data->aspect_cta_1_img; @endphp
									<img src="{{ $section_1_img_link }}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">

									
									<div class="card-body">
										<h5 class="card-title mb-10"><a href="{{ url($page_data->aspect_cta_1_link) }}">{!!$page_data->aspect_cta_1_title!!}</a></h5>
										<!-- <a href="" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a> -->
									</div>
								</div>
							</div>
							<div class="col-md-4 cat_card">
								<div class="card h-100">
									@php $section_2_img_link =  URL::to('/').'/'.$page_data->aspect_cta_2_img; @endphp
									<img src="{{$section_2_img_link}}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title mb-10"><a href="{{url ($page_data->aspect_cta_2_link) }}">{!!$page_data->aspect_cta_2_title!!}</a></h5>
										<!-- <a href="" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a> -->
									</div>
								</div>
							</div>
							<div class="col-md-4 cat_card">
								<div class="card h-100">
									@php $section_3_img_link =  URL::to('/').'/'.$page_data->aspect_cta_3_img; @endphp
									<img src="{{$section_3_img_link}}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title mb-10"><a href="{{url ($page_data->aspect_cta_3_link) }}">{!!$page_data->aspect_cta_3_title!!}</a></h5>
										<!-- <a href="" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a> -->
									</div>
								</div>
							</div>
						</div>

						<div class="space-60"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="col-12">
				<div class="row">
					<h4 class="fw-bold">{!!$page_data->brand_title!!}&nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#brand_promise_modal"></i></h4>
					<div class="space-20"></div>
				</div>
				<div class="brand_promise">
					<div class="col-md-4 brand_promise_desc">
						<p>{!!$page_data->brand_desc_1!!}</p>
					</div>
					<div class="col-md-8"></div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<p>{!!$page_data->brand_desc_2!!}</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

{{-- Modal --}}
{{-- Our Mission --}}
	<div class="modal fade" id="our_mission_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/mission-corporate/ourmission/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="page_title_1" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="page_desc_1" name="page_title_1" value="{{$page_data->page_title_1}}">
									
									<div class="space-20"></div>
									
									<label for="page_desc_1" class="col-form-label">Section Information</label>
									<textarea class="form-control" id="page_desc_1" name="page_desc_1" rows="10" spellcheck="false" >{{$page_data->page_desc_1}}</textarea>
								</div>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				</div>
				<div class="modal-footer"></div>
			</form>
		</div>
	</div>
{{-- Our Corporate Values --}}
	<div class="modal fade" id="corporate_values_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/mission-corporate/corporatevalues/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="page_title_2" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="page_title_2" name="page_title_2" value="{{$page_data->page_title_2}}">
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="page_desc_2" class="col-form-label">Section Information 1</label>
									<textarea class="form-control" id="page_desc_1" name="page_desc_2" rows="10" spellcheck="false" >{{$page_data->page_desc_2}}</textarea>
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="aspect_1" class="col-form-label">Aspect 1</label>
									<textarea class="form-control" id="page_desc_1" name="aspect_1" rows="10" spellcheck="false" >{{$page_data->aspect_1}}</textarea>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="aspect_2" class="col-form-label">Aspect 2</label>
									<textarea class="form-control" id="page_desc_1" name="aspect_2" rows="10" spellcheck="false" >{{$page_data->aspect_2}}</textarea>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="aspect_3" class="col-form-label">Aspect 3</label>
									<textarea class="form-control" id="page_desc_1" name="aspect_3" rows="10" spellcheck="false" >{{$page_data->aspect_3}}</textarea>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="aspect_4" class="col-form-label">Aspect 4</label>
									<textarea class="form-control" id="page_desc_1" name="aspect_4" rows="10" spellcheck="false" >{{$page_data->aspect_4}}</textarea>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="aspect_5" class="col-form-label">Aspect 5</label>
									<textarea class="form-control" id="page_desc_1" name="aspect_5" rows="10" spellcheck="false" >{{$page_data->aspect_5}}</textarea>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="aspect_6" class="col-form-label">Aspect 6</label>
									<textarea class="form-control" id="page_desc_1" name="aspect_6" rows="10" spellcheck="false" >{{$page_data->aspect_6}}</textarea>
								</div>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
				</div>
				<div class="modal-footer"></div>
			</form>
		</div>
	</div>
{{-- Excellance --}}
<div class="modal fade" id="excellance_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/excellance/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_1_title" class="col-form-label">Section Title</label>
								<input type="aspect_1_title" class="form-control" id="page_desc_1" name="aspect_1_title" value="{{$page_data->aspect_1_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_1_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_1_desc" rows="10" spellcheck="false" >{{$page_data->aspect_1_desc}}</textarea>
							</div>

							<div class="space-20"></div>
							{{-- @php $excellence_count = 1; @endphp
								@foreach
									<div class="col-md-12">
										Excellance Info {{$excellence_count}}
									</div> --}}
									{{-- <div class="col-md-12" style="margin-bottom: 10px;">
										<input type="text" class="form-control" id="page_desc_1" name="excellence_desc" value="{{$excellence_info->excellence_desc}}">
									</div>
									 --}}
									
									{{-- <div class="space-20"></div>
									<hr>
									@php $excellence_count = $excellence_count + 1; @endphp
								@endforeach --}}
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>
{{-- Team --}}
<div class="modal fade" id="team_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/team/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_2_title" class="col-form-label">Section Title</label>
								<input type="aspect_2_title" class="form-control" id="page_desc_1" name="aspect_2_title" value="{{$page_data->aspect_2_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_2_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_2_desc" rows="10" spellcheck="false" >{{$page_data->aspect_2_desc}}</textarea>
							</div>
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>
{{-- Honesty --}}
<div class="modal fade" id="honesty_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/honesty/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_3_title" class="col-form-label">Section Title</label>
								<input type="aspect_3_title" class="form-control" id="page_desc_1" name="aspect_3_title" value="{{$page_data->aspect_3_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_3_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_3_desc" rows="10" spellcheck="false" >{{$page_data->aspect_3_desc}}</textarea>
							</div>
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>
{{-- Integrity --}}
<div class="modal fade" id="integrity_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/integrity/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_4_title" class="col-form-label">Section Title</label>
								<input type="aspect_4_title" class="form-control" id="page_desc_1" name="aspect_4_title" value="{{$page_data->aspect_4_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_4_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_4_desc" rows="10" spellcheck="false" >{{$page_data->aspect_4_desc}}</textarea>
							</div>
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>
{{-- Care --}}
<div class="modal fade" id="care_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/care/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_5_title" class="col-form-label">Section Title</label>
								<input type="aspect_5_title" class="form-control" id="page_desc_1" name="aspect_5_title" value="{{$page_data->aspect_5_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_5_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_5_desc" rows="10" spellcheck="false" >{{$page_data->aspect_5_desc}}</textarea>
							</div>
							<div class="col-md-12">
								<label for="aspect_5_desc_text" class="col-form-label">Section Information 2</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_5_desc_text" rows="10" spellcheck="false" >{{$page_data->aspect_5_desc_text}}</textarea>
							</div>
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>
{{-- sincerity --}}
<div class="modal fade" id="sincerity_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/sincerity/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_6_title" class="col-form-label">Section Title</label>
								<input type="aspect_6_title" class="form-control" id="page_desc_1" name="aspect_6_title" value="{{$page_data->aspect_6_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="aspect_6_desc" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_6_desc" rows="10" spellcheck="false" >{{$page_data->aspect_6_desc}}</textarea>
							</div>
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>
{{-- Images --}}
<div class="modal fade" id="image_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/mission-corporate-cta/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<label for="aspect_cta_1_img" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 343 * 246 - webp )</small>
							<input class="form-control" type="file" name="aspect_cta_1_img" id="aspect_cta_1_img" />
							<input type="hidden" name="aspect_cta_1_img" id="page_desc_1" value="{{$page_data->aspect_cta_1_img}}">

							<div class="space-20"></div>
							<label for="aspect_cta_1_title" class="col-form-label">Section Title</label>
								<textarea class="form-control" id="aspect_cta_1_title" name="aspect_cta_1_title" rows="10" spellcheck="false" >{{$page_data->aspect_cta_1_title}}</textarea>

							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_cta_1_link" class="col-form-label">Section Detail Link</label>
								<input type="text" class="form-control" id="page_desc_1" name="aspect_cta_1_link" value="{{$page_data->aspect_cta_1_link}}">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="aspect_cta_2_img" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 343 * 246 - webp )</small>
							<input class="form-control" type="file" name="aspect_cta_2_img" id="aspect_cta_2_img" />
							<input type="hidden" name="aspect_cta_2_img" id="page_desc_1" value="{{$page_data->aspect_cta_2_img}}">

							<div class="space-20"></div>
							<label for="aspect_cta_2_title" class="col-form-label">Section Title</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_cta_2_title" rows="10" spellcheck="false" >{{$page_data->aspect_cta_2_title}}</textarea>

							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_cta_2_link" class="col-form-label">Section Detail Link</label>
								<input type="text" class="form-control" id="page_desc_1" name="aspect_cta_2_link" value="{{$page_data->aspect_cta_2_link}}">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="aspect_cta_3_img" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 343 * 246 - webp )</small>
							<input class="form-control" type="file" name="aspect_cta_3_img" id="aspect_cta_3_img" />
							<input type="hidden" name="aspect_cta_3_img" id="page_desc_1" value="{{$page_data->aspect_cta_3_img}}">

							<div class="space-20"></div>
							<label for="aspect_cta_3_title" class="col-form-label">Section Title</label>
								<textarea class="form-control" id="page_desc_1" name="aspect_cta_3_title" rows="10" spellcheck="false" >{{$page_data->aspect_cta_3_title}}</textarea>

							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="aspect_cta_3_link" class="col-form-label">Section Detail Link</label>
								<input type="text" class="form-control" id="page_desc_1" name="aspect_cta_3_link" value="{{$page_data->aspect_cta_3_link}}">
							</div>
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>
{{-- Brand Promise --}}
<div class="modal fade" id="brand_promise_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/mission-corporate/brandpromise/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4>Section Update</h4>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label for="brand_title" class="col-form-label">Section Title</label>
								<input type="brand_title" class="form-control" id="page_desc_1" name="brand_title" value="{{$page_data->brand_title}}">
							</div>
							<div class="space-20"></div>
							<div class="col-md-12">
								<label for="brand_desc_1" class="col-form-label">Section Information 1</label>
								<textarea class="form-control" id="page_desc_1" name="brand_desc_1" rows="10" spellcheck="false" >{{$page_data->brand_desc_1}}</textarea>
							</div>
							<div class="col-md-12">
								<label for="brand_desc_2" class="col-form-label">Section Information 2</label>
								<textarea class="form-control" id="page_desc_1" name="brand_desc_2" rows="10" spellcheck="false" >{{$page_data->brand_desc_2}}</textarea>
							</div>
							<label for="aspect_cta_2_img" class="col-md-2 col-form-label">Image</label>
							<small class="theme_text_color">Image Size & format ( 1100 * 366 - webp )</small>
							<input class="form-control" type="file" name="brand_img" id="page_desc_1" />
							<input type="hidden" name="brand_img" id="brand_img" value="{{$page_data->brand_img}}">
							
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>
<div class="space-60"></div>
{{-- @include('layouts.footer', ['page'=>'']) --}}
@include('layouts.admin-footer', ['page'=>''])
<script type="text/javascript">
	tinymce.init({
		selector: 'textarea#page_desc_1',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	});
</script>

@endsection('content')
</body>