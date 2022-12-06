@extends('layouts.frontend-app')

@section('title', 'AYA Pay – AYA Bank')
<style type="text/css">
	.outer_benefit_box {
		padding: 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
		margin-bottom: 20px;
		margin-top: 40px;
	}
	.why_use_AYA_outer > .col-md-6 {
		width: 48%;
	}
	.apply_now_btn {
		background-color: #ae071d !important;
		color: #fff !important;
		padding: 15px 25px !important;
		border-color: #ae071d !important;
		margin-bottom: 2rem !important;
	}
	.apply_now_btn:hover{
		background-color: #fff !important;
		border-color: #ae071d !important;
		color: #ae071d !important;
	}
	.need_more_support_section_inner {
		padding: 10px 100px 10px 100px;
		background-image: url('./images/ayapay/explore_bg.png');
		background-size: cover;
		border-radius: 6px;
	}
	.merchant_agent_div {
		column-gap: 20px;
		width: 100%;
	}
	.merchant_agent_div > .col-md-6 {
		width: 49%;
	}
	.need_more_support_section {
	    padding: 40px 208px 0px 208px;
	}
	.reset_pin_btn {
		background-color: #ae071d !important;
		border: 1px solid #ae071d !important;
		color: #fff !important;
		font-weight: 500;
		padding: 15px 25px !important;
		margin-bottom: 2rem !important;
	}
	.reset_pin_btn:hover {
		border: 1px solid #ae071d !important;
		color: #ae071d !important;
		background-color: #fff !important;
	}

	@media (max-width: 1300px) and (min-width: 577px) {
		.why_use_AYA_outer > .col-md-6 {
			width: 47%;
		}
		.need_more_support_section {
		    padding: 40px 130px !important;
		}
		.need_more_support_section_inner {
			padding: 40px 60px 60px 60px;
			background-position: 60% center;
		}
		.merchant_agent_div > .col-md-6 {
			width: 48%;
		}
	}
	@media only screen and (max-width: 576px){
		.why_use_AYA_outer > .col-md-6 {
			width: 100%;
		}
		.merchant_agent_div > .col-md-6 {
			width: 100%;
		}
		.tag_line_mascot {
			text-align: center;
		}
		.merchant_agent_div {
			width: auto;
		}
		.need_more_support_section {
		    padding: 0px 20px !important;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'ayapay'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'ayapay'])

			<div class="container section_1">
				@include('layouts.tagline', ['page'=>'ayapay'])
				<div class="row" style="margin-top: -40px;">
					<div class="col-md-12 text-center">
						<h3 style="color: #1d1d1f;">What are the benefits?</h3>
					</div>
				</div>
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-7">
						<div class="row why_use_AYA_outer" style="column-gap: 20px;">
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row  simple_login_div">
									<img src="{{ url('/images/ayapay/convenience.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Convenience</p>
									<p style="color: #4e4e4e;">Needless to carry actual wallet and make purchase from AYA Pay application on your phone.</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row quick_div">
									<img src="{{ url('/images/ayapay/fast_secure.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Fast & Secure</p>
									<p style="color: #4e4e4e;">Pay quickly by scanning QR Code (or) keying-in receiver's phone number.</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row manage_credit_div">
									<img src="{{ url('/images/ayapay/easy.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Easy</p>
									<p style="color: #4e4e4e;">Add funds into your mobile wallet in multiple ways from your linked bank account, AYA Pay agent or VISA / MPU cards</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row prepaid_card_div">
									<img src="{{ url('/images/ayapay/functional.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Functional</p>
									<p style="color: #4e4e4e;">Provides features to make bill payments, cash out, transfer funds, and top up Visa Prepaid Card and mobile</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 text-center d-none d-sm-block" style="padding-top: 20px;">
						<div id="why_use_AYA_first_section" class="carousel carousel-dark slide carousel-fade" data-bs-interval="false">
							<ol class="carousel-indicators d-none">
								<li data-bs-target="#why_use_AYA_first_section" id="slide_1" data-bs-slide-to="0" class="active"></li>
								<li data-bs-target="#why_use_AYA_first_section" id="slide_2" data-bs-slide-to="1"></li>
								<li data-bs-target="#why_use_AYA_first_section" id="slide_3" data-bs-slide-to="2"></li>
								<li data-bs-target="#why_use_AYA_first_section" id="slide_4" data-bs-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="{{ url('/images/ayapay/convenience_mockup.png') }}" class="d-block  img-fluid" id="simple_login_mockup" alt="First slide" style="width: 75%;">
								</div>
								<div class="carousel-item">
									<img src="{{ url('/images/ayapay/fast_secure_mockup.png') }}" class="d-block  img-fluid" id="quick_mockup" alt="Second slide" style="width: 75%;">
								</div>
								<div class="carousel-item">
									<img src="{{ url('/images/ayapay/easy_mockup.png') }}" class="d-block  img-fluid" id="manage_credit_mockup" alt="Third slide" style="width: 75%;">
								</div>
								<div class="carousel-item">
									<img src="{{ url('/images/ayapay/funtional_mockup.png') }}" class="d-block  img-fluid" id="prepaid_card_mockup" alt="Fourth slide" style="width: 75%;">
								</div>
							</div>
							<a class="carousel-control-prev d-none" href="#why_use_AYA_first_section" role="button" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</a>
							<a class="carousel-control-next d-none" href="#why_use_AYA_first_section" role="button" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="space-40"></div>
			<div class="how_to_apply_bg">
				<div class="container" style="">
					<div class="row">
						<div class="col-md-12 text-center d-none d-sm-block">
							<img src="{{ url('/images/ayapay/ayapay_registration_title.png') }}" class="img-fluid" style="width: 50%">
							<div class="space-60"></div>
						</div>
						<div class="col-md-12 text-center d-block d-sm-none">
							<img src="{{ url('/images/ayapay/ayapay_registration_title.png') }}" class="img-fluid " >
							<div class="space-40"></div>
						</div>					
					</div>
					<div class="d-none d-sm-block">
						<div class="row">
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_1.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">1. Input mobile number you want to open <b style="color: #c22236;">AYA Pay</b> account and click '<b style="color: #c22236;">Next</b>'.</p>
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_2.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">2. Key in <b style="color: #c22236;">4-digits OTP</b> received as <b style="color: #c22236;">SMS</b> in your mobile.</p>
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_3.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p>3. Input your data and click '<b style="color: #c22236;">Register</b>'.</p>
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_4.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p>4. Key in <b style="color: #c22236;">6-digits</b> PIN as your password.</p>
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_5.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 20px;">5. You will get new <b style="color: #c22236;">AYA Pay</b> account and select '<b style="color: #c22236;">Upgrade Full KYC</b>'.</p>
							</div>
						</div>
						<div class="space-20"></div>
						<div class="row">
							<div class="col"></div>
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_6.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p>6. Input your data and click '<b style="color: #c22236;">Upgrade</b>'.</p>
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_7.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p>7. Key in <b style="color: #c22236;">4-digits OTP</b> received as SMS in your mobile.</p>
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_8.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">8. <b style="color: #c22236;">AYA Pay</b> will do <b style="color: #c22236;">KYC</b> check and confirm in 24-hours.</p>
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/ayapay/reg_phone_9.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">9. You can get started with <b style="color: #c22236;">AYA Pay</b>.</p>
							</div>
							<div class="col"></div>
						</div>
					</div>
					<div class="d-block d-sm-none">
						<div class="row">
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_1.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">1. Input mobile number you want to open <b style="color: #c22236;">AYA Pay</b> account and click '<b style="color: #c22236;">Next</b>'.</p>
							</div>
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_2.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">2. Key in <b style="color: #c22236;">4-digits OTP</b> received as <b style="color: #c22236;">SMS</b> in your mobile.</p>
							</div>
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_3.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p>3. Input your data and click '<b style="color: #c22236;">Register</b>'.</p>
							</div>
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_4.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p>4. Key in <b style="color: #c22236;">6-digits</b> PIN as your password.</p>
							</div>
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_5.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 20px;">5. You will get new <b style="color: #c22236;">AYA Pay</b> account and select '<b style="color: #c22236;">Upgrade Full KYC</b>'.</p>
							</div>
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_6.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p>6. Input your data and click '<b style="color: #c22236;">Upgrade</b>'.</p>
							</div>
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_7.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p>7. Key in <b style="color: #c22236;">4-digits OTP</b> received as SMS in your mobile.</p>
							</div>
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_8.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">8. <b style="color: #c22236;">AYA Pay</b> will do <b style="color: #c22236;">KYC</b> check and confirm in 24-hours.</p>
							</div>
							<div class="col-sm-12 text-center">
								<img src="{{ url('/images/ayapay/reg_phone_9.png') }}" class="img-fluid" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">9. You can get started with <b style="color: #c22236;">AYA Pay</b>.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="space-40"></div>
			<div class="need_more_support_section">
				<div class="container">
					<div class="row merchant_agent_div">
						<div class="col-md-6" style="background-color: #f9f9fb;border-radius: 10px;padding-top: 10px;padding-bottom: 10px;margin-bottom: 20px;">
							<div class="row">
								<div class="col-4" style="background-image: url('./images/ayapay/merchant.png');background-size: contain;background-position: left center;background-repeat: no-repeat;"></div>
								<div class="col-8">
									<div class="row space-40 d-none d-sm-block"></div>
									<div class="row space-20 d-block d-sm-none"></div>
									<p style="font-size: 18px;font-weight: 600;margin-bottom: 0px;">Merchant</p>
									<p>Scan and pay for goods and services at any of our AYA Pay Merchant shops</p>
									<div class="row space-40 d-none d-sm-block"></div>
									<div class="row space-20 d-block d-sm-none"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6" style="background-color: #f9f9fb;border-radius: 10px;padding-top: 10px;padding-bottom: 10px;margin-bottom: 20px;">
							<div class="row">
								<div class="col-4" style="background-image: url('./images/ayapay/agent.png');background-size: contain;background-position: left center;background-repeat: no-repeat;"></div>
								<div class="col-8">
									<div class="row space-20 d-none d-sm-block"></div>
									<div class="row space-10 d-block d-sm-none"></div>
									<p style="font-size: 18px;font-weight: 600;margin-bottom: 0px;">Agent</p>
									<p>Take advantage of our extensive agent network to perform any of our in-app services such as Cash In/Out, Remittance, Bill Payment, etc.</p>
									<div class="row space-20 d-none d-sm-block"></div>
									<div class="row space-10 d-block d-sm-none"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="need_more_support_section">
				<div class="container d-none d-sm-block need_more_support_section_inner">
					<div class="row">
						<div class="col-md-7 col-xs-12" style="padding-top: 80px;padding-left: 50px;">
							<p style="font-weight: 500;font-size: 20px;margin-bottom: 5px;">Explore more on <span style="color: #a02225;">AYA Pay</span></p>
							<a href="https://www.ayapay.com/" target="_blank">
								<button class="btn reset_pin_btn">
									Visit Website
								</button>
							</a>
						</div>
						<div class="col-md-5">
							<img src="{{ url('/images/ayapay/explore_laptop.png') }}" class="img-fluid">
						</div>
					</div>
				</div>

				<div class="container d-block d-sm-none" style="padding: 0px 20px 0px 20px;background-color: #f5f5f5;border-radius: 10px;">
					<div class="row">
						<div class="col-xs-12 text-center" style="padding-top: 20px;">
							<img src="{{ url('/images/ayapay/explore_laptop.png') }}" class="img-fluid" style="margin-bottom: 10px">

							<p style="font-weight: 500;font-size: 20px;margin-bottom: 5px;">Explore more on <span style="color: #a02225;">AYA Pay</span></p>
							<a href="https://www.ayapay.com/" target="_blank">
								<button class="btn reset_pin_btn">
									Visit Website
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

<script type="text/javascript">
	$(".simple_login_div").click(function() {
		$("#slide_1").click();
	});
	$(".quick_div").click(function() {
		$("#slide_2").click();
	});
	$(".manage_credit_div").click(function() {
		$("#slide_3").click();
	});
	$(".prepaid_card_div").click(function() {
		$("#slide_4").click();
	});
</script>

@endsection('content')