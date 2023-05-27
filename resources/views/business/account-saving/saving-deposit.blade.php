@extends('layouts.frontend-app')

@section('title', 'Saving Deposit – AYA Bank')
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
	#aya-regular-saving, .aya-su-buu {
		padding-right: 250px;
		font-size: 18px;
		font-weight: 600;
	}
	.aya-regular-saving-tagline {
		font-weight: 500;
		font-size: 19px;
		line-height: 24px;
		width: 45% !important;
		position: absolute;
		top: 75%;
		left: 4%;
	}
	.aya-su-buu_tagline {
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		position: absolute;
		top: 78%;
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
		.aya-regular-saving-tagline{
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
			width: 30%;
		}
		.bullet_square_div {
			padding-left: 0 !important;
		}
	}
</style>
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
								<ul class="nav nav-pills flex-column">
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
									<p>A business Savings account with features designed to add convenience and flexibility to your business.</p>
									<p>It will help nurture growth for major purchase or business expansion.</p>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Lowest account opening requirement starts from MMK 1,000</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Set up CMS collection service and sweep funds at EOD or real-time</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Receive Interest on 6.25% per annum and frequency on monthly basis</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/manage_account_via_corporate_internet_banking.png') }}" class="img-fluid w-50">
										<p>Mange account via corporate internet banking</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/Receive_account_statement_digitally.png') }}" class="img-fluid w-50">
										<p>Receive account statement digitally or at the branches</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/Receive_or_pay_bills.png') }}" class="img-fluid w-50">
										<p>Receive or pay bills through our Cash Management solutions. </p>
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
										<p>Receive Interest on 6.25% per annum and frequency on monthly basis</p>
									</div>
									<div class="col-1 bullet_square_div">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Contributed by employer and employee every month</p>
									</div>

									<div class="space-40"></div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/Gradual_savings_to_build_sum.png') }}" class="img-fluid w-30">
										<p class="px-1">Gradual savings and takes some years to build the sum; Do not need to save all at once</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/account-saving/saving-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-30">
										<p>Allows withdrawals anytime</p>
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

				<div class="col-md-12 d-block d-sm-none">
					<div class="row">
						<div class="col-md-12">
							<p class="calldeposit__mobile_title">
								AYA Regular Saving
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/saving-deposit/aya-regular-saving.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 16px;line-height: 22px;position: absolute;top: 65%;left: 4%;width: 90%;">An easy-access <Br>deposit account</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>A business Savings account with features designed to add convenience and flexibility to your business.</p>
								<p>It will help nurture growth for major purchase or business expansion.</p>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Lowest account opening requirement starts from MMK 1,000</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Set up CMS collection service and sweep funds at EOD or real-time</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Receive Interest on 6.25% per annum and frequency on monthly basis</p>
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
									<p>Receive or pay bills through our Cash Management solutions. </p>
								</div>
							</div>

							<div class="space-40"></div>
							<p class="calldeposit__mobile_title">
								AYA SU-Buu
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/account-saving/saving-deposit/aya-su-buu-mobile.png') }}" class="img-fluid">
								<p style="font-weight: 500;font-size: 16px;line-height: 18px;position: absolute;top: 70%;left: 4%;width: 92%;">Exclusive account for your employees’ retirement-oriented scheme</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Open an AYA Su-Buu account to start building a sufficient retirement fund for your employees, as what corporates usually do. You just need to deposit a certain amount every month in AYA Su-Buu to keep earning interest and forms a vast sum of funds.</p>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Receive Interest on 6.25% per annum and frequency on monthly basis</p>
								</div>
								<div class="col-1 bullet_square_div">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Contributed by employer and employee every month</p>
								</div>

								<div class="space-40"></div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-6 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/Gradual_savings_to_build_sum.png') }}" class="img-fluid w-30">
									<p class="px-1">Gradual savings and takes some years to build the sum; Do not need to save all at once</p>
								</div>
								<div class="col-md-6 text-center">
									<img src="{{ url('/images/business/account-saving/saving-deposit/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-30">
									<p>Allows withdrawals anytime</p>
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