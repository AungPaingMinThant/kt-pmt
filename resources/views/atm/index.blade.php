@extends('layouts.frontend-app')

@section('title', 'ATM – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
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
	.swiper-navBtn{
		color: #d7d7d8;
		transition: color 0.3s ease;
		top: 40%;
		border: 1px solid #dedede;
	}
	.swiper-navBtn:hover{
		color: #979797;
		border: 1px solid #979797;
	}
	.swiper-navBtn::before,
	.swiper-navBtn::after{
		font-size: 20px;
	}
	.swiper-button-next{
		right: 0;
		border-radius: 50%;
	    padding: 20px 20px 20px 23px;
	}
	.swiper-button-prev{
		left: 0;
		border-radius: 50%;
	    padding: 20px 23px 20px 20px;
	}
	.swiper-pagination-bullet{
		background-color: #6E93f7;
		opacity: 1;
	}
	.swiper-pagination-bullet-active{
		background-color: #4070F4;
	}
	.card {
		box-shadow: none !important;
		padding: 30px 20px 20px 20px !important;
	    border: 1px solid #dedede !important;
	    border-radius: 10px !important;
	}
	.swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic, .swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
		transform: translate(-50%,40%) !important;
		padding: 5px;
	}
	.swiper-pagination-bullet {
	    width: var(--swiper-pagination-bullet-width,var(--swiper-pagination-bullet-size,13px));
	    height: var(--swiper-pagination-bullet-height,var(--swiper-pagination-bullet-size,13px));
	}
	.swiper-pagination-bullet {
		background-color: #c3c3c3;
	}
	.swiper-pagination-bullet-active {
		background-color: #982801;
		border: 2px solid #fff;
  		outline: 2px solid #982801;
	}
	.swiper-wrapper {
		height: 85%;
	}
	.slide-content-desktop > .swiper-wrapper > .swiper-slide-active {
		width: 60% !important;
	}
	.swiper-slide-next {
		opacity: 0.4;
		width: 60% !important;
	}
	.fee_title {
		color: #5c5c5c;
		margin-bottom: 5px;
	}
	.fee_desc {
		color: #000;
		font-size: 13px;
		margin-bottom: 0px;
	}
	.services_overview_div{
		padding-left: 120px !important;
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
		.tag_line_mascot {
			margin-top: -50px;
		}
		.services_overview_div{
			padding-left: 85px !important;
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
		.swiper-wrapper {
		    height: 90%;
		}
		.services_overview_div{
			padding-left: 15px !important;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'atm'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'atm'])

			<div class="container section_1">
				@include('layouts.tagline', ['page'=>'atm'])
			</div>

			<div class="space-20"></div>

			<div class="d-none d-sm-block">
				<img src="{{ url('/images/atm/location_holder.jpg') }}" class="img-fluid">
			</div>
			<div class="d-block d-sm-none">
				<img src="{{ url('/images/atm/location_holder_mobile.jpg') }}" class="img-fluid">
			</div>

			<div class="space-60"></div>
			<div class="container section_1">
				<div class="row">
					<div class="col-md-12">
						<h3 style="color: #1d1d1f;">Available ATM Card Services</h3>
					</div>
					<div class="space-20"></div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/atm/cash_withdraw_mmk.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Cash Withdrawal (MMK)</p>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/atm/fast_cash_withdrawl.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Fast Cash Withdrawal</p>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/atm/cardless_withdraw.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Card-less Withdrawal</p>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/atm/pin_change.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">PIN Change</p>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/atm/balance_inquiry.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Balance Inquiry</p>
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="{{ url('/images/atm/fund_transfer.png') }}" class="img-fluid">
						<p style="padding: 20px 0px;font-weight: 500;">Fund Transfer</p>
					</div>
				</div>
			</div>
			<div class="space-20"></div>
			<div style="background-color: #fbfbfd">
				<div class="space-60"></div>
				<div class="section_1">
					<div class="row">
						<div class="col-md-12 services_overview_div">
							<h3 style="color: #1d1d1f;">Service Overview</h3>
						</div>
						<div class="space-20"></div>
						<div class="d-none d-sm-block">
							<div class="row">
								<div class="col-md-1" style="position: relative;">
									<div class="swiper-button-prev swiper-navBtn" style="left: 50%;"></div>
								</div>
								<div class="col-md-10">
							      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
							            <div class="slide-content slide-content-desktop">
							                <div class="card-wrapper swiper-wrapper">
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Universal Debit Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Funds transfer</p>
																<p class="fee_desc">300 MMK for every successful transaction.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>						                            	
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password Change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Credit Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">6% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">6% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Visa Prepaid Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA m-banking</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Pay</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">MPU (Other Bank) Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">MPU (Local Other Bank)</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">0.8% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">0.8% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">International Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">International (Off-Us Transaction)</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">6,500 MMK for every successful transaction(Visa, Master).
																	<br>5,000 MMK for every successful transaction(JCB, UPI).</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">6,500 MMK for every successful transaction(Visa, Master).
																	<br>5,000 MMK for every successful transaction(JCB, UPI).</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							    <div class="col-md-1" style="position: relative;">
							    	<div class="swiper-button-next swiper-navBtn" style="right: 50%;"></div>
							    </div>
							</div>
						</div>
						<div class="d-block d-sm-none">
							<div class="row">
								<div class="col-12">
							      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
							            <div class="slide-content slide-content-mobile">
							                <div class="card-wrapper swiper-wrapper">
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Universal Debit Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Funds transfer</p>
																<p class="fee_desc">300 MMK for every successful transaction.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>						                            	
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password Change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Credit Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">6% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">6% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Visa Prepaid Card</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Password change</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA m-banking</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">AYA Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">AYA Pay</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cardless Withdrawal</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">MPU (Other Bank) Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">MPU (Local Other Bank)</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">0.8% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-6">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">0.8% on Total Withdrawal Amount.</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row text-center">
							                        		<p style="margin-bottom: 0px">International Account</p>
							                        		<p class="name" style="font-size: 18px;color: #a02226;">International (Off-Us Transaction)</p>
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Cash Withdrawal(MMK)</p>
																<p class="fee_desc">6,500 MMK for every successful transaction(Visa, Master).
																	<br>5,000 MMK for every successful transaction(JCB, UPI).</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Fast Cash Withdrawal</p>
																<p class="fee_desc">6,500 MMK for every successful transaction(Visa, Master).
																	<br>5,000 MMK for every successful transaction(JCB, UPI).</p>
																<hr>
							                            	</div>
							                            	<div class="col-md-12">
							                            		<p class="fee_title">Balance enquiry</p>
																<p class="fee_desc">Free</p>
																<hr>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                </div>
							            </div>
							            <!-- <div class="swiper-button-next swiper-navBtn"></div> -->
			           					<!-- <div class="swiper-button-prev swiper-navBtn"></div> -->
			           					<div class="swiper-pagination"></div>
							        </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="space-60"></div>
				<div class="container section_1">
					<div class="row">
						<div class="col-md-12">
							<h3 style="color: #1d1d1f;">Security Tips You Need to Know for Using ATM</h3>
							<p>Despite ATMs offer a simple, easy and convenient way to access your savings, we would like to recommend our customers to follow safety measures to protect from financial crime exposure.  It is essential to practice safety tips while using an ATM.</p>
							<ul style="list-style: disc;">
								<li>
									<p>You should ensure security of your ATM card and Personal Identity Number (“PIN”). Swindlers who have stolen or duplicated your ATM card may impersonate a bank staff to obtain your PIN. Please note that AYA staff will NOT ask customers for their PINs for any purpose.
									</p>
								</li>
								<li>
									<p>Do not set your PIN with easily accessible personal information which is your NRC number, date of birth, etc. Do not write down your PIN without disguising it and use for other services on internet. 
									</p>
								</li>
								<li>
									<p>Our ATMs are equipped with built-in security cameras for tracing if needed and PIN-pad covers which will reduce external visibility around a PIN-pad when in use. Our ATM Cards employ chip security as an extra layer of card protection. 
									</p>
								</li>
								<li>
									<p>Have your ATM card in your hand ready when you approach the machine.
									</p>
								</li>
								<li>
									<p>Before you approach an ATM, scan the area for any suspicious activity. 
									</p>
								</li>
								<li>
									<p>Always be aware of surrounding before proceed with a transaction. Cover the PIN-Pad when entering your PIN number. 
									</p>
								</li>
								<li>
									<p>It is advisable to take your receipt after using an ATM service as it may contain information that could lead criminals to steal your account or identity. 
									</p>
								</li>
								<li>
									<p>If your card is lost, stolen or retained by AYA ATM, or in case of any suspicious transactions or situations, call our Customer Service Hotline on 01 231 7777 immediately.
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript">
	var swiper = new Swiper(".slide-content-desktop", {
		slidesPerView: 2,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 2,
			},
		},
	});

	var swiper = new Swiper(".slide-content-mobile", {
		slidesPerView: 1,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 1,
			},
			950: {
				slidesPerView: 1,
			},
		},
	});
</script>

@endsection('content')