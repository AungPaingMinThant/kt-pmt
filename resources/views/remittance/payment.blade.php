@extends('layouts.frontend-app')

@section('title', 'Payment Remittance – AYA Bank')
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
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'remittance_payment'])

			<div class="space-40"></div>
			<div class="container section_1" >
				<div class="row">
					<p style="font-size: 18px;">Available channels for Payments are;</p>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12 secure_credit_fact">
								<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>AYA ATM</p>
								<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>AYA iBanking</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12 secure_credit_fact">
								<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>AYA mBanking</p>
								<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>AYA Branches</p>
							</div>
						</div>
					</div>

					<div class="space-40"></div>
				</div>
			</div>
			<div>
				<div class="col-md-12">
					<div class="nav-align-top">
						<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
							<li class="nav-item">
								<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-cheque_payment" aria-controls="navs-pills-top-cheque_payment" aria-selected="true" >
									Cheque Payment
								</button>
							</li>
							<li class="nav-item">
								<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-bill_payment" aria-controls="navs-pills-top-bill_payment" aria-selected="false" >
									Bill Payment
								</button>
							</li>
							<li class="nav-item">
								<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-gift_cheque" aria-controls="navs-pills-top-gift_cheque" aria-selected="false" >
									Gift Cheque
								</button>
							</li>
						</ul>
						<div class="tab-content" style="background-color: transparent;padding: 20px 0px 0px 0px;background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);">
							<div class="tab-pane fade cheque_payment show active" id="navs-pills-top-cheque_payment" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row tab_data_row" style="margin-top: 20px;">
										<div class="col-md-6" style="padding-right: 70px;">
											<p>Making financial transactions can be convenient by means of using cheque for personal or business payments.</p>
											<div class="space-20"></div>
											<p>Cheque payment within AYA Bank’s network can be done instantly, and for other banks you will be able to withdraw the funds on the following banking day.</p>
										</div>
										<div class="col-md-6">
											<img src="{{ url('/images/remittance/payment/cheque_payment.png') }}" class="img-fluid">
										</div>
									</div>
									<div class="space-60"></div>
								</div>
							</div>
							<div class="tab-pane bill_payment fade" id="navs-pills-top-bill_payment" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row tab_data_row" style="margin-top: 20px;">
										<div class="col-md-6" style="padding-right: 70px;">
											<p>We can make it easier for you to pay bills when you need to, and to pay on-time every time. It can be routed through AYA Bank’s bill payment services at branches or simply click and pay on digital channels.</p>
											<div class="space-20"></div>
											<p>It provides efficient and timeless of payments with straight-through-processing (STP) meanwhile ensuring payment is credited to payee’s account as per specified value date.</p>
										</div>
										<div class="col-md-6">
											<img src="{{ url('/images/remittance/payment/bill_payment.png') }}" class="img-fluid">
										</div>
									</div>
									<div class="space-60"></div>
								</div>
							</div>
							<div class="tab-pane gift_cheque fade" id="navs-pills-top-gift_cheque" role="tabpanel">
								<div class="container tab_section_1">
									<div class="d-none d-sm-block">
										<div class="row tab_data_row" >
											<div class="col-md-12" style="padding: 20px;">
												<p style="font-size: 18px;font-weight: 500;">The best gift to the loved ones alternatively of hard cash.</p>
												<p>Modernized, secure and personalized cashless payment services for the sake of social purposes such as recognition for wedding, birthday, anniversary and gift for motivational purpose like social, sports, educational, scholarship, etc.</p>
											</div>

											<div class="col-1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;">Available at any AYA Branches</p>
											</div>

											<div class="col-1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;">Service Fees MMK 500 per cheque</p>
											</div>

											<div class="col-1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;">Customer to choose design for relevant purpose</p>
											</div>

											<div class="space-40"></div>

											<div class="col-md-7 text-center">
												<img src="{{ url('/images/remittance/payment/Birthday-gift-cheque.jpg') }}" class="img-fluid">
											</div>
											<div class="col-md-5" style="display: flex;align-items: center;">
												<p style="font-weight: 500;font-size: 16px;">Birthday Gift Cheque</p>
											</div>

											<div class="col-md-12 space-40"></div>

											<div class="col-md-5" style="display: flex;align-items: center;justify-content: flex-end;">
												<p style="font-weight: 500;font-size: 16px;">General Gift Cheque</p>
											</div>
											<div class="col-md-7 text-center">
												<img src="{{ url('/images/remittance/payment/General-Gift-Cheque.jpg') }}" class="img-fluid">
											</div>

											<div class="col-md-12 space-40"></div>

											<div class="col-md-7 text-center">
												<img src="{{ url('/images/remittance/payment/Wedding-gift-cheque.jpg') }}" class="img-fluid">
											</div>
											<div class="col-md-5" style="display: flex;align-items: center;">
												<p style="font-weight: 500;font-size: 16px;">Wedding Gift Cheque</p>
											</div>
										</div>
									</div>
									<div class="d-block d-sm-none">
										<div class="row tab_data_row" >
											<div class="col-md-12" style="padding: 20px;">
												<p style="font-size: 18px;font-weight: 500;">The best gift to the loved ones alternatively of hard cash.</p>
												<p>Modernized, secure and personalized cashless payment services for the sake of social purposes such as recognition for wedding, birthday, anniversary and gift for motivational purpose like social, sports, educational, scholarship, etc.</p>
											</div>
											
											<div class="col-1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;">Available at any AYA Branches</p>
											</div>

											<div class="col-1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;">Service Fees MMK 500 per cheque</p>
											</div>

											<div class="col-1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;">Customer to choose design for relevant purpose</p>
											</div>

											<div class="space-40"></div>

											<div class="col-md-12 text-center">
												<img src="{{ url('/images/remittance/payment/Birthday-gift-cheque.jpg') }}" class="img-fluid">
												<p style="font-weight: 500;font-size: 16px;margin-top: 15px;">Birthday Gift Cheque</p>
											</div>
											<div class="col-md-12 space-30"></div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/remittance/payment/General-Gift-Cheque.jpg') }}" class="img-fluid">
												<p style="font-weight: 500;font-size: 16px;margin-top: 15px;">General Gift Cheque</p>
											</div>
											<div class="col-md-12 space-30"></div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/remittance/payment/Wedding-gift-cheque.jpg') }}" class="img-fluid">
												<p style="font-weight: 500;font-size: 16px;margin-top: 15px;">Wedding Gift Cheque</p>
											</div>
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