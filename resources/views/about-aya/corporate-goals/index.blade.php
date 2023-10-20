@extends('layouts.frontend-app')

@section('title', 'Corporate Goals – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-goals.css') }}">

@section('content')
<style type="text/css">
	.customer_satisfy_fact > ul {
		padding-left: 15px;
	}
	.customer_mission_section > p:not(.cursor-pointer):not(:first-child),
	.customer_sustainability_section > p:not(.cursor-pointer):not(:first-child),
	.community_ungc_section > p:not(.cursor-pointer):not(:first-child),
	.community_ungc_section > ol > li:not(:first-child),
	.community_csr_section > p:not(.cursor-pointer):not(:first-child),
	.staff_culture_section > p:not(.cursor-pointer):not(:first-child),
	.staff_culture_section > ol > li:not(:first-child),
	.staff_emp_dev_section > p:not(.cursor-pointer):nth-child(n+3),
	.shareholder_gov_frame_section > p:not(.cursor-pointer):not(:first-child),
	.shareholder_gov_frame_section > ol > li:not(:first-child),
	.shareholder_report_section > p:not(.cursor-pointer):not(:first-child)
	{
		display: none;
	}

	
</style>
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
      	<div class="layout-page">
	      	@include('layouts.header', ['page'=>'about_aya'])
	    	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_goals'])

			@php
				$page_data = App\Models\AboutAYA\CorporateGoals::first();
			@endphp

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-bold" style="color: #1d1d1f;"></h4>
					{!! $page_data->corporate_goal_desc !!}
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-3 text-center">
						@php $corporate_goal_img_1_link =  URL::to('/').'/'.$page_data->corporate_goal_img_1; @endphp
						<img src="{{ $corporate_goal_img_1_link }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_customer') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">01</span><span class="fw-semibold goal_step_title">{!! $page_data->corporate_text_1 !!}</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						@php $corporate_goal_img_2_link =  URL::to('/').'/'.$page_data->corporate_goal_img_2; @endphp
						<img src="{{ $corporate_goal_img_2_link }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_community') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">02</span><span class="fw-semibold goal_step_title">{!! $page_data->corporate_text_2 !!}</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						@php $corporate_goal_img_3_link =  URL::to('/').'/'.$page_data->corporate_goal_img_3; @endphp
						<img src="{{ $corporate_goal_img_3_link }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_staff') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">03</span><span class="fw-semibold goal_step_title">{!! $page_data->corporate_text_3 !!}</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						@php $corporate_goal_img_4_link =  URL::to('/').'/'.$page_data->corporate_goal_img_4; @endphp
						<img src="{{ $corporate_goal_img_4_link }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_shareholders') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">04</span><span class="fw-semibold goal_step_title">{!! $page_data->corporate_text_4 !!}</span>
							</p>
						</a>
					</div>
				</div>
				<div class="space-20" id="for_customer"></div>
			</div>
			
			<div class="section_container_bg for_customer_container" >
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->customer_title !!}</h4>
						<span class="customer_satisfy_fact" style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->customer_desc !!}</span>
					</div>

					<div class="space-20"></div>
					<div class="row for_customer_CTA">
						<div class="col-md-6">
							<div class="customer_mission_section">
								{!! $page_data->customer_card_desc_1 !!}
								<p class="theme_text_color cursor-pointer mission_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer mission_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $customer_card_img_1_link =  URL::to('/').'/'.$page_data->customer_card_img_1; @endphp
								<img src="{{ $customer_card_img_1_link }}" class="img-fluid">
								<a href="{{url ($page_data->customer_card_link_1) }}" target="_blank" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->customer_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="customer_sustainability_section">
								{!! $page_data->customer_card_desc_2 !!}
							</div>
							<p class="theme_text_color cursor-pointer social_sustainability_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer social_sustainability_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							@php $customer_card_img_2_link =  URL::to('/').'/'.$page_data->customer_card_img_2; @endphp
							<img src="{{ $customer_card_img_2_link }}" class="img-fluid">
							<a href="{{ url($page_data->customer_card_link_2) }}" target="_blank" style="text-decoration: none !important;">
								<p class="for_customer_mission_tagline">{!! $page_data->customer_card_text_2 !!}</p>
							</a>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>
			
			<div class="section_container_bg for_community_container" id="for_community" style="background-color: #f9f9fb">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->community_title !!}</h4>
						<span style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->community_desc !!}</span>
					</div>
					<div class="space-20"></div>
					<div class="row for_community_CTA">
						<div class="col-md-6">
							<div class="community_ungc_section">
								{!! $page_data->community_card_desc_1 !!}
								
								<p class="theme_text_color cursor-pointer ungc_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer ungc_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $community_card_img_1_link =  URL::to('/').'/'.$page_data->community_card_img_1; @endphp
								<img src="{{ $community_card_img_1_link }}" class="img-fluid">
								<a href="{{ url($page_data->community_card_link_1) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->community_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="community_csr_section">
								{!! $page_data->community_card_desc_2 !!}
								<p class="theme_text_color cursor-pointer csr_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer csr_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $community_card_img_2_link =  URL::to('/').'/'.$page_data->community_card_img_2; @endphp
								<img src="{{ $community_card_img_2_link }}" class="img-fluid" style="margin-top: 42px;">
								<a href="{{ url($page_data->community_card_link_2) }}" style="text-decoration: none !important;">
									<p class="for_community_csr_tagline">{!! $page_data->community_card_text_2 !!}</p>
								</a>
							</div>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>

			<div class="section_container_bg for_staff_container" id="for_staff">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->staff_title !!}</h4>
						<span style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->staff_desc !!}</span>
					</div>
					<div class="space-20"></div>
					<div class="row for_staff_CTA">
						<div class="col-md-6">
							<div class="staff_culture_section">
								{!! $page_data->staff_card_desc_1 !!}
								
								<p class="theme_text_color cursor-pointer people_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer people_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $staff_card_img_1_link =  URL::to('/').'/'.$page_data->staff_card_img_1; @endphp
								<img src="{{ $staff_card_img_1_link }}" class="img-fluid">
								<a href="{{ url($page_data->staff_card_link_1) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->staff_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="staff_emp_dev_section">
								{!! $page_data->staff_card_desc_2 !!}
								<p class="theme_text_color cursor-pointer emp_development_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer emp_development_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $staff_card_img_2_link =  URL::to('/').'/'.$page_data->staff_card_img_2; @endphp
								<img src="{{ $staff_card_img_2_link }}" class="img-fluid" style="margin-top: 20px;">
								<a href="{{ url($page_data->staff_card_link_2) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->staff_card_text_2!!}</p>
								</a>
							</div>
						</div>
						<div class="space-60"></div>
						<div class="col-md-12 staff_quote">
							<p style="font-size: 20px;">{!! $page_data->people_desc !!} </p>
							<small>U Zaw Zaw, Founder and Chairman</small>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>

			<div class="section_container_bg for_shareholders_container" id="for_shareholders" style="background-color: #f9f9fb">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->stakeholder_title !!}&nbsp;<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#stakeholder_modal"></i></h4>
						<span style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->stakeholder_desc !!}</span>
					</div>
					<div class="space-20"></div>
					<div class="row for_shareholders_CTA">
						<div class="col-md-6">
							<div class="shareholder_gov_frame_section">
								{!! $page_data->stakeholder_card_desc_1 !!}
								<p class="theme_text_color cursor-pointer governance_framework_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer governance_framework_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $stakeholder_card_img_1_link =  URL::to('/').'/'.$page_data->stakeholder_card_img_1; @endphp
								<img src="{{ $stakeholder_card_img_1_link }}" class="img-fluid">
								<a href="{{ url($page_data->stakeholder_card_link_1) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->stakeholder_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="shareholder_report_section">
								{!! $page_data->stakeholder_card_desc_2 !!}
								<p class="theme_text_color cursor-pointer report_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer report_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $stakeholder_card_img_2_link =  URL::to('/').'/'.$page_data->stakeholder_card_img_2; @endphp
								<img src="{{ $stakeholder_card_img_2_link }}" class="img-fluid" style="margin-top:38px">
								<a href="{{ url($page_data->stakeholder_card_link_2) }}" style="text-decoration: none !important;">
									<p class="for_community_csr_tagline">{!! $page_data->stakeholder_card_text_2 !!}</p>
								</a>
							</div>
						</div>
					</div>
					<div class="space-100"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.footer', ['page'=>''])

<script type="text/javascript">
	$(".mission_info_read_more").click(function() {
		$(".customer_mission_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".mission_info_hide").removeClass('d-none');
		$(".mission_info_read_more").addClass('d-none');
	});
	$(".mission_info_hide").click(function() {
		$(".customer_mission_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".mission_info_read_more").removeClass('d-none');
		$(".mission_info_hide").addClass('d-none');
	});

	$(".social_sustainability_info_read_more").click(function() {
		$(".customer_sustainability_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".social_sustainability_info_hide").removeClass('d-none');
		$(".social_sustainability_info_read_more").addClass('d-none');
	});
	$(".social_sustainability_info_hide").click(function() {
		$(".customer_sustainability_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".social_sustainability_info_read_more").removeClass('d-none');
		$(".social_sustainability_info_hide").addClass('d-none');
	});

	$(".ungc_info_read_more").click(function() {
		$(".community_ungc_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".community_ungc_section > ol > li:not(:first-child)").show('toggle');
		$(".ungc_info_hide").removeClass('d-none');
		$(".ungc_info_read_more").addClass('d-none');
	});
	$(".ungc_info_hide").click(function() {
		$(".community_ungc_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".community_ungc_section > ol > li:not(:first-child)").hide('toggle');
		$(".ungc_info_read_more").removeClass('d-none');
		$(".ungc_info_hide").addClass('d-none');
	});

	$(".csr_info_read_more").click(function() {
		$(".community_csr_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".csr_info_hide").removeClass('d-none');
		$(".csr_info_read_more").addClass('d-none');
	});
	$(".csr_info_hide").click(function() {
		$(".community_csr_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".csr_info_read_more").removeClass('d-none');
		$(".csr_info_hide").addClass('d-none');
	});


	$(".people_info_read_more").click(function() {
		$(".staff_culture_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".staff_culture_section > ol > li:not(:first-child)").show('toggle');
		$(".people_info_hide").removeClass('d-none');
		$(".people_info_read_more").addClass('d-none');
	});
	$(".people_info_hide").click(function() {
		$(".staff_culture_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".staff_culture_section > ol > li:not(:first-child)").hide('toggle');
		$(".people_info_read_more").removeClass('d-none');
		$(".people_info_hide").addClass('d-none');
	});

	$(".emp_development_info_read_more").click(function() {
		$(".staff_emp_dev_section > p:not(.cursor-pointer):nth-child(n+3)").show('toggle');
		$(".emp_development_info_hide").removeClass('d-none');
		$(".emp_development_info_read_more").addClass('d-none');
	});
	$(".emp_development_info_hide").click(function() {
		$(".staff_emp_dev_section > p:not(.cursor-pointer):nth-child(n+3)").hide('toggle');
		$(".emp_development_info_read_more").removeClass('d-none');
		$(".emp_development_info_hide").addClass('d-none');
	});

	$(".governance_framework_info_read_more").click(function() {
		$(".shareholder_gov_frame_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".shareholder_gov_frame_section > ol > li:not(:first-child)").show('toggle');
		$(".governance_framework_info_hide").removeClass('d-none');
		$(".governance_framework_info_read_more").addClass('d-none');
	});
	$(".governance_framework_info_hide").click(function() {
		$(".shareholder_gov_frame_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".shareholder_gov_frame_section > ol > li:not(:first-child)").hide('toggle');
		$(".governance_framework_info_read_more").removeClass('d-none');
		$(".governance_framework_info_hide").addClass('d-none');
	});

	$(".report_info_read_more").click(function() {
		$(".shareholder_report_section > p:not(.cursor-pointer):not(:first-child)").show('toggle');
		$(".report_info_hide").removeClass('d-none');
		$(".report_info_read_more").addClass('d-none');
	});
	$(".report_info_hide").click(function() {
		$(".shareholder_report_section > p:not(.cursor-pointer):not(:first-child)").hide('toggle');
		$(".report_info_read_more").removeClass('d-none');
		$(".report_info_hide").addClass('d-none');
	});
</script>

@endsection('content')