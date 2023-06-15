@extends('layouts.frontend-app')

@section('title', 'AYA Pay – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/timeline.css') }}">
<link rel="stylesheet" href="{{ url('/css/ayapay.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
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
									<img src="{{ url('/images/ayapay/ayapay_Convenience.png') }}" class="d-block  img-fluid" id="simple_login_mockup" alt="First slide" style="width: 75%;">
								</div>
								<div class="carousel-item">
									<img src="{{ url('/images/ayapay/ayapay_fast_secure.png') }}" class="d-block  img-fluid" id="quick_mockup" alt="Second slide" style="width: 75%;">
								</div>
								<div class="carousel-item">
									<img src="{{ url('/images/ayapay/ayapay_easy.png') }}" class="d-block  img-fluid" id="manage_credit_mockup" alt="Third slide" style="width: 75%;">
								</div>
								<div class="carousel-item">
									<img src="{{ url('/images/ayapay/ayapay_funtional.png') }}" class="d-block  img-fluid" id="prepaid_card_mockup" alt="Fourth slide" style="width: 75%;">
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
							<img src="{{ url('/images/ayapay/ayapay_registration_title.webp') }}" class="img-fluid" style="width: 50%">
							<div class="space-60"></div>
						</div>
						<div class="col-md-12 text-center d-block d-sm-none">
							<img src="{{ url('/images/ayapay/ayapay_registration_title.webp') }}" class="img-fluid " >
							<div class="space-40"></div>
						</div>					
					</div>

					<div class="d-none d-sm-block">
						<div class="row" style="padding: 0px 50px;">
							<div class="col-md-4 text-right">
								<img src="{{ url('/images/ayapay/Step1.webp') }}" class="img-fluid reg_phone reg_phone_1">
								<img src="{{ url('/images/ayapay/Step2.webp') }}" class="img-fluid reg_phone d-none reg_phone_2">
								<img src="{{ url('/images/ayapay/Step3.webp') }}" class="img-fluid reg_phone d-none reg_phone_3">
								<img src="{{ url('/images/ayapay/Step4.webp') }}" class="img-fluid reg_phone d-none reg_phone_4">
								<img src="{{ url('/images/ayapay/Step5.webp') }}" class="img-fluid reg_phone d-none reg_phone_5">
								<img src="{{ url('/images/ayapay/Step6.webp') }}" class="img-fluid reg_phone d-none reg_phone_6">
								<img src="{{ url('/images/ayapay/Step7.webp') }}" class="img-fluid reg_phone d-none reg_phone_7">
								<img src="{{ url('/images/ayapay/Step8.webp') }}" class="img-fluid reg_phone d-none reg_phone_8">
								<img src="{{ url('/images/ayapay/Step9.webp') }}" class="img-fluid reg_phone d-none reg_phone_9">
								<img src="{{ url('/images/ayapay/Step10.webp') }}" class="img-fluid reg_phone d-none reg_phone_10">
							</div>
							<div class="col-md-8" style="padding-top: 0px;">
								<ul class="timeline">
									<li class="timeline-inverted">
										<div class="timeline-badge timeline-badge-1 active">1</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<p class="timeline-title">Input mobile number you want to open <b class="theme_text_color">AYA Pay</b> account and click '<b class="theme_text_color">Next</b>'.</p>
											</div>
										</div>
									</li>
									<li class="timeline-inverted">
										<div class="timeline-badge timeline-badge-2">2</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<p class="timeline-title">Key in <b class="theme_text_color">4-digits OTP</b> received as <b class="theme_text_color">SMS</b> in your mobile.</p>
											</div>
										</div>
									</li>
									<li class="timeline-inverted">
										<div class="timeline-badge timeline-badge-3">3</div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<p class="timeline-title">Take your <b class="theme_text_color">clear selfie </b>photo.</p>
											</div>
										</div>
									</li>
									<li class="timeline-inverted">
										<div class="timeline-badge timeline-badge-4">4</div>
											<div class="timeline-panel">
											<div class="timeline-heading">
												<p class="timeline-title">You may register your AYA Pay account with ID card <b class="theme_text_color"> (NRIC or Driving License or Passport)</b>.</p>
											</div>
										</div>
									</li>
							        <li class="timeline-inverted">
							        	<div class="timeline-badge timeline-badge-5">5</div>
							          	<div class="timeline-panel">
							            	<div class="timeline-heading">
							              		<p class="timeline-title">Upload <b class="theme_text_color">your ID card</b> (front & back).</p>
							            	</div>
							          	</div>
							        </li>
							        <li class="timeline-inverted">
							        	<div class="timeline-badge timeline-badge-6">6</div>
							          	<div class="timeline-panel">
							            	<div class="timeline-heading">
							              		<p class="timeline-title">Fill in all the <b class="theme_text_color">required information</b> and click “Register”.</p>
							            	</div>
							          	</div>
							        </li>
							        <li class="timeline-inverted">
							        	<div class="timeline-badge timeline-badge-7">7</div>
							          	<div class="timeline-panel">
							            	<div class="timeline-heading">
							              		<p class="timeline-title">Key in <b class="theme_text_color">6-digit PIN</b> as your password.</p>
							            	</div>
							          	</div>
							        </li>
							        <li class="timeline-inverted">
							        	<div class="timeline-badge timeline-badge-8">8</div>
							          	<div class="timeline-panel">
							            	<div class="timeline-heading">
							              		<p class="timeline-title">Click <b class="theme_text_color">upgrade Full KYC </b> to upgrade Level 1.5 to Level 2.</p>
							            	</div>
							          	</div>
							        </li>
							        <li class="timeline-inverted">
							        	<div class="timeline-badge timeline-badge-9">9</div>
							          	<div class="timeline-panel">
							            	<div class="timeline-heading">
							              		<p class="timeline-title">Check all the information and click <b class="theme_text_color">“Change”</b>.</p>
							            	</div>
							          	</div>
							        </li>
							        <li class="timeline-inverted">
							        	<div class="timeline-badge timeline-badge-10">10</div>
							          	<div class="timeline-panel">
							            	<div class="timeline-heading">
							              		<p class="timeline-title">AYA Pay will do KYC check and confirm in 24-hours.</p>
							            	</div>
							          	</div>
							        </li>
							    </ul>
							</div>
						</div>
					</div>
					<div class="d-block d-sm-none">
						<div class="row">
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step1.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">1. Input mobile number you want to open <b class="theme_text_color">AYA Pay</b> account and click '<b class="theme_text_color">Next</b>'.</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step2.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">2. Key in <b class="theme_text_color">4-digits OTP</b> received as <b class="theme_text_color">SMS</b> in your mobile.</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step3.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p>3. Take your <b class="theme_text_color">clear selfie </b>photo.</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step4.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p>4. You may register your AYA Pay account with ID card <b class="theme_text_color"> (NRIC or Driving License or Passport)</b>.</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step5.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p style="padding: 0px 20px;">5. Upload <b class="theme_text_color">your ID card</b> (front & back).</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step6.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p>6. Fill in all the <b class="theme_text_color">required information</b> and click “Register”.</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step7.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p>7. Key in <b class="theme_text_color">6-digit PIN</b> as your password.</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step8.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">8. Click <b class="theme_text_color">upgrade Full KYC </b> to upgrade Level 1.5 to Level 2.</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step9.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">9. Check all the information and click <b class="theme_text_color">“Change”</b>.</p>
							</div>
							<div class="col-sm-12 text-center" style="margin-bottom: 20px;">
								<img src="{{ url('/images/ayapay/Step10.webp') }}" class="img-fluid reg_phone_mobile" style="margin-bottom: 20px;">
								<p style="padding: 0px 10px;">10. AYA Pay will do KYC check and confirm in 24-hours.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="space-40"></div>
			<div class="need_more_support_section_merchant">
				<div class="container">
					<div class="row merchant_agent_div">
						<div class="col-md-6" style="background-color: #f9f9fb;border-radius: 10px;padding-top: 10px;padding-bottom: 10px;margin-bottom: 20px;">
							<div class="row">
								<div class="col-4" style="background-image: url('../../images/ayapay/merchant.png');background-size: contain;background-position: left center;background-repeat: no-repeat;"></div>
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
								<div class="col-4" style="background-image: url('../../images/ayapay/agent.png');background-size: contain;background-position: left center;background-repeat: no-repeat;"></div>
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
						<div class="col-md-7 col-xs-12 explore_cta_col">
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

	$(".timeline-badge-1").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-1").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_1").removeClass('d-none');
	});
	$(".timeline-badge-2").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-2").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_2").removeClass('d-none');
	});
	$(".timeline-badge-3").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-3").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_3").removeClass('d-none');
	});
	$(".timeline-badge-4").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-4").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_4").removeClass('d-none');
	});
	$(".timeline-badge-5").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-5").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_5").removeClass('d-none');
	});
	$(".timeline-badge-6").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-6").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_6").removeClass('d-none');
	});
	$(".timeline-badge-7").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-7").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_7").removeClass('d-none');
	});
	$(".timeline-badge-8").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-8").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_8").removeClass('d-none');
	});
	$(".timeline-badge-9").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-9").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_9").removeClass('d-none');
	});
	$(".timeline-badge-10").click(function() {
		$(".timeline-badge").removeClass('active');
		$(".timeline-badge-10").addClass('active');
		$(".reg_phone").addClass('d-none');
		$(".reg_phone_10").removeClass('d-none');
	});
</script>

@endsection('content')