@extends('layouts.frontend-app')

@section('title', 'Credit Card – AYA Bank')

<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
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
		/*padding: 0px 20px 0px 20px !important;
		margin-bottom: 20px;*/
		padding: 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
		margin-bottom: 20px;
		margin-top: 40px;
	}
	.solution_text {
		color: #000;
		margin-bottom: 5px;
	}
	.jbc_credit_tab {
		background-image: url('./images/credit_card_bg_with_model.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		height: 520px;
		background-position: center left;
	}
	.visa_credit_tab {
		background-image: url('./images/credit_card_bg_with_model.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		height: 520px;
		background-position: center left;
	}
	.secure_credit_tab {
		background-image: url('./images/credit_card_bg_with_model.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		height: 520px;
		background-position: center left;
	}
	.jcb_credit_tab {
		background-image: url('./images/jcb_credit_banner.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		height: 520px;
		background-position: center left;
	}
	.tab_data_row {
		margin-right: 0px !important;
	}
	.tab_h2 {
		position: absolute;
		top: 230px;
		left: 30%;
	}
	.tab_upi_h2 {
		font-weight: 600;
		color: #000;
	}
	.how_to_apply_icon {
		width: 80%;
	}
	.how_to_apply_outer_section {
		background-color: #fafafa;
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
	.swiper-navBtn{
		color: #6E93f7;
		transition: color 0.3s ease;
	}
	.swiper-navBtn:hover{
		color: #4070F4;
	}
	.swiper-navBtn::before,
	.swiper-navBtn::after{
		font-size: 35px;
	}
	.swiper-button-next{
		right: 0;
	}
	.swiper-button-prev{
		left: 0;
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
	.swiper-navBtn{
		display: none;
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
	.manage_your_card_icon {
		width: 30% !important;
	}
	.fee_charge_inner_div {
		margin-bottom: 20px;
	}
	.fee_title {
		color: #000;
		margin-bottom: 0px;
		font-weight: 500;
	}
	.fee_desc {
		color: #5c5c5c;
		margin-bottom: 0px;
	}
	.fees_charge_div, .annual_fee_div, .card_feature_div, .how_to_apply_div, .secured_fee_charge_div {
		background-color: #fff;
		border: 1px solid #cccccc;
		border-radius: 10px;
		padding: 40px 30px;
		margin-left: 0px !important;
		margin-bottom: 30px;
	}
	.secure_req_application_icon {
		background-color: #a02226;
		color: #fff;
		border-radius: 50%;
		font-size: 20px;
	}
	.credit_tag_line {
		font-size: 20px;
		padding: 0px 250px;
	}
	.secure_credit_data {
		padding-left: 100px !important;
	}
	.secure_credit_data {
		padding-right: 150px;
	}
	.simple_pay_div {
		padding: 0px 208px 40px 208px;
	}
	.simple_pay_div > .container {
		padding: 0px 100px 50px 70px;
		background-image: url('./images/simple_pay_installment.png');
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
	}
	.simple_pay_text {
		font-size: 22px;
		margin-bottom: 15px;
	}
	.jbc_visa_manage_card > .col-md-6, .secured_manage_card > .col-md-6 {
		width: 48% !important;
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
	@media (max-width: 1300px) and (min-width: 1000px) {
		.jcb_credit_tab{
			background-position: center;
		}
		.visa_credit_tab, .secure_credit_tab {
			background-position: 80% center;
		}
		.jbc_visa_manage_card > .col-md-6, .secured_manage_card > .col-md-6 {
			width: 47% !important;
		}
		.simple_pay_div {
		    padding: 0px 120px 0px 120px;
		}
		.simple_pay_text {
			font-size: 18px;
		}
	}
	@media (max-width: 1400px) and (min-width: 1301px) {
		.visa_credit_tab, .secure_credit_tab {
			background-position: 60% center;
		}
		.jbc_visa_manage_card > .col-md-6, .secured_manage_card > .col-md-6 {
			width: 47% !important;
		}
	}
	@media (min-width: 768px){
		.col-md-3 {
		    width: 23% !important;
		}
		.slide-content{
			margin: 0 10px;
		}
	}
	@media only screen and (max-width: 576px){
		.jbc_visa_manage_card > .col-md-6, .secured_manage_card > .col-md-6 {
			width: 100% !important;
		}
		.jcb_credit_tab{
			background-position: 75% center;
		}
		.visa_credit_tab{
			background-position: 88% center;
		}
		.secure_credit_tab {
			height: auto;
		}
		.secure_credit_data {
			padding-left: 35px !important;
		}
		.secure_credit_data {
			padding-right: 10px;
		}
		.tab_h2{
			top: 380px;
		    left: 5px;
		    padding: 20px;
		    background-color: #ffffffbf;
		    margin: 0px 20px 0px 30px;
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
		.ecommerce_registration_bg {
			background-image: none;
			background-color: #f3f3f2;
		}
		.ecommerce_registration_container {
			padding: 40px 0px 40px 40px !important;
		}
		.credit_tag_line {
			padding: 0px 0px;
		}
		.annual_fee_div {
			padding: 40px 20px;
		}
		.simple_pay_div {
			padding: 0px;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'creditcard'])

			<div>
				<div class="space-40"></div>
				<div class="container">
					<div class="col-md-12 text-center">
						<p class="credit_tag_line">Already have a AYA Credit Card? Select your card below to review the features and benefits available for you.</p>
					</div>
				</div>
				<div class="space-40"></div>
				<div class="nav-align-top mb-4">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link jbc_credit_tab_li active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true" >
								JCB Credit Card
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link visa_credit_tab_li" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false" >
								Visa Credit Card
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link secure_credit_tab_li" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-secured" aria-controls="navs-pills-top-secured" aria-selected="false" >
								Secured Credit Card
							</button>
						</li>
					</ul>
					<div class="tab-content" style="padding:0;background-size: cover;background-repeat: no-repeat;border-radius: 0px;">
						<div class="tab-pane jcb_credit_tab fade show active" id="navs-pills-top-home" role="tabpanel">
							<div class="row tab_data_row" >
								<div class="col-md-6 text-center" style="position: relative;">
									<!-- <h3 class="tab_h3"><span style="color: #1d1d1f;">It is easy, accessible and convenience with </span><span style="color: #a02226"><Br>AYA Universal Debit Card</span></h3> -->
									<h3 class="tab_h2"><span style="color: #1d1d1f;">We connect your financial life to </span><span style="color: #a02226">your daily life</span></h3>
								</div>
								<div class="col-md-6"></div>
							</div>
						</div>
						<div class="tab-pane visa_credit_tab fade" id="navs-pills-top-profile" role="tabpanel">
							<div class="row tab_data_row" >
								<div class="col-md-6 text-center" style="position: relative;">
									<h3 class="tab_h2"><span style="color: #1d1d1f;">Its Everywhere </span><span style="color: #a02226">You Want to Be</span></h3>
								</div>
								<div class="col-md-6"></div>
							</div>
						</div>
						<div class="tab-pane secure_credit_tab fade" id="navs-pills-top-secured" role="tabpanel">
							<div class="row tab_data_row" >
								<div class="col-md-6 secure_credit_data">
									<div class="space-60"></div>
									<h3 class="" style="margin-bottom: 25px;left: 30%;color: #000;">Smile with your Secured Credit Card.</h3>
									<p style="font-weight: 600;color: #4e4e4e;margin-bottom: 25px;">Interested in a new Secured Credit Card?</p>
									<p>AYA's innovation product, the "Secured Credit Card" is designed to help customers who wants or needs a credit card withour having to go through complex paperwork process. As opposed to applying a normal credit card, where proof of income or a guarantor is a prerequisite.</p>

									<div class="space-40"></div>
									<div class="row">
										<div class="col-md-1 col-2">
											<img src="{{ url('/images/check_icon.png') }}" class="img-fluid">
										</div>
										<div class="col-md-11 col-10 secure_credit_fact">
											<p>Make great use of your deposit balance in your fixed deposit account by applying secured credit card.</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-1 col-2">
											<img src="{{ url('/images/check_icon.png') }}" class="img-fluid">
										</div>
										<div class="col-md-11 col-10 secure_credit_fact">
											<p>Validity is 4 years.</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-1 col-2">
											<img src="{{ url('/images/check_icon.png') }}" class="img-fluid">
										</div>
										<div class="col-md-11 col-10 secure_credit_fact">
											<p>It can be cancelled when the attached Fixed Deposit Account is closed or when a secured account is closed. In good standing, the deposit will be returned.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container section_1 ">
				<div class="space-40"></div>
				<div class="row benefit_section" >
					<h3 style="font-weight: 600;color: #000;">Benefits</h3>
					<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
			            <div class="slide-content">
			                <div class="card-wrapper swiper-wrapper">
			                    <div class="card swiper-slide">
			                        <div class="card-content">
			                            <p class="name" style="font-weight: 600;font-size: 15px;">Global Acceptance</p>
			                            <p class="description">Accepted by millions of merchants and ATMs globally.</p>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide share_your_credits">
			                        <div class="card-content">
			                            <p class="name" style="font-weight: 600;font-size: 15px;">Share your credits</p>
			                            <p class="description">Apply supplementary cards and enjoy privilege offered to the spouse, parents, or children of the primary credit cardholder. Your card can link up to 4 supplementary cards.</p>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide paywave_slide d-none">
			                        <div class="card-content">
			                            <p class="name" style="font-weight: 600;font-size: 15px;">PayWave</p>
			                            <p class="description">For Visa Card holder, just payWave to spend less time at sales counter, the latest in secure contactless technology.</p>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide">
			                        <div class="card-content">
			                            <p class="name" style="font-weight: 600;font-size: 15px;">No Initial Deposit</p>
			                            <p class="description">No collateral Deposit required for AYA Visa and AYA-JCB Credit Card.</p>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide">
			                        <div class="card-content">
			                            <p class="name" style="font-weight: 600;font-size: 15px;">Low Interest Rate</p>
			                            <p class="description">Spend up to your available credit limit on your Credit Card and enjoy fixed interest rate from as low as 1.33% minimum per month.</p>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide">
			                        <div class="card-content">
			                            <p class="name" style="font-weight: 600;font-size: 15px;">50 Days Interest free</p>
			                            <p class="description">Enjoy up to a maximum of 50 days interest-free repayment period of AYA Credit Card. </p>
			                        </div>
			                    </div>
			                    <div class="card swiper-slide">
			                        <div class="card-content">
			                            <p class="name" style="font-weight: 600;font-size: 15px;">Deals and Discounts</p>
			                            <p class="description">Shop around the world and get awesome deals, enjoy many benefits and privileges.</p>
			                        </div>
			                    </div>
			                </div>
			            </div>

			            <div class="swiper-button-next swiper-navBtn"></div>
			            <div class="swiper-button-prev swiper-navBtn"></div>
			            <div class="swiper-pagination"></div>
			        </div>
			        <div class="space-40"></div>
				</div>
				
				<div class="row secure_feature_section d-none" >
					<h3 style="font-weight: 600;color: #000;">Features</h3>
					<p style="color: #4e4e4e;">Three different account tiers (Silver, Gold, Platinum) are available in respect to the Fixed Deposit Amount.</p>

					<div class="space-40"></div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<h3 style="font-weight: 600;color: #000;">Manage Your Card</h3>
					</div>
					<div class="space-20"></div>
					<div class="col-md-12" >
						<div class="row" >
							<div class="col-md-6" style="margin-bottom: 20px">
								<img src="{{ url('/images/manage_card_image.png') }}" class="img-fluid" style="margin-top: 12%;">
							</div>
							<div class="col-md-6">
								<div class="row jbc_visa_manage_card" style="column-gap: 20px;">
									<div class="col-md-6 outer_benefit_box why_use_AYA">
										<div class="row benefit_box">
											<img src="{{ url('/images/credit_limit_icon.png') }}" class="img-fluid manage_your_card_icon">
											<p style="font-weight: 600;margin-top: 1rem;">Credit Limits</p>
											<p style="color: #4e4e4e;">The credit limit on your credit card is the maximum amount that can be borrowed on a credit card. It is determined based on various factors including your income. </p>
										</div>
									</div>
									<div class="col-md-6 outer_benefit_box why_use_AYA">
										<div class="row benefit_box">
											<img src="{{ url('/images/bill_payments.png') }}" class="img-fluid manage_your_card_icon">
											<p style="font-weight: 600;margin-top: 1rem;">Bill Payment</p>
											<p style="color: #4e4e4e;">Register for <a href="https://ibankapp.ayabank.com/" style="color: #4e4e4e;text-decoration: underline;">AYA internet Banking</a> & <a href="https://ibankapp.ayabank.com/" style="color: #4e4e4e;text-decoration: underline;">mobile Banking</a> services to settle your credit card bills from your AYA Bank accounts easily and securely, 24/7.</p>
										</div>
									</div>
									<div class="col-md-6 outer_benefit_box why_use_AYA">
										<div class="row benefit_box">
											<img src="{{ url('/images/estatements.png') }}" class="img-fluid manage_your_card_icon">
											<p style="font-weight: 600;margin-top: 1rem;">E-statements</p>
											<p style="color: #4e4e4e;">Receive monthly statements via designated email in the most convenient, secure, and eco-friendly way at the end of the month.</p>
										</div>
									</div>
									<div class="col-md-6 outer_benefit_box why_use_AYA">
										<div class="row benefit_box">
											<img src="{{ url('/images/cash_payment.png') }}" class="img-fluid manage_your_card_icon">
											<p style="font-weight: 600;margin-top: 1rem;">Cash Payment</p>
											<p style="color: #4e4e4e;">Alternately, Pay your Credit Card bill with cash at any of AYA Bank Branches during business hours.</p>
										</div>
									</div>
								</div>
								<div class="row secured_manage_card d-none" style="column-gap: 20px;">
									<div class="col-md-6 outer_benefit_box why_use_AYA">
										<div class="row benefit_box">
											<img src="{{ url('/images/credit_limit_icon.png') }}" class="img-fluid manage_your_card_icon">
											<p style="font-weight: 600;margin-top: 1rem;">Credit Limit</p>
											<p style="color: #4e4e4e;">The credit limit of a credit card is the maximum limit (2 Fix Deposit account can be combined) that can be borrowed. It can be up to 80% of your Fixed Deposit Amount.</p>
										</div>
									</div>
									<div class="col-md-6 outer_benefit_box why_use_AYA">
										<div class="row benefit_box">
											<img src="{{ url('/images/50day_interest_rate_icon.png') }}" class="img-fluid manage_your_card_icon">
											<p style="font-weight: 600;margin-top: 1rem;">50 Days Interest free</p>
											<p style="color: #4e4e4e;">Enjoy <b>up to</b> a maximum of 50 days interest-free repayment period of AYA Credit Card.</p>
										</div>
									</div>
									<div class="col-md-6 outer_benefit_box why_use_AYA">
										<div class="row benefit_box">
											<img src="{{ url('/images/low_interest_rate_icon.png') }}" class="img-fluid manage_your_card_icon">
											<p style="font-weight: 600;margin-top: 1rem;">Low Interest Rate</p>
											<p style="color: #4e4e4e;">Spend up to your available credit limit on your Credit Card and enjoy fixed interest rate from as low as 10% per annum.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="space-40"></div>
			</div>

			<div class="how_to_apply_outer_section">
				<div class="container debit_how_to_apply_section">
					<div class="space-40"></div>
					<div class="row jcb_credit_fees_charge_section">
						<div class="col-md-12 how_to_apply_desc">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 0px;">Fees and Charges</p>
								<p style="color: #1d1d1f;margin-bottom: 30px;">Enjoy free issuing card fees for both Principal and Supplementary Card holder. <a class="credit_fee_charge" style="color: #1d1d1f;text-decoration: underline;cursor: pointer;">Click here to learn other fees and charges</a><i class="menu-icon tf-icons bx bx-chevron-down credit_fee_charge_chevron"></i></p>
							</div>

							<div class="row fees_charge_div" style="display: none;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Retail Interest</p>
											<p class="fee_desc">1.33% per month if full payment is not made by payment due date</p>
											<p class="fee_desc">(16% Per Annum)</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">IPP Interest</p>
											<p class="fee_desc">12% Per Annum</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Penalty Fee</p>
											<p class="fee_desc">1% will be charge if full payment is not received by due date</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Late Fee</p>
											<p class="fee_desc">2% will be charge if minimum payment has not been made by due date</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Over Limit Fee</p>
											<p class="fee_desc">3% will be charge if over limit amount due</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Collection Letter Fee</p>
											<p class="fee_desc">1,500 MMK (No payment for 90/120/150 days from billing date)</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Legal Noice Fee</p>
											<p class="fee_desc">30,000 MMK (No payment for 180 days and above from billing date)</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Card Lost/Damage/Reissue Fees</p>
											<p class="fee_desc">10,000 MMK</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Card Early Termination / Cancellation Fee</p>
											<p class="fee_desc">Free</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">PIN Reissue Fee</p>
											<p class="fee_desc">1,000 MMK</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">POS Transactions Fees</p>
											<p class="fee_desc">Free</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Online Transaction Fees</p>
											<p class="fee_desc">Free</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Cash Withdraw Transactions Fees (Domestic - AYA ATM)</p>
											<p class="fee_desc">6% of withdrawal amount (Per Transaction)</p>
											<p class="fee_desc">(Minimum charges for each transaction is MMK 1,000)</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Cash Withdraw Transactions Fees (Domestic - Other Bank ATM)</p>
											<p class="fee_desc">6% + Other Bank Charges (Per Transaction)</p>
											<p class="fee_desc">(Minimum charges for each transaction is MMK 1,000)</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Cash Withdraw Transactions Fees (International)</p>
											<p class="fee_desc">6% + Oversea Bank Charges  (Per Transaction)</p>
											<p class="fee_desc">(Minimum charges for each transaction is MMK 1,000)</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Balance Inquiry</p>
											<p class="fee_desc">Free</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Statement Reprint Fee</p>
											<p class="fee_desc">Free</p>
										</div>
									</div>
									<div class="row">
										<div class="ol-md-12">
											<p style="font-size: 12px;margin-bottom: 0px;">* Note: Cross currency mark-up fees will be applied for foreign transactions</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 how_to_apply_desc">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 0px;">Annual Fees</p>
								<p style="color: #1d1d1f;margin-bottom: 30px;"><a class="annual_fee" style="color: #1d1d1f;text-decoration: underline;cursor: pointer;">Check Annual fees here for AYA Credit cards</a><i class="menu-icon tf-icons bx bx-chevron-down annual_fee_chevron"></i></p>
							</div>

							<div class="row annual_fee_div" style="display: none;">
								<div class="col-md-12 d-none d-sm-block">
									<div class="row">
										<div class="col-md-12 fee_charge_inner_div">
											<table class="table table-border">
												<thead>
													<tr>
														<th colspan="2"></th>
														<th>Silver</th>
														<th>Gold</th>
														<th>Platinum</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td rowspan="2">Visa Credit Card</td>
														<td>Principal Card</td>
														<td>20,000 MMK</td>
														<td>60,000 MMK</td>
														<td>120,000 MMK</td>
													</tr>
													<tr>
														<td>Supplementary Card</td>
														<td>9,000 MMK</td>
														<td>25,000 MMK</td>
														<td>60,000 MMK</td>
													</tr>
													<tr>
														<td rowspan="2">JCB Credit Card</td>
														<td>Principal Card</td>
														<td>30,000 MMK</td>
														<td>60,000 MMK</td>
														<td>100,000 MMK</td>
													</tr>
													<tr>
														<td>Supplementary Card</td>
														<td>15,000 MMK</td>
														<td>30,000 MMK</td>
														<td>50,000 MMK</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="col-md-12 d-block d-sm-none">
									<div class="row">
										<div class="col-md-12 fee_charge_inner_div">
											<table class="table table-border" style="zoom:90%">
												<thead>
													<tr>
														<th colspan="23">Silver</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td rowspan="2">Visa Credit Card</td>
														<td>Principal Card</td>
														<td>20,000 MMK</td>
													</tr>
													<tr>
														<td>Supplementary Card</td>
														<td>9,000 MMK</td>
													</tr>
													<tr>
														<td rowspan="2">JCB Credit Card</td>
														<td>Principal Card</td>
														<td>30,000 MMK</td>
													</tr>
													<tr>
														<td>Supplementary Card</td>
														<td>15,000 MMK</td>
													</tr>
												</tbody>
											</table>

											<table class="table table-border" style="zoom:90%">
												<thead>
													<tr>
														<th colspan="23">Gold</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td rowspan="2">Visa Credit Card</td>
														<td>Principal Card</td>
														<td>60,000 MMK</td>
													</tr>
													<tr>
														<td>Supplementary Card</td>
														<td>25,000 MMK</td>
													</tr>
													<tr>
														<td rowspan="2">JCB Credit Card</td>
														<td>Principal Card</td>
														<td>60,000 MMK</td>
													</tr>
													<tr>
														<td>Supplementary Card</td>
														<td>30,000 MMK</td>
													</tr>
												</tbody>
											</table>

											<table class="table table-border" style="zoom:90%">
												<thead>
													<tr>
														<th colspan="3">Platinum</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td rowspan="2">Visa Credit Card</td>
														<td>Principal Card</td>
														<td>120,000 MMK</td>
													</tr>
													<tr>
														<td>Supplementary Card</td>
														<td>60,000 MMK</td>
													</tr>
													<tr>
														<td rowspan="2">JCB Credit Card</td>
														<td>Principal Card</td>
														<td>100,000 MMK</td>
													</tr>
													<tr>
														<td>Supplementary Card</td>
														<td>50,000 MMK</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 how_to_apply_desc">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 0px;">Card Features</p>
								<p style="color: #1d1d1f;margin-bottom: 30px;"><a class="card_feature" style="color: #1d1d1f;text-decoration: underline;cursor: pointer;">Take a moment to review our Card features</a><i class="menu-icon tf-icons bx bx-chevron-down card_feature_chevron"></i></p>
							</div>

							<div class="row card_feature_div" style="display: none;">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Card Validity</p>
											<p class="fee_desc">3 Years for JCB / 5 Years for Visa</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Currency</p>
											<p class="fee_desc">MMK</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Card Activation</p>
											<p class="fee_desc">AYA Bank Branches/ AYA Call Center</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Withdrawal Limit</p>
											<p class="fee_desc">30% of Credit Limit</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">ATM Withdrawal Limit</p>
											<p class="fee_desc">Domestic Transaction - 1,000,000 MMK Per day</p>
											<p class="fee_desc">International Transaction - 1,000,000 MMK Per day</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">POS Withdrawal Limit</p>
											<p class="fee_desc">Domestic Transaction - 5,000,000 MMK Per day</p>
											<p class="fee_desc">International Transaction - Up To Avaliable Amount Per day</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Over Limit</p>
											<p class="fee_desc">10% of Credit Limit</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Transaction Limit</p>
											<p class="fee_desc">N/A</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 how_to_apply_desc">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 0px;">How to Apply</p>
								<p style="color: #1d1d1f;">
									Visit any of our branches for application and submit with required documents. Bank will notify on your credit card approval and for card collection.Please take a moment to review below eligibility criteria as well as documents required for preparation of application process. <a class="how_to_apply" style="color: #1d1d1f;text-decoration: underline;cursor: pointer;">Check the full list of documents required</a><i class="menu-icon tf-icons bx bx-chevron-down how_to_apply_chevron"></i>
								</p>
							</div>

							<div class="row how_to_apply_div" style="display: none;">
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title" style="font-weight: 600;font-size: 16px;">EMPLOYEE</p>
									<p class="fee_desc">Eligibility</p>
									<ul>
										<li>21 years of age</li>
										<li>Citizen/PR of Myanmar</li>
									</ul>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title">&nbsp;</p>
									<p class="fee_desc">Income Proof</p>
									<ul>
										<li>Letter of Employment</li>
										<li>Staff ID Card</li>
										<li>Salary Pay Slip (Latest 3 Months)</li>
										<li>Bank Statement (Latest 3 Months)</li>
										<li>Tax Slip (Salary above Five hundred thousands)</li>
									</ul>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title">&nbsp;</p>
									<p class="fee_desc">Personal Documentation</p>
									<ul>
										<li>NRC Copy</li>
										<li>House Hold List Copy</li>
										<li>1 Photo</li>
										<li>Ward Endorsement</li>
									</ul>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title">&nbsp;</p>
									<p class="fee_desc">Guarantor Documentation</p>
									<p class="fee_desc">Requirement Document for (2) person of guarantor</p>
									<ul>
										<li>NRC Copy</li>
										<li>House Hold List Copy</li>
										<li>Proof of Income document</li>
										<li>Evidence on  Occupation</li>
										<li>1 Photo</li>
									</ul>
								</div>
								<div class="space-20"></div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title" style="font-weight: 600;font-size: 16px;">SELF EMPLOYED</p>
									<p class="fee_desc">Eligibility</p>
									<ul>
										<li>21 years of age</li>
										<li>Citizen/PR of Myanmar</li>
									</ul>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title">&nbsp;</p>
									<p class="fee_desc">Income Proof</p>
									<ul>
										<li>Bank Statement (Latest 3 Months)</li>
										<li>Company Income Statement (Latest 1 year)</li>
										<li>Business License</li>
									</ul>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title">&nbsp;</p>
									<p class="fee_desc">Personal Documentation</p>
									<ul>
										<li>NRC Copy</li>
										<li>House Hold List Copy</li>
										<li>1 Photo</li>
										<li>Ward Endorsement</li>
									</ul>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title">&nbsp;</p>
									<p class="fee_desc">Guarantor Documentation</p>
									<p class="fee_desc">Requirement Document for (2) person of guarantor</p>
									<ul>
										<li>NRC Copy</li>
										<li>House Hold List Copy</li>
										<li>Proof of Income document</li>
										<li>Evidence on  Occupation</li>
										<li>1 Photo</li>
									</ul>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p class="fee_title" style="font-weight: 600;font-size: 16px;">SUPPLEMENTARY CARD APPLICANT</p>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title" style="font-weight: 600;font-size: 16px;">&nbsp;</p>
									<p class="fee_desc">Eligibility</p>
									<ul>
										<li>16 years of age</li>
										<li>Citizen/PR of Myanmar</li>
									</ul>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title">&nbsp;</p>
									<p class="fee_desc">Income Proof</p>
									<ul>
										<li>Not Applicable</li>
									</ul>
								</div>
								<div class="col-md-3 fee_charge_inner_div">
									<p class="fee_title">&nbsp;</p>
									<p class="fee_desc">Personal Documentation</p>
									<ul>
										<li>NRC Copy</li>
									</ul>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<p style="margin-bottom:5px;color: #5c5c5c;"><u>Notes:</u> One guarantor will be required for existing customers banking with us for more than 3 months. For new customers, two guarantors need to be provided.</p>
									<p style="margin-bottom:0;color: #5c5c5c;">Requested documents are non-returnable and additional documents may be requested during processing, if needed. Approval is subject to the Bank’s discretion and the Bank reserves the right not to disclose the reason if your application is declined.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row visa_credit_find_out_more d-none">
						<div class="col-md-12 how_to_apply_desc">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 0px;">Find out more</p>
								<p style="color: #1d1d1f;margin-bottom: 20px;">Terms and Conditions apply <a href="{{ url('/file/cardservices/AYA CREDIT CARD AGREEMENT (English Version 2.0).docx') }}" class="tnc_apply" style="color: #1d1d1f;text-decoration: underline;cursor: pointer;">Click here</a></p>
								<p style="color: #1d1d1f;margin-bottom: 0px;"><a href="{{ url('/file/cardservices/Membership Guide.docx') }}" class="tnc_apply" style="color: #1d1d1f;text-decoration: underline;cursor: pointer;">Click here</a> for Membership Guide.</p>
							</div>
						</div>
					</div>
					<div class="row secured_fees_charge_section d-none">
						<div class="col-md-12 how_to_apply_desc">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 20px;">Requirements for Application</p>
								<div class="col-md-6">
									<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>&nbsp;NRC Copy</p>
									<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>&nbsp;Passport Photo</p>
								</div>
								<div class="col-md-6">
									<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>&nbsp;Original Fixed Deposit Certificate (<span style="font-size: 12px;">Can combine up to 2 certificates</span>)</p>
									<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>&nbsp;One Savings Deposit Account with AYA Internet Banking/Mobile Banking</p>
								</div>
								<div class="space-20"></div>
								<p style="margin-bottom:30px;">AYA Bank will only accept and agree to issue a secured credit card once it has received all necessary documentation and its internal checks have been completed to its satisfaction. AYA Bank reserves the right to reject an application. <span style="color: #a02226;">Terms and Conditions apply.</span></p>
							</div>
						</div>
						<div class="col-md-12 how_to_apply_desc">
							<div class="row">
								<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 0px;">Fees and Charges</p>
								<p style="color: #1d1d1f;margin-bottom: 30px;">Enjoy free issuing card fees for Secured Credit Card holder. <a class="secured_fee_charge" style="color: #1d1d1f;text-decoration: underline;cursor: pointer;">Click here to learn other fees and charges</a><i class="menu-icon tf-icons bx bx-chevron-up secured_fee_charge_chevron"></i></p>
							</div>

							<div class="row secured_fee_charge_div">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Retail Interest</p>
											<p class="fee_desc">10% Per Annum</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Penalty Fee</p>
											<p class="fee_desc">1% will be charge if full payment is not received by due date</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Late Fee</p>
											<p class="fee_desc">2% will be charge if minimum payment has not been made by due date</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Balance Enquiry Fee</p>
											<p class="fee_desc">Free</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">PIN Reset/ Reissue Fee</p>
											<p class="fee_desc">1,000 MMK</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Card Reissue/ Renew Fees</p>
											<p class="fee_desc">10,000 MMK</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Cash Withdraw Transactions Fees(Domestic - AYA ATM)</p>
											<p class="fee_desc">6% of withdrawal amount (Per Transaction)</p>
											<p class="fee_desc">(Minimum charges for each transaction is MMK 1,000)</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Cash Withdraw Transactions Fees (Domestic - Other Bank ATM)</p>
											<p class="fee_desc">6% + Other Bank Charges (Per Transaction)</p>
											<p class="fee_desc">(Minimum charges for each transaction is MMK 1,000)</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Cash Withdraw Transactions Fees (International)</p>
											<p class="fee_desc">6% + Oversea Bank Charges  (Per Transaction)</p>
											<p class="fee_desc">(Minimum charges for each transaction is MMK 1,000)</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">IPP Interest</p>
											<p class="fee_desc">12% Per Annum</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Card Early Termination / Cancellation Fee</p>
											<p class="fee_desc">Free</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">PIN Reset/ Reissue Fee</p>
											<p class="fee_desc">1,000 MMK</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">POS Transactions Fees</p>
											<p class="fee_desc">Free</p>
										</div>
										<div class="col-md-6 fee_charge_inner_div">
											<p class="fee_title">Online Transaction Fees</p>
											<p class="fee_desc">Free</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="space-40"></div>

			<div class="renew_div">
				<div class="col-12 text-center">
					<h4 style="font-weight: 500;color: #000;">Is it time to renew your credit card?</h4>
					<p>Just click here to apply Credit card renewal application.</p>
					<a target="_blank" href="https://creditcard.ayabank.com/">
						<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 30px;border: #ae071d;">
							Renew
						</button>
					</a>
				</div>
			</div>
			<div class="reset_div d-none">
				<div class="col-12 text-center">
					<h4 style="font-weight: 500;color: #000;">Forgot your card PIN?</h4>
					<p>You can reset / change your PIN easily via online.</p>
					<a target="_blank" href="{{ url('/reset-pin') }}">
						<button class="btn" style="background-color: #ae071d;color: #fff;font-weight: 500;padding: 15px 30px;border: #ae071d;">
							Reset PIN
						</button>
					</a>
				</div>
			</div>

			<div class="d-block d-sm-none" style="margin-top: 20px;">
				<img src="{{ url('/images/credit_simple_pay.jpg') }}" class="img-fluid">
			</div>
			<div class="simple_pay_div">
				<div class="container d-none d-sm-block">
					<div class="row">
						<div class="col-md-8 col-xs-12" style="padding-top: 120px;">
							<p class="simple_pay_text">Are you also interested in <br><span style="font-weight: 500;color: #a02225;">SimplePay Installment</span> with AYA Credit Cards?</p>
							<a href="{{ url('/simple-pay') }}">
								<button class="btn reset_pin_btn" >
									More Details
								</button>
							</a>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>

				<div class="container d-block d-sm-none" style="padding: 30px;background-color: #f5f5f5;margin-bottom: 0px;">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<p style="font-size: 22px;margin-bottom: 15px;">Are you also interested in <br><span style="font-weight: 500;color: #a02225;">SimplePay Installment</span> with AYA Credit Cards?</p>
							<a href="{{ url('/simple-pay') }}">
								<button class="btn reset_pin_btn" >
									More Details
								</button>
							</a>
						</div>
						<div class="col-md-7"></div>
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
									What is Credit Card?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>A credit card is a card issued by bank which enables the cardholder to borrow funds for payment of goods and services. Issuance of credit cards has the condition that the cardholder will pay back the original, borrowed amount plus any additional agreed-upon charges.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What are AYA Bank secured Credit Card and Unsecured Credit Card?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										A secured credit card is a card that is backed by a deposit used as collateral on the account. Unsecured credit cards do not require a security deposit but it is based on regular income and credit history. 
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What is the minimum income range required to apply for Gold member MPU Credit Card?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You need to have regular monthly income of One hundred and fifty thousand Kyats to apply for Silver Card,  Five hundred thousandsKyats to apply for Gold Card, and Two million Kyats for Platinum Card.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Where can I do shopping with Credit Card? Can I use Credit card for cash withdrawal at ATM?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										AYA Bank Credit Card can be used in both domestic and oversea, including online and shops where POS machines are available. It can also be used to withdraw cash at ATMs up to 30% of your credit card limit. 6% of withdraw amount will be charged for service fees.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How much Credit limit is allowed and what is the credit term?
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Your Credit Limit is determined based on your monthly income and other factors. Credit term is allowed up to 20 days from the billing cycle. Minimum payment must be 10% of the spent amount.
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
@include('layouts.footer', ['page'=>'creditcard'])
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>

<script type="text/javascript">
	var swiper = new Swiper(".slide-content", {
		slidesPerView: 4,
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
				slidesPerView: 4,
			},
		},
	});

	$(".visa_credit_tab_li").click(function() {
		var div_width = document.querySelector(".share_your_credits");
		$(".paywave_slide").removeClass('d-none');
		$(".paywave_slide").css('width',div_width.style.width);
		$(".visa_credit_find_out_more").removeClass('d-none');
		$(".benefit_section").removeClass('d-none');
		$(".secure_feature_section").addClass('d-none');
		$(".jbc_visa_manage_card").removeClass('d-none');
		$(".secured_manage_card").addClass('d-none');
		$(".jcb_credit_fees_charge_section").removeClass('d-none');
		$(".secured_fees_charge_section").addClass('d-none');
		$(".renew_div").removeClass('d-none');
		$(".reset_div").addClass('d-none');
	});
	$(".jbc_credit_tab_li").click(function() {
		$(".paywave_slide").addClass('d-none');
		$(".visa_credit_find_out_more").addClass('d-none');
		$(".benefit_section").removeClass('d-none');
		$(".secure_feature_section").addClass('d-none');
		$(".jbc_visa_manage_card").removeClass('d-none');
		$(".jcb_credit_fees_charge_section").removeClass('d-none');
		$(".secured_manage_card").addClass('d-none');
		$(".secured_fees_charge_section").addClass('d-none');
		$(".renew_div").removeClass('d-none');
		$(".reset_div").addClass('d-none');
	});
	$(".secure_credit_tab_li").click(function() {
		$(".paywave_slide").addClass('d-none');
		$(".visa_credit_find_out_more").addClass('d-none');
		$(".benefit_section").addClass('d-none');
		$(".secure_feature_section").removeClass('d-none');
		$(".jbc_visa_manage_card").addClass('d-none');
		$(".secured_manage_card").removeClass('d-none');
		$(".jcb_credit_fees_charge_section").addClass('d-none');
		$(".secured_fees_charge_section").removeClass('d-none');
		$(".renew_div").addClass('d-none');
		$(".reset_div").removeClass('d-none');
	});

	$(".credit_fee_charge").click(function(){
		$(".fees_charge_div").slideToggle();
		if ($(".credit_fee_charge_chevron").hasClass('bx-chevron-up')) {
			$(".credit_fee_charge_chevron").removeClass('bx-chevron-up');
			$(".credit_fee_charge_chevron").addClass('bx-chevron-down');
		} else {
			$(".credit_fee_charge_chevron").addClass('bx-chevron-up');
			$(".credit_fee_charge_chevron").removeClass('bx-chevron-down');
		}
	});
	$(".annual_fee").click(function(){
		$(".annual_fee_div").slideToggle();
		if ($(".annual_fee_chevron").hasClass('bx-chevron-up')) {
			$(".annual_fee_chevron").removeClass('bx-chevron-up');
			$(".annual_fee_chevron").addClass('bx-chevron-down');
		} else {
			$(".annual_fee_chevron").addClass('bx-chevron-up');
			$(".annual_fee_chevron").removeClass('bx-chevron-down');
		}
	});
	$(".card_feature").click(function(){
		$(".card_feature_div").slideToggle();
		if ($(".card_feature_chevron").hasClass('bx-chevron-up')) {
			$(".card_feature_chevron").removeClass('bx-chevron-up');
			$(".card_feature_chevron").addClass('bx-chevron-down');
		} else {
			$(".card_feature_chevron").addClass('bx-chevron-up');
			$(".card_feature_chevron").removeClass('bx-chevron-down');
		}
	});
	$(".how_to_apply").click(function(){
		$(".how_to_apply_div").slideToggle();
		if ($(".how_to_apply_chevron").hasClass('bx-chevron-up')) {
			$(".how_to_apply_chevron").removeClass('bx-chevron-up');
			$(".how_to_apply_chevron").addClass('bx-chevron-down');
		} else {
			$(".how_to_apply_chevron").addClass('bx-chevron-up');
			$(".how_to_apply_chevron").removeClass('bx-chevron-down');
		}
	});

	$(".secured_fee_charge").click(function(){
		$(".secured_fee_charge_div").slideToggle();
		if ($(".secured_fee_charge_chevron").hasClass('bx-chevron-up')) {
			$(".secured_fee_charge_chevron").removeClass('bx-chevron-up');
			$(".secured_fee_charge_chevron").addClass('bx-chevron-down');
		} else {
			$(".secured_fee_charge_chevron").addClass('bx-chevron-up');
			$(".secured_fee_charge_chevron").removeClass('bx-chevron-down');
		}
	});
</script>

@endsection('content')