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
	.secure_req_application_icon {
		background-color: #a02226;
		color: #fff;
		border-radius: 50%;
		font-size: 20px;
	}
	@media (max-width: 1300px) and (min-width: 1000px) {
		.carousel-indicators {
			top: 25%;
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
		.offers_tag, .offers_tag_plus {
		    width: 220px;
		    height: 220px;
		}
		.offers_bg {
		    padding: 30px 20px 0px 20px;
		    height: 930px;
		}
		.packages_div > .col-md-5 {
		    width: 35.666667%;
		}
		.need_more_support_section {
		    padding: 40px 100px 0px 100px !important;
		}
	}
	@media (max-width: 1400px) and (min-width: 1301px) {
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
		.offers_bg {
			padding: 30px 20px 0px 20px;
			height:950px;
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

			<style>
				.image {
				  	display: block;
				  	width: 100%;
				  	height: auto;
				}
				.overlay {
					z-index: 9999;
				  	position: absolute;
				    bottom: 0;
				    height: 50%;
				    width: 28%;
				 	opacity: 0;
				  	transition: .3s ease;
				  	background: #6b56565e;
				  	transform: translate(133%, -53%);
				  	-ms-transform: translate(133%, -53%);
				}
				.overlay_mobile {
					z-index: 999;
				  	position: absolute;
				    bottom: 0;
				    height: 19%;
				    width: 48%;
				 	opacity: 0;
				  	transition: .3s ease;
				  	background: #6b56565e;
				  	transform: translate(50%, -70%);
				  	-ms-transform: translate(50%, 580%);
				}
				.acc_service:hover .overlay {
				  	opacity: 1;
				}
				.payment_service:hover .overlay {
				  	opacity: 1;
				}
				.administration:hover .overlay {
				  	opacity: 1;
				}
				.complex_approval:hover .overlay {
					opacity: 1;
				}

				.key_feature_acc_service:hover .edit {
					display: block;
				}
				.acc_service_hover_img {
					display: none;
				}
				.key_feature_acc_service:hover .acc_service_img {
					display: none;
				}
				.key_feature_acc_service:hover .acc_service_hover_img {
					display: block;
				}

				.key_feature_payment_service:hover .edit {
					display: block;
				}
				.payment_service_hover_img {
					display: none;
				}
				.key_feature_payment_service:hover .payment_service_img {
					display: none;
				}
				.key_feature_payment_service:hover .payment_service_hover_img {
					display: block;
				}

				.key_feature_administration:hover .edit {
					display: block;
				}
				.administration_hover_img {
					display: none;
				}
				.key_feature_administration:hover .administration_img {
					display: none;
				}
				.key_feature_administration:hover .administration_hover_img {
					display: block;
				}

				.key_feature_complex_approval:hover .edit {
					display: block;
				}
				.complex_approval_hover_img {
					display: none;
				}
				.key_feature_complex_approval:hover .complex_approval_img {
					display: none;
				}
				.key_feature_complex_approval:hover .complex_approval_hover_img {
					display: block;
				}
				
				.edit {
					position: absolute;
					right: 40%;
					top: 40%;
					display: none;
				}
				.icon {
				  	color: white;
				  	font-size: 100px;
				  	position: absolute;
				  	top: 50%;
				  	left: 50%;
				  	transform: translate(-50%, -50%);
				  	-ms-transform: translate(-50%, -50%);
				 	text-align: center;
				}
			</style>

			<div class="d-none d-sm-block">
				<div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
					<ol class="carousel-indicators">
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"><span style="padding-left: 20px;">1. Account Services</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"><span style="padding-left: 20px;">2. Payment Services</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"><span style="padding-left: 20px;">3. Administration</span></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="3"><span style="padding-left: 20px;">4. Complex Approval Matrix</span></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active acc_service" data-toggle="modal" data-target="#acc_service_modal"  style="cursor: pointer;">
							<img class="d-block w-100 image" src="{{ url('/images/corporate_internet_banking/account_service.jpg') }}" alt="First slide">
							<div class="overlay acc_service_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Account Services</p>
								<p class="carousel_desc_detail">Users can easily enquire and review transaction records, account activities and a summary in real-time basis.</p>
							</div>
						</div>
						<div class="carousel-item payment_service">
							<img class="d-block w-100" src="{{ url('/images/corporate_internet_banking/paymentservices.jpg') }}" alt="Second slide">
							<div class="overlay payment_service_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Payment Services</p>
								<p class="carousel_desc_detail">Users can initiate transactions for AYA account transfer, own account transfer, payroll (bulk payments), pay bills, cheque book request and cheque cancellation.</p>
							</div>
						</div>
						<div class="carousel-item administration">
							<img class="d-block w-100" src="{{ url('/images/corporate_internet_banking/CIB_administration.jpg') }}" alt="Third slide">
							<div class="overlay administration_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Administration</p>
								<p class="carousel_desc_detail">Users can change profiles, create beneficiaries for the most frequent transactions, and generate a wide range of transaction alerts.</p>
							</div>
						</div>
						<div class="carousel-item complex_approval">
							<img class="d-block w-100" src="{{ url('/images/corporate_internet_banking/Complex_Approval_Matrix.jpg') }}" alt="Fourth slide">
							<div class="overlay complex_overlay" style="cursor: pointer;">
								<a class="icon" title="User Profile" >
							    	<i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i>
							  	</a>
							</div>
							<div class="carousel-caption carousel_title d-none d-md-block">
								<h3 style="color: #1d1d1f;">Key features of AYA Corporate Internet Banking</h3>
							</div>
							<div class="carousel-caption carousel_desc text-left d-none d-md-block" style="width: 17%;top: 35%;left: 13%;">
								<p class="carousel_desc_title">Complex Approval Matrix</p>
								<p class="carousel_desc_detail">The Authorization Matrix allows ‘user access control’ by amount limits and different control groups. </p>
							</div>
						</div>
					</div>
                </div>
			</div>

			<div class="modal fade" id="acc_service_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" >
					<div class="modal-content">
						<div class="modal-body ">
							<span class="acc_service_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/corporate_internet_banking/CIB_Account_Services.png') }}" style="margin-left: 50px;">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="payment_service_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="payment_service_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/corporate_internet_banking/CIB_Payment_Services.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="administration_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="administration_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/corporate_internet_banking/CIB - Administration.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="complex_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="complex_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/corporate_internet_banking/CIB_Complex_Approval_Matrix.jpg') }}">
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="acc_service_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" >
					<div class="modal-content">
						<div class="modal-body ">
							<span class="acc_service_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/corporate_internet_banking/CIB_Account_Services.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="payment_service_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="payment_service_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/corporate_internet_banking/CIB_Payment_Services.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="administration_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="administration_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/corporate_internet_banking/CIB - Administration.png') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="complex_modal_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document" style="max-width: 1450px;">
					<div class="modal-content">
						<div class="modal-body">
					        <span class="complex_mobile_close" aria-hidden="true" style="float: right;border-radius: 50%;border: 1px solid #999;padding: 4px 10px;cursor: pointer;">&times;</span>
							<img class="img-fluid text-center" src="{{ url('/images/corporate_internet_banking/CIB_Complex_Approval_Matrix.jpg') }}">
						</div>
					</div>
				</div>
			</div>

			<div class="d-block d-sm-none">
				<div class="aya_ibanking_fact">
					<div class="col-12 text-center">
						<h3 style="color: #1d1d1f;padding: 0px 60px;">Key features of AYA Corporate Internet Banking</h3>
					</div>
					<div class="col-12">
						<p class="carousel_desc_title">Account Services</p>
					</div>
					<div class="col-12 key_feature_acc_service " style="position: relative;display: inline-block;">
						<img src="{{ url('/images/corporate_internet_banking/account_service_mobile.jpg') }}" class="img-fluid acc_service_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/corporate_internet_banking/account_service_mobile_hover.jpg') }}" class="img-fluid acc_service_hover_img" style="margin-bottom: 20px;">
						<div class="edit acc_service_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Users can access to enquire and review transaction records, account activities and summary in real time basis.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Payment Services</p>
					</div>
					<div class="col-12 key_feature_payment_service" style="position: relative;display: inline-block;">
						<img src="{{ url('/images/corporate_internet_banking/payment_services_mobile.jpg') }}" class="img-fluid payment_service_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/corporate_internet_banking/payment_services_mobile_hover.jpg') }}" class="img-fluid payment_service_hover_img" style="margin-bottom: 20px;">
						<div class="edit payment_service_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Users can initiate transactions for AYA account transfer, own account transfer, payroll (bulk payments), pay bills, cheque book request and cheque cancellation.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Administration</p>
					</div>
					<div class="col-12 key_feature_administration" style="position: relative;display: inline-block;">
						<img src="{{ url('/images/corporate_internet_banking/administration_mobile.jpg') }}" class="img-fluid administration_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/corporate_internet_banking/administration_mobile_hover.jpg') }}" class="img-fluid administration_hover_img" style="margin-bottom: 20px;">
						<div class="edit administration_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">Users can change profile, create beneficiary for frequent transaction and create various transaction alerts.</p>
					</div>
				</div>
				<div class="aya_ibanking_fact">
					<div class="col-12">
						<p class="carousel_desc_title">Complex Approval Matrix</p>
					</div>
					<div class="col-12 key_feature_complex_approval" style="position: relative;display: inline-block;">
						<img src="{{ url('/images/corporate_internet_banking/Complex_Approval_Matrix_mobile.jpg') }}" class="img-fluid complex_approval_img" style="margin-bottom: 20px;">
						<img src="{{ url('/images/corporate_internet_banking/Complex_Approval_Matrix_mobile_hover.jpg') }}" class="img-fluid complex_approval_hover_img" style="margin-bottom: 20px;">
						<div class="edit complex_approval_mobile"><i class="menu-icon tf-icons bx bx-zoom-in" style="color: #000;font-size: 30px;"></i></div>
					</div>
					<div class="col-12">
						<p class="carousel_desc_detail">The Authorization Matrix allows ‘user access control’ by amount limits and different control groups.</p>
					</div>
				</div>
			</div>
			<div style="background-color: #f5f5f7;">
				<div class="space-60"></div>
				<div class="container section_1" style="max-width: 1500px;">
					<div class="row">
						<div class="col-md-9" style="padding-left: 30px;">
							<p style="font-weight: 600;font-size: 20px;">Other Features</p>
							<ul style="list-style:square;">
								<li>Download account statement in csv format / pdf format / MT940 format</li>
								<li>Registration of beneficiaries through bulk</li>
								<li>Transactions can be saved as a template for future use.</li>
								<li>Transact at one click by using a previous transaction.</li>
							</ul>
						</div>
						<div class="col-md-1"></div>
					</div>
					<div class="space-20"></div>
					<div class="col-md-12 text-center">
						<h3 style="color: #1d1d1f;">Two packages: Basic and Basic<sup>+</sup></h3>
					</div>
					<div class="space-20"></div>
					<div class="row" style="padding: 40px 20px;background-color: #fff;border-radius: 6px;">
						<div class="col-md-3">
							<p style="font-size: 40px;margin-bottom: 0px;font-weight: 600;">Basic</h3>
							<p>Standard features with two makers and one checker</p>
						</div>
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Account Service
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Dual Control
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Registration Fees: FOC
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Token Fees: <br>20,000 MMK (Per Token)
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Payment Service
									</p>
									<ul style="list-style:none;">
										<li style="margin-bottom: 5px;">Own Accout Transfer</li>
										<li style="margin-bottom: 5px;">Third Party Transfer</li>
										<li style="margin-bottom: 5px;">Bulk Transfer</li>
										<li style="margin-bottom: 5px;">Cheque Book Request</li>
										<li style="margin-bottom: 5px;">Stop Cheque Book</li>
									</ul>
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Allow
									</p>
									<ul style="list-style:none;">
										<li style="margin-bottom: 5px;">2&nbsp;&nbsp;Makers</li>
										<li style="margin-bottom: 5px;">1&nbsp;&nbsp;Checker</li>
									</ul>
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Monthly Fees: 10,000MMK
									</p>
								</div>
								<div class="col-md-3">
								</div>
							</div>
						</div>
					</div>
					<div class="space-20"></div>
					<div class="row" style="padding: 40px 20px;background-color: #fff;border-radius: 6px;">
						<div class="col-md-3">
							<p style="font-size: 40px;margin-bottom: 0px;font-weight: 600;">Basic<sup>+</sup></h3>
							<p>Standard features with unlimited users</p>
						</div>
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Account Service
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Allow Unlimited users
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Registration Fees: FOC
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Token Fees: <br>20,000 MMK (Per Token)
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Payment Service
									</p>
									<ul style="list-style:none;">
										<li style="margin-bottom: 5px;">Own Accout Transfer</li>
										<li style="margin-bottom: 5px;">Third Party Transfer</li>
										<li style="margin-bottom: 5px;">Bulk Transfer</li>
										<li style="margin-bottom: 5px;">Cheque Book Request</li>
										<li style="margin-bottom: 5px;">Stop Cheque Book</li>
									</ul>
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Customized Authorization matrix
									</p>
								</div>
								<div class="col-md-3">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 85%;float: right;">
										Monthly Fees: 10,000MMK
									</p>
								</div>
								<div class="col-md-3">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="space-60"></div>
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
							<div class="space-60"></div>
							<p style="color: #000;font-size: 16px;"><a href="{{ url('/file/cib/CIB_Enquiry Form.pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities to help you manage your finance online.</p>
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
							<p style="color: #000;"><a href="{{ url('/file/cib/CIB_Enquiry Form.pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities to help you manage your finance online.</p>
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
							<a href="{{ url('/file/cib/FAQ_Corporate Internet Banking (CIB).pdf') }}" target="_blank">
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
							<a href="{{ url('/file/cib/FAQ_Corporate Internet Banking (CIB).pdf') }}" target="_blank">
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

	$(".acc_service_overlay").click(function(){
		$("#acc_service_modal").modal('show');
	});
	$(".acc_service_close").click(function(){
		$("#acc_service_modal").modal('hide');
	});

	$(".acc_service_mobile").click(function(){
		$("#acc_service_modal_mobile").modal('show');
	});
	$(".acc_service_mobile_close").click(function(){
		$("#acc_service_modal_mobile").modal('hide');
	});

	$(".payment_service_overlay").click(function(){
		$("#payment_service_modal").modal('show');
	});
	$(".payment_service_close").click(function(){
		$("#payment_service_modal").modal('hide');
	});

	$(".payment_service_mobile").click(function(){
		$("#payment_service_modal_mobile").modal('show');
	});
	$(".payment_service_mobile_close").click(function(){
		$("#payment_service_modal_mobile").modal('hide');
	});

	$(".administration_overlay").click(function(){
		$("#administration_modal").modal('show');
	});
	$(".administration_close").click(function(){
		$("#administration_modal").modal('hide');
	});
	$(".administration_mobile").click(function(){
		$("#administration_modal_mobile").modal('show');
	});
	$(".administration_mobile_close").click(function(){
		$("#administration_modal_mobile").modal('hide');
	});

	$(".complex_overlay").click(function(){
		$("#complex_modal").modal('show');
	});
	$(".complex_close").click(function(){
		$("#complex_modal").modal('hide');
	});
	$(".complex_approval_mobile").click(function(){
		$("#complex_modal_mobile").modal('show');
	});
	$(".complex_mobile_close").click(function(){
		$("#complex_modal_mobile").modal('hide');
	});



	

</script>

@endsection('content')
