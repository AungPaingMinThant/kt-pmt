@extends('layouts.frontend-app')

@section('title', 'Risk Management – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ url('/css/about-aya/risk-management.css') }}">
<style type="text/css">
	
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'risk_management'])

			<div class="container risk_container">
				<div class="space-40"></div>
				<div class="col-md-12">
					<h4 class="fw-bold">Risk Management</h4>
				</div>
				<div class="row">
					<div class="col-md-8">
						<p>AYA Bank acknowledges the critical need for an effective risk management system to address potential threats to its operations. It adopts a risk management policy, demonstrating its cognizance of the importance of instituting an Enterprise Risk Management (ERM) strategy.</p>
						<p>The Bank's Board is dedicated to allocating adequate personnel and resources to guarantee the successful execution of this ERM program. AYA Bank will uphold an ERM policy and framework that unifies various risk aspects. This ERM policy is not meant to supersede existing risk and compliance initiatives, but rather aims to act as a consolidated umbrella for all the risk management programs already established.</p>
					</div>
					<div class="col-md-4">
						@include('about-aya.governance.sidebar', ['side_page'=>'risk_management'])
					</div>
				</div>
			</div>

			<div class="space-40"></div>

			<div class="row risk_swiper_row">
				<div class="col-md-1" style="position: relative;">
					<div class="swiper-button-prev swiper-navBtn"></div>
				</div>
				<div class="col-md-10">
					<div class="slide-container swiper" style="padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
			            <div class="slide-content slide-content-desktop">
			                <div class="card-wrapper swiper-wrapper risk_swiper">
			                    <div class="card swiper-slide risk_card_swiper_slide slide_1">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/risk-governance-thumb.webp') }}" alt="Risk Governance" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Risk Governance</p>
												<p class="risk_bullet mb-0">Board Risk and Compliance Committee (BRCC)</p>
												<p class="risk_bullet mb-0">Enterprise Risk Management Department</p>
												<div class="space-30"></div>
												<p class=""><a href="{{ url('/about-aya/governance/risk-management/risk-governance') }}" class="theme_text_color">Read More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_2">
			                    	<div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/risk-management-framework-thumb.webp') }}" alt="Risk Management Framework" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Risk Management Framework</p>
												<p class="card_detail_info">AYA Bank has designed an Enterprise Risk Management Framework that adheres to the standards of the Risk Management Guidelines set by the Central Bank of Myanmar (CBM).</p>
												<div class="space-30"></div>
												<p class="risk_read_more"><a href="{{ url('/about-aya/governance/risk-management/risk-management-framework') }}" class="theme_text_color">Read More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_3">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/risk-management-control-thumb.webp') }}" alt="Risk Management Control" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Risk Management Control</p>
												<p class="card_detail_info">Effective risk management is fundamentally reliant on competent management and staff. It's crucial that personnel comprehend the Bank's mission, risk appetite, core values, policies, and processes.</p>
												<div class="space-30"></div>
												<p class="risk_read_more"><a href="{{ url('/about-aya/governance/risk-management/risk-management-control') }}" class="theme_text_color">Read More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide risk_card_swiper_slide slide_4">
			                        <div class="card-content">
			                        	<div class="swiper_detail_card card h-100">
											<img src="{{ url('/images/about-aya/risk-management/managing_risk_mobile_KV.webp') }}" alt="Managing Risk" class="card-img-top">
											<div class="card-body">
												<p class="card-title fw-semibold mb-20">Managing Risk</p>
												<p class="card_detail_info">The Credit Department within the Risk Management Unit is responsible for the comprehensive management of credit risk. This department drafts and administers credit policies, the internal rating system, credit authority guidelines, credit application guidelines, manages nonperforming loans (NPLs) and other aspects of credit portfolio management.</p>
												<div class="space-30"></div>
												<p class="risk_read_more"><a href="{{ url('/about-aya/governance/risk-management/managing-risk') }}" class="theme_text_color">Read More</a></p>
											</div>
										</div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
				</div>
				<div class="col-md-1 col-md-1-sec" style="position: relative;">
					<div class="swiper-button-next swiper-navBtn" ></div>
				</div>
				<div class="col-md-12 text-center mobile_navBtn" style="position: relative;">
					<div class="swiper-button-prev swiper-navBtn"></div>
					<div class="swiper-button-next swiper-navBtn"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript">
	var swiper = new Swiper(".slide-content-desktop", {
		slidesPerView: 3,
		spaceBetween: 5,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-desktop",
			clickable: true,
			dynamicBullets: true,
			loop: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 2,
			},
			1200: {
				slidesPerView: 3,	
			},
		},
	});
</script>

@endsection('content')