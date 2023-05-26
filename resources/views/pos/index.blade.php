@extends('layouts.frontend-app')

@section('title', 'POS – AYA Bank')
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
	.secure_req_application_icon {
		background-color: #a02226;
		color: #fff;
		border-radius: 50%;
		font-size: 20px;
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
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'pos'])

			<div style="">
				<div class="space-80"></div>
				<div class="nav-align-top mb-4">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-benefit" aria-controls="navs-pills-top-benefit" aria-selected="true" >
								Benefits
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-wide-range-payment-option" aria-controls="navs-pills-top-wide-range-payment-option" aria-selected="false" >
								Wide-Ranging Payment Options
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-all-inclusive-services" aria-controls="navs-pills-top-all-inclusive-services" aria-selected="false" >
								All-inclusive Services
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-eligibility" aria-controls="navs-pills-top-eligibility" aria-selected="false" >
								How to Apply
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;">
						<div class="tab-pane fade show active" id="navs-pills-top-benefit" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<img src="{{ url('/images/POS/POS_machine.png') }}" class="img-fluid" style="width: 80%">
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>Reduce the complexity of running your business and focus on customers’ experience with AYA Bank POS Terminal services.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>It will reduce your operational risk and cost of handling cash and enhance secure payment. </p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>More payment option is available and enhanced secure payment</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>Enhanced mobility and make sales anywhere</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>Shorter queue and speed up at the Checkout</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact">
												<p>Contactless payment mode is available for better customer experience</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane wide-range-payment-option fade" id="navs-pills-top-wide-range-payment-option" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-1"></div>
									<div class="col-md-10 benefit_feature_box" style="padding: 20px;">
										<div class="space-20"></div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>Online services are offered with most debits and credits cards including Myanmar Payment Union (MPU), UPI, JCB debit cards, Visa, MasterCard on a real-time basis.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>We accept all debit and credit cards (MPU, JCB, UPI, VISA, MASTER CARD)</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>POS Terminal is integrated with AYA Pay wallet</p>
											</div>
										</div>
										<div class="space-40"></div>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
						</div>
						<div class="tab-pane all-inclusive-services fade" id="navs-pills-top-all-inclusive-services" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-1"></div>
									<div class="col-md-10 benefit_feature_box" style="padding: 20px;">
										<div class="space-20"></div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>Free of charge for Installations, User training guides, transaction reports or machine maintenance.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>Payment integration can be made to your existing POS system.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>Free of charge for installation, training and operating user manual and onsite support</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>24/7 hotline support is available for any technical error</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>Payment Integration is possible (Integration between merchant’s existing Point of Sales System and AYA POS)</p>
											</div>
										</div>
										<div class="space-40"></div>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
						</div>
						<div class="tab-pane eligibility fade" id="navs-pills-top-eligibility" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-1"></div>
									<div class="col-md-10 benefit_feature_box" style="padding: 20px;">
										<div class="space-20"></div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>Call us at <a href="tel:+959258889973" style="color: #a02226">+(95) 9 25 888 9973</a>, <a href="tel:+959258889937" style="color: #a02226">+(95) 9 25 888 9937</a> or visit any of our Branches for more details.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 col-2" style="padding-top: 5px;">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-md-11 col-10 secure_credit_fact ml-minus-30">
												<p>You may also email us at <a href="mailto:mchsupport.card@ayabank.com" style="color: #a02226">mchsupport.card@ayabank.com</a> and arrange our Relationship Manager to call you.</p>
											</div>
										</div>
										<div class="space-40"></div>
									</div>
									<div class="col-md-1"></div>
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
									Can I apply for these services from any AYA branches?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Yes, you can apply our services for POS System at all AYA Branches.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What is the cut-off time for POS?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										POS machine supports 24/7 services and cut-off time is at 12 am. 
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									When will the funds be credited into merchant account?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										The funds can be credited into your AYA account within 3 working days from transaction date.
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