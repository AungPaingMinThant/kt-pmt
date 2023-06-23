@extends('layouts.frontend-app')

@section('title', 'AYA Regular Saving – AYA Bank')
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

			@include('layouts.banner', ['page'=>'aya_regular_saving'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p>An interest-bearing account where individuals and joint customers can deposit, withdraw and transfer anytime, anywhere.</p>
							<div class="space-20"></div>
							<h4>Benefits</h4>
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-regular-saving/benefit_icon.png') }}" class="img-fluid" style="width: 17%;">
									<p>Start saving with initial deposit MMK 1,000.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-regular-saving/benefit_icon_2.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest 6.25% per annum.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/aya-regular-saving/benefit_icon_3.png') }}" class="img-fluid" style="width: 17%;">
									<p>Receive interest monthly.</p>
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
														What is the initial deposit amount to open Saving Account?
													</button>
												</h2>
												<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>A minimum opening deposit is MMK 1,000.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingTwo">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														What is the process of saving passbook renewal?
													</button>
												</h2>
												<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>Account owner needs to visit nearest AYA branch with his / her original NRC and finished saving passbook.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingThree">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														Can someone else deposit money to my account on my behalf ? What do they need?
													</button>
												</h2>
												<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>They will need the recipient's full name and bank account number to complete the deposit.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingFour">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
														Can someone open up a bank account in my name?
													</button>
												</h2>
												<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>You must go to the nearest branch and apply in person.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingFive">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
														Can I open another account at another branch? 
													</button>
												</h2>
												<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>Upon your requirement, you can easily open another account with the same NRC information.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingSix">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
														How can I get bank statement for saving account? 
													</button>
												</h2>
												<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>Account holder can visit nearest branch to request account statement or able to check statement on AYA iBanking and mBanking.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingSeven">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
														How to check my account balance?
													</button>
												</h2>
												<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>You can check your account balance by using AYA i-Banking/m-Banking service (or) check at an ATM with ATM Card (or) check at nearest branch with NRC and saving passbook.</p>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="headingEight">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
														What do I do if I want to generate balance confirmation?
													</button>
												</h2>
												<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>Account owner needs to visit nearest branch with NRC and saving passbook to request Bank Certificate (Balance Confirmation). Service charges will be MMK 10,000 per request.</p>
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
									<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-loyal-saving') }}">
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