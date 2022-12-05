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
		padding: 40px 100px 60px 100px;
		background-image: url('./images/more_support.png');
		background-size: cover;
		border-radius: 6px;
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
	}
	@media only screen and (max-width: 576px){
		.why_use_AYA_outer > .col-md-6 {
			width: 100%;
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

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'ayapay'])
				<div class="row">
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
						<!-- <img src="{{ url('/images/simple_login_mockup.png') }}" class="img-fluid" id="simple_login_mockup" style="width: 75%;">
						<img src="{{ url('/images/quick_check_balance_mockup.png') }}" class="img-fluid" id="quick_mockup" style="width: 75%;display: none;">
						<img src="{{ url('/images/simple_login_mockup.png') }}" class="img-fluid" id="manage_credit_mockup" style="width: 75%;display: none;">
						<img src="{{ url('/images/simple_login_mockup.png') }}" class="img-fluid" id="prepaid_card_mockup" style="width: 75%;display: none;"> -->
					</div>
				</div>
			</div>
			<div class="space-40"></div>
			<div class="how_to_apply_bg">
				<div class="container" style="">
					<div class="row">
						<div class="col-md-12 text-center">
							<img src="{{ url('/images/ayapay/ayapay_registration_title.png') }}" class="img-fluid" style="width: 50%">
							<!-- <img src="{{ url('/images/ayapay/AYAPay_Registration_Guide.png') }}" class="img-fluid" style="width: 80%"> -->
						</div>
						<div class="col-md-12">
							
						</div>						
					</div>
				</div>
			</div>
			<div class="space-40"></div>
			<div class="need_more_support_section">
				<div class="container d-none d-sm-block need_more_support_section_inner">
					<div class="row">
						<div class="col-md-5 col-xs-12 text-center" style="padding-top: 80px;">
							<p style="color: #a02225;font-weight: 500;font-size: 20px;margin-bottom: 5px;">Need more support?</p>
							<p style="font-weight:400;color: #4e4e4e;">Read our <a href="{{ url('/file/mBanking/mBanking version 2.2.5 User Guide (01 28042022) .pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">AYA Mobile banking 2.0 user guide</a></p>
							<div style="height: 70px;"></div>
						</div>
						<div class="col-md-7"></div>
					</div>
				</div>

				<div class="container d-block d-sm-none" style="padding: 20px 50px 30px 50px;background-color: #f5f5f5;border-radius: 10px;margin-bottom: 50px;">
					<div class="row">
						<div class="col-xs-12 text-center" style="padding-top: 20px;">
							<p style="color: #a02225;font-weight: 500;font-size: 20px;margin-bottom: 5px;">Need more support?</p>
							<p style="font-weight:400;color: #4e4e4e;">Read our <a href="{{ url('/file/mBanking/mBanking version 2.2.5 User Guide (01 28042022) .pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">AYA Mobile banking 2.0 user guide</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="container faq_section" style="">
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="color: #343434;font-weight: 600;">FAQs</h3>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									How to apply AYA i-Banking / m-Banking ?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>To get i-Banking / m-Banking service that can be linked to your AYA Bank Account/Card Account, you can apply at nearest branch by filling AYA i-Banking / m-Banking Application form. You will need to bring only your saving book and NRC Card. Altnernatively, you can apply online at https://ibankapp.ayabank.com/ with your details without having to visit the branch. </p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Where can I download m-Banking application?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										On your mobile or tablet, you can download 'AYA m-Banking 2.0 Version' application at 'Play Store' for Android and 'Apple Store' for iOS.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What is the limit on i-Banking / m-Banking transfer?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										With AYA i-Banking, the maximum transaction limit for one transaction is MMK 50 million and a user can transfer up to MMK 150 million per day.
										<Br>
										With AYA m-Banking, the maximum transaction limit for one transaction is MMK 20 million and a user can transfer up to MMK 100 million per day.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What should I do if I forgot my i-Banking / m-Banking password?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										In the event of forgetting your i-Banking / m-Banking password, you can either apply new password at nearest branch by bringing NRC Card and saving book (or) reset password yourself at m-Banking 2.0.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How do I change password in m-Banking? 
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You can change your m-Banking password by logging to AYA m-Banking application and accessing 'Change password' option under 'AYA m-Banking Settings' menu on the upper left corner of main page. New m-Banking password shall include capital letter, small letter, special letter (for example - @!#), and numbers (or) characters.
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
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

<script type="text/javascript">
	$(".simple_login_div").click(function() {
		$("#slide_1").click();
		// $("#simple_login_mockup").show(500);
		// $("#quick_mockup").hide(500);
		// $("#manage_credit_mockup").hide(500);
		// $("#prepaid_card_mockup").hide(500);
	});
	$(".quick_div").click(function() {
		$("#slide_2").click();
		// $("#simple_login_mockup").hide(500);
		// $("#quick_mockup").show(500);
		// $("#manage_credit_mockup").hide(500);
		// $("#prepaid_card_mockup").hide(500);
	});
	$(".manage_credit_div").click(function() {
		$("#slide_3").click();
		// $("#simple_login_mockup").hide(500);
		// $("#quick_mockup").hide(500);
		// $("#manage_credit_mockup").show(500);
		// $("#prepaid_card_mockup").hide(500);
	});
	$(".prepaid_card_div").click(function() {
		$("#slide_4").click();
		// $("#simple_login_mockup").hide(500);
		// $("#quick_mockup").hide(500);
		// $("#manage_credit_mockup").hide(500);
		// $("#prepaid_card_mockup").show(500);
	});

	$(".secure_transaction_div").click(function() {
		$("#slide2_1").click();
		// $("#secure_transaction_mockup").show(500);
		// $("#easy_transfer_payment_mockup").hide(500);
		// $("#ATM_withdrawal_mockup").hide(500);
	});
	$(".easy_transfer_payment_div").click(function() {
		$("#slide2_2").click();
		// $("#secure_transaction_mockup").hide(500);
		// $("#easy_transfer_payment_mockup").show(500);
		// $("#ATM_withdrawal_mockup").hide(500);
	});
	$(".ATM_withdrawal_div").click(function() {
		$("#slide2_3").click();
		// $("#secure_transaction_mockup").hide(500);
		// $("#easy_transfer_payment_mockup").hide(500);
		// $("#ATM_withdrawal_mockup").show(500);
	});
</script>

@endsection('content')