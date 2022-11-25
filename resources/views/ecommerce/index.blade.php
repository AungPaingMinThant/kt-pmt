@extends('layouts.frontend-app')

@section('title', 'Ecommerce – AYA Bank')
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
	.tab-content {
		box-shadow: none !important;
	}
	.benefit_feature_box {
		display: table;
	}
	.why_use_AYA {
		display: table-cell !important;
	}
	.tab_section_1 {
	    padding: 0px 100px !important;
	}
	@media (min-width: 768px){
		.col-md-3 {
		    width: 23% !important;
		}
	}
	@media only screen and (max-width: 576px){
		.tab_section_1 {
		    padding: 0px 30px !important;
		}
		.tab-pane {
			background-position: -80px -70px;
		}
		.tab_data_row {
			width: auto;
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
			@include('layouts.header', ['page'=>'ecommerce'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'ecommerce'])

			<div style="">
				<div class="space-40"></div>
				<div class="nav-align-top mb-4">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-feature_benefit" aria-controls="navs-pills-top-feature_benefit" aria-selected="true" >
								Features and Benefits
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-eligibility" aria-controls="navs-pills-top-eligibility" aria-selected="false" >
								Eligibility
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-apply" aria-controls="navs-pills-top-apply" aria-selected="false" >
								How to Apply
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 20px 0px 0px 0px;">
						<div class="tab-pane fade feature_benefit show active" id="navs-pills-top-feature_benefit" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/Experience_seamless_payment_services.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;margin-top: 20px;">Experience seamless payment services "Secure Payment gateway and reliable processing" with AYA for international widely known brands.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/One_stop_service.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;margin-top: 20px;">One stop service for all major card networks and 99.999% uptime for international networks.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/multiple_payment_channels.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;margin-top: 20px;">Support with multiple payment channels such as Mobile, Web, Kiosk, POS and Mobile POS.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/Secure_Transactions.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;margin-top: 20px;">Secure Transactions: Extensively provides 3D Secure (3-domain structure) authentication that helps to prevent frauds and unauthorized transactions for all cards.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/ecommerce/Accelerate_your_Speed_to_market.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;margin-top: 20px;">Accelerate your Speed to market. Your relationship managers will assist you for further application process.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane eligibility fade" id="navs-pills-top-eligibility" role="tabpanel">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<p style="color: #4e4e4e;margin-top: 20px;">All Business entity incorporated in Myanmar. Business licenses from Yangon city Development Committee or Company license from DICA and Copy of owner’s NRC is needed to provide. Applicant must have any accounts at AYA.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane apply fade" id="navs-pills-top-apply" role="tabpanel">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<p style="color: #4e4e4e;margin-top: 20px;">How to Apply: <br>Call us at Merchant Operations: <a href="tel:+959258889973" style="color: #a02226">+95) 9 25 888 9973</a>, <a href="tel:+95925888993" style="color: #a02226">+95) 9 25 888 9937</a> or <Br>Email us at <a href="mailto:mchecommerce@ayabank.com" style="color: #a02226">mchecommerce@ayabank.com</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="space-40"></div>

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
									Who can I contact for enquiry and onboarding process?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Please email us at <a href="mailto:mchecommerce@ayabank.com">mchecommerce@ayabank.com</a> for enquiry.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What are the fees and charges?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Our Relation Managers will provide a competitive quote based on your product and services.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									How soon can I get my payment after the settlement?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Net amount will be credited to your designated AYA Business Account within (3) working days from transaction date.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Who can I contact if I experience payment related issues?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Please email us at mchpayment@ayabank.com for payment related issues.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									What is 3D Secure programme?
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										3D Secure Programme is an additional layer of card holder authentication on online card transactions. For online transactions, cardholder will be redirected to a 3DS secure page for cardholder verification (such as OTP).
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingSix">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									What are the Payment Gateways that AYA Credit Card support?
								</button>
							</h2>
							<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										We support certified payment gateways, including MPU, VISA, MASTERCARD and JCB.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingSeven">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									What are the online payment services provided by AYA and Payment Gateways?
								</button>
							</h2>
							<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										We support majority of ecommerce services.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingEight">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									How do I integrate with the Payment Gateways and AYA?
								</button>
							</h2>
							<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Bank will provide required specifications to merchant directly.
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