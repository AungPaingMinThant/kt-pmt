@extends('layouts.frontend-app')

@section('title', 'Ngwe Toe Mae-Shwe O – AYA Bank')
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

			@include('layouts.banner', ['page'=>'ngwe-toe-shwe-o'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<h4>Benefits</h4>
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/ngwe-toe-shwe-o/benefit_icon.png') }}" class="img-fluid" style="width: 17%;">
									<p>No minimum balance required for account opening</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/ngwe-toe-shwe-o/benefit_icon_2.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest 7.0% per annum</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/ngwe-toe-shwe-o/benefit_icon_3.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest monthly</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/ngwe-toe-shwe-o/benefit_icon_4.png') }}" class="img-fluid" style="width: 17%;">
									<p>Online account opening feature available.</p>
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
														Can I open 'Ngwe Toe Mae - Shwe O' account at any branch? 													</button>
												</h2>
												<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>Yes, you can. The account can be opened at any AYA branch.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingTwo">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														What is the initial deposit amount to open 'Ngwe Toe Mae - Shwe O' account?
													</button>
												</h2>
												<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>You do not need initial depost. 'Ngwe Toe Mae - Shwe O' account can be opened with initial deposit “0” MMK.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingThree">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														Can I withdraw all amount of remittance?													</button>
												</h2>
												<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>AYA Bank does not limit the amount to withdraw the remittance received in 'Ngwe Toe Mae - Shwe O'</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingFour">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
														What is the interest rate on 'Ngwe Toe Mae - Shwe O' account?
													</button>
												</h2>
												<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>You will receive interest on 7% per annum. Interest is calculated and deposited to your account every month.</p>
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
									<a href="{{ url('/account-saving/saving-deposit/aya-regular-saving') }}">
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
									<a href="{{ url('/account-saving/saving-deposit/aya-maximizer-saving') }}">
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
									<a href="{{ url('/account-saving/saving-deposit/aya-loyal-saving') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/aya_royal_saving.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">AYA Loyal Saving</p>
												<p style="color: #2e2e2e;">Reach your goals, grow your savings with competitive interest rate</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a href="{{ url('/account-saving/saving-deposit/aya-su-buu') }}">
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