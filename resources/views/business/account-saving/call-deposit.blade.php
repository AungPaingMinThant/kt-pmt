@extends('layouts.frontend-app')

@section('title', 'Call Deposit – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/acc-sav.css') }}" />

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
								<ul class="nav nav-pills flex-column side_nav">
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
									<p class="call_deposit_premium_banking_tagline">An easy-access deposit account</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Designed for businesses to invest over any period, with immediate access to your money to take care of business and payments cycles. It calculates interest on the daily end of day balances and will credit to account quartely.</p>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Offers deposit interest 2.0% per annum.</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>No limit on deposit amount.</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Gain_interest_short_term_deposit.png') }}" class="img-fluid call_premium_icon">
										<p>Gain interest for short-term deposit</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Able_to_remit_and_pay_transactions_easily.png') }}" class="img-fluid call_premium_icon">
										<p>Able to make payments easily.</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Receive_or_pay_bills.png') }}" class="img-fluid call_premium_icon">
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
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Offers deposit interest up to 4.5% per annum.</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Minimum account opening balance requirement is MMK 100 million for local corporate and MMK 300 million for foreign corporate.</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-5 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/business_account_expert_support.png') }}" class="img-fluid call_business_benefit_icon_1">
										<p>Enjoy expert support from your dedicated relationship manager</p>
									</div>
									<div class="col-md-7 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Access_financial_support.png') }}" class="img-fluid call_business_benefit_icon_2">
										<p>Access financial support including business loans, overdrafts and invoice financing</p>
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
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Offers deposit interest 6.0% per annum.</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Minimum account opening balance requirement is MMK 1,000.</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Opening_a_new_business_call_deposit_account.png') }}" class="img-fluid call_new_business_icon">
										<p>Transfer to and from Other Bank's special accounts through CBM Net.</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid call_new_business_icon">
										<p>Unlimited cash withdrawal up to the deposited amount</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/call-deposit/Receive_account_statement_digitally.png') }}" class="img-fluid call_new_business_icon">
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
								<p>Designed for businesses to invest over any period, with immediate access to your money to take care of business and payments cycles. It calculates interest on the daily end of day balances and will credit to account quartely.</p>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Offers deposit interest 2.0% per annum.</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>No limit on deposit amount.</p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Gain_interest_short_term_deposit.png') }}" class="img-fluid w-30">
									<p>Gain interest for short-term deposit</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Able_to_remit_and_pay_transactions_easily.png') }}" class="img-fluid w-30">
									<p>Able to make payments easily.</p>
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

								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Offers deposit interest up to 4.5% per annum.</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Minimum account opening balance requirement is MMK 100 million for local corporate and MMK 300 million for foreign corporate.</p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Gain_interest_short_term_deposit.png') }}" class="img-fluid w-30">
									<p>Enjoy expert support from your dedicated relationship manager</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Able_to_remit_and_pay_transactions_easily.png') }}" class="img-fluid w-30">
									<p>Access financial support including business loans, overdrafts and invoice financing</p>
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
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Offers deposit interest 6.0% per annum.</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Minimum account opening balance requirement is MMK 1,000.</p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/account-saving/call-deposit/Opening_a_new_business_call_deposit_account.png') }}" class="img-fluid w-30">
									<p>Transfer to and from Other Bank's special accounts through CBM Net.</p>
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