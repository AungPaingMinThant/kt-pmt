@extends('layouts.frontend-app')

@section('title', 'Call Deposit – AYA Bank')
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
	#premium_account, .business_account, .new_business_call {
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
	.premium_banking_tagline {
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		width: 45% !important;
		position: absolute;
		top: 85%;
		left: 4%;
	}
	.business_account_tagline {
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		position: absolute;
		top: 85%;
		left: 4%;
	}
	.new_business_call_tagline {
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		width: 35% !important;
		position: absolute;
		top: 80%;
		left: 4%;
	}
	@media (max-width: 1300px) and (min-width: 1000px) {
		.premium_banking_tagline{
			width: 60% !important;
		}
		.new_business_call_tagline {
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

			@include('layouts.banner', ['page'=>'bu_acc_sav_call_deposit'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'bu_acc_sav_call_deposit'])
				
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item advice_1">
										<a class="nav-link active" href="#premium_account">
											<span class="pr-5">Premium Account</span>
										</a>
									</li>
									<li class="nav-item advice_2">
										<a class="nav-link" href="#business_account">
											<span class="pr-5">Business Account</span>
										</a>
									</li>
									<li class="nav-item advice_3">
										<a class="nav-link" href="#new_business_call">
											<span class="pr-5">New Business Call</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="premium_account">
									Premium Account
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/account-saving/call-deposit/premium_account.png') }}" class="img-fluid">
									<p class="premium_banking_tagline">An easy-access deposit account</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Designed for businesses to invest over any period, with immediate access to your money to take care of business and payments cycles. It calculate interest on the daily end of day balances and will credit to account at the end of the month.</p>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Offers deposit interest 2.0% per annum</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>No limit on deposit amount</p>
									</div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Gain_interest_short_term_deposit.png') }}" class="img-fluid w-50">
										<p>Gain interest for short-term deposit</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Able_to_remit_and_pay_transactions_easily.png') }}" class="img-fluid w-50">
										<p>Able to remit and pay transactions easily</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Receive_or_pay_bills.png') }}" class="img-fluid w-50">
										<p>Receive or pay bills through our Cash Management solutions</p>
									</div>
								</div>

								<div class="space-40" id="business_account"></div>
								<p class="business_account">
									Business Account
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/account-saving/call-deposit/business_account.png') }}" class="img-fluid">
									<p class="business_account_tagline">Manage your business funds professionally</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Specifically designed for large corporates either local or foreign entities for growing business, providing a range of customized services along with high returns on your idle funds.</p>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Offers deposit interest up to 4.5% per annum</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Minimum account opening balance requirement is MMK “100 million” for local corporate and MMK “300 million” for foreign corporate</p>
									</div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-5 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/business_account_expert_support.png') }}" class="img-fluid" style="width: 43.5% !important;">
										<p>Enjoy expert support from your dedicated relationship manager</p>
									</div>
									<div class="col-md-7 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Access_financial_support.png') }}" class="img-fluid w-30">
										<p>Access financial support, including business loans, overdrafts, and invoice finance</p>
									</div>
								</div>

								<div class="space-40" id="new_business_call"></div>
								<p class="new_business_call">
									New Business Call 
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/account-saving/call-deposit/new_business_call.png') }}" class="img-fluid">
									<p class="new_business_call_tagline">Maximize your excess cash</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Designed to provide the tariff that best meets your business needs. A Call Deposit account suitable for businesses with cash-based transactions.</p>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Offers deposit interest 6.0% per annum</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Minimum account opening balance requirement is MMK 10,000</p>
									</div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Opening_a_new_business_call_deposit_account.png') }}" class="img-fluid w-50">
										<p>Opening a new business call deposit account is a relatively simple and straight-forward procedure</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-50">
										<p>Unlimited cash withdrawal up to the deposited amount</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Receive_account_statement_digitally.png') }}" class="img-fluid w-50">
										<p>Receive account statement digitally or at the branches</p>
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
								Premium Account
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/call-deposit/premium_account.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 16px;line-height: 22px;position: absolute;top: 83%;left: 4%;width: 90%;">An easy-access deposit account</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Designed for businesses to invest over any period, with immediate access to your money to take care of business and payments cycles. It calculate interest on the daily end of day balances and will credit to account at the end of the month.</p>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Offers deposit interest 2.0% per annum</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>No limit on deposit amount</p>
								</div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Gain_interest_short_term_deposit.png') }}" class="img-fluid w-30">
									<p>Gain interest for short-term deposit</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Able_to_remit_and_pay_transactions_easily.png') }}" class="img-fluid w-30">
									<p>Able to remit and pay transactions easily</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Receive_or_pay_bills.png') }}" class="img-fluid w-30">
									<p>Receive or pay bills through our Cash Management solutions</p>
								</div>
							</div>

							<div class="space-40" id="dbs_remit_singapore"></div>
							<p class="calldeposit__mobile_title">
								Business Account
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/call-deposit/business_account_mobile.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 16px;line-height: 22px;position: absolute;top: 65%;left: 4%;width: 90%;">Manage your business funds professionally</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Specifically designed for large corporates either local or foreign entities for growing business, providing a range of customized services along with high returns on your idle funds.</p>

								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Offers deposit interest up to 4.5% per annum</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Minimum account opening balance requirement is MMK “100 million” for local corporate and MMK “300 million” for foreign corporate</p>
								</div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Gain_interest_short_term_deposit.png') }}" class="img-fluid w-30">
									<p>Enjoy expert support from your dedicated relationship manager</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Able_to_remit_and_pay_transactions_easily.png') }}" class="img-fluid w-30">
									<p>Access financial support, including business loans, overdrafts, and invoice finance</p>
								</div>
							</div>

							<div class="space-40" id="western_union_inward"></div>
							<p class="calldeposit__mobile_title">
								New Business Call
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/call-deposit/new_business_call.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 18px;line-height: 22px;position: absolute;top: 80%;left: 4%;width: 90%;">Maximize your excess cash</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Designed to provide the tariff that best meets your business needs. A Call Deposit account suitable for businesses with cash-based transactions.</p>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Offers deposit interest 6.0% per annum</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Minimum account opening balance requirement is MMK 10,000</p>
								</div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Opening_a_new_business_call_deposit_account.png') }}" class="img-fluid w-30">
									<p>Opening a new business call deposit account is a relatively simple and straight-forward procedure</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-30">
									<p>Unlimited cash withdrawal up to the deposited amount</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Receive_account_statement_digitally.png') }}" class="img-fluid w-30">
									<p>Receive account statement digitally or at the branches</p>
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