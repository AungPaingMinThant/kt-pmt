@extends('layouts.frontend-app')

@section('title', 'International Payments – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/remittance/international-payments.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_remittance_inter'])

			<div class="space-40"></div>
			<div class="container section_1" >
				<div class="row">
					<div class="col-md-10 international_payments_tag_div">
						<h5 class="fw-semibold">AYA Swift Telegraphic Global Transfer</h5>
						<p>We provide secure, fast and reliable way of international money transfer both inward and outward between two persons or entities through use of AYA’s wide correspondent relationships and the extensive and secured bank-to-bank SWIFT network.</p>
					</div>
				</div>
				<div class="row">
					<div class="space-10"></div>
					<div class="col-12">
						<p class="swiftcode_txt">
							AYA BANK SWIFT CODE: 
							&nbsp;&nbsp;<button class="btn swiftcode_btn" style="background-color: #A5000B !important; color:#fff; border: 1px solid #A5000B">AYABMMMY</button>
						</p>
					</div>
					<div class="row">
						<div class="col-1">
							<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
						</div>
						<div class="col-11 swift_fact_div mx-sm-n5">
							<p><span class="fw-semibold">Outward SWIFT Telegraphic Transfer</span><br>Sending money to beneficiaries outside Myanmar from your account with AYA Bank</p>
						</div>
						<div class="col-12"></div>
						<div class="col-1">
							<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
						</div>
						<div class="col-11 swift_fact_div mx-sm-n5">
							<p><span class="fw-semibold">Inward SWIFT Telegraphic Transfer</span><br>Receiving funds to your account in Myanmar from senders outside Myanmar</p>
						</div>
					</div>
					<div class="space-40"></div>
					<div class="col-md-12">
						<h4 class="fw-500">Benefits</h4>
					</div>

					<div class="row why_use_AYA_outer" style="column-gap: 30px;">
						<div class="col-md-4 outer_benefit_box benefit_section_col d-none d-sm-block">
							<div class="row">
								<img src="{{ url('/images/business/remittance/international-payments/benefit_effiency.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Efficiency</p>
								<p style="color: #4e4e4e;">Recipient is able to receive the funds quickly usually within 24 hours.</p>
							</div>
						</div>
						<div class="col-md-4 outer_benefit_box benefit_section_col d-none d-sm-block">
							<div class="row">
								<img src="{{ url('/images/business/remittance/international-payments/benefit_security.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Security</p>
								<p style="color: #4e4e4e;">Practically no risk of loss as we use our correspondent banking relationship to conduct settlement.</p>
							</div>
						</div>
						<div class="col-md-4 outer_benefit_box benefit_section_col d-none d-sm-block">
							<div class="row">
								<img src="{{ url('/images/business/remittance/international-payments/benefit_reliability.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Reliability</p>
								<p style="color: #4e4e4e;">It is reliable as we have necessary internal infrastructure. Communication is made through authenticate SWIFT platform to ensure that the transfer is executed in a timely fashion and to good order.</p>
							</div>
						</div>
					</div>

					<div class="why_use_AYA_outer">
						<div class="col-md-12 outer_benefit_box benefit_section_col d-block d-sm-none">
							<div class="row">
								<img src="{{ url('/images/business/remittance/international-payments/benefit_effiency.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Efficiency</p>
								<p style="color: #4e4e4e;">Recipient is able to receive the funds quickly usually within 24 hours.</p>
							</div>
						</div>
						<div class="col-md-12 outer_benefit_box benefit_section_col d-block d-sm-none">
							<div class="row">
								<img src="{{ url('/images/business/remittance/international-payments/benefit_security.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Security</p>
								<p style="color: #4e4e4e;">Practically no risk of loss as we use our correspondent banking relationship to conduct settlement.</p>
							</div>
						</div>
						<div class="col-md-12 outer_benefit_box benefit_section_col d-block d-sm-none">
							<div class="row">
								<img src="{{ url('/images/business/remittance/international-payments/benefit_reliability.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Reliability</p>
								<p style="color: #4e4e4e;">It is reliable as we have necessary internal infrastructure. Communication is made through authenticate SWIFT platform to ensure that the transfer is executed in a timely fashion and to good order.</p>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<p>Find out the <a class="theme_text_color text-decoration-underline" href="{{ url('/file/business/remittance/Foreign Currency Funds Transfer Application Form.pdf') }}" target="_blank">Foreign Currency Transfer Application Form</a> here.</p>
					</div>

					<div class="space-20"></div>

					<div class="visit_us_div p-sm-4">
						<div class="container d-none d-sm-block need_more_support_section_container">
							<div class="row">
								<div class="col-md-12 col-xs-12 text-center">
									<h3 style="color: #1d1d1f;padding: 0px 60px;">Visit Us</h3>
									<div class="space-20"></div>
								</div>
								<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;border-right: 1px solid #1d1d1f;padding-right: 0px;">
									<p class="head_office_cta">International Banking Department, AYA Bank Head office.</p>
									<button class="btn visit_us_btn" data-bs-toggle="modal" data-bs-target="#modalCenterInternationalBanking">
										Head Office
									</button>
									<div style="height: 40px;"></div>
								</div>
								<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;padding-left: 0px;">
									<p class="near_branch_cta">Alternatively, you may submit the forms at your nearest branches.</p>
									<!-- <a href="#">
										<button class="btn visit_us_btn">
											Branches
										</button>
									</a> -->
									<div style="height: 40px;"></div>
								</div>
							</div>
						</div>
						<div class="container d-block d-sm-none" style="background-image: url('./images/get_start_bg.jpg');background-size: cover;border-radius: 6px;padding: 0px;">
							<div class="row">
								<div class="col-md-12 col-xs-12 text-center">
									<h3 style="color: #1d1d1f;padding: 0px 60px;margin-bottom: 0px;">Visit Us</h3>
								</div>
								<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;border-bottom: 1px solid #1d1d1f;padding-bottom: 0px;">
									<p style="color: #000;font-weight: 400;font-size: 17px;margin-bottom: 0px;">International Banking Department, AYA Bank Head office.</p>
									<button class="btn visit_us_btn" data-bs-toggle="modal" data-bs-target="#modalCenterInternationalBanking">
										Head Office
									</button>
									<div style="height: 40px;"></div>
								</div>
								<div class="col-md-6 col-xs-12 text-center" style="padding-top: 20px;">
									<p style="color: #000;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Alternatively, you may submit the forms at your nearest branches.</p>
									<!-- <a href="#">
										<button class="btn visit_us_btn">
											Branches
										</button>
									</a> -->
									<div class="space-20"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="">
						<div class="space-40"></div>
						<h4 class="fw-bold">Explore More</h4>
						<hr class="bottom_hr">
						<div class="space-20"></div>
						<div class="row">
							<div class="col-md-4 mb-20">
								<div class="card">
									<div style="position: relative;">
										<img src="{{ url('/images/about-aya/network/correspondent-bank/correspondent-img.webp') }}" alt="Correspondent Bank" class="card-img-top">
									</div>
									<div class="card-body">
										<p class="card-title fw-semibold mb-20" style="font-size: 16px;">Correspondent Bank</p>
										<p class="card_detail_info mb-30">Our network for global money transfers, easy and secure</p>

										<p class="text-decoration-underline">
											<a href="{{ url('/about-aya/network/correspondent-bank') }}">Learn more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalCenterInternationalBanking" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title fw-semibold" id="modalCenterTitle">International Banking</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-2">
						<i class="menu-icon tf-icons bx bx-building-house theme_text_color" style="font-size: 30px;"></i>
					</div>
					<div class="col-10 mx-sm-n5">
						<p class="mb-0 fw-semibold" style="font-size: 16px;">Address:</p>
						<p>No. 416, Mahabandoola Road, Kyauktada Township, Yangon, Myanmar</p>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="col-2">
						<i class="menu-icon tf-icons bx bx-phone-call theme_text_color" style="font-size: 30px;"></i>
					</div>
					<div class="col-10 mx-sm-n5">
						<p class="mb-0 fw-semibold" style="font-size: 16px;">Hotline:</p>
						<p class="mb-10">
							Money Transfer Serviec (MTS): 
							<a class="text-decoration-underline theme_text_color" href="tel:+95 9 453448814">+95 9 453448814</a>
						</p>
						<p class="mb-10">
							Trade: 
							<a class="text-decoration-underline theme_text_color" href="tel:+95 9 453448815">+95 9 453448815</a>
						</p>
						<p class="mb-10">
							Outward Telegraphic Transfers (OTT): 
							<a class="text-decoration-underline theme_text_color" href="tel:+95 9 45448816">+95 9 45448816</a>
						</p>
						<p class="mb-10">
							Inward Telegraphic Transfers (ITT): 
							<a class="text-decoration-underline theme_text_color" href="tel:+95 9 453448817">+95 9 453448817</a>
						</p>

						<p class="mb-10">Tel: <a class="text-decoration-underline theme_text_color" href="tel:+95 1 392070">+95 1 392070</a>, <a class="text-decoration-underline theme_text_color" href="tel:+95 1 392462">392462</a>, <a class="text-decoration-underline theme_text_color" href="tel:+95 1 392526">392526</a></p>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="col-2">
						<i class="menu-icon tf-icons bx bx-envelope theme_text_color" style="font-size: 30px;"></i>
					</div>
					<div class="col-10 mx-sm-n5">
						<p class="mb-0 fw-semibold" style="font-size: 16px;">Email:</p>
						<p><a class="text-decoration-underline theme_text_color" href="mailto:ibdteam@ayabank.com">ibdteam@ayabank.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')