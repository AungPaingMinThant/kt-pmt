@extends('layouts.frontend-app')

@section('title', 'AYA Loyal Saving – AYA Bank')
<style type="text/css">
	h4 {
		color: #2e2e2e !important;
	}
	@media only screen and (max-width: 576px) {
		.related_title {
			margin-top: 30px;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_loyal_saving'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p>Offer higher interest and a bonus on three months idle funds in the saving account.</p>
							<p>Suitable for regular savers who want to save money over time with minimum access.</p>
							<div class="space-20"></div>
							<h4>Benefits</h4>
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-loyal-saving/benefit_icon.png') }}" class="img-fluid" style="width: 17%;">
									<p>Bonus 0.5% per annum is rewarded upon maintaining the minimum balance of MMK 500,000 for three consecutive months.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-loyal-saving/benefit_icon_2.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest 6.5% per annum.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-loyal-saving/benefit_icon_3.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest monthly.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-loyal-saving/benefit_icon_3.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive bonus every 3 months.</p>
								</div>
							</div>

							<div class="space-40"></div>
							<div class="row">
								<div class="col-md-11">
									<h4>FAQs</h4>
									<div class="row">
										<div class="accordion" id="accordionExample">
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingOne">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														What is the initial deposit amount to open Loyal Account?  How much interest rate and bonus?
													</button>
												</h2>
												<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>Minimum initial deposit is MMK 500,000 to open Loyal account, interest is 6.5% per annum and bonus is 0.5% per annum.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingTwo">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														Can I withdraw money from Loyal Account at nearest branch other than the branch I opened account?
													</button>
												</h2>
												<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>Yes, you can withdraw from any deposit account at nearest branch.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<h4 class="related_title" style="font-weight: 600;">Related</h4>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-regular-saving') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/aya_regular_saving.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">AYA Regular Saving</p>
												<p style="color: #2e2e2e;">A simple account for standard financial transactions</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-maximizer-saving') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/aya_maximizer_saving.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">AYA Maximizer Saving</p>
												<p style="color: #2e2e2e;">Earn bonus interest rates on your monthly minimum deposits</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/personal-banking/account-saving/saving-deposit/ngwe-toe-mae-shwe-o') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/ngwe_toe_shwe_o.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">Ngwe Toe Mae-Shwe O</p>
												<p style="color: #2e2e2e;">Send money back to your hometown and earn regular interest</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-su-buu') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/aya_su_buu.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">AYA Su-Buu</p>
												<p style="color: #2e2e2e;">Get a head start for future with a well- managed retirement savings scheme</p>
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

@endsection('content')