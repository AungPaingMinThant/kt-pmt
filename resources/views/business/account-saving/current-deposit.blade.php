@extends('layouts.frontend-app')

@section('title', 'Current Deposit – AYA Bank')
<style type="text/css">
	.nav-link, h4 {
		color: #2e2e2e !important;
	}
	.nav-link {
		padding: 0 1.25rem 1rem 0 !important;
		font-size: 16px;
	}
	.nav-pills .nav-link.active {
		color: #2e2e2e !important;		
	}
	.nav-pills .nav-link.active > span {
		border-bottom: 4px solid #a02226 !important;
	}
	.scroll_content::-webkit-scrollbar{
	    display: none;
	}
	#myScrollspy {
		position: sticky;
		top: 20px;
		z-index: 99;
	}
	.bullet_square {
		float: right;
		margin-top: 7px;
		width: 13%;
	}
	#regular_current_account, .new_business_current_account, .enterprise_FCA_current {
		padding-right: 250px;
		font-size: 18px;
		font-weight: 600;
	}
	.secure_req_application_icon {
		float: right;
    	margin-top: -5px;
	}
	.secure_credit_fact {
		padding-left: 0 !important;
	}
	.regular_current_account_tagline {
		color: #fff;
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		width: 85% !important;
		position: absolute;
		top: 80%;
		left: 4%;
	}
	.new_business_current_account_tagline {
		color: #fff;
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		width: 65% !important;
		position: absolute;
		top: 80%;
		left: 4%;
	}
	.enterprise_FCA_current_tagline {
		color: #fff;
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		position: absolute;
		top: 85%;
		left: 4%;
	}
	@media (max-width: 1300px) and (min-width: 1000px) {
		.regular_current_account_tagline{
			width: 80% !important;
			top: 75%;
		}
		.enterprise_FCA_current_tagline {
			width: 45% !important;
			top: 75%;
		}
		.bullet_square {
			width: 20%;
		}
	}
	@media only screen and (max-width: 576px){
		.calldeposit__mobile_title {
			font-size: calc(1.2625rem + 0.15vw);
			font-weight: 600 !important;
		}
		.bullet_square {
			width: 100%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_acc_sav_current_deposit'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'bu_acc_sav_current_deposit'])
				
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item advice_1">
										<a class="nav-link active" href="#regular_current_account">
											<span class="pr-5">Regular Current Account</span>
										</a>
									</li>
									<li class="nav-item advice_2">
										<a class="nav-link" href="#new_business_current_account">
											<span class="pr-5">New Business Current Account</span>
										</a>
									</li>
									<li class="nav-item advice_3">
										<a class="nav-link" href="#enterprise_FCA_current">
											<span class="pr-5">Enterprise FCA Current (FCY)</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="regular_current_account">
									Regular Current Account
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/account-saving/current-deposit/regular-current-account.png') }}" class="img-fluid">
									<p class="regular_current_account_tagline">Open a Current Account to increase efficiency and transparency of business transactions</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>The simple current account that provides your business with an accurate record of transactions. It allows your business the flexibility to carry out a large number of transactions while offering services built specifically for business needs.</p>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Initial deposit requires MMK 10,000 for minimum</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Enabling Interbank payments and SWIFT Telegraphic transfer</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Manage payroll and supplier payments via online banking or cheque</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>No annual or monthly maintenance fee</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/current-deposit/anytime_withdrawal_facility.png') }}" class="img-fluid w-30">
										<p>Any time withdrawal facility to meet the business needs</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/current-deposit/seamless_transfer.png') }}" class="img-fluid w-30">
										<p>Seamless transfers: Link your business accounts so you can transfer funds with ease and speed</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/current-deposit/Receive_or_pay_bills.png') }}" class="img-fluid w-30">
										<p>Provides batch transfer for both payroll and supplier payments through online banking</p>
									</div>
								</div>

								<div class="space-40" id="new_business_current_account"></div>
								<p class="new_business_current_account">
									New Business Current Account
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/account-saving/current-deposit/new_business_current_account.png') }}" class="img-fluid">
									<p class="new_business_current_account_tagline">Cash Deposit or withdraw to coincide with cash requirements of your business</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Designed for businesses which require to transact frequently and able to link with New Business Call Account.</p>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Initial cash deposit requires MMK 10,000 for minimum</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Enabling Interbank payments and SWIFT Telegraphic transfer</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Manage payroll and supplier payments via online banking or cheque</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>No annual or monthly maintenance fee</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/current-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-25">
										<p>Unlimited cash deposit or withdrawal in a month to meet the cash requirement of the business</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/current-deposit/make_your_business_everyday_banking_easier.png') }}" class="img-fluid w-25">
										<p>Make your business’ everyday banking easier to coincide with your business needs</p>
									</div>
								</div>

								<div class="space-40" id="enterprise_FCA_current"></div>
								<p class="enterprise_FCA_current">
									Enterprise FCA Current (FCY)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/account-saving/current-deposit/enterprise_FCA_current.png') }}" class="img-fluid">
									<p class="enterprise_FCA_current_tagline">Mange foreign currency payments efficiently</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Designed to meet the requirements of regular businesses, corporate firms, importers, and exporters receiving and making payments in foreign currencies.</p>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Open account in United States Dollar, Euro, Singapore Dollar, Chinese Yuan or Thai Baht</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Suitable for business with international trade payment or any foreign currency payments</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/current-deposit/transact_SWIFT_Telegraphic_transfer.png') }}" class="img-fluid w-25">
										<p>Transact SWIFT Telegraphic Transfer with the account currency or invoice currency (Bank’s applicable exchange rate apply)</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/current-deposit/Receive_or_pay_bills.png') }}" class="img-fluid w-25">
										<p>Local or international foreign currency payments online or over-the-counter</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 d-block d-sm-none">
					<div class="row">
						<div class="col-md-12">
							<p class="calldeposit__mobile_title">
								Regular Current Account
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/current-deposit/regular-current-account-mobile.png') }}" class="img-fluid">
								<p style="color:#fff;font-weight: 500;font-size: 16px;line-height: 18px;position: absolute;top: 58%;left: 2%;width: 97%;">Open a Current Account to increase efficiency and transparency of business transactions</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>The simple current account that provides your business with an accurate record of transactions. It allows your business the flexibility to carry out a large number of transactions while offering services built specifically for business needs.</p>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Initial deposit requires MMK 10,000 for minimum</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Enabling Interbank payments and SWIFT Telegraphic transfer</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Manage payroll and supplier payments via online banking or cheque</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>No annual or monthly maintenance fee</p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/current-deposit/anytime_withdrawal_facility.png') }}" class="img-fluid w-30">
									<p>Any time withdrawal facility to meet the business needs</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/current-deposit/seamless_transfer.png') }}" class="img-fluid w-30">
									<p>Seamless transfers: Link your business accounts so you can transfer funds with ease and speed</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/current-deposit/Receive_or_pay_bills.png') }}" class="img-fluid w-30">
									<p>Provides batch transfer for both payroll and supplier payments through online banking</p>
								</div>
							</div>

							<div class="space-40"></div>
							<p class="calldeposit__mobile_title">
								New Business Current Account
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/current-deposit/new_business_current_account_mobile.png') }}" class="img-fluid">
								<p style="color:#fff;font-weight: 500;font-size: 16px;line-height: 18px;position: absolute;top: 60%;left: 4%;width: 90%;">Cash Deposit or withdraw to coincide with cash requirements of your business</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Designed for businesses which require to transact frequently and able to link with New Business Call Account.</p>

								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Initial cash deposit requires MMK 10,000 for minimum</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Enabling Interbank payments and SWIFT Telegraphic transfer </p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Manage payroll and supplier payments via online banking or cheque </p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>No annual or monthly maintenance fee </p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/current-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-30">
									<p>Unlimited cash deposit or withdrawal in a month to meet the cash requirement of the business</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/current-deposit/make_your_business_everyday_banking_easier.png') }}" class="img-fluid w-30">
									<p>Make your business’ everyday banking easier to coincide with your business needs</p>
								</div>
							</div>

							<div class="space-40" id="western_union_inward"></div>
							<p class="calldeposit__mobile_title">
								Enterprise FCA Current (FCY)
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/current-deposit/enterprise_FCA_current.png') }}" class="img-fluid">
								<p style="color:#fff;font-weight: 500;font-size: 18px;line-height: 22px;position: absolute;top: 65%;left: 4%;width: 90%;">Mange foreign currency payments efficiently</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Designed to meet the requirements of regular businesses, corporate firms, importers, and exporters receiving and making payments in foreign currencies.</p>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Open account in United States Dollar, Euro, Singapore Dollar, Chinese Yuan or Thai Baht</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Suitable for business with international trade payment or any foreign currency payments</p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/current-deposit/transact_SWIFT_Telegraphic_transfer.png') }}" class="img-fluid w-30">
									<p>Transact SWIFT Telegraphic Transfer with the account currency or invoice currency (Bank’s applicable exchange rate apply)</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/current-deposit/Receive_or_pay_bills.png') }}" class="img-fluid w-30">
									<p>Local or international foreign currency payments online or over-the-counter</p>
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
<script type="text/javascript">
	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});
</script>
@endsection('content')