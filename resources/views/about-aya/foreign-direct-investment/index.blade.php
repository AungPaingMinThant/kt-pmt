@extends('layouts.frontend-app')

@section('title', 'Foreign Direct Investment – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/fdi.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'fdi'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<p>Are you looking to establish or expand your business in Myanmar?</p>
					<p>Look no further than our professional advisory services tailored specifically for international companies. Our dedicated team specializes in assisting businesses in setting up their presence in Myanmar, offering comprehensive support every step of the way.</p>
					<p>With an in-depth understanding of the local market across various sectors and a wealth of international expertise, we are well-equipped to provide banking support for your businesses. Our extensive distribution capabilities, facilitated by a nationwide branch network and digital channels, ensure that your business requirements are met efficiently and effectively.</p>
					<p>Partnering with our Foreign Direct Investment (FDI) team guarantees a comprehensive solution customized to suit your specific business needs. Whether you are a new entrant in the market or seeking expansion opportunities, we are committed to delivering the highest quality service and assisting you in navigating the intricacies of establishing and growing your business in Myanmar.</p>

					<div class="space-30"></div>

					<p class="fw-semibold" style="font-size: 18px;">We help foreign investors to establish or expand a business in the country.</p>
					<p>Looking closer at the opportunities, our FDI officers have to offer you:</p>

					<div class="space-30"></div>

					<a class="fdi_services_link" href="{{ url('/business-banking/account-saving') }}">
						<div class="fdi_services_col col-md-3 text-center">
							<img src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/01_AYA_saving_products.webp') }}" class="img-fluid fdi_services_img">
							<p class="fdi_services_label">
								<span class="fw-bold goal_step_number">01</span><span class="fw-semibold goal_step_title">AYA Saving Products</span>
							</p>
						</div>
					</a>
					<a class="fdi_services_link" href="{{ url('/personal-banking/royal-banking') }}">
						<div class="fdi_services_col col-md-3 text-center">
							<img src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/02_royal_banking.webp') }}" class="img-fluid fdi_services_img">
							<p class="fdi_services_label">
								<span class="fw-bold goal_step_number">02</span><span class="fw-semibold goal_step_title">Royal Banking</span>
							</p>
						</div>
					</a>
					<a class="fdi_services_link" href="{{ url('/business-banking/borrowing') }}">
						<div class="fdi_services_col col-md-3 text-center">
							<img src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/03_financing.webp') }}" class="img-fluid fdi_services_img">
							<p class="fdi_services_label">
								<span class="fw-bold goal_step_number">03</span><span class="fw-semibold goal_step_title">Financing</span>
							</p>
						</div>
					</a>
					<a class="fdi_services_link" href="{{ url('/business/trade/trade-financing') }}">
						<div class="fdi_services_col col-md-3 text-center">
							<img src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/04_trade_facility.webp') }}" class="img-fluid fdi_services_img">
							<p class="fdi_services_label">
								<span class="fw-bold goal_step_number">04</span><span class="fw-semibold goal_step_title">Trade Facility</span>
							</p>
						</div>
					</a>
					<a class="fdi_services_link" href="{{ url('/business/cash-management') }}">
						<div class="fdi_services_col col-md-3 text-center">
							<img src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/05_cash_management_solutions.webp') }}" class="img-fluid fdi_services_img">
							<p class="fdi_services_label">
								<span class="fw-bold goal_step_number">05</span><span class="fw-semibold goal_step_title">Cash Management Solutions</span>
							</p>
						</div>
					</a>
					<a class="fdi_services_link">
						<div class="fdi_services_col col-md-3 text-center">
							<img src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/06_AYA_digital_structure.webp') }}" class="img-fluid fdi_services_img">
							<p class="fdi_services_label">
								<span class="fw-bold goal_step_number">06</span><span class="fw-semibold goal_step_title">AYA Digital Structure</span>
							</p>
						</div>
					</a>
					<a class="fdi_services_link" href="{{ url('/business-banking/insurance') }}">
						<div class="fdi_services_col col-md-3 text-center">
							<img src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/07_bancassurance.webp') }}" class="img-fluid fdi_services_img">
							<p class="fdi_services_label">
								<span class="fw-bold goal_step_number">07</span><span class="fw-semibold goal_step_title">Bancassurance</span>
							</p>
						</div>
					</a>
					<a class="fdi_services_link" href="https://www.ayatrustsc.com/" target="_blank">
						<div class="fdi_services_col col-md-3 text-center">
							<img src="{{ url('/images/about-aya/who-we-are/foreign-direct-investment/08_investment_banking.webp') }}" class="img-fluid fdi_services_img">
							<p class="fdi_services_label">
								<span class="fw-bold goal_step_number">08</span><span class="fw-semibold goal_step_title">Investment Banking</span>
							</p>
						</div>
					</a>
				</div>

				<div class="space-30"></div>

				<div class="row enquiry_row">
					<div class="col-md-8 enquiry_label_col">
						<p class="mb-0 enquiry_label">For customized advisory services for international investors, companies and digital nomads,</p>
					</div>
					<div class="col-md-4 enquiry_btn_col">
						<a href="{{ url('/enquiry') }}">
							<button class="btn enquiry_btn">
								Enquiry Form
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')