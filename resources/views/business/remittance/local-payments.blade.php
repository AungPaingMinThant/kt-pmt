@extends('layouts.frontend-app')

@section('title', 'Local Payments – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/remittance/local-payments.css') }}" />
<style type="text/css">
	/*.tab_title_li {
		width: 18% !important;
	}
	@media (max-width: 1270px) and (min-width: 1000px) {
		.tab_title_li {
		    width: 20% !important;
		}
	}
	@media (max-width: 999px) and (min-width: 577px) {
		.tab_title_li {
		    width: 25% !important;
		}
	}
	@media only screen and (max-width: 576px){
		.tab_title_li {
		    width: auto !important;
		}
	}	*/
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
							<li class="nav-item tab_title_li">
								<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-aya-to-aya" aria-controls="navs-pills-top-aya-to-aya" aria-selected="true" >
									AYA To AYA
								</button>
							</li>
							<li class="nav-item tab_title_li">
								<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-interbank-transfer" aria-controls="navs-pills-top-interbank-transfer" aria-selected="false" >
									Interbank Transfer
								</button>
							</li>
							<li class="nav-item tab_title_li">
								<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-cheque-payment" aria-controls="navs-pills-top-cheque-payment" aria-selected="false" >
									Cheque Payment
								</button>
							</li>
							<li class="nav-item tab_title_li">
								<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-payment-order" aria-controls="navs-pills-top-payment-order" aria-selected="false" >
									Payment Order
								</button>
							</li>
						</ul>
						<div class="tab-content" style="background-color: transparent;padding: 20px 0px 0px 0px;background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);">
							<div class="tab-pane fade aya-to-aya show active" id="navs-pills-top-aya-to-aya" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row" style="position: relative;">
										<img src="{{ url('/images/business/remittance/local-payments/aya_to_aya_header.png') }}" class="img-fluid desktop_aya_to_aya_order">
										<img src="{{ url('/images/business/remittance/local-payments/aya_to_aya_header_mobile.png') }}" class="img-fluid mobile_aya_to_aya_order">
										<p class="aya_to_aya_tagline"></p>
									</div>
									<div class="row tab_data_row" style="margin-top: 30px;">
										<div class="col-md-12">
											<p>Making payments is now easier than ever before and no longer costly.</p>
											<p>With a wide range of AYA network across the country, visit our branches or simply logging into our internet banking to keeping costs down and saving your time. It can be delivered instantly or in a matter of minutes.</p>
										</div>
									</div>
									<div class="space-60"></div>
								</div>
							</div>
							<div class="tab-pane interbank-transfer fade" id="navs-pills-top-interbank-transfer" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row" style="position: relative;">
										<img src="{{ url('/images/business/remittance/local-payments/interbank_transfer_header.png') }}" class="img-fluid desktop_interbank_order">
									</div>
									<div class="row tab_data_row" style="margin-top: 30px;">
										<div class="col-md-12">
											<p class="mb-0">Various channels are available to transfer funds to other banks in Myanmar.</p>
											<p>The most easy and convenient way is via internet banking or mobile banking.</p>
										</div>
									</div>
									<div class="space-60"></div>
								</div>
							</div>
							<div class="tab-pane cheque-payment fade" id="navs-pills-top-cheque-payment" role="tabpanel">
								<div class="container tab_section_1">
									<div class="row" style="position: relative;">
										<img src="{{ url('/images/business/remittance/local-payments/cheque_payment_header.png') }}" class="img-fluid desktop_payment_order">
										<img src="{{ url('/images/business/remittance/local-payments/cheque_payment_header_mobile.png') }}" class="img-fluid mobile_cheque_payment_order">
										<!-- <p class="payment_order_tagline">A Secure, safe and alternate <br>payment method</p> -->
									</div>
									<div class="row tab_data_row" style="margin-top: 20px;">
										<div class="col-md-12">
											<p>Your financial obligations to vendors, lenders, government and all accounts payable, cheque payment is still one of the reliable methods in business transactions which can be done in a very safe manner.</p>
										</div>
										<div class="space-20"></div>
										<div class="col-md-12">
											<p class="fw-500 theme_text_color" style="font-size: 16px;">Notes for Cheque Clearing Time!</p>
											<p>Depositing cheque at branches before 12pm, cheque clearing process will be commenced on the next working day only. To provide better service, cheque deposits at branches are advised to be done before 12pm.</p>
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
										<p class="payment_order_tagline"></p>
									</div>
									<!-- <div class="text-center py-3">
										<p class="fw-semibold" style="font-size: 16px;"></p>
									</div>-->

									<div class="col-md-12" style="margin-top: 30px;">
										<p>A Secure, safe and alternate payment method</p>
										<p>Payment Order (PO) is designed to make a payment for a particular amount for a third-party that is not a bank.</p>
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
											<p>Guarantee payment to beneficiary officially.</p>
										</div>
									</div>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 mx-sm-n5">
											<p>Convenient to settle your business when you don't have the banking details of the payee.</p>
										</div>
									</div>
									<div class="row">
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 mx-sm-n5">
											<p>One of the low-cost payment methods for non-urgent payments.</p>
										</div>
									</div>
									<div class="space-20"></div>
									<div class="row create_payment_order_div p-sm-4 ">
										<div class="col-md-6 create_payment_order_col">
											<p class="my-md-0 fw-semibold" style="font-size: 16px;">Create a Payment Order</p>
											<p class="my-md-0">at any of AYA branches</p>
										</div>
										<div class="col-md-6 create_payment_order_col">
											<a href="#" target="_blank">
												<button class="btn visit_us_btn" disabled>
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