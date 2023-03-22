@extends('layouts.frontend-app')

@section('title', 'Local Payments – AYA Bank')
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
	.tab_data_row {
		width: 100%;
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
	.secure_req_application_icon {
		background-color: #a02226;
		color: #fff;
		border-radius: 50%;
		font-size: 20px;
	}
	.bullet_square {
		float: right;
		margin-top: 5px;
		width: 10%;
	}
	.payment_order_tagline {
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		width: 45% !important;
		position: absolute;
		top: 60%;
   		right: -10%;
		text-align: left;
	}
	.create_payment_order_div {
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

	.mobile_payment_order {
		display: none;
	}
	@media (max-width: 1300px) and (min-width: 1271px) {
		.bullet_square {
			width: 10%;
		}
	}
	@media (max-width: 1270px) and (min-width: 1000px) {
		.bullet_square {
			width: 15%;
		}
		.bullet_square {
			margin-top: 7px;
		}
		.payment_order_tagline {
		    font-size: 18px;
		    line-height: 24px;
		    top: 55%;
		    right: -5%;
		}
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
		.bullet_square {
			width: 70%;
		}
		.bullet_square {
			margin-top: 10px;
			margin-right: -10px;
		}
		.payment_order_tagline {
		    font-size: 15px;
		    line-height: 20px;
		    width: 75% !important;
		    top: 40%;
		    right: 0%;
		}
		.desktop_payment_order {
			display: none;
		}
		.mobile_payment_order {
			display: block;
		}
		.visit_us_btn {
			float: none;
			margin-top: 20px;
		}
		.create_payment_order_col {
			text-align: center;
		}
		.visit_us_div {
			background-position: 97% center;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_remittance_local'])

			<div class="space-40"></div>
			<div class="container section_1" >
				<div class="row">
					<div class="text-center px-10">
						<p class="fw-semibold" style="font-size: 18px;">Secure, fast and reliable is most important and this is made possible and easy with AYA payments services.</p>
					</div>
					<div class="space-40"></div>
				</div>
			</div>
			<div>
				<div class="col-md-12">
					<div class="nav-align-top">
						<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
							<li class="nav-item">
								<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-aya-to-aya" aria-controls="navs-pills-top-aya-to-aya" aria-selected="true" >
									AYA To AYA
								</button>
							</li>
							<li class="nav-item">
								<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-interbank-transfer" aria-controls="navs-pills-top-interbank-transfer" aria-selected="false" >
									Interbank Transfer
								</button>
							</li>
							<li class="nav-item">
								<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-cheque-payment" aria-controls="navs-pills-top-cheque-payment" aria-selected="false" >
									Cheque Payment
								</button>
							</li>
							<li class="nav-item">
								<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-payment-order" aria-controls="navs-pills-top-payment-order" aria-selected="false" >
									Payment Order
								</button>
							</li>
						</ul>
						<div class="tab-content" style="background-color: transparent;padding: 20px 0px 0px 0px;background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);">
							<div class="tab-pane fade aya-to-aya show active" id="navs-pills-top-aya-to-aya" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row tab_data_row" style="margin-top: 20px;">
										<div class="col-md-6">
											<p style="font-size: 17px;">Making payments is now easier than ever before and no longer costly.</p>
											<div class="space-10"></div>
											<p>With a wide range of network of AYA across the country, pay a visit to our branches or simply logging into our internet banking to keeping costs down and saving your time. It can be delivered almost instantly or in a matter of minutes.</p>
										</div>
										<div class="col-md-6">
											<img src="{{ url('/images/business/remittance/local-payments/aya_to_aya.png') }}" class="img-fluid">
										</div>
									</div>
									<div class="space-60"></div>
								</div>
							</div>
							<div class="tab-pane interbank-transfer fade" id="navs-pills-top-interbank-transfer" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row tab_data_row" style="margin-top: 20px;">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<p>Various channels are available to transfer funds to other bank’s account. The most easy and convenient way is via internet banking or mobile banking.</p>
										</div>
										<div class="col-md-2"></div>
										<!-- <div class="col-md-6">
											<img src="{{ url('/images/business/remittance/local-payments/interbank_transfer.png') }}" class="img-fluid">
										</div> -->
									</div>
									<div class="space-60"></div>
								</div>
							</div>
							<div class="tab-pane cheque-payment fade" id="navs-pills-top-cheque-payment" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row tab_data_row" style="margin-top: 20px;">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<p>Your financial obligations to vendors, lenders, government and all accounts payable, cheque payment is still one of the reliable methods in business transactions which can be done in a very safe manner.</p>
										</div>
										<div class="col-md-2"></div>
										<div class="space-20"></div>
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<p class="fw-500 theme_text_color" style="font-size: 16px;">Notes for Cheque Clearing Time!</p>
											<p>Depositing cheque at branches after 12pm, cheque clearing process will be commence on the next working day only. To provide better service, cheque deposits at branches are advised to be done before 12pm.</p>
										</div>
										<div class="col-md-2"></div>
									</div>
									<div class="space-60"></div>
								</div>
							</div>
							<div class="tab-pane payment-order fade" id="navs-pills-top-payment-order" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row" style="position: relative;">
										<img src="{{ url('/images/business/remittance/local-payments/payment_order.png') }}" class="img-fluid desktop_payment_order">
										<img src="{{ url('/images/business/remittance/local-payments/payment_order_mobile.png') }}" class="img-fluid mobile_payment_order">
										<p class="payment_order_tagline">A Secure, safe and alternate <br>payment method</p>
									</div>
									<div class="text-center py-3">
										<p class="fw-semibold" style="font-size: 16px;">Payment Order (PO) is designed to make a payment for a particular amount for a third-party <br>that is not a bank.</p>
									</div>

									<div class="col-md-12">
										<p class="fw-500" style="font-size: 17px">Features and Benefits</p>
									</div>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 mx-sm-n5">
											<p>Removes the risk of carrying large amounts of cash to individuals, company and associations.</p>
										</div>
									</div>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 mx-sm-n5">
											<p>Guarantee payment to beneficiary officially</p>
										</div>
									</div>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 mx-sm-n5">
											<p>Convenient to settle your business when you don't have the banking details of the payee</p>
										</div>
									</div>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 mx-sm-n5">
											<p>One of the low-cost payment methods for non-urgent payments</p>
										</div>
									</div>
									<div class="space-20"></div>
									<div class="row create_payment_order_div p-sm-4 ">
										<div class="col-md-6 create_payment_order_col">
											<p class="my-md-0 fw-semibold" style="font-size: 16px;">Create a Payment Order</p>
											<p class="my-md-0">at any of AYA branch</p>
										</div>
										<div class="col-md-6 create_payment_order_col">
											<a href="#" target="_blank">
												<button class="btn visit_us_btn">
													Visit Us
												</button>
											</a>
										</div>
									</div>
									<div class="space-60"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')