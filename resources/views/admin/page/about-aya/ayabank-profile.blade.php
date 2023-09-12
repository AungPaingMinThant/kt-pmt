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
    </style>

    <script src="{{ url('/js/helpers.js') }}"></script>
</head>
<body>
	@php
		$page_data = App\Models\AyabankProfilePageConfigure::first();
	@endphp

	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">	
			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'AYA Bank Profile'])
	        	<br>
				@include('layouts.admin_banner', ['page'=>'aya_bank_profile','mobilebanking'=>''])

				<div class="container section_1" style="position: relative;">
					<button class="btn banner_edit_btn" data-bs-toggle="modal" data-bs-target="#section_1_modal">Edit Section</button>
					<div class="space-40"></div>
					<div class="row">
						<h4 class="fw-semibold mb-0">{{$page_data->page_title}}</h4>						
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

					<div class="" style="position: relative;">
						<button class="btn banner_edit_btn" data-bs-toggle="modal" data-bs-target="#corporate_information_modal">Edit Corporate Information Section</button>
					</div>
					<div class="row">
						<h4 class="fw-semibold text-center">Corporate Information</h4>
						<div class="col-md-2 corp_info_col_1"></div>
						<div class="col-md-8 corp_info_col_2">
							<div class="row corporate_information_row">
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/native_name.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Native Name</p>
									<p class="mb-0 fw-semibold">ဧရာဝတီဘဏ်</p>
									<p class="fw-semibold">AYEYARWADY BANK</p>
								</div>
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/founded.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Founded In</p>
									<p class="fw-semibold">2010</p>
								</div>
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/u_zaw.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Founder/Key Person</p>
									<p class="fw-semibold">U Zaw Zaw<br>(Founder and Chairman)</p>
								</div>
							</div>
							<div class="row corporate_information_row">
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/daw_khin_saw_oo.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Key Person</p>
									<p class="fw-semibold">Daw Khin Saw Oo<br>(Executive Chairman)</p>
								</div>
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/type.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Type</p>
									<p class="fw-semibold">Public</p>
								</div>
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/product.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Product</p>
									<p class="fw-semibold">Financial Services</p>
								</div>
							</div>
							<div class="row corporate_information_row">
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/headquarter.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Headquarter</p>
									<p class="fw-semibold">Yangon, Myanmar</p>
								</div>
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/slogan.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Motto</p>
									<p class="fw-semibold">Your Trusted Partner</p>
								</div>
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/about-aya/ayabank-profile/website.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
									<p class="mb-0">Website</p>
									<p class="fw-semibold">ayabank.com</p>
								</div>
							</div>
						</div>
						<div class="col-md-2 corp_info_col_3"></div>
					</div>
					
					<div class="space-60"></div>

					<div class="row">
						<h4 class="fw-semibold text-center">Leading Capabilities</h4>
						<div class="space-20"></div>

						<div class="col-md-2 lead_cap_col_1"></div>
						<div class="col-md-10 lead_cap_col_2">
							<div class="row leading_capabilities_row">
								<div class="col-md-3 lead_cap_detail_col">
									<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style"><span>7</span>&nbsp;Trillion MMK</h4>
									<p class="leading_capabilities_text_style">Assets *</p>
								</div>
								<div class="col-md-3 lead_cap_detail_col">
									<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style"><span>334</span>&nbsp;Billion  MMK</h4>
									<p class="leading_capabilities_text_style">Equity *</p>
								</div>
								<div class="col-md-3 lead_cap_detail_col">
									<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style"><span>140</span>&nbsp;Billion MMK</h4>
									<p class="leading_capabilities_text_style">Paid Up Capital *</p>
								</div>
								<div class="col-md-3 lead_cap_detail_col">
									<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style"><span>262</span>&nbsp;</h4>
									<p class="leading_capabilities_text_style">Branches *</p>
								</div>
								<div class="col-md-3 lead_cap_detail_col">
									<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style"><span>832</span>&nbsp;</h4>
									<p class="leading_capabilities_text_style">ATMs *</p>
								</div>
								<div class="col-md-3 lead_cap_detail_col">
									<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style"><span>162</span>&nbsp;</h4>
									<p class="leading_capabilities_text_style">Exchange Counters *</p>
								</div>
								<div class="col-md-3 lead_cap_detail_col">
									<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style">Over&nbsp;<span>6,000</span></h4>
									<p class="leading_capabilities_text_style">Employees *</p>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-1 lead_cap_col_3"></div> -->
					</div>

					<div class="row text-center py-1 update_date_div">
						<p class="mb-0" style="color: #333333;">* As at March 2023 </p>
					</div>
				</div>

				<div class="space-60"></div>
				<div class="CTA_div drive_growth_CTA">
					<div class="container section_1">
						<div class="row">
							<div class="col-md-4 CTA_detail_col_1"></div>
							<div class="col-md-8 CTA_detail_col_2">
								<p class="f-white" style="font-size: 20px;">A Driver of Growth</p>
								<p class="f-white">We make financial lives better through our focus on responsible growth. We take the initiatives to provide customers with financial solutions for their personal and business needs, and to support the community. Our primary business strategy is to provide comprehensive banking and related financial solutions through the initiatives of enabling growth and enriching lives.</p>
								<p class="f-white">Taking the drive to cashless transactions and payments, AYA Bank has transformed 52% of active customers to Digital Banking. The Bank consistently creates significant value to strategic investment partners, driven by digitalization, human resource development, innovative products and services across all customer segments.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="CTA2_div">
					<div class="container section_1">
						<div class="row">
							<div class="col-md-8 CTA2_detail_col_1">
								<p class="theme_text_color" style="font-size: 20px;">Business Practices</p>
								<p class="mb-30">AYA Bank aims to have an overall positive impact on financial sector as well as social and environment through responsible practices, align with our Code of Business Conduct, effective governance and risk and compliance framework. We grow as a responsible business at the strategic, portfolio and transactional levels and across all business areas with following key highlights,</p>
								<a href="{{ url('/about-aya/who-we-are/corporate-profile/ayabank-profile/business-practices') }}">
									<p class="theme_text_color">Find out more&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></p>
								</a>
							</div>
							<div class="col-md-4 CTA2_detail_col_2"></div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="CTA_div">
					<div class="container section_1">
						<div class="row">
							<div class="col-md-4 CTA_detail_2_col_1"></div>
							<div class="col-md-8 CTA_detail_col_2">
								<p class="f-white" style="font-size: 20px;">Shareholding Information</p>
								<p class="f-white mb-30">AYA Bank is organized independently as a stand-alone business and has been operating with its own culture, management structure, business structure and legal structure.It is incorporated with shares, owned by following shareholders:</p>
								<a href="{{ url('/about-aya/who-we-are/corporate-profile/ayabank-profile/shareholding-information') }}" class="f-white shareholding_link" style="color: #fff !important;">
									<p class="f_white">Find out more&nbsp;<i class='bx bx-chevron-right f_white' style="font-size: 18px;line-height: 18px;"></i></p>
								</a>
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
						<div class="col-md-12">
							<div class="mb-3 row">
								<h4>Section Update</h4>
								<div class="col-md-12" style="margin-bottom: 10px;">
									<label for="corporate_info_title" class="col-form-label">Section Title</label>
									<input type="text" class="form-control" id="corporate_info_title" name="corporate_info_title" value="{{$page_data->corporate_info_title}}">
								</div>
									
									<div class="space-20"></div>
								
								<div class="col-md-4">
									<label for="CIS_title_1" class="col-form-label">ENG Title</label>
									<input type="text" class="form-control" id="CIS_title_1">

									<label for="CIS_title_MM_1" class="col-form-label">MM Title</label>
									<input type="text" class="form-control" id="CIS_title_MM_1">
								</div>
								<div class="col-md-4">
									<label for="CIS_desc_1" class="col-form-label">ENG Desc</label>
									<input type="text" class="form-control" id="CIS_desc_1">

									<label for="CIS_desc_MM_1" class="col-form-label">MM Desc</label>
									<input type="text" class="form-control" id="CIS_desc_MM_1">
								</div>
								<div class="col-md-4">
									<label for="CIS_img_1" class="col-form-label">Img</label>
									<input class="form-control" type="file" name="CIS_img_1" id="CIS_img_1" />
								</div>

								<div class="space-20"></div>
								
								<label for="image_break" class="col-md-2 col-form-label">Image</label>
								
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

	@include('layouts.admin-footer', ['page'=>''])

	<script type="text/javascript">
		$("#image_break").change(function() {
			$("#image_break_old").val('');
		});
	</script>
</body>
</html>