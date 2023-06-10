@extends('layouts.frontend-app')

@section('title', 'Corporate Internet Banking – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/CIB.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_internet_banking'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'corporate_internet_banking'])
			</div>

			<div>
				<div class="nav-align-top mb-4">
					<div class="text-center">
						<h3 class="fw-semibold py-md-3" style="color: #1d1d1f;">Key features</h3>
					</div>
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-account-services" aria-controls="navs-pills-top-account-services" aria-selected="true" >
								Account Services
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-payment-services" aria-controls="navs-pills-top-payment-services" aria-selected="false" >
								Payment Services
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-administration" aria-controls="navs-pills-top-administration" aria-selected="false" >
								Administration
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-complex-approval-matrix" aria-controls="navs-pills-top-complex-approval-matrix" aria-selected="false" >
								Complex Approval Matrix
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-other-features" aria-controls="navs-pills-top-other-features" aria-selected="false" >
								Other Features
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 20px 0px 0px 0px;">
						<div class="tab-pane fade show active" id="navs-pills-top-account-services" role="tabpanel" style="padding-bottom: 30px;">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12 text-center" style="padding-top: 20px;">
										<p>Users can easily enquire and review transaction records, account activities and a summary in real-time basis.</p>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/icon_1.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">View Account's Statement</p>
											<p style="color: #4e4e4e;">Users can view statements and search for the transaction details and status.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/icon_2.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">View Account's Overview</p>
											<p style="color: #4e4e4e;">User can overview accounts' details and summary.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/icon_3.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">Download Account's Statament</p>
											<p style="color: #4e4e4e;">Users can download accounts' statement and history</p>
										</div>
									</div>
								</div>
							</div>
							<div class="space-40"></div>
						</div>
						<div class="tab-pane payment-services fade" id="navs-pills-top-payment-services" role="tabpanel" style="padding-bottom: 30px;">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12 text-center" style="padding-top: 20px;">
										<p>Users can initiate transactions for AYA account transfer, own account transfer, payroll (bulk payments), pay bills, cheque book request and cheque cancellation.</p>
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/own_account_transfer.png') }}" class="img-fluid payment_service_img">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">Own Account Transfer</p>
											<p style="color: #4e4e4e;">Users can initiate fund transfer within their own AYA accounts.</p>
										</div>
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/other_account_transfer.png') }}" class="img-fluid payment_service_img">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">Other AYA Account’s Transfer</p>
											<p style="color: #4e4e4e;">Users can transfer from their AYA Account to Another AYA Account.</p>
										</div>
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/bulk_transfer.png') }}" class="img-fluid payment_service_img">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">Bulk Transfer</p>
											<p style="color: #4e4e4e;">Users can initiate multiple transactions at the same time with "From Scratch" or "Upload" with a csv file.</p>
										</div>
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/cheque_book_request.png') }}" class="img-fluid payment_service_img">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">Cheque Book Request and Stop Cheque</p>
											<p style="color: #4e4e4e;">Users can request Cheque Book and Stop Cheque without going to the branch</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane administration fade" id="navs-pills-top-administration" role="tabpanel" style="padding-bottom: 30px;">
							<div class="container tab_section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12 text-center" style="padding-top: 20px;">
										<p>Users can change profiles, create beneficiaries for the most frequent transactions, and generate a wide range of transaction alerts.</p>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/profile_edit.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">Change Profile</p>
											<p style="color: #4e4e4e;">Users have profile management options.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/create_alert.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">Create Alert</p>
											<p style="color: #4e4e4e;">Users can choose to receive various types of transaction notifications and alerts.</p>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;">
										<div class="row why_use_AYA simple_login_div">
											<img src="{{ url('/images/corporate_internet_banking/beneficiary_maintenance.png') }}" class="img-fluid" style="width: 30%;">
											<p style="color: #4e4e4e;font-weight:600;margin-bottom: 5px;margin-top: 10px;">Beneficiary Maintenance</p>
											<p style="color: #4e4e4e;">Users can create beneficiaries' information in advanced for multiple frequent transactions.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="space-40"></div>
						</div>
						<div class="tab-pane complex-approval-matrix fade" id="navs-pills-top-complex-approval-matrix" role="tabpanel" style="padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12 text-center" style="padding-top: 20px;">
										<p style="color: #4e4e4e;">The Authorization Matrix allows ‘user access control’ by amount limits and different control groups.</p>
									</div>
									<div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<p class="fw-semibold" style="color: #4e4e4e;font-size: 16px;">Multiple Level Access</p>
										<img src="{{ url('/images/corporate_internet_banking/authorizer.png') }}" class="img-fluid com_approval_tab_img">
									</div>
									<div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<p class="fw-semibold" style="color: #4e4e4e;font-size: 16px;">Multiple Level Access</p></p>
										<img src="{{ url('/images/corporate_internet_banking/maker.png') }}" class="img-fluid com_approval_tab_img">
									</div>
									<div class="col-md-12 text-center com_approval_tab_txt">
										<p style="color: #4e4e4e;">One level can create transactions and another authorized level user needs to approve transactions in order to successfully complete the transaction process. Simply put, two qualified individuals authorize and complete a transaction or a payment.</p>
									</div>
									<div class="col-md-3"></div>
									<div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<img src="{{ url('/images/corporate_internet_banking/authorizer_maker.png') }}" class="img-fluid">
									</div>
									<div class="col-md-3"></div>
								</div>
							</div>
						</div>
						<div class="tab-pane other-features fade" id="navs-pills-top-other-features" role="tabpanel" style="padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-2"></div>
									<div class="col-md-8 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<ul style="list-style:square;">
												<li>Download account statement in csv format / pdf format / MT940 format</li>
												<li>Registration of beneficiaries through bulk</li>
												<li>Transactions can be saved as a template for future use.</li>
												<li>Transact at one click by using a previous transaction.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div style="background-color: #f5f5f7;">
				<div class="space-60"></div>
				<div class="container section_1">
					<div class="col-md-12 text-center">
						<h3 style="color: #1d1d1f;">Two packages: Basic and Basic<sup>+</sup></h3>
					</div>
					<div class="space-20"></div>
					<div class="row" style="background-color: #fff;border-radius: 6px;">
						<div class="col-md-2 packages_img basic_packages_img">
							<div class="row" style="background-color: #fff;padding: 20px 10px;border-top-left-radius: 6px;border-top: 7px solid #ace3f7;">
								<p style="font-size: 40px;margin-bottom: 0px;font-weight: 600;">Basic</h3>
								<p class="mb-0">Standard features with two makers and one checker</p>
							</div>
						</div>
						<div class="col-md-10 packages_main">
							<div class="row">
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Account Service<span class="ac_service_extra_line"><br>&nbsp;</span>
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Dual Control<span class="dual_control_extra_line"><br>&nbsp;</span>
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Registration Fees: FOC<span class="reg_fee_extra_line"><br>&nbsp;</span>
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Monthly Fees: 10,000MMK
									</p>
									<hr style="width: 100%;">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Token Fees: <br>45,000 MMK (Per Token)
									</p>
									<hr class="d-block d-sm-none" style="width: 100%;">
								</div>
								<div class="col-md-3 basic_package_col basic_pack_allow">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Allow
									</p>
									<ul class="packages_list">
										<li style="margin-bottom: 5px;">2&nbsp;&nbsp;Makers</li>
										<li style="margin-bottom: 5px;">1&nbsp;&nbsp;Checker</li>
									</ul>
									<hr class="d-block d-sm-none" style="width: 100%;">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Payment Service
									</p>
									<ul class="packages_list">
										<li style="margin-bottom: 5px;">Own Accout Transfer</li>
										<li style="margin-bottom: 5px;">Third Party Transfer</li>
										<li style="margin-bottom: 5px;">Bulk Transfer</li>
										<li style="margin-bottom: 5px;">Cheque Book Request</li>
										<li style="margin-bottom: 5px;">Stop Cheque Book</li>
									</ul>
								</div>
								<div class="d-none mobile_basic_package">
									<div class="col-md-3 basic_package_col">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										<p style="font-weight: 500;width: 84%;float: right;">
											Account Service
										</p>
										<hr style="width: 100%">
									</div>
									<div class="col-md-3 basic_package_col">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										<p style="font-weight: 500;width: 84%;float: right;">
											Dual Control
										</p>
										<hr style="width: 100%">
									</div>
									<div class="col-md-3 basic_package_col">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										<p style="font-weight: 500;width: 84%;float: right;">
											Registration Fees: FOC
										</p>
										<hr style="width: 100%">
									</div>
									<div class="col-md-3 basic_package_col">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										<p style="font-weight: 500;width: 84%;float: right;">
											Monthly Fees: 10,000MMK
										</p>
										<hr style="width: 100%;">
									</div>
									<div class="col-md-3 basic_package_col">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										<p style="font-weight: 500;width: 84%;float: right;">
											Token Fees: <br>45,000 MMK (Per Token)
										</p>
										<hr style="width: 100%;">
									</div>
									<div class="col-md-3 basic_package_col">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										<p style="font-weight: 500;width: 84%;float: right;">
											Allow
										</p>
										<ul style="list-style:none;margin-left: 25px;">
											<li style="margin-bottom: 5px;">2&nbsp;&nbsp;Makers</li>
											<li style="margin-bottom: 5px;">1&nbsp;&nbsp;Checker</li>
										</ul>
										<hr style="width: 100%;">
									</div>
									<div class="col-md-3 basic_package_col">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										<p style="font-weight: 500;width: 84%;float: right;">
											Payment Service
										</p>
										<ul style="list-style:none;margin-left: 25px;">
											<li style="margin-bottom: 5px;">Own Accout Transfer</li>
											<li style="margin-bottom: 5px;">Third Party Transfer</li>
											<li style="margin-bottom: 5px;">Bulk Transfer</li>
											<li style="margin-bottom: 5px;">Cheque Book Request</li>
											<li style="margin-bottom: 5px;">Stop Cheque Book</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="space-20"></div>
					<div class="row" style="background-color: #fff;border-radius: 6px;">
						<div class="packages_img basic_plus_packages_img">
							<div class="row" style="background-color: #fff;padding: 20px 10px;border-top-left-radius: 6px;border-top: 7px solid #ffd655;">
								<p style="font-size: 40px;margin-bottom: 0px;font-weight: 600;">Basic<sup>+</sup></h3></p>
								<p class="mb-0">Standard features with unlimited users</p>
							</div>
						</div>
						<div class="packages_main">
							<div class="row">
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Account Service<span class="plus_ac_service_extra_line"><br>&nbsp;</span>
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Allow Unlimited users<span class="plus_allow_user_extra_line"><br>&nbsp;</span>
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Registration Fees: FOC<span class="plus_reg_fees_extra_line"><br>&nbsp;</span>
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Monthly Fees: 10,000MMK
									</p>
									<hr style="width: 100%">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Token Fees: <br>45,000 MMK (Per Token)
									</p>
									<hr class="d-block d-sm-none" style="width: 100%;">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Customized Authorization matrix
									</p>
									<hr class="d-block d-sm-none" style="width: 100%;">
								</div>
								<div class="col-md-3 basic_package_col">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									<p style="font-weight: 500;width: 84%;float: right;">
										Payment Service
									</p>
									<ul class="packages_list">
										<li style="margin-bottom: 5px;">Own Accout Transfer</li>
										<li style="margin-bottom: 5px;">Third Party Transfer</li>
										<li style="margin-bottom: 5px;">Bulk Transfer</li>
										<li style="margin-bottom: 5px;">Cheque Book Request</li>
										<li style="margin-bottom: 5px;">Stop Cheque Book</li>
									</ul>
								</div>
								<div class="col-md-3 basic_package_col">
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
							<p style="color: #000;font-size: 16px;"><a href="{{ url('/enquiry') }}" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities to help you manage your finance online.</p>
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
							<p style="color: #000;"><a href="{{ url('/enquiry') }}" style="text-decoration: underline;color: #4e4e4e;">Find out more</a> about our online facilities to help you manage your finance online.</p>
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
							<a href="{{ url('/file/cib/FAQ - Corporate Internet Banking (CIB) (Edit).pdf') }}" target="_blank">
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
							<a href="{{ url('/file/cib/FAQ - Corporate Internet Banking (CIB) (Edit).pdf') }}" target="_blank">
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
