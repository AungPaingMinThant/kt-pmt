@extends('layouts.frontend-app')

@section('title', 'Frequently Used Digital Services In Daily Life – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/timeline.css') }}">
<style type="text/css">
	.advice_title_li {
		list-style: none;
		margin-bottom: 20px;
		cursor: pointer;
	}
	.advice_title_li > span{
		padding-bottom: 3px;
	}
	.link_active > span, .advice_title_li:hover > span {
		border-bottom: 4px solid #a02226;
		font-weight: 600;
	}
	.frequently_section_1 {
	    padding: 0px 100px !important;
	}
	.col-1 {
		width: 6% !important;
	}
	.col-11 {
		padding-left: 0px !important;
	}
	.timeline:before {
		margin-left: -9px;
	}
	.step_1_timeline:before, .step_5_timeline:before, .step_10_timeline:before {
		height: 120px;
	}
	.step_2_timeline:before, .step_4_timeline:before {
		height: 470px;
	}
	.step_3_timeline:before {
		height: 370px;
	}
	.step_6_timeline:before {
		height: 180px;
	}
	.step_7_timeline:before {
		height: 440px;
	}
	.step_8_timeline:before {
		height: 120px;
	}
	.step_9_timeline:before {
		height: 150px;
	}
	.step_11_timeline:before {
		height: 420px;
	}
	.step_12_timeline:before {
		height: 490px;
	}
	.frequently_desc {
		font-size: 13px !important;
	}
	.bullet_square {
		float: right;
		margin-top: 5px;
		width: 40%;
	}
	@media (max-width: 1300px) and (min-width: 1000px) {
		.timeline:before {
			margin-left: -11px;
		}
		.bullet_square {
			width: 100%;
		}
		.step_1_timeline::before, .step_10_timeline::before {
		  	height: 160px;
		}
		.step_2_timeline::before {
		  	height: 520px;
		}
		.step_3_timeline::before {
		  	height: 460px;
		}
		.step_4_timeline::before {
			height: 530px;
		}
		.step_5_timeline::before {
			height: 140px;
		}
	}
	@media only screen and (max-width: 576px){
		.frequently_section_1 {
		    padding: 0px 20px !important;
		}
		.col-11 {
			padding-left: 15px !important;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'digital_services'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'frequently-used-digital'])

			<div class="container frequently_section_1" >
				@include('layouts.tagline', ['page'=>'frequently-used-digital'])

				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4 advice_title">						
							<li class="advice_title_li link_active advice_1">
								<span>1. Updating Particulars in Mobile Banking</span>
							</li>
							<li class="advice_title_li advice_2">
								<span>2. How to make bill payment</span>
							</li>
							<li class="advice_title_li advice_3">
								<span>3. How to Top-up Mobile</span>
							</li>
							<li class="advice_title_li advice_4">
								<span>4. How to Transfer Funds</span>
							</li>
							<li class="advice_title_li advice_5">
								<span>5. How to check Credit Card Transation Details</span>
							</li>
							<li class="advice_title_li advice_6">
								<span>6. How to Request Money</span>
							</li>
							<li class="advice_title_li advice_7">
								<span>7. Simply Pay With QR Code</span>
							</li>
							<li class="advice_title_li advice_8">
								<span>8. How to check locations of ATMs and Branches</span>
							</li>
							<li class="advice_title_li advice_9">
								<span>9. How to check eligibilty for Loan application</span>
							</li>
							<li class="advice_title_li advice_10">
								<span>10. Calculation for Deposits' Interest</span>
							</li>
							<li class="advice_title_li advice_11">
								<span>11. How to manage payees</span>
							</li>
							<li class="advice_title_li advice_12">
								<span>12. Cardless cash withdrawal at ATM</span>
							</li>
						</div>
						<div class="col-md-8" style="padding-left: 30px;">
							<section class="advide_desc" id="advice_1_collapsible">
								<p style="font-weight: 600;color: #a02226;">Updating Particulars in Mobile Banking</p>
								<p class="frequently_desc">Your registered mobile banking number is widely used to directly transfer the funds through mobile banking apps.</p>

								<p class="frequently_desc">It is very important that your credentials are up to date without fail to ensure you are reachable for any matters related to your account.</p>

								<p class="frequently_desc">How to update your particulars in your mobile banking?</p>

								<p>This can be done with a few easy steps only.</p>
								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_1/Updating_Profile_1.jpg') }}" class="img-fluid step_1 step_1_1" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_1/Updating_Profile_2.jpg') }}" class="img-fluid step_1 d-none step_1_2" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_1/Updating_Profile_3.jpg') }}" class="img-fluid step_1 d-none step_1_3" style="margin-bottom: 20px;">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_1_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank M-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Go to AYA m-banking setting button on the top navigation bar</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Under AYA m-banking settings, update your personal particulars.</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>

								<p style="font-weight: 600;margin-bottom: 10px;">Update the following information in mobile banking</p>

								<div class="row frequently_desc">
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p style="margin-bottom: 5px;font-weight: 500;">Your Name</p>
										<p>Please ensure your name is spelled correctly as you opened your accounts.</p>
									</div>

									<div class="col-1 text-right">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p style="margin-bottom: 5px;font-weight: 500;">Your National Registration Card Number and date of birth</p>
										<p>These data are vital as it is the main proof of identity.</p>
									</div>

									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p style="margin-bottom: 5px;font-weight: 500;">Your Email address</p>
										<p>Ensure your email address is up to date, so we can stay in touch.</p>
									</div>

									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p style="margin-bottom: 5px;font-weight: 500;">Your Phone number that was registered when opening accounts</p>
										<p>Keep your mobile number updated to receive transaction alerts and be notified of your account activities. The mobile number must be uniquely yours and do not share with another person.</p>
									</div>
								</div>
							</section>
							<section class="advide_desc" id="advice_2_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">How to make bill payment</p>
								<p class="frequently_desc">Being available 24/7, AYA mobile banking is great for those who could not be able to visit the actual facility during its working hours. You can use mobile banking to pay for your bills conveniently and in a straightforward way.</p>

								<p class="frequently_desc">Find out how you can make bill payment using mobile banking. </p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_1.jpg') }}" class="img-fluid step_2 step_2_1" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_2.jpg') }}" class="img-fluid step_2 d-none step_2_2" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_3.jpg') }}" class="img-fluid step_2 d-none step_2_3" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_4.jpg') }}" class="img-fluid step_2 d-none step_2_4" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_5A.jpg') }}" class="img-fluid step_2 d-none step_2_5A" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_5B.jpg') }}" class="img-fluid step_2 d-none step_2_5B" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_6.jpg') }}" class="img-fluid step_2 d-none step_2_6" style="margin-bottom: 20px;">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_2_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_2_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank m-Banking with your user ID and PIN</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_2_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Go to Bill Payment</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_2_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter the amount you wish to transfer<br>Choose the Billing Organization you wish to make payment to</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_2_timeline-badge-4">4</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Review the details and tap check button to complete your bill payment request</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_2_timeline-badge-5A">5A</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter 6 digits OTP (One-time Password) sent to your mobile number</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted text-center">
												<!-- <div class="timeline-badge step_2_timeline-badge-5A">5A</div> -->
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">OR</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_2_timeline-badge-5B">5B</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap the white button on your token to generate a one-time passcode and tap next</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_2_timeline-badge-6">6</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Your transaction has been completed and keeps the reference number</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>

								<p style="font-weight: 600;margin-bottom: 10px;">Type of bill payments available in AYA mobile banking</p>

								<p class="frequently_desc">We have a wide range more than hundred over billing organization for you to make hassle-free payment. We provide the following services for your convenience.</p>

								<div class="row frequently_desc">
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Credit cards</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Electricity</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Loans</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Insurance</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Grocery Stores</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Communication</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>School fees</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Mobile</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Travels</p>
									</div>
								</div>
							</section>
							<section class="advide_desc" id="advice_3_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">How to Top-up Mobile</p>
								<p class="frequently_desc">Topping up your mobile phone in mobile banking is just on your fingertips.</p>

								<p class="frequently_desc">You can top up all telecom phone bills operating in Myanmar with deposit account.</p>

								<p class="frequently_desc">Top up a mobile phone just in 5 easy steps.</p>								

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_3/Top_up_1.jpg') }}" class="img-fluid step_3 step_3_1" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_3/Top_up_2.jpg') }}" class="img-fluid step_3 d-none step_3_2" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_3/Top_up_3.jpg') }}" class="img-fluid step_3 d-none step_3_3" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_3/Top_up_4A.jpg') }}" class="img-fluid step_3 d-none step_3_4A" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_3/Top_up_4B.jpg') }}" class="img-fluid step_3 d-none step_3_4B" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_3/Top_up_5.jpg') }}" class="img-fluid step_3 d-none step_3_5" style="margin-bottom: 20px;">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_3_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_3_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank M-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_3_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Go to Top-up Mobile Numbers</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_3_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Choose the account you wish to make payment to<br>Enter the mobile number and the amount you wish to top-up</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_3_timeline-badge-4A">4A</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter 6 digits OTP sent to your mobile number</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted text-center">
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">OR</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_3_timeline-badge-4B">4B</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap the white button on the token to generate a one-time passcode and tap next</p>
													</div>
												</div>
											</li>											
											<li class="timeline-inverted">
												<div class="timeline-badge step_3_timeline-badge-5">5</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Your transaction has been completed and keeps the reference number</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>

								<div class="row">
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p class="frequently_desc">Fast and Secure top-up service, applied in real-time. Stay in touch with family and friends.</p>
									</div>
								</div>
							</section>
							<section class="advide_desc" id="advice_4_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">How to Transfer Funds</p>
								<p class="frequently_desc">The days are gone that we need to line up at the bank every time we’d have to pay for or send money.</p>

								<p class="frequently_desc">You can transfer funds instantly 24/7 to any of AYA Banks accounts or other local banks accounts in Myanmar round the clock through mobile banking.</p>

								<p class="frequently_desc">Your money can get to where it must be within just seconds.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_1.jpg') }}" class="img-fluid step_4 step_4_1" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_2.jpg') }}" class="img-fluid step_4 d-none step_4_2" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_3.jpg') }}" class="img-fluid step_4 d-none step_4_3" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_4.jpg') }}" class="img-fluid step_4 d-none step_4_4" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_5A.jpg') }}" class="img-fluid step_4 d-none step_4_5A" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_5B.jpg') }}" class="img-fluid step_4 d-none step_4_5B" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_6.jpg') }}" class="img-fluid step_4 d-none step_4_6" style="margin-bottom: 20px;">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_4_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_4_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank m-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_4_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Go to transfer funds</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_4_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Choose "my accounts" or "other AYA Account"<br>Enter transfer account number and the amount you wish to transfer</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_4_timeline-badge-4">4</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Review the details and tap check button to complete your transfer request</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_4_timeline-badge-5A">5A</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter 6 digits OTP sent to your mobile number</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted text-center">
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">OR</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_4_timeline-badge-5B">5B</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap the white button on the token to generate a one-time passcode and tap next</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_4_timeline-badge-6">6</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Your transaction has been completed and keeps the reference number</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>

								<p class="frequently_desc" style="font-size: 12px;">Notes: Please note that there is a transaction fees applied for every transaction.</p>
							</section>
							<section class="advide_desc" id="advice_5_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">How to check Credit Card Transation Details</p>
								<p class="frequently_desc">A record of previous financial transactions is vital for all individuals and business.</p>

								<p class="frequently_desc">It is recommended to track spending on credit card before you can reconcile with a credit card statement.</p>

								<p class="frequently_desc">Monitor your expenses with a few steps here.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_5/Credit_Card_Transaction_1.jpg') }}" class="img-fluid step_5 step_5_1" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_5/Credit_Card_Transaction_2.jpg') }}" class="img-fluid step_5 d-none step_5_2" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_5/Credit_Card_Transaction_3.jpg') }}" class="img-fluid step_5 d-none step_5_3" style="margin-bottom: 20px;">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_5_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_5_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank M-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_5_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Go to Manage Cards</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_5_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Under Manage Cards, tap Activate credit card to check your transactions</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>
							</section>
							<section class="advide_desc" id="advice_6_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">How to Request Money</p>
								<p class="frequently_desc">Do you need to request money from others?</p>

								<p class="frequently_desc">We offer the option of generating your own QR code in mobile banking apps and send it over as an image to get someone paid to you.</p>

								<p class="frequently_desc">Please follow the simple steps below.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_6/Request_Money_1.jpg') }}" class="img-fluid step_6 step_6_1" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_6/Request_Money_2.jpg') }}" class="img-fluid step_6 d-none step_6_2" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_6/Request_Money_3.jpg') }}" class="img-fluid step_6 d-none step_6_3" style="margin-bottom: 20px;">
										<img src="{{ url('/images/frequently/steps/step_6/Request_Money_4.jpg') }}" class="img-fluid step_6 d-none step_6_4" style="margin-bottom: 20px;">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_6_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_6_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank M-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_6_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap Request money</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_6_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Create a QR code to fill the account number, name, and amount</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_6_timeline-badge-4">4</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Use the QR code to receive money</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>
							</section>
							<section class="advide_desc" id="advice_7_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">Simply Pay With QR Code</p>
								<p class="frequently_desc">AYA mobile payment feature can keep you comfort.</p>

								<p class="frequently_desc">At any time anywhere, just scan and pay instantly with QR code to save yourself the hassle of having to exchange currency.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_1.jpg') }}" class="img-fluid mb20 step_7 step_7_1">
										<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_2.jpg') }}" class="img-fluid mb20 step_7 d-none step_7_2">
										<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_3.jpg') }}" class="img-fluid mb20 step_7 d-none step_7_3">
										<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_4.jpg') }}" class="img-fluid mb20 step_7 d-none step_7_4">
										<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_5A.jpg') }}" class="img-fluid mb20 step_7 d-none step_7_5A">
										<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_5B.jpg') }}" class="img-fluid mb20 step_7 d-none step_7_5B">
										<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_6.jpg') }}" class="img-fluid mb20 step_7 d-none step_7_6">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_7_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_7_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank M-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_7_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap QR Scan and Pay</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_7_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Scan the QR code<br>Enter the account number and the amount you wish to transfer</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_7_timeline-badge-4">4</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Review the details and tap check button to complete your transfer request</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_7_timeline-badge-5A">5A</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter 6 digits OTP sent to your mobile number</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted text-center">
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">OR</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_7_timeline-badge-5B">5B</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap the white button on the token to generate a one-time passcode and tap next</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_7_timeline-badge-6">6</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Your transaction has been completed and keep the reference number.</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>

								<p style="font-size: 12px;">Notes: You are advised to ensure the correct recipient and amount of transfer before proceeding the transaction.</p>
							</section>
							<section class="advide_desc" id="advice_8_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">How to check locations of ATMs and Branches</p>
								<p>For the sake of convenience and better service, we are using centralized online real-time exchange banking system. You can visit any nearest branches to receive banking services.</p>

								<p>Please find out our ATMs and Branches location in mobile application.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_8/ATMs_Branch_Location_1.jpg') }}" class="img-fluid mb20 step_8 step_8_1">
										<img src="{{ url('/images/frequently/steps/step_8/ATMs_Branch_Location_2.jpg') }}" class="img-fluid mb20 step_8 d-none step_8_2">
										<img src="{{ url('/images/frequently/steps/step_8/ATMs_Branch_Location_3.jpg') }}" class="img-fluid mb20 step_8 d-none step_8_3">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_8_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_8_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank m-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_8_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Go to ATM & Branch Locator </p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_8_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap the red button on the map to find the address</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>
							</section>
							<section class="advide_desc" id="advice_9_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">How to check eligibilty for Loan application</p>
								<p>Are you looking at applying for any loan with AYA Bank?</p>

								<p>In AYA mobile apps, we will take you to explore various requirements you need to fulfill to take Auto loan, home loan and Education loan with us.</p>

								<p>Learn your eligibility more with simple steps.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_9/Auto_Loan_Mortgage_1.jpg') }}" class="img-fluid mb20 step_9 step_9_1">
										<img src="{{ url('/images/frequently/steps/step_9/Auto_Loan_Mortgage_2.jpg') }}" class="img-fluid mb20 step_9 d-none step_9_2">
										<img src="{{ url('/images/frequently/steps/step_9/Auto_Loan_Mortgage_3.jpg') }}" class="img-fluid mb20 step_9 d-none step_9_3">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_9_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_9_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Under Login page, tap Products and Services</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_9_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Under hire purchase, calculate the monthly payment with estimated loan amount</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_9_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Under Loan and Advances, learn the information of AYA Auto Loan, Education Loan, and Home Loan</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>
							</section>
							<section class="advide_desc" id="advice_10_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">Calculation for Deposits' Interest</p>
								<p>Are you planning to open saving accounts or a fixed deposit account with us?</p>

								<p>Explore how you can calculate returns on it before saving and investing in a few simple steps.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_10/Calculation_Deposite_1.jpg') }}" class="img-fluid mb20 step_10 step_10_1">
										<img src="{{ url('/images/frequently/steps/step_10/Calculation_Deposite_2.jpg') }}" class="img-fluid mb20 step_10 d-none step_10_2">
										<img src="{{ url('/images/frequently/steps/step_10/Calculation_Deposite_3.jpg') }}" class="img-fluid mb20 step_10 d-none step_10_3">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_10_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_10_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Under Login Page, Tap Facility Calculator</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_10_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Select AYA Saving (or) AYA Fixed Deposit</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_10_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter the principal amount to calculate the interest receivable per month</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>
							</section>
							<section class="advide_desc" id="advice_11_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">How to manage payees</p>
								<p>If you need to transfer to specific payee regularly instead of one-off payment, it is advisable to register in your payee list. It helps you saving the time for your next transfer and protects from making payments by mistake.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_1.jpg') }}" class="img-fluid mb20 step_11 step_11_1">
										<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_2.jpg') }}" class="img-fluid mb20 step_11 d-none step_11_2">
										<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_3.jpg') }}" class="img-fluid mb20 step_11 d-none step_11_3">
										<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_4.jpg') }}" class="img-fluid mb20 step_11 d-none step_11_4">
										<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_5A.jpg') }}" class="img-fluid mb20 step_11 d-none step_11_5A">
										<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_5B.jpg') }}" class="img-fluid mb20 step_11 d-none step_11_5B">
										<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_6.jpg') }}" class="img-fluid mb20 step_11 d-none step_11_6">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_11_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_11_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank m-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_11_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap Manage Payees</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_11_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter the account number and payee name you wish to add</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_11_timeline-badge-4">4</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Review the details and tap check button to complete your request</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_11_timeline-badge-5A">5A</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter 6 digits OTP sent to your mobile number</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted text-center">
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">OR</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_11_timeline-badge-5B">5B</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap the white button on the token to generate a one-time passcode and tap next</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_11_timeline-badge-6">6</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Your transaction has been completed and new payee name is updated in account.</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>
							</section>
							<section class="advide_desc" id="advice_12_collapsible" style="display: none;">
								<p style="font-weight: 600;color: #a02226;">Cardless cash withdrawal at ATM</p>
								<p class="frequently_desc">Withdrawing funds from ATMs become more convenient now. We have upgraded the system of withdrawing cash from ATMs without using the debit or credit cards.</p>

								<p class="frequently_desc">This will save our ATM users from having lost cards, declined transactions due to incorrect PIN and taking cards to ATMs.</p>

								<p class="frequently_desc">Here is step by step guide to access the cardless cash withdrawal facility to our customers.</p>

								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-5 text-right">
										<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_1.jpg') }}" class="img-fluid mb20 step_12 step_12_1">
										<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_2.jpg') }}" class="img-fluid mb20 step_12 d-none step_12_2">
										<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_3.jpg') }}" class="img-fluid mb20 step_12 d-none step_12_3">
										<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_4.jpg') }}" class="img-fluid mb20 step_12 d-none step_12_4">
										<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_5.jpg') }}" class="img-fluid mb20 step_12 d-none step_12_5">
										<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_6A.jpg') }}" class="img-fluid mb20 step_12 d-none step_12_6A">
										<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_6B.jpg') }}" class="img-fluid mb20 step_12 d-none step_12_6B">
										<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_7.jpg') }}" class="img-fluid mb20 step_12 d-none step_12_7">
									</div>
									<div class="col-md-7" style="padding-left: 30px;">
										<ul class="timeline step_12_timeline">
											<li class="timeline-inverted">
												<div class="timeline-badge step_12_timeline-badge-1 active">1</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Login to AYA Bank m-Banking with your user ID and Pin</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_12_timeline-badge-2">2</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Select ATM Withdrawal</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_12_timeline-badge-3">3</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter the accept button to request code</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_12_timeline-badge-4">4</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter the account number and the amount you wish to withdrawal</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_12_timeline-badge-5">5</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Review the details and tap check button to complete your request</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_12_timeline-badge-6A">6A</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Enter 6 digits OTP sent to your mobile number</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted text-center">
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">OR</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_12_timeline-badge-6B">6B</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Tap the white button on the token to generate a one-time passcode and tap next</p>
													</div>
												</div>
											</li>
											<li class="timeline-inverted">
												<div class="timeline-badge step_12_timeline-badge-7">7</div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<p class="timeline-title">Use the six-digit cash code at any AYA Bank ATM in within 30 minutes</p>
													</div>
												</div>
											</li>
									    </ul>
									</div>
								</div>
								<div class="space-20"></div>

								<p style="font-size: 12px;">Notes: You can create another cash code if the current cash code is expired.</p>
							</section>
						</div>
					</div>
				</div>

				<style type="text/css">
					.accordion-header {
						padding: 0px 20px !important;
					}
					.accordion-button {
						font-size: 14px !important;
					    padding: 15px 0px !important;
					}
					.accordion-body {
					    padding: 20px !important;
					}
				</style>
				<div class="row d-block d-sm-none">
					<div class="col-md mb-4 mb-md-0">
						<div class="accordion" id="accordionExample">
							<div class="card accordion-item active">
								<p class="accordion-header" id="heading1">
									<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordion1" aria-expanded="true" aria-controls="accordion1" >
										Updating Particulars in Mobile Banking
									</button>
								</p>
								<div id="accordion1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Your registered mobile banking number is widely used to directly transfer the funds through mobile banking apps.</p>

										<p>It is very important that your credentials are up to date without fail to ensure you are reachable for any matters related to your account.</p>

										<p>How to update your particulars in your mobile banking?</p>

										<p>This can be done with a few easy steps only.</p>

										<div class="space-30"></div>
										<div class="col-sm-12 text-center">
											<img src="{{ url('/images/frequently/steps/step_1/Updating_Profile_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
											<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank M-Banking with your user ID and Pin</p>
										</div>

										<div class="col-sm-12 text-center">
											<img src="{{ url('/images/frequently/steps/step_1/Updating_Profile_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
											<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Go to AYA m-banking setting button on the top navigation bar</p>
										</div>

										<div class="col-sm-12 text-center">
											<img src="{{ url('/images/frequently/steps/step_1/Updating_Profile_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
											<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Under AYA m-banking settings, update your personal particulars.</p>
										</div>

										<div class="space-20"></div>

										<p style="font-weight: 600;margin-bottom: 10px;">Update the following information in mobile banking</p>

										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;font-weight: 500;">Your Name</p>
												<p>Please ensure your name is spelled correctly as you opened your accounts.</p>
											</div>

											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;font-weight: 500;">Your National Registration Card Number and date of birth</p>
												<p>These data are vital as it is the main proof of identity.</p>
											</div>

											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;font-weight: 500;">Your Email address</p>
												<p>Ensure your email address is up to date, so we can stay in touch.</p>
											</div>

											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="margin-bottom: 5px;font-weight: 500;">Your Phone number that was registered when opening accounts</p>
												<p>Keep your mobile number updated to receive transaction alerts and be notified of your account activities. The mobile number must be uniquely yours and do not share with another person.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading2">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion2" aria-expanded="false" aria-controls="accordion2">
										How to make bill payment
									</button>
								</p>
								<div id="accordion2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Being available 24/7, AYA mobile banking is great for those who could not be able to visit the actual facility during its working hours. You can use mobile banking to pay for your bills conveniently and in a straightforward way.</p>

										<p>Find out how you can make bill payment using mobile banking. </p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank m-Banking with your user ID and PIN</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Go to Bill Payment</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Enter the amount you wish to transfer <br>Choose the Billing Organization you wish to make payment to</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_4.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">4.</b> Review the details and tap check button to complete your bill payment request</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_5A.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5A.</b> Enter 6 digits OTP (One-time Password) sent to your mobile number</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_5B.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5B.</b> Tap the white button on your token to generate a one-time passcode and tap next</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_2/Bill_Payment_6.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">6.</b> Your transaction has been completed and keeps the reference number</p>
											</div>
										</div>
										<div class="space-20"></div>

										<p style="font-weight: 600;margin-bottom: 10px;">Type of bill payments available in AYA mobile banking</p>

										<p>We have a wide range more than hundred over billing organization for you to make hassle-free payment. We provide the following services for your convenience.</p>

										<div class="row">
											<div class="col-12">
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													Credit cards
												</p>
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													Electricity
												</p>
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													Loans
												</p>
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													Insurance
												</p>
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													Grocery Stores
												</p>
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													Communication
												</p>
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													School fees
												</p>
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													Mobile
												</p>
												<p style="color: #4e4e4e;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													Travels
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading3">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion3" aria-expanded="false" aria-controls="accordion3">
										How to Top-up Mobile
									</button>
								</p>
								<div id="accordion3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Topping up your mobile phone in mobile banking is just on your fingertips.</p>

										<p>You can top up all telecom phone bills operating in Myanmar with deposit account.</p>

										<p>Top up a mobile phone just in 5 easy steps.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_3/Top_up_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank M-Banking with your user ID and Pin</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_3/Top_up_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Go to Top-up Mobile Numbers</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_3/Top_up_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Choose the account you wish to make payment to<br>Enter the mobile number and the amount you wish to top-up</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_3/Top_up_4A.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">4A.</b> Enter 6 digits OTP sent to your mobile number</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_3/Top_up_4B.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">4B.</b> Tap the white button on the token to generate a one-time passcode and tap next</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_3/Top_up_5.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5.</b> Your transaction has been completed and keeps the reference number</p>
											</div>
										</div>
										<div class="space-20"></div>

										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p>Fast and Secure top-up service, applied in real-time. Stay in touch with family and friends.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading4">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion4" aria-expanded="false" aria-controls="accordion4">
										How to Transfer Funds
									</button>
								</p>
								<div id="accordion4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>The days are gone that we need to line up at the bank every time we’d have to pay for or send money.</p>

										<p>You can transfer funds instantly 24/7 to any of AYA Banks accounts or other local banks accounts in Myanmar round the clock through mobile banking.</p>

										<p>Your money can get to where it must be within just seconds.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank m-Banking with your user ID and Pin</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Go to transfer funds</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Choose "my accounts" or "other AYA Account"<br>Enter transfer account number and the amount you wish to transfer</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_4.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">4.</b> Review the details and tap check button to complete your transfer request</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_5A.jpg') }}" class="img-fluid mb20 " style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5A.</b> Enter 6 digits OTP sent to your mobile number</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_5B.jpg') }}" class="img-fluid mb20 " style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5B.</b> Tap the white button on the token to generate a one-time passcode and tap next</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_4/Transfer_Fund_6.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">6.</b> Your transaction has been completed and keeps the reference number</p>
											</div>
										</div>
										<div class="space-20"></div>

										<p style="font-size: 12px;">Notes: Please note that there is a transaction fees applied for every transaction.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading5">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion5" aria-expanded="false" aria-controls="accordion5">
										How to check Credit Card Transation Details
									</button>
								</p>
								<div id="accordion5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>A record of previous financial transactions is vital for all individuals and business.</p>

										<p>It is recommended to track spending on credit card before you can reconcile with a credit card statement.</p>

										<p>Monitor your expenses with a few steps here.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_5/Credit_Card_Transaction_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank M-Banking with your user ID and Pin</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_5/Credit_Card_Transaction_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Go to Manage Cards</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_5/Credit_Card_Transaction_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Under Manage Cards, tap Activate credit card to check your transactions</p>
											</div>
										</div>
										<div class="space-20"></div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading6">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion6" aria-expanded="false" aria-controls="accordion6">
										How to Request Money
									</button>
								</p>
								<div id="accordion6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Do you need to request money from others?</p>

										<p>We offer the option of generating your own QR code in mobile banking apps and send it over as an image to get someone paid to you.</p>

										<p>Please follow the simple steps below.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_6/Request_Money_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank M-Banking with your user ID and Pin</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_6/Request_Money_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Tap Request money</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_6/Request_Money_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Create a QR code to fill the account number, name, and amount</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_6/Request_Money_4.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">4.</b> Use the QR code to receive money</p>
											</div>
											<div class="col-md-12 text-center">
											</div>
										</div>
										<div class="space-20"></div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading7">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion7" aria-expanded="false" aria-controls="accordion7">
										Simply Pay With QR Code
									</button>
								</p>
								<div id="accordion7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>AYA mobile payment feature can keep you comfort.</p>

										<p>At any time anywhere, just scan and pay instantly with QR code to save yourself the hassle of having to exchange currency.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank M-Banking with your user ID and Pin</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Tap QR Scan and Pay</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Scan the QR code<br>Enter the account number and the amount you wish to transfer</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_4.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">4.</b> Review the details and tap check button to complete your transfer request</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_5A.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5A.</b> Enter 6 digits OTP sent to your mobile number</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_5B.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5B.</b> Tap the white button on the token to generate a one-time passcode and tap next</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_7/Payment_with_QR_Code_6.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">6.</b> Your transaction has been completed and keep the reference number.</p>
											</div>
										</div>
										<div class="space-20"></div>

										<p style="font-size: 12px;">Notes: You are advised to ensure the correct recipient and amount of transfer before proceeding the transaction.</p>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading8">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion8" aria-expanded="false" aria-controls="accordion8">
										How to check locations of ATMs and Branches
									</button>
								</p>
								<div id="accordion8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>For the sake of convenience and better service, we are using centralized online real-time exchange banking system. You can visit any nearest branches to receive banking services.</p>

										<p>Please find out our ATMs and Branches location in mobile application.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_8/ATMs_Branch_Location_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank m-Banking with your user ID and Pin</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_8/ATMs_Branch_Location_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Go to ATM & Branch Locator</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_8/ATMs_Branch_Location_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Tap the red button on the map to find the address</p>
											</div>
										</div>
										<div class="space-20"></div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading9">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion9" aria-expanded="false" aria-controls="accordion9">
										How to check eligibilty for Loan application
									</button>
								</p>
								<div id="accordion9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Are you looking at applying for any loan with AYA Bank?</p>

										<p>In AYA mobile apps, we will take you to explore various requirements you need to fulfill to take Auto loan, home loan and Education loan with us.</p>

										<p>Learn your eligibility more with simple steps.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_9/Auto_Loan_Mortgage_1.jpg') }}" class="img-fluid mb20">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Under Login page, tap Products and Services</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_9/Auto_Loan_Mortgage_2.jpg') }}" class="img-fluid mb20">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Under hire purchase, calculate the monthly payment with estimated loan amount</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_9/Auto_Loan_Mortgage_3.jpg') }}" class="img-fluid mb20">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Under Loan and Advances, learn the information of AYA Auto Loan, Education Loan, and Home Loan</p>
											</div>
										</div>
										<div class="space-20"></div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading10">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion10" aria-expanded="false" aria-controls="accordion10">
										Calculation for Deposits' Interest
									</button>
								</p>
								<div id="accordion10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Are you planning to open saving accounts or a fixed deposit account with us?</p>

										<p>Explore how you can calculate returns on it before saving and investing in a few simple steps.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_10/Calculation_Deposite_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Under Login Page, Tap Facility Calculator</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_10/Calculation_Deposite_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Select AYA Saving (or) AYA Fixed Deposit</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_10/Calculation_Deposite_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Enter the principal amount to calculate the interest receivable per month</p>
											</div>
										</div>
										<div class="space-20"></div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading11">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion11" aria-expanded="false" aria-controls="accordion11">
										How to manage payees
									</button>
								</p>
								<div id="accordion11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>If you need to transfer to specific payee regularly instead of one-off payment, it is advisable to register in your payee list. It helps you saving the time for your next transfer and protects from making payments by mistake.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank m-Banking with your user ID and Pin</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Tap Manage Payees</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Enter the account number and payee name you wish to add</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_4.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">4.</b> Review the details and tap check button to complete your request  </p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_5A.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5A.</b> Enter 6 digits OTP sent to your mobile number</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_5B.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5B.</b> Tap the white button on the token to generate a one-time passcode and tap next</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_11/Manage_Payees_6.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">7.</b> Your transaction has been completed and new payee name is updated in account.</p>
											</div>
										</div>
										<div class="space-20"></div>
									</div>
								</div>
							</div>
							<div class="card accordion-item">
								<p class="accordion-header" id="heading12">
									<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion12" aria-expanded="false" aria-controls="accordion12">
										Cardless cash withdrawal at ATM
									</button>
								</p>
								<div id="accordion12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Withdrawing funds from ATMs become more convenient now. We have upgraded the system of withdrawing cash from ATMs without using the debit or credit cards.</p>

										<p>This will save our ATM users from having lost cards, declined transactions due to incorrect PIN and taking cards to ATMs.</p>

										<p>Here is step by step guide to access the cardless cash withdrawal facility to our customers.</p>

										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_1.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">1.</b> Login to AYA Bank m-Banking with your user ID and Pin</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_2.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">2.</b> Select ATM Withdrawal</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_3.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">3.</b> Enter the accept button to request code</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_4.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">4.</b> Enter the account number and the amount you wish to withdrawal</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_5.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">5.</b> Review the details and tap check button to complete your request</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_6A.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">6A.</b> Enter 6 digits OTP sent to your mobile number</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_6B.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">6B.</b> Tap the white button on the token to generate a one-time passcode and tap next</p>
											</div>
											<div class="col-md-12 text-center">
												<img src="{{ url('/images/frequently/steps/step_12/ATM_Withdrawal_7.jpg') }}" class="img-fluid mb20" style="width: 80%;">
												<p style="padding: 0px 10px;"><b style="color: #c22236;">7.</b> Use the six-digit cash code at any AYA Bank ATM in within 30 minutes</p>
											</div>
										</div>
										<div class="space-20"></div>

										<p style="font-size: 12px;">Notes: You can create another cash code if the current cash code is expired.</p>
									</div>
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
@include('layouts.footer', ['page'=>'digital-secure'])
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/js/frequently_used.js') }}"></script>

<script type="text/javascript">
	var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  		target: '#scrollspy-collapsible'
	});

	$(".advice_1").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_1_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_1").addClass('link_active');
	});
	$(".advice_2").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_2_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_2").addClass('link_active');
	});
	$(".advice_3").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_3_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_3").addClass('link_active');
	});
	$(".advice_4").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_4_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_4").addClass('link_active');
	});
	$(".advice_5").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_5_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_5").addClass('link_active');
	});
	$(".advice_6").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_6_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_6").addClass('link_active');
	});
	$(".advice_7").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_7_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_7").addClass('link_active');
	});
	$(".advice_8").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_8_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_8").addClass('link_active');
	});
	$(".advice_9").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_9_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_9").addClass('link_active');
	});
	$(".advice_10").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_10_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_10").addClass('link_active');
	});
	$(".advice_11").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_11_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_11").addClass('link_active');
	});
	$(".advice_12").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_12_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_12").addClass('link_active');
	});
	$(".advice_13").click(function() {
		$(".advide_desc").hide(500);
		$("#advice_13_collapsible").show(500);
		$(".advice_title_li").removeClass('link_active');
		$(".advice_13").addClass('link_active');
	});
</script>

@endsection('content')