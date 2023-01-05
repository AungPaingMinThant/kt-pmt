@extends('layouts.frontend-app')

@section('title', 'iBanking – AYA Bank')
<style type="text/css">
	.carousel-caption.carousel_title {
		top: 6%;
	}
	.carousel-caption.carousel_desc {
		text-align: left !important;
	}
	.carousel_desc {
		width: 17% !important;
		top: 35% !important;
		left: 13% !important;		
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
		color: #2e2e2e;
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
	.need_more_support_section {
	    padding: 40px 208px 0px 208px !important;
	}
	.need_more_support_section_container {
		padding: 40px 100px 30px 100px;
		background-image: url('./images/get_start_bg.jpg');
		background-size: cover;
		border-radius: 6px;
	}
	@media (max-width: 1400px) and (min-width: 1301px) {
		.carousel-indicators{
			left: 85% !important;
		}
	}
	@media (max-width: 1300px) and (min-width: 1000px) {
		.carousel-indicators {
			top: 15%;
			left: 78% !important;
		}
		.carousel-indicators [data-bs-target] {
			padding: 10px 0px 10px 0px !important;
		}
		.carousel_desc {
			width: 25% !important;
			top: 25% !important;
			left: 10% !important;
		}
		.need_more_support_section {
		    padding: 40px 150px 0px 150px !important;
		}
		.need_more_support_section_container {
			padding: 40px 70px 30px 70px;
		}
	}
	@media only screen and (max-width: 576px){
		.need_more_support_section {
		    padding: 0px 30px !important;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'internetbanking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'internetbanking'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'internetbanking'])
			</div>

			<div class="d-none d-sm-block">
				<div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
					<ol class="carousel-indicators">
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"><span style="padding-left: 20px;">1. Transfer Funds</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"><span style="padding-left: 20px;">2. Get Your Statement</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"><span style="padding-left: 20px;">3. Bill Payments</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="3"><span style="padding-left: 20px;">4. Mobile Top-up</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="4"><span style="padding-left: 20px;">5. SMS Services</span></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="{{ url('/images/ayaiBankingslider1.jpg') }}" alt="First slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">Transfer Funds</p>
								<p class="carousel_desc_detail">It could be between AYA Bank accounts or transfer to other bank’s account or to your credit card. Move money now or schedule it for future, whatever you need.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ url('/images/ayaiBankingslider3.jpg') }}" alt="Second slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">Get Your Statement</p>
								<p class="carousel_desc_detail">Paperless statement is available to view, download and print 24/7. Go online and monitor your transactions.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ url('/images/ayaiBankingslider3.jpg') }}" alt="Third slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">Bill Payments</p>
								<p class="carousel_desc_detail">Take advantage of online banking services to manage bill payments securely.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ url('/images/ayaiBankingslider3.jpg') }}" alt="Fourth slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">Mobile Top-up</p>
								<p class="carousel_desc_detail">Top-up anyone’s mobile fast, easy and secure from your iBanking account.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ url('/images/ayaiBankingslider3.jpg') }}" alt="Fifth slide">
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">SMS Services</p>
								<p class="carousel_desc_detail">It sends alerts to keep you on track, giving you more control over your money. You'll receive text message without internet connection.</p>
							</div>
						</div>
					</div>
                </div>
			</div>
			<div class="d-block d-sm-none">
				<div class="aya_ibanking_fact">
					<div class="col-12 text-center">
						<!-- <h2 style="font-weight: 800;color: #000;padding: 0px 60px;">What you can do with AYA iBanking?</h2> -->
						<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
					</div>
					<div class="col-12">
						<p class="carousel_desc_title">Transfer Funds</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/ayaiBankingslider1_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">It could be between AYA Bank accounts or transfer to other bank’s account or to your credit card. Move money now or schedule it for future, whatever you need.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Get Your Statement</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/ayaiBankingslider1_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Paperless statement is available to view, download and print 24/7. Go online and monitor your transactions.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Bill Payments</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/ayaiBankingslider1_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Take advantage of online banking services to manage bill payments securely.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Mobile Top-up</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/ayaiBankingslider1_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Top-up anyone’s mobile fast, easy and secure from your iBanking account.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">SMS Services</p>
					</div>
					<div class="col-12">
						<img src="{{ url('/images/ayaiBankingslider1_mobile.jpg') }}" class="img-fluid" style="margin-bottom: 20px;">
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">It sends alerts to keep you on track, giving you more control over your money. You'll receive text message without internet connection.</p>
					</div>
				</div>
			</div>

			<div class="container section_1">
				<div class="space-60"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<!-- <h2 style="font-weight: 800;color: #000;">The right solution for managing your funds because, it is</h2> -->
						<h3 style="color: #1d1d1f;padding: 0px 60px;">The right solution for managing your funds because, it is</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<img src="{{ url('/images/QuickIcon.jpg') }}" class="img-fluid solution_icon">
						<p class="solution_text" style="font-weight: 600">Quick</p>
						<p class="solution_text solution_desc">Transactions are done in real-time.</p>
					</div>
					<div class="col-md-3">
						<img src="{{ url('/images/SafeIcon.jpg') }}" class="img-fluid solution_icon">
						<p class="solution_text" style="font-weight: 600">Safe</p>
						<p class="solution_text solution_desc">Secured channels are used so that your transaction and data are fully protected.</p>
					</div>
					<div class="col-md-3">
						<img src="{{ url('/images/SafeTimeCostIcon.jpg') }}" class="img-fluid solution_icon">
						<p class="solution_text" style="font-weight: 600">Save Time and Cost</p>
						<p class="solution_text solution_desc">Customers do not need to go to the bank’s premise to conduct transactions, saving time and money.</p>
					</div>
					<div class="col-md-3">
						<img src="{{ url('/images/ConvenientIcon.jpg') }}" class="img-fluid solution_icon">
						<p class="solution_text" style="font-weight: 600">Convenient</p>
						<p class="solution_text solution_desc">Access your accounts, check balance or conduct transactions at any time and place of convenience.</p>
					</div>
				</div>
			</div>

			<div class="space-40"></div>
			<div class="need_more_support_section">
				<div class="container d-none d-sm-block need_more_support_section_container">
					<div class="row">
						<div class="col-md-12 col-xs-12 text-center">
							<!-- <h2 style="font-weight: 800;color: #000;">Get started Banking Online!</h2> -->
							<h3 style="color: #1d1d1f;padding: 0px 60px;">Get started Banking Online!</h3>
							<div class="space-20"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;border-right: 1px solid #1d1d1f;padding-right: 0px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Not yet an AYA i-Banking user?</p>
							<a href="https://www.ayaibanking.com/ibLogin.aspx" target="_blank">
								<button class="btn get_start_btn">REGISTER</button>
							</a>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;padding-left: 0px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Already an AYA i-Banking user?</p>
							<a href="https://www.ayaibanking.com/ibLogin.aspx" target="_blank">
								<button class="btn get_start_btn">LOGIN</button>
							</a>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-12 col-xs-12 text-center">
							<div class="space-20"></div>
							<p style="color: #000;"><a href="{{ url('/file/iBanking/iBanking User Guide Update.pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities.</p>
						</div>
					</div>
				</div>
				<div class="container d-block d-sm-none" style="padding: 30px;background-image: url('./images/get_start_bg.jpg');background-size: cover;border-radius: 6px;">
					<div class="row">
						<div class="col-md-12 col-xs-12 text-center">
							<!-- <h2 style="font-weight: 800;color: #000;">Get started Banking Online!</h2> -->
							<h3 style="color: #1d1d1f;padding: 0px 60px;">Get started Banking Online!</h3>
							<div class="space-20"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;border-bottom: 1px solid #1d1d1f;padding-bottom: 0px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Not yet an AYA i-Banking user?</p>
							<button class="btn get_start_btn">REGISTER</button>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 20px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Already an AYA i-Banking user?</p>
							<button class="btn get_start_btn">LOGIN</button>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-12 col-xs-12 text-center">
							<!-- <div class="space-20"></div> -->
							<!-- <p style="color: #000;"><a href="{{ url('/file/iBanking/iBanking User Guide Update.pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities to help you manage your finance online</p> -->
							<p style="color: #000;"><a href="{{ url('/file/iBanking/iBanking User Guide Update.pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities.</p>
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