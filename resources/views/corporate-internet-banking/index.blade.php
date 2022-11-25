@extends('layouts.frontend-app')

@section('title', 'Corporate Internet Banking – AYA Bank')
<style type="text/css">
	.carousel-caption.carousel_title {
		top: 6%;
	}
	.carousel-caption.carousel_desc {
		text-align: left !important;
	}
	.carousel-indicators{
		left: 85% !important;
		bottom: 50% !important;
		margin-right: 0 !important;
		margin-left: 0 !important;
		display: table-cell !important;
	    vertical-align: middle !important;
	    float: none !important;
	    top: 25%;
	    font-weight: 500 !important;
	}
	.carousel-indicators [data-bs-target] {
		text-indent: 0 !important;
		height: auto !important;
		margin-left: 0 !important;
		width: 100% !important;
		padding: 15px 0px 15px 0px !important;
		margin-bottom: -7.5%;
		background-color: #e4e4e4 !important;
		opacity: 1 !important;
	}
	.carousel-indicators [data-bs-target].active {
		color: #a02226;
	}
	.carousel_desc_title {
		font-weight: 400;
		color: #a02226;
		margin-bottom: 8px;
		font-size: 20px;
	}
	.carousel_desc_detail {
		font-size: 14px;
		font-weight: 400;
	}
	.solution_icon {
		width: 60%;
	}
	.solution_text {
		color: #000;
		margin-bottom: 5px;
	}
	.get_start_btn {
		background: #a02225 !important;
	    color: #fff !important;
	    border: 1px solid #a02225 !important;
	    padding: 12px 30px !important;
	    font-size: 16px !important;
	    font-weight: 400 !important;
	    border-radius: 10px !important;
	}
	.get_start_btn:hover {
		background: #fff !important;
	    color: #a02225 !important;
	}
	.aya_ibanking_fact {
		padding: 20px 20px;
	}
	.packages_div > .col-md-5 {
		width: 33.666667%;		
	}
	.packages_div > .col-md-1 {
		width: 9.333333%;
	}
	.offers_bg {
		background-color: #f5f5f7;
		height:850px;
		padding: 60px 20px 0px 20px;
		border-radius: 200px;
		margin-bottom: 20px;
	}
	.offers_tag {
		background-color: #4b4c4c;
		border-radius: 50%;
		width: 240px;
		height: 240px;
		margin: 0 auto !important;
		align-content: center !important;
	}
	.offers_tag_plus {
		background-color: #a02225;
		border-radius: 50%;
		width: 240px;
		height: 240px;
		margin: 0 auto !important;
		align-content: center !important;
	}
	.read_more_btn {
		background-color: #484848 !important;
		color: #fff !important;
		border-radius: 5px !important;
		border: 1px solid #484848 !important;
	}
	.read_more_btn:hover{
		background-color: #fff !important;
		color: #484848 !important;
		border: 1px solid #484848 !important;
	}
	.need_more_support_section {
	    padding: 40px 208px 0px 208px !important;
	}
	@media (max-width: 1400px) and (min-width: 577px) {
		.carousel-indicators{
			left: 85% !important;
		}
	}
	@media only screen and (max-width: 576px){
		.need_more_support_section {
		    padding: 0px 30px !important;
		}
		.packages_div > .col-md-5 {
			width: 100%;		
		}
		.packages_div > .col-md-1 {
			width: 100%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'corporate_internet_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_internet_banking'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'corporate_internet_banking'])
			</div>

			<div class="d-none d-sm-block">
				<div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
					<ol class="carousel-indicators">
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"><span style="padding-left: 20px;">1. Account Services</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"><span style="padding-left: 20px;">2. Payment Services</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"><span style="padding-left: 20px;">3. Administration</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="3"><span style="padding-left: 20px;">4. Authorization</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="4"><span style="padding-left: 20px;">5. Dual Control</span></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="{{ url('/images/corporate_internet_banking/account_service.jpg') }}" alt="First slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
								<!-- <h2 style="font-weight: 800;color: #000;"></h2> -->
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Account Services</p>
								<p class="carousel_desc_detail">Users can access to enquire and review transaction records, account activities and summary in real time basis.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ url('/images/corporate_internet_banking/payment_services.jpg') }}" alt="Second slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
								<!-- <h2 style="font-weight: 800;color: #000;"></h2> -->
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Payment Services</p>
								<p class="carousel_desc_detail">Users can initiate transactions for AYA account transfer, own account transfer, payroll (bulk payments), pay bills, cheque book request and cheque cancellation.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ url('/images/corporate_internet_banking/payment_services.jpg') }}" alt="Third slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
								<!-- <h2 style="font-weight: 800;color: #000;"></h2> -->
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Administration</p>
								<p class="carousel_desc_detail">Users can change profile, create beneficiary for frequent transaction and create various transaction alerts.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ url('/images/corporate_internet_banking/payment_services.jpg') }}" alt="Fourth slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
								<!-- <h2 style="font-weight: 800;color: #000;"></h2> -->
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Authorization</p>
								<p class="carousel_desc_detail">Authorization Matrix allows user access control by amount limits and different control group.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ url('/images/corporate_internet_banking/payment_services.jpg') }}" alt="Fifth slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
								<!-- <h2 style="font-weight: 800;color: #000;"></h2> -->
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Dual Control</p>
								<p class="carousel_desc_detail">One level can create transactions and to complete it, another authorized level user need to approve the transactions. Two separate people authorize and complete a transaction or payment.</p>
							</div>
						</div>
					</div>
                </div>
			</div>
			<div class="d-block d-sm-none">
				<div class="aya_ibanking_fact">
					<div class="col-12 text-center">
						<h3 style="color: #1d1d1f;padding: 0px 60px;">Key features of AYA Corporate Internet Banking</h3>
						<!-- <h2 style="font-weight: 800;color: #000;padding: 0px 60px;">Key features of AYA Corporate Internet Banking</h2> -->
					</div>
					<div class="col-12">
						<p class="carousel_desc_title">Account Services</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/corporate_internet_banking/account_service_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Users can access to enquire and review transaction records, account activities and summary in real time basis.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Payment Services</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/corporate_internet_banking/payment_services_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Users can initiate transactions for AYA account transfer, own account transfer, payroll (bulk payments), pay bills, cheque book request and cheque cancellation.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Administration</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/corporate_internet_banking/administration_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Users can change profile, create beneficiary for frequent transaction and create various transaction alerts.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Authorization</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/corporate_internet_banking/authorization_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Authorization Matrix allows user access control by amount limits and different control group.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Dual Control</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/corporate_internet_banking/dual_control_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">One level can create transactions and to complete it, another authorized level user need to approve the transactions. Two separate people authorize and complete a transaction or payment.</p>
					</div>
				</div>
			</div>

			<div class="container section_1">
				<div class="space-60"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<!-- <h2 style="font-weight: 800;color: #000;"></h2> -->
						<h3 style="color: #1d1d1f;">AYA Bank offers 2 packages</h3>
					</div>
				</div>
				<div class="row packages_div" style="column-gap: 50px;">
					<div class="col-md-1"></div>
					<div class="col-md-5 offers_bg">
						<div class="row text-center offers_tag">
							<p style="color: #fff;font-size: 40px;margin-bottom: 0px;font-weight: 600;">Basic</h3>
							<p style="color: #fff;">Standard features with two makers and one checker</p>
						</div>
						<div class="space-20"></div>
						<div class="row" style="padding: 20px 50px;">
							<ul style="list-style: square;margin-bottom: 0px;">
								<li><p style="font-weight: 500;">Account Service</p></li>
								<li><p style="font-weight: 500;">Payment Service</p></li>
							</ul>
							<ul style="list-style: none;margin-top: -10px;">
								<li>
									<ul style="list-style:none;">
										<li style="margin-bottom: 5px;">Own Accout Transfer</li>
										<li style="margin-bottom: 5px;">Third Party Transfer</li>
										<li style="margin-bottom: 5px;">Bulk Transfer</li>
										<li style="margin-bottom: 5px;">Cheque Book Request</li>
										<li style="margin-bottom: 5px;">Stop Cheque Book</li>
									</ul>
								</li>
							</ul>
							<ul style="list-style: square;margin-top: -10px;">
								<li><p style="font-weight: 500;">Dual Control</p></li>
								<li><p style="font-weight: 500;">Allow<span style="margin-left: 30px;">2 Makers</span></p></li>
							</ul>
							<ul style="list-style: none;margin-top: -30px;">
								<li><p style="font-weight: 500;"><span style="color: transparent;user-select: none;">Allow</span><span style="margin-left: 30px;">1 Checker</span></p></li>
							</ul>
							<ul style="list-style: square;margin-top: -10px;">
								<li><p style="font-weight: 500;">Registration Fees: FOC</p></li>
								<li><p style="font-weight: 500;">Monthly Fees: FOC</p></li>
								<li><p style="font-weight: 500;">Token Fees: <br>20,000 MMK (Per Token)</p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 offers_bg">
						<div class="row text-center offers_tag_plus">
							<p style="color: #fff;font-size: 40px;margin-bottom: 0px;font-weight: 600;">Basic<sup>+</sup></h3>
							<p style="color: #fff;">standard features with unlimited users</p>
						</div>
						<div class="space-20"></div>
						<div class="row" style="padding: 20px 50px;">
							<ul style="list-style: square;margin-bottom: 0px;">
								<li><p style="font-weight: 500;">Account Service</p></li>
								<li><p style="font-weight: 500;">Payment Service</p></li>
							</ul>
							<ul style="list-style: none;margin-top: -10px;">
								<li>
									<ul style="list-style:none;">
										<li style="margin-bottom: 5px;">Own Accout Transfer</li>
										<li style="margin-bottom: 5px;">Third Party Transfer</li>
										<li style="margin-bottom: 5px;">Bulk Transfer</li>
										<li style="margin-bottom: 5px;">Cheque Book Request</li>
										<li style="margin-bottom: 5px;">Stop Cheque Book</li>
									</ul>
								</li>
							</ul>
							<ul style="list-style: square;">
								<li><p style="font-weight: 500;">Customized Authorization matrix</p></li>
								<li><p style="font-weight: 500;">Allow Unlimited users</p></li>
								<li><p style="font-weight: 500;">Registration Fees: FOC</p></li>
								<li><p style="font-weight: 500;">Monthly Fees: FOC</p></li>
								<li><p style="font-weight: 500;">Token Fees: <br>20,000 MMK (Per Token)</p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-9" style="padding-left: 30px;">
						<p style="font-weight: 600;font-size: 20px;">Other Features</p>
						<ul style="list-style:square;">
							<li>Download account statement in csv format / pdf format / MT940 format</li>
							<li>Registration of beneficiaries through bulk</li>
							<li>Transaction can be saved as template for future use</li>
							<li>Transact at one click by using previous transaction</li>
						</ul>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>

			<div class="space-40"></div>
			<div class="need_more_support_section">
				<div class="container d-none d-sm-block" style="padding: 40px 60px 30px 60px;background-image: url('./images/get_start_bg.jpg');background-size: cover;border-radius: 6px;">
					<div class="row">
						<div class="col-md-12 col-xs-12 text-center">
							<h3 style="color: #1d1d1f;">Get started Corporate Internet Banking!</h3>
							<div class="space-20"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;border-right: 1px solid #1d1d1f;padding-right: 0px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Not yet a Corporate Internet Banking user?</p>
							<a href="#" target="_blank">
								<button class="btn get_start_btn">VISIT US TO FIND OUT MORE</button>
							</a>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;padding-left: 0px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Already a Corporate Internet Banking user?</p>
							<a href="https://corporate.ayaibanking.com/customer/portal" target="_blank">
								<button class="btn get_start_btn">LOGIN</button>
							</a>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-12 col-xs-12 text-center">
							<div class="space-20"></div>
							<p style="color: #000;"><a href="#" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities to help you manage your finance online.</p>
						</div>
					</div>
				</div>
				<div class="container d-block d-sm-none" style="padding: 30px;background-image: url('./images/get_start_bg.jpg');background-size: cover;border-radius: 6px;">
					<div class="row">
						<div class="col-md-12 col-xs-12 text-center">
							<h2 style="font-weight: 800;color: #000;">Get started Corporate Internet Banking!</h2>
							<div class="space-20"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;border-bottom: 1px solid #1d1d1f;padding-bottom: 0px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Not yet a Corporate Internet Banking user?</p>
							<a href="#" target="_blank">
								<button class="btn get_start_btn">VISIT US TO FIND OUT MORE</button>
							</a>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 20px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Already a Corporate Internet Banking user?</p>
							<a href="https://corporate.ayaibanking.com/customer/portal" target="_blank">
								<button class="btn get_start_btn">LOGIN</button>
							</a>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-12 col-xs-12 text-center">
							<!-- <div class="space-20"></div> -->
							<p style="color: #000;"><a href="#" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities to help you manage your finance online.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="space-20"></div>

			<div class="need_more_support_section">
				<div class="container d-none d-sm-block" style="padding: 40px 60px 40px 60px;background-color: #f5f5f7;border-radius: 6px;">
					<div class="row">
						<div class="col-md-9 col-xs-12" style="padding-top: 15px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Frequently Asked Question about Corporate Internet Banking</p>
						</div>
						<div class="col-md-3 col-xs-12 text-right" style="padding-top: 10px;padding-left: 0px;text-align: right;">
							<a href="#" target="_blank">
								<button class="btn read_more_btn">Read More</button>
							</a>
						</div>
					</div>
				</div>
				<div class="container d-block d-sm-none" style="padding: 30px;background-color: #f5f5f7;border-radius: 6px;">
					<div class="row">
						<div class="col-xs-12 text-center" style="padding-top: 15px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Frequently Asked Question about Corporate Internet Banking</p>
						</div>
						<div class="col-xs-12 text-center" style="padding-top: 10px;padding-left: 0px;text-align: right;">
							<a href="#" target="_blank">
								<button class="btn read_more_btn">Read More</button>
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
	// $('.carousel').carousel();

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