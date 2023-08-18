@extends('layouts.frontend-app')

@section('title', 'Employee Development – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/career.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'employee_development'])

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-12">
						<p class="drop-cap">We value our people. We nurture, develop and respect them, celebrate their success together, and are respected for our highly professional approach. We take bold steps to invest in the trainings and development of workforce to become future-ready as the financial industry evolves.</p>
					</div>
				</div>
				<div class="space-20"></div>
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


@include('layouts.footer', ['page'=>''])


@endsection('content')