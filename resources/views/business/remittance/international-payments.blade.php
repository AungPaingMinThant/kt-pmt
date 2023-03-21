@extends('layouts.frontend-app')

@section('title', 'International Payments – AYA Bank')
<style type="text/css">
	.tab_section_1 {
	    padding: 0px 100px !important;
	}
	.outer_benefit_box {
		background-color: #fff;
		margin-bottom: 20px;
		margin-top: 40px;
	}
	.why_use_AYA_outer > .col-md-4 {
		width: 31%;
	}
	.benefit_section_col {
	    background-color: #fff;
	    border: none !important;
	    border-radius: 10px;
	    padding: 0px 20px;
	    box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);
	}
	.benefit_section_col > .row {
		padding: 10px 20px 0px 20px;
	}
	.visit_us_div {
		background-image: url('../../images/business/remittance/local-payments/create_payment_order_bg.png');
		background-size: cover;
		border-radius: 5px;
	}
	.visit_us_btn {
		background-color: #ae071d !important;
		color: #fff !important;
		padding: 10px 20px !important;
		border-color: #ae071d !important;
		float: right;
	}
	.visit_us_btn:hover{
		background-color: #fff !important;
		border-color: #ae071d !important;
		color: #ae071d !important;
	}
	.benefit_icon {
		width: 30% !important;
	}
	@media (max-width: 1400px) and (min-width: 577px) {
		.why_use_AYA_outer > .col-md-4 {
			width: 31% !important;
		}
		.benefit_icon {
			width: 40% !important;
		}
	}
	@media only screen and (max-width: 576px){
		/*.why_use_AYA_outer > .col-md-6 {
			width: 100%;
		}*/
		.visit_us_btn {
			float: none;
			margin-top: 20px;
		}
		.visit_us_col {
			text-align: center;
		}
	}
</style>
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
					<div class="col-md-10">
						<h5 class="fw-semibold">AYA Swift Telegraphic Global Transfer</h5>
						<p>We provide secure, fast and reliable way of international money transfer both inward and outward between two persons or entities through use of AYA’s wide correspondent relationships and the extensive and secured bank-to-bank SWIFT network.</p>
					</div>
				</div>
				<div class="row">
					<div class="space-20"></div>
					<div class="row">
						<div class="col-1">
							<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
						</div>
						<div class="col-11 mx-sm-n5">
							<p><span class="fw-semibold">Outward SWIFT Telegraphic Transfer</span><br>Sending money to beneficiaries outside Myanmar from your account with AYA Bank</p>
						</div>
						<div class="col-12"></div>
						<div class="col-1">
							<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
						</div>
						<div class="col-11 mx-sm-n5">
							<p><span class="fw-semibold">Inward SWIFT Telegraphic Transfer</span><br>Receiving funds to your account in Myanmar from senders outside Myanmar</p>
						</div>
					</div>
					<div class="space-40"></div>
					<div class="col-md-12">
						<h4 class="fw-500">Benefits</h4>
					</div>

					<div class="row why_use_AYA_outer" style="column-gap: 30px;">
						<div class="col-md-4 outer_benefit_box benefit_section_col">
							<div class="row">
								<img src="{{ url('/images/business/remittance/international-payments/benefit_effiency.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Efficiency</p>
								<p style="color: #4e4e4e;">Recipient is able to receive the funds quickly usually within 24 hours.</p>
							</div>
						</div>
						<div class="col-md-4 outer_benefit_box benefit_section_col">
							<div class="row">
								<img src="{{ url('/images/business/remittance/international-payments/benefit_security.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Security</p>
								<p style="color: #4e4e4e;">Practically no risk of loss as we use our correspondent banking relationship to conduct settlement.</p>
							</div>
						</div>
						<div class="col-md-4 outer_benefit_box benefit_section_col">
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
					<div class="row visit_us_div p-sm-4">
						<div class="col-md-8 visit_us_col">
							<p class="my-md-0 fw-semibold" style="font-size: 16px;">International Banking Department, AYA Bank Head office.</p>
							<p class="my-md-0">Alternatively, you may submit the forms at your nearest branches.</p>
						</div>
						<div class="col-md-4 visit_us_col text-right">
							<a href="#" target="_blank">
								<button class="btn visit_us_btn">
									Visit Us
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')