@extends('layouts.frontend-app')

@section('title', 'SMS ALert – AYA Bank')
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
		padding: 0px 20px 20px 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
	}
	.solution_text {
		color: #000;
		margin-bottom: 5px;
	}
	.tab_data_row {
		width: 100%;
	}
	.tab_h2, .tab_upi_h2 {
		font-weight: 800;
		position: absolute;
		top: 230px;
	}
	.how_to_apply_icon {
		width: 80%;
	}
	.how_to_apply_outer_section {
		background-image: url('./images/how_to_apply_bg.jpg');
		background-size: cover;
		background-position: bottom center;
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
	.tab-content {
		box-shadow: none !important;
	}
	.benefit_feature_box {
		display: table;
	}
	.why_use_AYA {
		display: table-cell !important;
	}
	@media (min-width: 768px){
		.col-md-3 {
		    width: 23% !important;
		}
	}
	@media only screen and (max-width: 576px){
		.tab-pane {
			background-position: -80px -70px;
		}
		.tab_data_row {
			/*width: auto;*/
		}
		.tab_h2{
			top: 380px;
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
		.how_to_apply_outer_section {
			background-image: url('./images/how_to_apply_mobile_bg.jpg');
			background-position: left;
		}
		.ecommerce_registration_bg {
			background-image: none;
			background-color: #f3f3f2;
		}
		.ecommerce_registration_container {
			padding: 40px 0px 40px 40px !important;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'smsalert'])

			<div style="">
				<div class="space-80"></div>
				<div class="nav-align-top mb-4">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-at-a-glance" aria-controls="navs-pills-top-at-a-glance" aria-selected="true" >
								At A Glance
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-set-text-alert" aria-controls="navs-pills-top-set-text-alert" aria-selected="false" >
								Setting Up Text Alert
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-how-work" aria-controls="navs-pills-top-how-work" aria-selected="false" >
								How it Works
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-eligibility" aria-controls="navs-pills-top-eligibility" aria-selected="false" >
								Eligibility
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-fee-charge" aria-controls="navs-pills-top-fee-charge" aria-selected="false" >
								Fees and Charges
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;">
						<div class="tab-pane fade show active" id="navs-pills-top-at-a-glance" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<p style="color: #4e4e4e;">Text alerts help to give you more control over your money. AYA SMS alert is more than a tool to help you identify fraudulent activity on your account, debit and credit card with real time push notifications sent to your device. It will tell you when you go into an unarranged overdraft or payment rejected.  It allows you manage the costs more efficiently.</p>
											<p style="color: #4e4e4e;font-weight: 600;margin-top: 20px;">Keep up to date with what's happening on your account!</p>
										</div>
									</div>
									<div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<img src="{{ url('/images/sms/at_a_glance.png') }}" class="img-fluid" style="width: 80%">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane set-text-alert fade" id="navs-pills-top-set-text-alert" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<p style="color: #4e4e4e;">Simply sign up and apply for SMS alert service at your nearest branch and allows you to link all your saving accounts to a specific mobile number.</p>

											<p style="color: #4e4e4e;margin-bottom: 10px;margin-top: 20px;">Requirements for existing customer</p>
											<ul style="margin-left: 16px;color: #4e4e4e;">
												<li>Individual customer: NRC Number (for individual customer)</li>
												<li>Corporate customer: BOD Resolution (Meeting minutes) and only authorized person can apply</li>
											</ul>

											<p style="color: #4e4e4e;margin-top: 30px;margin-bottom: 10px;">Requirements for new customer,</p>
											<ul style="margin-left: 16px;color: #4e4e4e;">
												<li>Individual customer: Open personal saving account and apply for SMS Alert Service</li>
												<li>Corporate customer: Open corporate saving account and apply for SMS Alert Service</li>
											</ul>

										</div>
									</div>
									<div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<img src="{{ url('/images/sms/setting_up_text_alert.jpg') }}" class="img-fluid" style="width: 80%">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane how-work fade" id="navs-pills-top-how-work" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<p style="color: #4e4e4e;">Getting an instant SMS notification immediately after any transaction above MMK 20,000 for transactions such as ATM Withdraw, POS Transactions in shops, mBanking/ iBanking bill payment transactions, and money transfer. </p>
										</div>
									</div>
									<div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<img src="{{ url('/images/sms/how_it_work.jpg') }}" class="img-fluid" style="width: 80%">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane eligibility fade" id="navs-pills-top-eligibility" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<p style="color: #4e4e4e;">Anyone who has any AYA Saving and Current Accounts can sign up and apply AYA SMS Alert Service.</p>
										</div>
									</div>
									<div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<img src="{{ url('/images/sms/eligibility.jpg') }}" class="img-fluid" style="width: 80%">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fee-charge fade" id="navs-pills-top-fee-charge" role="tabpanel" style="background: rgb(243,243,243);background: linear-gradient(0deg, rgba(243,243,243,1) 0%, rgba(249,249,249,1) 50%, rgba(255,255,255,1) 100%);padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-2"></div>
									<div class="col-md-8 benefit_feature_box" style="padding: 20px;">
										<div class="row">
											<p style="color: #4e4e4e;">You will be debited for each given account every month by our postpaid model.</p>
											<p style="color: #4e4e4e;"><b>Initial Fees:</b> No application fees or processing fees.</p>
											<p style="color: #4e4e4e;"><b>Monthly Fees:</b> MMK 1,500 per personal account, MMK 3,000 Ks per corporate account</p>
											<p style="color: #4e4e4e;"><b>Cancellation Fee:</b> No cancellation fees. Just one month notice of service termination must be given to the bank.</p>
										</div>
									</div>
									<!-- <div class="col-md-6 text-center benefit_feature_box" style="padding: 20px;">
										<img src="{{ url('/images/sms/placeholder.jpg') }}" class="img-fluid" style="width: 80%">
									</div> -->
								</div>
							</div>
						</div>
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
									What is AYA SMS Alert?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										When a transaction exceeds a default amount set by AYA Bank is debited to your bank account or credited from your account, you will receive a SMS Alert. AYA SMS Alert notifies the suspicious acitvities in order to prevent fraudenlent and secure your bank account information and your privacy.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What product or account do I need to have in order to enroll for the SMS Alert?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										If you have an AYA saving and current accounts, you can subscribe to our SMS Alert. You will also need a mobile phone number that can receive SMS.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									If I have closed an account with the Bank, will the SMS Alert be cancelled as well?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Yes, the alert associated with account will be closed together with the account.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									How do I apply for this SMS Alert service?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Please kindly sign-up at nearest AYA Bank branch.<br>
										You need the followings.<br>
										For Existing Customer<br><br>
										<b>(Individual)</b>
										<ul style="margin-top: -10px;">
											<li>NRC Number</li>
										</ul>
									</p>
									<p>
										<b>(Corporate)</b>
										<ul style="margin-top: -10px;">
											<li>BOD Resolution (Meeting minutes)</li>
											<li>Only authorized person can apply</li>
										</ul>
									</p>
									<p>
										For New Customer
										<ul style="margin-top: -10px;">
											<li>If individual, need to open new account and apply SMS Alert Service.</li>
											<li>If corporate, follow corporate account opening process and apply SMS Alert Service.</li>
										</ul>
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How long does it take to apply for SMS Alert Service?
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										The process may take approximately 7 working days in order to get access SMS Alert Service.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingSix">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									Is SMS Alert service eligible to all 3 Telecommunications (MPT, Telenor and Ooredoo)?
								</button>
							</h2>
							<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										Yes.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingSeven">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									What is the minimum transaction amount and what kind of transactions do I have to make in order to receive this SMS Alert?
								</button>
							</h2>
							<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										A SMS Alert will be sent to your registered phone number, immediately after every debit and credit transaction which is above 20,000 Kyats from your account.<br>
										Eg: ATM Withdraw, Deposit with cash/cheque, POS Transaction, mBanking/ iBanking Bill Payment Transaction, Money Transfer, online shopping, etc.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingEight">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									Is there any fee for the SMS Alert service? Any late fee and penalty fee?
								</button>
							</h2>
							<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										The charges collection is the post-paid model which will debit 1500 Kyat for Individual Account), 3000 Kyat for Corporate Account from the given account on the monthly anniversary date of the registration. In the case of insufficient funds on the date of debiting from the account, the bank will charge (2) months service charges on the debit day of the following month. If the account has no sufficient funds for two consecutive months of debiting, SMS Alert Service will be terminated.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingNine">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
									Can I change my SMS Alert default amount?
								</button>
							</h2>
							<div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										This service is not available until further notice from the bank.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTen">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
									Why didn’t I receive my SMS Alert?
								</button>
							</h2>
							<div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										The SMS Alert may be delayed due to circumstances beyond the Bank's control as it is telco-dependent. Please also ensure that your mobile number is updated in the Bank's records and you have made all debit and credit transactions above 20,000 Kyat in order to receive continuous SMS Alerts from the Bank.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingEleven">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
									How can I terminate this SMS Alert service?
								</button>
							</h2>
							<div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You can terminate your subscription by visiting nearest AYA Branches in one month advance with NRC and fill up the termination request in SMS Alert Service Application Form.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading12">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
									Why did I receive an alert when I did not make any transaction?
								</button>
							</h2>
							<div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										For security concerns, please call our Customer Service Hotline at 01-23 17777 for clarification on the alert that you received. For Royal Customers, please contact your Relationship Manager.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading13">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
									What happen if my mobile phone number is lost, damaged or changed?
								</button>
							</h2>
							<div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										In case of the damage, loss of the mobile contact number that is subscribed to SMS Alert Service, the applicant must inform AYA branch immediately. At any AYA Bank Branch, you may update your mobile phone number by completing the change of SMS Alert Service Application Form and presenting your NRC.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading14">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
									How many bank accounts can be linked with my mobile number?
								</button>
							</h2>
							<div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You may link all your deposit accounts to your particular phone number. <br>
										However, charges are 1500 Kyats per account for Individual and 3000 Kyats per account for Corporate.
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
@include('layouts.footer', ['page'=>'mobilebanking'])


@endsection('content')