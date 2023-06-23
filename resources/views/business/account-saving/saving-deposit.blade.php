@extends('layouts.frontend-app')

@section('title', 'Saving Deposit – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/acc-sav.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_acc_sav_saving_deposit'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'bu_acc_sav_saving_deposit'])
				
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column side_nav">
									<li class="nav-item advice_1">
										<a class="nav-link active" href="#aya-regular-saving">
											<span class="pr-5">AYA Regular Saving</span>
										</a>
									</li>
									<li class="nav-item advice_2">
										<a class="nav-link" href="#aya-su-buu">
											<span class="pr-5">AYA Su-Buu</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="aya-regular-saving">
									AYA Regular Saving
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/account-saving/saving-deposit/aya-regular-saving.png') }}" class="img-fluid">
									<p class="aya-regular-saving-tagline">Earn interest on excess funds with automate sweeping service</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p class="mb-0">A business savings account with features designed to add convenience and flexibility to your business.</p>
									<p>It will help nurture growth for major purchase or business expansion.</p>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Lowest account opening requirement starts from MMK 1,000.</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Set up Cash Management - collection service and sweep funds at EOD or real-time.</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Receive interest on 6.25% per annum and frequency on monthly basis.</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/manage_account_via_corporate_internet_banking.png') }}" class="img-fluid saving_deposit_aya_reg_sav_icon">
										<p>Mange account via corporate internet banking</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/Receive_account_statement_digitally.png') }}" class="img-fluid saving_deposit_aya_reg_sav_icon">
										<p>Receive account statement digitally or at the branches</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/Receive_or_pay_bills.png') }}" class="img-fluid saving_deposit_aya_reg_sav_icon">
										<p>Receive or pay bills through our Cash Management solutions.</p>
									</div>
								</div>

								<div class="space-40" id="aya-su-buu"></div>
								<p class="aya-su-buu">
									AYA Su-Buu
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/account-saving/saving-deposit/aya-su-buu.png') }}" class="img-fluid">
									<p class="aya-su-buu_tagline">Exclusive account for your employees’ <Br>retirement-oriented scheme</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Open an AYA Su-Buu account to start building a sufficient retirement fund for your employees, as what corporates usually do. You just need to deposit a certain amount every month in AYA Su-Buu to keep earning interest and forms a vast sum of funds.</p>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Receive interest on 6% per annum and frequency on monthly basis.</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Saving funds contributed by employer and employee every month.</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/Gradual_savings_to_build_sum.png') }}" class="img-fluid saving_deposit_aya_su_buu_icon">
										<p class="px-1">Gradual savings and takes some years to build the sum; Do not need to save all at once</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid saving_deposit_aya_su_buu_icon">
										<p>Withdrawal funds at designated branch</p>
									</div>
									<div class="space-20"></div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/helps_individual_meet_financial_needs_during_retirement_period.png') }}" class="img-fluid saving_deposit_aya_su_buu_icon">
										<p>Helps an individual to meet their financial needs during their retirement period</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/View_monthly_savings_increment_via_mobile_banking.png') }}" class="img-fluid saving_deposit_aya_su_buu_icon">
										<p>View monthly savings and increment via personal mobile banking by the employee</p>
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
								AYA Regular Saving
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/saving-deposit/aya-regular-saving_mobile.png') }}" class="img-fluid">
								<p class="aya-regular-saving-tagline">Earn interest on excess funds with automate sweeping service</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>A business savings account with features designed to add convenience and flexibility to your business.</p>
								<p>It will help nurture growth for major purchase or business expansion.</p>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Lowest account opening requirement starts from MMK 1,000.</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Set up Cash Management - collection service and sweep funds at EOD or real-time.</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Receive interest on 6.25% per annum and frequency on monthly basis.</p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-4 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/manage_account_via_corporate_internet_banking.png') }}" class="img-fluid w-30">
									<p>Mange account via corporate internet banking</p>
								</div>
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/Receive_account_statement_digitally.png') }}" class="img-fluid w-30">
									<p>Receive account statement digitally or at the branches</p>
								</div>
								<div class="col-md-4 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/Receive_or_pay_bills.png') }}" class="img-fluid w-30">
									<p>Receive or pay bills through our Cash Management solutions.</p>
								</div>
							</div>

							<div class="space-40"></div>
							<p class="calldeposit__mobile_title">
								AYA Su-Buu
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/saving-deposit/aya-su-buu-mobile.png') }}" class="img-fluid">
								<p class="aya-su-buu_tagline">Exclusive account for your employees’ retirement-oriented scheme</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Open an AYA Su-Buu account to start building a sufficient retirement fund for your employees, as what corporates usually do. You just need to deposit a certain amount every month in AYA Su-Buu to keep earning interest and forms a vast sum of funds.</p>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Receive interest on 6% per annum and frequency on monthly basis.</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Saving funds contributed by employer and employee every month.</p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-6 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/Gradual_savings_to_build_sum.png') }}" class="img-fluid w-30">
									<p class="px-1">Gradual savings and takes some years to build the sum; Do not need to save all at once</p>
								</div>
								<div class="col-md-6 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-30">
									<p>Withdrawal funds at designated branch</p>
								</div>
								<div class="space-20"></div>
								<div class="col-md-6 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/helps_individual_meet_financial_needs_during_retirement_period.png') }}" class="img-fluid w-30">
									<p>Helps an individual to meet their financial needs during their retirement period</p>
								</div>
								<div class="col-md-6 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/View_monthly_savings_increment_via_mobile_banking.png') }}" class="img-fluid w-30">
									<p>View monthly savings and increment via personal mobile banking by the employee</p>
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