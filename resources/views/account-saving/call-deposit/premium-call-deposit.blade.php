@extends('layouts.frontend-app')

@section('title', 'Premium Call Deposit – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/auto_loan.css') }}" />
<style type="text/css">
	h4 {
		color: #2e2e2e !important;
	}
	.benefit_icon_3 {
		width: 10%;
	}
	@media only screen and (max-width: 576px){
		.benefit_icon_3 {
			width: 20%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'premium_calldeposit'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p>
								Designed to keep funds safe and earn daily interest. Interest will be calculated daily on the end-of-day balance and will be credited to account at the end of the month.
							</p>

							<div class="space-40"></div>
							<h4>Benefits</h4>
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/premium_call_deposit/benefit_icon.png') }}" class="img-fluid" style="width: 17%;">
									<p>Start saving with initial deposit MMK 1,000</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/premium_call_deposit/benefit_icon_2.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest 2% per annum</p>
								</div>
								<div class="col-md-12" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/premium_call_deposit/benefit_icon_3.png') }}" class="img-fluid benefit_icon_3">
									<p>Basic banking services and cheque books will be made available</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<h4 style="font-weight: 600;">Related</h4>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<a class="acc_saving_link" href="{{ url('/personal-banking/account-saving/call-deposit/new-business-call') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/related_new_business_call.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p class="link_title">New Business Call</p>
												<p style="color: #2e2e2e;">Convenient way to save and invest your cash</p>
											</div>
										</div>
									</a>
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
@include('layouts.footer')
<script type="text/javascript">
	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});
</script>


@endsection('content')