@extends('layouts.frontend-app')

@section('title', 'Debit Card – AYA Bank')
<style type="text/css">
    .nav-align-top .nav-tabs .nav-item:first-child .nav-link {
    	border-top:  none;
    	border-left: none;
    	border-right: none;
    	box-shadow: none;
    }
    .tab_title > span {
    	padding: 20px 0px;
    }
    .nav-align-top .nav-tabs .tab_title.active span {
    	border-bottom: 5px solid #a02226;
    }
    .nav-pills .tab_title.active, .nav-pills .tab_title.active:hover, .nav-pills .tab_title.active:focus {
    	background-color: transparent !important;
	    color: #000 !important;
	    box-shadow: none !important;
	    border-bottom: 5px solid #ae002c;
	    border-radius: 0;
	    font-weight: 500;
    }
    .nav .tab_title:hover, .nav .tab_title:focus {
    	color: #000 !important;
    }
    .nav-pills .tab_title {
    	font-weight: 400;
    	font-size: 16px;
    }
    .benefit_icon {
		width: 60% !important;
	}
	.outer_benefit_box {
		padding: 0px 20px 20px 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
	}
	.solution_text {
		color: #000;
		margin-bottom: 5px;
	}
	.mpu_jbc_tab {
		background-image: url('./images/MPU_JCB_card.png');
		background-size: cover;
		background-repeat: no-repeat;
		height: 520px;
		background-position: center left;
	}
	.mpu_upi_tab {
		background-image: url('./images/JBC_UPI_card.png');
		background-size: cover;
		background-repeat: no-repeat;
		height: 520px;
		background-position: center left;
	}
	.tab_data_row {
		width: 100%;
	}
	.tab_h2, .tab_upi_h2 {
		font-weight: 800;
		position: absolute;
		top: 230px;
	}
	.how_to_apply_icon {
		width: 80%;
	}
	.how_to_apply_outer_section {
		background-image: url('./images/how_to_apply_bg.jpg');
		background-size: cover;
		background-position: bottom center;
	}
	.debit_how_to_apply_section {
		padding: 40px 50px 60px 50px !important;
	}
	.ecommerce_registration_bg {
		background-image: url('./images/MPU_ecommerce_registration.jpg');
		background-size: cover;
	}
	.ecommerce_registration_container {
		padding: 40px 0px 40px 100px !important;
	}
	@media (min-width: 768px){
		.col-md-3 {
		    width: 23% !important;
		}
	}
	@media only screen and (max-width: 576px){
		.tab-pane {
			background-position: -80px -70px;
		}
		.tab_data_row {
			/*width: auto;*/
		}
		.tab_h2{
			top: 380px;
		}
		.tab_upi_h2{
			top: 380px;
			left: 15%;
		}
		.outer_benefit_box {
			margin-bottom: 10px;
		}
		.how_to_apply_icon {
			width: 100%;
		}
		.debit_how_to_apply_section {
		    padding: 40px 30px 60px 30px !important;
		}
		.how_to_apply_outer_section {
			background-image: url('./images/how_to_apply_mobile_bg.jpg');
			background-position: left;
		}
		.ecommerce_registration_bg {
			background-image: none;
			background-color: #f3f3f2;
		}
		.ecommerce_registration_container {
			padding: 40px 0px 40px 40px !important;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'debitcard'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'debitcard'])

			<div>
				<div class="space-80"></div>
				<div class="nav-align-top mb-4">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true" >
								MPU-JCB
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false" >
								MPU-UPI
							</button>
						</li>
					</ul>
					<div class="tab-content" style="padding:0;background-image: url('./images/card_bg.jpg');background-size: cover;background-repeat: no-repeat;">
						<div class="tab-pane fade mpu_jbc_tab show active" id="navs-pills-top-home" role="tabpanel">
							<div class="row tab_data_row" >
								<div class="col-md-6"></div>
								<div class="col-md-6 text-center" style="position: relative;">
									<h2 class="tab_h2"><span style="color: #000;">It is easy, accessible and convenience with </span><span style="color: #a02226"><Br>AYA Universal Debit Card</span></h2>
								</div>
							</div>
						</div>
						<div class="tab-pane mpu_upi_tab fade" id="navs-pills-top-profile" role="tabpanel">
							<div class="row tab_data_row" >
								<div class="col-md-6"></div>
								<div class="col-md-6 text-center" style="position: relative;">
									<!-- style="font-weight: 800;position: absolute;top: 230px;" -->
									<h2 class="tab_upi_h2"><span style="color: #000;">Buy what you eyed with </span><span style="color: #a02226"><Br>AYA Universal Debit Card</span></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-12">
						<h3 style="font-weight: 600;color: #000;">Benefits</h3>
					</div>
				</div>
				
				<div class="space-20"></div>
				
				<div class="row" style="column-gap: 20px;">
					<div class="col-md-3 outer_benefit_box">
						<div class="row benefit_box">
							<img src="{{ url('/images/purchase.png') }}" class="img-fluid benefit_icon">
							<p class="solution_text solution_desc">Purchase securely for all global products and services through online and POS</p>
						</div>
					</div>
					<div class="col-md-3 outer_benefit_box">
						<div class="row benefit_box">
							<img src="{{ url('/images/shop_travel.png') }}" class="img-fluid benefit_icon">
							<p class="solution_text solution_desc">Shop, travel, dine with ease and make hassle-free transactions in overseas with AYA Universal Debit cards.</p>
						</div>
					</div>
					<div class="col-md-3 outer_benefit_box">
						<div class="row benefit_box">
							<img src="{{ url('/images/use_debit_card.png') }}" class="img-fluid benefit_icon">
							<p class="solution_text solution_desc">Use your debit card and get an instant cash at nearest ATM.</p>
						</div>
					</div>
					<div class="col-md-3 outer_benefit_box">
						<div class="row benefit_box">
							<img src="{{ url('/images/use_debit_card_with_zero_annual.png') }}" class="img-fluid benefit_icon">
							<p class="solution_text solution_desc">Get AYA debit card with $0 Annual fees and enjoy convenience, secured and easy payment method 24/7.</p>
						</div>
					</div>
				</div>

				<div class="space-40"></div>

				<div class="row">
					<div class="col-md-12">
						<h4 style="font-weight: 500;color: #000;margin-bottom: 10px;">Fess and Charges</h4>
						<p><a href="{{ url('/file/cardservices/Debit Card Fees and Charges and Card features.xlsx') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Click here for fees and charges</a> <i class="menu-icon tf-icons bx bx-chevron-down"></i></p>
					</div>
					<div class="space-20"></div>
					<div class="col-md-12">
						<h4 style="font-weight: 500;color: #000;margin-bottom: 10px;">Card Features</h4>
						<p><a href="{{ url('/file/cardservices/Debit Card Fees and Charges and Card features.xlsx') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Learn our Debit Card features here</a> <i class="menu-icon tf-icons bx bx-chevron-down"></i></p>
					</div>
				</div>

				<div class="space-40"></div>
			</div>


			<div class="d-block d-sm-none">
				<img src="{{ url('/images/debit_how_to_apply_mobile.jpg') }}" class="img-fluid">
			</div>
			<div class="how_to_apply_outer_section">
				<div class="container debit_how_to_apply_section" style="">
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-6 how_to_apply_desc" style="">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 1.5rem;">How to Apply</p>
							</div>

							<div class="row">
								<div class="col-3">
									<img src="{{ url('/images/eligibility_icon.png') }}" class="img-fluid how_to_apply_icon">
								</div>
								<div class="col-9">
									<p>
										<b>Eligibility</b><br>
										The applicant must be Myanmar citizen or permanent residence, at least 18 years old.
									</p>
								</div>
							</div>

							<div class="row">
								<div class="col-3">
									<img src="{{ url('/images/application_icon.png') }}" class="img-fluid how_to_apply_icon">
								</div>
								<div class="col-9">
									<p>
										<b>Application</b><br>
										To apply AYA Debit Card, visit nearest branch, bring along with NRC or Passport and fill application form.
									</p>
								</div>
							</div>

							<div class="row">
								<div class="col-3">
									<img src="{{ url('/images/monitoring_icon.png') }}" class="img-fluid how_to_apply_icon">
								</div>
								<div class="col-9">
									<p>
										<b>Monitoring your payment</b><br>
										Monitor all your transactions and payment through AYA m-Baking and i-Banking.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
				</div>
			</div>
			<div class="space-60"></div>

			<div class="">
				<div class="col-12 text-center">
					<h4 style="font-weight: 500;color: #000;">Forgot your card PIN?</h4>
					<p>You can reset / change your PIN easily via online.</p>
					<a target="_blank" href="{{ url('/file/cardservices/Reset Pin for Card.docx') }}">
						<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 25px;border: #ae071d;margin-bottom: 2rem;">
							Reset PIN
						</button>
					</a>
				</div>
			</div>

			<div class="space-40"></div>

			<div class="d-block d-sm-none">
				<img src="{{ url('/images/MPU_ecommerce_registration_mobile.jpg') }}" class="img-fluid">
			</div>
			<div class="ecommerce_registration_bg">
				<div class="container ecommerce_registration_container">
					<div class="space-40"></div>
					<div class="row" style="width: 100%">
						<div class="col-md-6"></div>
						<div class="col-md-6 how_to_apply_desc" style="">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 26px;margin-bottom: 1.5rem;">AYA MPU Card E-Commerce Registration</p>

								<p>In order to allow MPU cardholder customers for buying online products and services, you are required to register and your current mobile number must be registered with AYA Bank.</p>

								<div class="space-40"></div>
								
								<a target="_blank" href="{{ url('/file/cardservices/Debit Card E-commerce Registration Form.png') }}">
									<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 25px;border: #ae071d;margin-bottom: 2rem;">
										Register Now
									</button>
								</a>

								<div class="space-40"></div>
								
								<p style="font-size: 12;color: #4e4e4e;margin-bottom: 0px;">Kindly note that registration will not be successful if your current mobile number is not registered with AYA Bank or updated in the system. Please visit the nearest AYA Branch with any proof of identity to register your phone number.</p>
							</div>
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
				</div>
			</div>

			<div class="space-40"></div>

			<div class="container faq_section" style="">
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="color: #343434;font-weight: 600;">Frequently Asked Questions</h3>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									What is Debit Card?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Debit Card is a card allowing the holder to transfer money electronically from their bank account when making a purchase.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Is there a way to receive remittances by using Debit Cards?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Yes, remittance can be received in Debit card as it is connected with Bank account. The Bank has to do the integration work with remittance services.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Can Debit Card be used at Shopping centres?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Yes, Debit Card can be used for purchasing by using Point of Sales (POS) machine or E-commerce online. Payment is deducted directly from your account.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									How to apply MPU Debit Card ?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You can apply Debit Card during accout opening. Please visit to any of AYA Branches with NRC Card, 2 License Photo, two guarantors of existing AYA Bank account holders and open any account  with initial deposit (Eg. for Saving account 10000 Kyats). 4:1 Service (1)  UNIVERSAL Debit Card (MPU-JCB Co-Brand)၊ (2) Saving Book (3) Application of m-Banking , and (4) i- Banking services will be provided and the interest can be enjoyed as per type of accounts. Debit Card can also be linked with Current Account but interest will not be able to enjoy.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									What will happen If I do not use my Debit Card for a long time? 
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Bank will freeze your Debit Card / ATM Card for security reasons, if there is no trasactions made for 3 months . Please approach your nearest Branches with NRC card for re-activation of your card.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingSix">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									How can I do if I lose my Debit Card?
								</button>
							</h2>
							<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You’ll need to alert the Bank ASAP, so we can take steps to protect your account from fraud. Contact us at 01- 2317777 to freeze your Debit Card.<br>
										Approach to any Branch with your NRC card and saving book to apply replacement card. The replacement card will be charged at MMK 3,000. 
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
		$("#simple_login_mockup").show(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".quick_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").show(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".manage_credit_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").show(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".prepaid_card_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").show(500);
	});

	$(".secure_transaction_div").click(function() {
		$("#secure_transaction_mockup").show(500);
		$("#easy_transfer_payment_mockup").hide(500);
		$("#ATM_withdrawal_mockup").hide(500);
	});
	$(".easy_transfer_payment_div").click(function() {
		$("#secure_transaction_mockup").hide(500);
		$("#easy_transfer_payment_mockup").show(500);
		$("#ATM_withdrawal_mockup").hide(500);
	});
	$(".ATM_withdrawal_div").click(function() {
		$("#secure_transaction_mockup").hide(500);
		$("#easy_transfer_payment_mockup").hide(500);
		$("#ATM_withdrawal_mockup").show(500);
	});
</script>

@endsection('content')