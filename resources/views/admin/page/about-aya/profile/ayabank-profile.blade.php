<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>AYA Bank Profile – Configuration – AYA Bank</title>

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
	@php
		$page_data = App\Models\AboutAYA\AyabankProfilePageConfigure::first();
		$corporate_info_data = App\Models\AboutAYA\AyabankProfilePageCorproateInfo::get();
		$leading_info_data = App\Models\AboutAYA\AyabankProfilePageLeadingCapabilitiesInfo::get();
	@endphp

	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">	
			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'AYA Bank Profile', 'page'=>'aya_bank_profile'])
	        	<br>
				@include('layouts.admin_banner', ['page'=>'aya_bank_profile','mobilebanking'=>''])

				<div class="container section_1" style="position: relative;">
					<div class="space-40"></div>
					<div class="row">
						<h4 class="fw-semibold mb-0">
							{{$page_data->page_title}}&nbsp;
							<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#section_1_modal"></i>
						</h4>						
					</div>
					<?php
						$needle = '<p>';
						$close_needle = '</p>';
						$positions = [];
						$close_positions = [];
						$pos_last = 0;
						while( ($pos_last = strpos($page_data->first_3_col_text, $needle, $pos_last)) !== false ) {
						    $positions[] = $pos_last;
						    $pos_last = $pos_last + strlen($needle);
						}

						while( ($pos_last = strpos($page_data->first_3_col_text, $close_needle, $pos_last)) !== false ) {
						    $close_positions[] = $pos_last;
						    $pos_last = $pos_last + strlen($close_needle);
						}
						$occur_count = count($positions);
					?>
					<br>
					<div class="row">
						<div class="full_service_col_1 col-md-4">
							{!! substr($page_data->first_3_col_text,0,($close_positions[0]+4)) !!}
						</div>
						<div class="full_service_col_2 col-md-4">
							{!! substr($page_data->first_3_col_text,$positions[1],($close_positions[1] - $positions[1])) !!}
						</div>
						<div class="full_service_col_3 col-md-4">
							{!! substr($page_data->first_3_col_text,$positions[2]) !!}
						</div>
					</div>

					<div class="space-20"></div>
					
					<div class="row full_service_bank_img" style="background-image:url('../../../{{$page_data->image_break}}')"></div>

					<div class="space-30"></div>

					<div class="row">
						<div class="col">
							{!! $page_data->second_text !!}
						</div>
					</div>

					<div class="space-20"></div>

					<div class="row">
						<h4 class="fw-semibold text-center">{!! $page_data->corporate_info_title !!} &nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#corporate_information_modal"></i></h4>
						<div class="col-md-2 corp_info_col_1"></div>
						<div class="col-md-8 corp_info_col_2">
							<div class="row corporate_information_row">
								@foreach($corporate_info_data as $corporate_info)
									<div class="col-md-4 text-center mb-20">
										<img src="{{ url($corporate_info->CIS_img) }}" class="img-fluid corporate_information_icon rounded-circle">
										<p class="mb-0">{!! $corporate_info->CIS_title !!}</p>
										<p class="mb-0 fw-semibold">{!! $corporate_info->CIS_desc !!}</p>
									</div>
								@endforeach
							</div>
						</div>
						<div class="col-md-2 corp_info_col_3"></div>
					</div>
					
					<div class="space-60"></div>

					<div class="row">
						<h4 class="fw-semibold text-center">{{ $page_data->leading_capabilities_title }} &nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#leading_capabilities_modal"></i></h4>
						<div class="space-20"></div>

						<div class="col-md-2 lead_cap_col_1"></div>
						<div class="col-md-10 lead_cap_col_2">
							<div class="row leading_capabilities_row">
								@foreach($leading_info_data as $leading)
									<div class="col-md-3 lead_cap_detail_col">
										<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style">
											@if($leading->leading_prefix != '')
												{{ $leading->leading_prefix }}&nbsp;
											@endif
											<span>{{ number_format(intval($leading->leading_number)) }}</span>&nbsp;
											@if($leading->leading_postfix != '')
												{{ $leading->leading_postfix }}&nbsp;
											@endif
										</h4>
										<p class="leading_capabilities_text_style">{{ $leading->leading_label }} *</p>
									</div>
								@endforeach
							</div>
						</div>
					</div>

					<div class="row text-center py-1 update_date_div">
						<p class="mb-0" style="color: #333333;">* {{ $page_data->update_leading_at }} </p>
					</div>
				</div>

				<div class="space-60"></div>
				<div class="CTA_div drive_growth_CTA">
					<div class="container section_1">
						<div class="row">
							@php $section_1_img_link =  URL::to('/').'/'.$page_data->cta_section_1_img; @endphp
							<div class="col-md-4 CTA_detail_col_1" style="background-image:url('{{$section_1_img_link}}')"></div>
							<div class="col-md-8 CTA_detail_col_2">
								<p class="f-white" style="font-size: 20px;">
									{!! $page_data->cta_section_1_title !!}
									&nbsp; <i class="bx bx-pencil page_edit_icon page_edit_icon_red" data-bs-toggle="modal" data-bs-target="#driver_growth_modal"></i>
								</p>
								{!! $page_data->cta_section_1_desc !!}
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="CTA2_div">
					<div class="container section_1">
						<div class="row">
							@php $section_2_img_link =  URL::to('/').'/'.$page_data->cta_section_2_img; @endphp
							<div class="col-md-8 CTA2_detail_col_1">
								<p class="theme_text_color" style="font-size: 20px;">
									{!! $page_data->cta_section_2_title !!}
									&nbsp; <i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#business_practices_modal"></i>
								</p>
								{!! $page_data->cta_section_2_desc !!}
								@if($page_data->cta_section_2_link != '')
									<a href="{{ url($page_data->cta_section_2_link) }}">
										<p class="theme_text_color mt-30">Find out more&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></p>
									</a>
								@endif
							</div>
							<div class="col-md-4 CTA2_detail_col_2" style="background-image:url('{{$section_2_img_link}}')"></div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="CTA_div">
					<div class="container section_1">
						<div class="row">
							@php $section_3_img_link =  URL::to('/').'/'.$page_data->cta_section_3_img; @endphp
							<div class="col-md-4 CTA_detail_2_col_1" style="background-image:url('{{$section_3_img_link}}')"></div>
							<div class="col-md-8 CTA_detail_col_2">
								<p class="f-white" style="font-size: 20px;">
									{!! $page_data->cta_section_3_title !!}
									&nbsp; <i class="bx bx-pencil page_edit_icon page_edit_icon_red" data-bs-toggle="modal" data-bs-target="#shareholding_info_modal"></i>
								</p>
								{!! $page_data->cta_section_3_desc !!}

								@if($page_data->cta_section_3_link != '')
									<a href="{{ url($page_data->cta_section_3_link) }}" style="color: #fff !important;">
										<p class="f_white mt-30">Find out more&nbsp;<i class='bx bx-chevron-right f_white' style="font-size: 18px;line-height: 18px;"></i></p>
									</a>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="section_1_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/section1/update') }}" method="POST" enctype="multipart/form-data">
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
									<label for="page_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="page_title" name="page_title" value="{{$page_data->page_title}}">
									
									<div class="space-20"></div>
									
									<label for="first_3_col_text" class="col-form-label">Section Information</label>
									<textarea class="form-control" id="first_3_col_text" name="first_3_col_text" rows="10" spellcheck="false" >{{$page_data->first_3_col_text}}</textarea>
								</div>

								<div class="space-20"></div>
								
								<label for="image_break" class="col-md-2 col-form-label">Image</label>
								<small class="theme_text_color">Image Size & format ( 1100 * 370 - webp )</small>
								<input class="form-control" type="file" name="image_break" id="image_break" />
								<input type="hidden" name="image_break_old" id="image_break_old" value="{{$page_data->image_break}}">

								<div class="space-20"></div>

								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="second_text" class="col-form-label">Section Information 2</label>
									<textarea class="form-control" id="second_text" name="second_text" rows="3" spellcheck="false" >{{$page_data->second_text}}</textarea>
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

	<div class="modal fade" id="corporate_information_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/corporate-info/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<input type="hidden" name="corporate_info_count" id="corporate_info_count" value="{{count($corporate_info_data)}}">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="corporate_info_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="corporate_info_title" name="corporate_info_title" value="{{$page_data->corporate_info_title}}">
								</div>
									
								<div class="space-20"></div>
								
								@php $CIS_count = 1; @endphp
								@foreach($corporate_info_data as $corporate_info)
									<div class="col-md-12">
										Corporate Info {{$CIS_count}}
									</div>
									<div class="col-md-4">
										<input type="hidden" name="CIS_id_{{$CIS_count}}" value="{{$corporate_info->id}}">
										<label for="CIS_title_{{$CIS_count}}" class="col-form-label">ENG Title</label>
										<input type="text" class="form-control" name="CIS_title_{{$CIS_count}}" id="CIS_title_{{$CIS_count}}" value="{{$corporate_info->CIS_title}}">
										<label for="CIS_title_MM_{{$CIS_count}}" class="col-form-label">MM Title</label>
										<input type="text" class="form-control" name="CIS_title_MM_{{$CIS_count}}" id="CIS_title_MM_{{$CIS_count}}" value="{{$corporate_info->CIS_title}}">
									</div>
									<div class="col-md-4">
										<label for="CIS_desc_{{$CIS_count}}" class="col-form-label">ENG Desc</label>
										<input type="text" class="form-control" name="CIS_desc_{{$CIS_count}}" id="CIS_desc_{{$CIS_count}}" value="{{$corporate_info->CIS_desc}}">

										<label for="CIS_desc_MM_{{$CIS_count}}" class="col-form-label">MM Desc</label>
										<input type="text" class="form-control" name="CIS_desc_MM_{{$CIS_count}}" id="CIS_desc_MM_{{$CIS_count}}" value="{{$corporate_info->CIS_desc}}">
									</div>
									<div class="col-md-4">
										<label for="CIS_img_{{$CIS_count}}" class="col-form-label">Icon</label>
										<input class="form-control" type="file" name="CIS_img_{{$CIS_count}}" id="CIS_img_{{$CIS_count}}" onchange="CInfoImgChange('{{$CIS_count}}')" />
										<input class="form-control d-none" type="text" name="CIS_img_old_{{$CIS_count}}" id="CIS_img_old_{{$CIS_count}}" value="{{ $corporate_info->CIS_img }}" />
									</div>
									<div class="space-20"></div>
									<hr>
									@php $CIS_count = $CIS_count + 1; @endphp
								@endforeach
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

	<div class="modal fade" id="leading_capabilities_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/leading-info/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<input type="hidden" name="leading_count" id="leading_count" value="{{count($leading_info_data)}}">
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="leading_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="leading_title" name="leading_title" value="{{$page_data->corporate_info_title}}">
								</div>
									
								<div class="space-20"></div>
								
								@php $leading_count = 1; @endphp
								@foreach($leading_info_data as $leading_info)
									<div class="col-md-12">
										Leading Capabilities Info {{$leading_count}}
									</div>
									<div class="col-md-3">
										<input type="hidden" name="leading_id_{{$leading_count}}" value="{{$leading_info->id}}">
										<label for="leading_number_{{$leading_count}}" class="col-form-label">Number</label>
										<input type="text" class="form-control" name="leading_number_{{$leading_count}}" id="leading_number_{{$leading_count}}" value="{{$leading_info->leading_number}}">
									</div>
									<div class="col-md-3">
										<label for="leading_postfix_{{$leading_count}}" class="col-form-label">Post Fix</label>
										<input type="text" class="form-control" name="leading_postfix_{{$leading_count}}" id="leading_postfix_{{$leading_count}}" value="{{$leading_info->leading_postfix}}">
									</div>
									<div class="col-md-3">
										<label for="leading_prefix_{{$leading_count}}" class="col-form-label">Pre Fix</label>
										<input type="text" class="form-control" name="leading_prefix_{{$leading_count}}" id="leading_prefix_{{$leading_count}}" value="{{$leading_info->leading_prefix}}">
									</div>
									<div class="col-md-3">
										<label for="leading_label_{{$leading_count}}" class="col-form-label">Capabilities Title</label>
										<input type="text" class="form-control" name="leading_label_{{$leading_count}}" id="leading_label_{{$leading_count}}" value="{{$leading_info->leading_label}}">
									</div>
									<div class="space-20"></div>
									<hr>
									@php $leading_count = $leading_count + 1; @endphp
								@endforeach

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="update_leading_at" class="col-form-label">Number</label>
									<input type="text" class="form-control" name="update_leading_at" id="update_leading_at" value="{{$page_data->update_leading_at}}">
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

	<div class="modal fade" id="driver_growth_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/driver_growth/update') }}" method="POST" enctype="multipart/form-data">
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
									<label for="cta_section_1_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="cta_section_1_title" name="cta_section_1_title" value="{{$page_data->cta_section_1_title}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_1_img" class="col-form-label">Section Image</label>
									<input class="form-control" type="file" name="cta_section_1_img" id="cta_section_1_img" />
									<input type="hidden" name="cta_section_1_img_old" id="cta_section_1_img_old" value="{{$page_data->cta_section_1_img}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_1_desc" class="col-form-label">Section Desc</label>
									<textarea class="form-control" id="cta_section_1_desc" name="cta_section_1_desc" rows="10" spellcheck="false" >{!!$page_data->cta_section_1_desc!!}</textarea>
								</div>

								<div class="space-20"></div>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="cta_section_1_link" class="col-form-label">Section Detail Link</label>
									<input type="text" class="form-control" id="cta_section_1_link" name="cta_section_1_link" value="{{$page_data->cta_section_1_link}}">
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

	<div class="modal fade" id="business_practices_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/business_practices/update') }}" method="POST" enctype="multipart/form-data">
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
									<label for="cta_section_2_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="cta_section_2_title" name="cta_section_2_title" value="{{$page_data->cta_section_2_title}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_2_img" class="col-form-label">Section Image</label>
									<input class="form-control" type="file" name="cta_section_2_img" id="cta_section_2_img" />
									<input type="hidden" name="cta_section_2_img_old" id="cta_section_2_img_old" value="{{$page_data->cta_section_2_img}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_2_desc" class="col-form-label">Section Desc</label>
									<textarea class="form-control" id="cta_section_2_desc" name="cta_section_2_desc" rows="10" spellcheck="false" >{!!$page_data->cta_section_2_desc!!}</textarea>
								</div>

								<div class="space-20"></div>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="cta_section_2_link" class="col-form-label">Section Detail Link</label>
									<input type="text" class="form-control" id="cta_section_2_link" name="cta_section_2_link" value="{{$page_data->cta_section_2_link}}">
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

	<div class="modal fade" id="shareholding_info_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/ayabank-profile/shareholding_info/update') }}" method="POST" enctype="multipart/form-data">
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
									<label for="cta_section_3_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="cta_section_3_title" name="cta_section_3_title" value="{{$page_data->cta_section_3_title}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_3_img" class="col-form-label">Section Image</label>
									<input class="form-control" type="file" name="cta_section_3_img" id="cta_section_3_img" />
									<input type="hidden" name="cta_section_3_img_old" id="cta_section_3_img_old" value="{{$page_data->cta_section_3_img}}">
								</div>

								<div class="space-20"></div>
								<div class="col-md-12">
									<label for="cta_section_3_desc" class="col-form-label">Section Desc</label>
									<textarea class="form-control" id="cta_section_3_desc" name="cta_section_3_desc" rows="10" spellcheck="false" >{!!$page_data->cta_section_3_desc!!}</textarea>
								</div>

								<div class="space-20"></div>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="cta_section_3_link" class="col-form-label">Section Detail Link</label>
									<input type="text" class="form-control" id="cta_section_3_link" name="cta_section_3_link" value="{{$page_data->cta_section_3_link}}">
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

	@include('layouts.admin-footer', ['page'=>''])
	<script src="{!! url('/assets/tinymce/js/tinymce/tinymce.min.js') !!}" referrerpolicy="origin"></script>
	<script type="text/javascript">
		$("#image_break").change(function() {
			$("#image_break_old").val('');
		});

		function CInfoImgChange(CInfoCount) {
			$("#CIS_img_old_" + CInfoCount).val("");
		}

		$("#cta_section_1_img").change(function() {
			$("#cta_section_1_img_old").val('');
		});

		$("#cta_section_2_img").change(function() {
			$("#cta_section_2_img_old").val('');
		});

		$("#cta_section_3_img").change(function() {
			$("#cta_section_3_img_old").val('');
		});

		tinymce.init({
	        selector: 'textarea#cta_section_1_desc',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });

	    tinymce.init({
	        selector: 'textarea#second_text',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });

	    tinymce.init({
	        selector: 'textarea#first_3_col_text',
	        height: 600,
	        plugins: 'anchor autolink charmap code emoticons link lists searchreplace table visualblocks wordcount',
	        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | code',
	        file_picker_types: 'image',
	        block_unsupported_drop: true
	    });
	    
	</script>
</body>
</html>