@extends('layouts.frontend-app')

@section('title', 'iBanking – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/ibanking.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
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
						<div class="carousel-item transfer_funds" data-toggle="modal" data-target="#transfer_funds_modal" style="cursor: pointer;">
							<img class="w-100 image iBanking_slider_desk" src="{{ url('/images/internet_banking/ayaiBankingTransferFunds.jpg') }}" alt="First slide">
							<img class="image iBanking_slider_tab" src="{{ url('/images/internet_banking/ayaiBankingTransferFunds_tablet.jpg') }}" alt="First slide">
							<div class="overlay transfer_fund_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">Transfer Funds</p>
								<p class="carousel_desc_detail">It could be between AYA Bank accounts or transfer to other bank’s account or to your credit card. Move money now or schedule it for future, whatever you need.</p>
							</div>
						</div>
						<div class="carousel-item get_your_statment" data-toggle="modal" data-target="#get_your_statment_modal" style="cursor: pointer;">
							<img class="w-100 iBanking_slider_desk" src="{{ url('/images/internet_banking/ayaiBankingGetYourStatement.jpg') }}" alt="Second slide">
							<img class="iBanking_slider_tab" src="{{ url('/images/internet_banking/ayaiBankingGetYourStatement_tablet.jpg') }}" alt="Second slide">
							<div class="overlay get_your_statment_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">Get Your Statement</p>
								<p class="carousel_desc_detail">Paperless statement is available to view, download and print 24/7. Go online and monitor your transactions.</p>
							</div>
						</div>
						<div class="carousel-item bill_payments">
							<img class="iBanking_slider_desk w-100" src="{{ url('/images/internet_banking/ayaiBankingBillPayment.jpg') }}" alt="Third slide">
							<img class="iBanking_slider_tab" src="{{ url('/images/internet_banking/ayaiBankingBillPayment_tablet.jpg') }}" alt="Third slide">
							<div class="overlay bill_payments_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">Bill Payments</p>
								<p class="carousel_desc_detail">Take advantage of online banking services to manage bill payments securely.</p>
							</div>
						</div>
						<div class="carousel-item active mobile_top_up">
							<img class="iBanking_slider_desk w-100" src="{{ url('/images/internet_banking/ayaiBankingMobileTopup.jpg') }}" alt="Fourth slide">
							<img class="iBanking_slider_tab" src="{{ url('/images/internet_banking/ayaiBankingMobileTopup_tablet.jpg') }}" alt="Fourth slide">
							<div class="overlay mobile_top_up_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;padding: 0px 60px;">What you can do with AYA iBanking?</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block">
								<p class="carousel_desc_title">Mobile Top-up</p>
								<p class="carousel_desc_detail">Top-up anyone’s mobile fast, easy and secure from your iBanking account.</p>
							</div>
						</div>
						<div class="carousel-item  sms_services">
							<img class="w-100 iBanking_slider_desk" src="{{ url('/images/internet_banking/ayaiBankingSMSServices.jpg') }}" alt="Fifth slide">
							<img class="image iBanking_slider_tab" src="{{ url('/images/internet_banking/ayaiBankingSMSServices_tablet.jpg') }}" alt="Fifth slide">
							<div class="overlay sms_services_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
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

			<div class="modal fade" id="transfer_funds_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" >
					<div class="modal-content">
						<div class="modal-body ">
							<span class="transfer_funds_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/transfer_fund.jpg') }}" style="margin-left: 50px;width: 90%;">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="get_your_statment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="get_your_statment_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/i-Banking - Get Your Statement.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="bill_payments_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="bill_payments_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/i-Banking - Bill Payment.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="mobile_top_up_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" >
					<div class="modal-content">
						<div class="modal-body">
					        <span class="mobile_top_up_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/i-Banking - Mobile TopUp.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="sms_services_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content">
						<div class="modal-body text-center">
					        <span class="sms_services_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/SMS OTP with do not share.jpg') }}">
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="transfer_funds_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" >
					<div class="modal-content">
						<div class="modal-body ">
							<span class="transfer_funds_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/transfer_fund.jpg') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="get_your_statment_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="get_your_statment_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/i-Banking - Get Your Statement.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="bill_payments_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="bill_payments_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/i-Banking - Bill Payment.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="mobile_top_up_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="mobile_top_up_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/i-Banking - Mobile TopUp.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="sms_services_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="sms_services_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/internet_banking/SMS OTP with do not share.jpg') }}">
						</div>
					</div>
				</div>
			</div>

			<div class="d-block d-sm-none">
				<div class="aya_ibanking_fact">
					<div class="col-12 text-center">
						<h3 style="color: #1d1d1f;padding: 0px 10px;">What you can do with AYA iBanking?</h3>
					</div>
					<div class="col-12">
						<p class="carousel_desc_title">Transfer Funds</p>
					</div>
					<div class="col-12 key_feature_transfer_funds " style="position: relative;display: inline-block;">
						<img src="{{ url('/images/internet_banking/ayaiBankingslider_transfer_funds_mobile.jpg') }}" class="img-fluid transfer_funds_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/internet_banking/ayaiBankingslider_transfer_funds_mobile_hover.jpg') }}" class="img-fluid transfer_funds_hover_img" style="margin-bottom: 20px;">
						<div class="edit transfer_funds_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">It could be between AYA Bank accounts or transfer to other bank’s account or to your credit card. Move money now or schedule it for future, whatever you need.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Get Your Statement</p>
					</div>
					<div class="col-12 key_feature_get_your_statment" style="position: relative;display: inline-block;">
						<img src="{{ url('/images/internet_banking/ayaiBankingslider_getyourstatement_mobile.jpg') }}" class="img-fluid get_your_statment_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/internet_banking/ayaiBankingslider_getyourstatement_mobile_hover.jpg') }}" class="img-fluid get_your_statment_hover_img" style="margin-bottom: 20px;">
						<div class="edit get_your_statment_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Paperless statement is available to view, download and print 24/7. Go online and monitor your transactions.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Bill Payments</p>
					</div>
					<div class="col-12 key_feature_bill_payments" style="position: relative;display: inline-block;">
						<img src="{{ url('/images/internet_banking/ayaiBankingslider_bill_payment_mobile.jpg') }}" class="img-fluid bill_payments_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/internet_banking/ayaiBankingslider_bill_payment_mobile_hover.jpg') }}" class="img-fluid bill_payments_hover_img" style="margin-bottom: 20px;">
						<div class="edit bill_payments_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Take advantage of online banking services to manage bill payments securely.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Mobile Top-up</p>
					</div>
					<div class="col-12 key_feature_mobile_top_up" style="position: relative;display: inline-block;">
						<img src="{{ url('/images/internet_banking/ayaiBanking_mobile_topup_mobile.jpg') }}" class="img-fluid mobile_top_up_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/internet_banking/ayaiBanking_mobile_topup_mobile_hover.jpg') }}" class="img-fluid mobile_top_up_hover_img" style="margin-bottom: 20px;">
						<div class="edit mobile_top_up_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Top-up anyone’s mobile fast, easy and secure from your iBanking account.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">SMS Services</p>
					</div>
					<div class="col-12 key_feature_sms_services" style="position: relative;display: inline-block;">
						<img src="{{ url('/images/internet_banking/ayaiBankingSMSServices_mobile.jpg') }}" class="img-fluid sms_services_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/internet_banking/ayaiBankingSMSServices_mobile_hover.jpg') }}" class="img-fluid sms_services_hover_img" style="margin-bottom: 20px;">
						<div class="edit sms_services_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
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
						<h3 style="color: #1d1d1f;padding: 0px;">The right solution for managing your funds because, it is</h3>
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
							<a href="https://ibankapp.ayabank.com/" target="_blank">
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
							<p style="color: #000;"><a href="{{ url('/file/iBanking/iBanking_User_Guide.pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities.</p>
						</div>
					</div>
				</div>
				<div class="container d-block d-sm-none" style="padding: 30px;background-image: url('./images/get_start_bg.jpg');background-size: cover;border-radius: 6px;">
					<div class="row">
						<div class="col-md-12 col-xs-12 text-center">
							<!-- <h2 style="font-weight: 800;color: #000;">Get started Banking Online!</h2> -->
							<h3 style="color: #1d1d1f;padding: 0px;">Get started Banking Online!</h3>
							<div class="space-20"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 10px;border-bottom: 1px solid #1d1d1f;padding-bottom: 0px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Not yet an AYA i-Banking user?</p>
							<a href="https://ibankapp.ayabank.com/" target="_blank">
								<button class="btn get_start_btn">REGISTER</button>
							</a>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-6 col-xs-12 text-center" style="padding-top: 20px;">
							<p style="color: #000;font-weight: 400;font-size: 17px;">Already an AYA i-Banking user?</p>
							<a href="https://www.ayaibanking.com/ibLogin.aspx" target="_blank">
								<button class="btn get_start_btn">LOGIN</button>
							</a>
							<div style="height: 40px;"></div>
						</div>
						<div class="col-md-12 col-xs-12 text-center">
							<p style="color: #000;"><a href="{{ url('/file/iBanking/iBanking_User_Guide.pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities.</p>
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
	$(".transfer_fund_overlay").click(function(){
		$("#transfer_funds_modal").modal('show');
	});
	$(".transfer_funds_close").click(function(){
		$("#transfer_funds_modal").modal('hide');
	});

	$(".transfer_funds_mobile").click(function(){
		$("#transfer_funds_modal_mobile").modal('show');
	});
	$(".transfer_funds_mobile_close").click(function(){
		$("#transfer_funds_modal_mobile").modal('hide');
	});

	$(".get_your_statment_overlay").click(function(){
		$("#get_your_statment_modal").modal('show');
	});
	$(".get_your_statment_close").click(function(){
		$("#get_your_statment_modal").modal('hide');
	});

	$(".get_your_statment_mobile").click(function(){
		$("#get_your_statment_modal_mobile").modal('show');
	});
	$(".get_your_statment_mobile_close").click(function(){
		$("#get_your_statment_modal_mobile").modal('hide');
	});

	$(".bill_payments_overlay").click(function(){
		$("#bill_payments_modal").modal('show');
	});
	$(".bill_payments_close").click(function(){
		$("#bill_payments_modal").modal('hide');
	});
	$(".bill_payments_mobile").click(function(){
		$("#bill_payments_modal_mobile").modal('show');
	});
	$(".bill_payments_mobile_close").click(function(){
		$("#bill_payments_modal_mobile").modal('hide');
	});

	$(".mobile_top_up_overlay").click(function(){
		$("#mobile_top_up_modal").modal('show');
	});
	$(".mobile_top_up_close").click(function(){
		$("#mobile_top_up_modal").modal('hide');
	});
	$(".mobile_top_up_mobile").click(function(){
		$("#mobile_top_up_modal_mobile").modal('show');
	});
	$(".mobile_top_up_mobile_close").click(function(){
		$("#mobile_top_up_modal_mobile").modal('hide');
	});

	$(".sms_services_overlay").click(function(){
		$("#sms_services_modal").modal('show');
	});
	$(".sms_services_close").click(function(){
		$("#sms_services_modal").modal('hide');
	});
	$(".sms_services_mobile").click(function(){
		$("#sms_services_modal_mobile").modal('show');
	});
	$(".sms_services_mobile_close").click(function(){
		$("#sms_services_modal_mobile").modal('hide');
	});
</script>

@endsection('content')