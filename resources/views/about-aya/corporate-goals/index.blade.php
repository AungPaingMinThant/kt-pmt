@extends('layouts.frontend')

@section('title', 'Corporate Goals – AYA Bank')

@section('content')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-goals.css') }}">
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      <div class="layout-page">
		@include('layouts.header', ['page'=>'about_aya'])
		<div class="menu-overlay"></div>

		@include('layouts.banner', ['page'=>'corporate_goals'])


         @php
            $page_data = App\Models\AboutAYA\CorporateGoals::first();
         @endphp

			<div class="container"><br>
				
				<div class="space-40"></div>
				<div class="row">
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
						<p style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->customer_desc !!}</p>
						
							<p class="for_customer_list" style="color: #1d1d1f;font-weight: 500;font-size: 16px;margin-right:30px;">{!! $page_data->customer_list !!}</p>
						
					</div>
					<div class="space-20"></div>
					<div class="row for_customer_CTA">
						<div class="col-md-6">
							<div>
								<p class="mission_info">
									{!! $page_data->customer_card_desc_1 !!}
								</p>
								<p class="theme_text_color cursor-pointer mission_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer mission_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								@php $customer_card_img_1_link =  URL::to('/').'/'.$page_data->customer_card_img_1; @endphp
								<img src="{{ $customer_card_img_1_link }}" class="img-fluid">
								<a href="{{url ($page_data->customer_card_link_1) }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">{!! $page_data->customer_card_text_1 !!}</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<p class="social_sustainability_info">
								{!! $page_data->customer_card_desc_2 !!}
							</p>
							<p class="theme_text_color cursor-pointer social_sustainability_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer social_sustainability_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							@php $customer_card_img_2_link =  URL::to('/').'/'.$page_data->customer_card_img_2; @endphp
							<img src="{{ $customer_card_img_2_link }}" class="img-fluid">
							<a href="{{ url($page_data->customer_card_link_2) }}" style="text-decoration: none !important;">
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
						<p style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->community_desc !!}</p>
					</div>
					<div class="space-20"></div>
					<div class="row for_community_CTA">
						<div class="col-md-6">
							<div class="container">
								<p class="ungc_list_info">{!! $page_data->community_card_desc_1 !!}</p>
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
							<p class="csr_info">{!! $page_data->community_card_desc_2 !!}</p>
							<p class="theme_text_color cursor-pointer csr_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer csr_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							@php $community_card_img_2_link =  URL::to('/').'/'.$page_data->community_card_img_2; @endphp
							<img src="{{ $community_card_img_2_link }}" class="img-fluid">
							<a href="{{ url($page_data->community_card_link_2) }}" style="text-decoration: none !important;">
								<p class="for_community_csr_tagline">{!! $page_data->community_card_text_2 !!}</p>
							</a>
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
						<p style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->staff_desc !!}</p>
					</div>
					<div class="space-20"></div>
					<div class="row for_staff_CTA">
						<div class="col-md-6">
							<div>
								<p class="people_info">{!! $page_data->staff_card_desc_1 !!}</p>
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
							<p class="emp_development_info">{!! $page_data->staff_card_desc_2 !!}</p>
							<p class="theme_text_color cursor-pointer emp_development_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer emp_development_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							@php $staff_card_img_2_link =  URL::to('/').'/'.$page_data->staff_card_img_2; @endphp
							<img src="{{ $staff_card_img_2_link }}" class="img-fluid">
							<a href="{{ url($page_data->staff_card_link_2) }}" style="text-decoration: none !important;">
								<p class="for_customer_mission_tagline">{!! $page_data->staff_card_text_2!!}</p>
							</a>
						</div>
						<div class="space-60"></div>
						<div class="col-md-12 staff_quote">
							<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#people_modal"></i><br><br>
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
						<h4 class="fw-bold" style="color: #1d1d1f;">{!! $page_data->stakeholder_title !!}</h4>
						<p style="color: #1d1d1f;font-weight: 500;font-size: 16px;">{!! $page_data->stakeholder_desc !!}</p>
					</div>
					<div class="space-20"></div>
					<div class="row for_shareholders_CTA">
						<div class="col-md-6">
							<div>
								<p class="governance_framework_info">{!! $page_data->stakeholder_card_desc_1 !!}</p>
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
							<p class="report_info">{!! $page_data->stakeholder_card_desc_2 !!}</p>
							<p class="theme_text_color cursor-pointer report_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer report_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							@php $stakeholder_card_img_2_link =  URL::to('/').'/'.$page_data->stakeholder_card_img_2; @endphp
							<img src="{{ $stakeholder_card_img_2_link }}" class="img-fluid">
							<a href="{{ url($page_data->stakeholder_card_link_2) }}" style="text-decoration: none !important;">
								<p class="for_community_csr_tagline">{!! $page_data->stakeholder_card_text_2 !!}</p>
							</a>
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
		$(".mission_info").show('toggle');
		$(".mission_info_hide").removeClass('d-none');
		$(".mission_info_read_more").addClass('d-none');
	});
	$(".mission_info_hide").click(function() {
		$(".mission_info").hide('toggle');
		$(".mission_info_read_more").removeClass('d-none');
		$(".mission_info_hide").addClass('d-none');
	});

	$(".social_sustainability_info_read_more").click(function() {
		$(".social_sustainability_info").show('toggle');
		$(".social_sustainability_info_hide").removeClass('d-none');
		$(".social_sustainability_info_read_more").addClass('d-none');
	});
	$(".social_sustainability_info_hide").click(function() {
		$(".social_sustainability_info").hide('toggle');
		$(".social_sustainability_info_read_more").removeClass('d-none');
		$(".social_sustainability_info_hide").addClass('d-none');
	});

	$(".ungc_info_read_more").click(function() {
		$(".ungc_list_info").show('toggle');
		$(".ungc_info_hide").removeClass('d-none');
		$(".ungc_info_read_more").addClass('d-none');
	});
	$(".ungc_info_hide").click(function() {
		$(".ungc_list_info").hide('toggle');
		$(".ungc_info_read_more").removeClass('d-none');
		$(".ungc_info_hide").addClass('d-none');
	});

	$(".csr_info_read_more").click(function() {
		$(".csr_info").show('toggle');
		$(".csr_info_hide").removeClass('d-none');
		$(".csr_info_read_more").addClass('d-none');
	});
	$(".csr_info_hide").click(function() {
		$(".csr_info").hide('toggle');
		$(".csr_info_read_more").removeClass('d-none');
		$(".csr_info_hide").addClass('d-none');
	});

	$(".people_info_read_more").click(function() {
		$(".people_info").show('toggle');
		$(".people_info_hide").removeClass('d-none');
		$(".people_info_read_more").addClass('d-none');
	});
	$(".people_info_hide").click(function() {
		$(".people_info").hide('toggle');
		$(".people_info_read_more").removeClass('d-none');
		$(".people_info_hide").addClass('d-none');
	});

	$(".emp_development_info_read_more").click(function() {
		$(".emp_development_info").show('toggle');
		$(".emp_development_info_hide").removeClass('d-none');
		$(".emp_development_info_read_more").addClass('d-none');
	});
	$(".emp_development_info_hide").click(function() {
		$(".emp_development_info").hide('toggle');
		$(".emp_development_info_read_more").removeClass('d-none');
		$(".emp_development_info_hide").addClass('d-none');
	});

	$(".governance_framework_info_read_more").click(function() {
		$(".governance_framework_info").show('toggle');
		$(".governance_framework_info_hide").removeClass('d-none');
		$(".governance_framework_info_read_more").addClass('d-none');
	});
	$(".governance_framework_info_hide").click(function() {
		$(".governance_framework_info").hide('toggle');
		$(".governance_framework_info_read_more").removeClass('d-none');
		$(".governance_framework_info_hide").addClass('d-none');
	});

	$(".report_info_read_more").click(function() {
		$(".report_info").show('toggle');
		$(".report_info_hide").removeClass('d-none');
		$(".report_info_read_more").addClass('d-none');
	});
	$(".report_info_hide").click(function() {
		$(".report_info").hide('toggle');
		$(".report_info_read_more").removeClass('d-none');
		$(".report_info_hide").addClass('d-none');
	});
</script>

@endsection('content')