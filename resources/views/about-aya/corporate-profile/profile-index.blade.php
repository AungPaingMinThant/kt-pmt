@extends('layouts.frontend-app')

@section('title', 'AYA Bank Profile – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_bank_profile'])

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold">A Full Service Bank</h4>
				</div>
				<div class="row">
					<div class="full_service_col_1 col-md-4">
						<p>AYA Bank is a leading private sector bank in Myanmar. The Bank was licensed by the Central Bank of Myanmar as a development bank on 2nd July 2010 and relicensed under the Financial Institutions Law 2016 as a full service bank. Registered as a Private Company Limited by Shares on 14th July 2010 and established on 11th August 2010, AYA Bank has been part of promoting the stability of financial system of the nation.</p>
					</div>
					<div class="full_service_col_2 col-md-4">
						<p>To create long-term growth, value and sustainability, AYA Bank was reincorporated as a Public Company Limited on 30th December 2022. The Bank is committed to the strategic roadmap of going public with higher level of transparency, financial rigor, stringent reporting deadlines and compliance requirements. This transition from private to public intends to distribute ownership among general public shareholders in the future and allows them to reap the benefits of a business's success by delivering strong returns.</p>
					</div>
					<div class="full_service_col_3 col-md-4">
						<p>Headquartered in Yangon, AYA Bank is serving individuals, small- and middle-market businesses, large corporations, and government sector with extensive branch network across the country. Our comprehensive network does not end local, and we are connected to the wider Asia region and global.</p>
					</div>
				</div>

				<div class="space-20"></div>
				
				<div class="row full_service_bank_img"></div>

				<div class="space-30"></div>

				<div class="row">
					<div class="col">
						<p>AYA Bank is the country’s one of the largest banks with almost (3) million customers and (265) branches. Our large and loyal customer base has been one of the key drivers of our success, allowing us for rapid growth over the years. The Bank focus on deepening relationships with customers, providing best-in-class customer service, and leveraging technology as the enabler to rapidly expand the customer base.</p>
					</div>
				</div>

				<div class="space-20"></div>

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
				
				<div class="space-40"></div>

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
								<h4 class="fw-semibold mb-0 theme_text_color leading_capabilities_value_style"><span>265</span>&nbsp;</h4>
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
					<p class="mb-0" style="color: #333333;">* As at February 2023 </p>
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


@include('layouts.footer', ['page'=>''])


@endsection('content')