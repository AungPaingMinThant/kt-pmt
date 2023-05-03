@extends('layouts.frontend-app')

@section('title', 'Fixed Deposit – AYA Bank')
<style type="text/css">
	h4 {
		color: #2e2e2e !important;
	}
	.fixed_deposit_desc {
		margin-left: -30px;
	}
	@media only screen and (max-width: 576px) {
		.fixed_deposit_desc {
			margin-left: 0px;
		}	
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_acc_sav_fixed_deposit'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-10">
							<p class="mb-0">Open a business fixed deposit account where it provides a fixed interest rate for a fixed term on the lump-sum deposits.</p>
							<p>In fact, even market conditions change and interest rates fluctuate, still benefit from the interest rate fixed at the start of the term.</p>
							<p>Start investing once you’ve made decision on amount and period to lock away your earnings!</p>

							<div class="space-20"></div>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="fixed_deposit_desc">Able to start deposit from MMK 10,000</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="fixed_deposit_desc">Flexible : Choose the term up to two years, with clear visibility on expected returns</p>
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-md-8">
									<table class="table table-bordered benefit_table">
										<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);border-bottom-right-radius: 10px;font-weight: 500;background-color: transparent;">
											<tr style="background-color: #f5f5f7;border-top: none;">
												<td style="border-width: 1px;border-top: none;border-left: none;padding: 15px 20px;">Tenure</td>
												<td class="last" style="border-width: 1px;border-right: none;border-top: none;">Interest Rates</td>
											</tr>
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 15px 20px;">1 month</td>
												<td style="border-right: none;">7.00% p.a.</td>
											</tr>
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 15px 20px;">3 months</td>
												<td style="border-right: none;">7.25% p.a.</td>
											</tr>
											<tr>
												<td style="border-left: none;padding: 15px 20px;">6 months</td>
												<td style="border-right: none;">9.25% p.a.</td>
											</tr>
											<tr>
												<td style="border-left: none;padding: 15px 20px;">9 months</td>
												<td style="border-right: none;">9.30% p.a.</td>
											</tr>
											<tr>
												<td style="border-left: none;padding: 15px 20px;">12 months</td>
												<td style="border-right: none;">9.50% p.a.</td>
											</tr>
											<tr style="background-color: #fff;border-bottom-right-radius: 10px;border-bottom: none;">
												<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 15px 20px;">24 months</td>
												<td class="last" style="border-width: 1px;border-bottom-right-radius: 10px;border-right: none;border-bottom: none;">9.75% p.a.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="fixed_deposit_desc">Receive interest to the linked saving deposit account or current account at the maturity.</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p class="fixed_deposit_desc">Receive interest every 6 months for the placement of 24 months Fixed Deposit.</p>
								</div>
							</div>
							<div class="space-40"></div>
							<div class="row">
								<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

								<div class="col-md-6 text-center">
									<img src="{{ url('/images/business/account-saving/fixed-deposit/rist_free_investment_with_higher_interest_rate.png') }}" class="img-fluid w-25">
									<p>Risk free investment with a higher interest rate than normal savings for your surplus funds</p>
								</div>
								<div class="col-md-6 text-center">
									<img src="{{ url('/images/business/account-saving/fixed-deposit/entrust_your_money_with_us.png') }}" class="img-fluid w-25">
									<p>Entrust your money with us. Secure, simple and clear.</p>
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