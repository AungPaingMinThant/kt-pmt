@extends('layouts.frontend-app')

@section('title', 'Current Deposit – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/auto_loan.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'currentdeposit'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4">
							<nav id="myScrollspy">
								<ul class="side-nav nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#quick_look">
											<span>Quick look</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#eligible">
											<span>Are you eligible?</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#open_account">
											<span>How to open the account?</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#requirements">
											<span>What are requirements?</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#call_deposit_features">
											<span>Features of Current Deposit?</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#manage_account">
											<span>How to manage the account?</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#faqs">
											<span>FAQs</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="quick_look">
									Non-interest-bearing account designed for individuals engage in daily banking needs such as deposit, withdrawal, remittances, etc.
								</p>

								<div class="space-40" id="eligible"></div>
								<h4>Are you eligible?</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Age 18 and above</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Myanmar Citizen (or) Foreign Citizen Resident in Myanmar</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Open in sole or corporate account</p>
									</div>
								</div>

								<div class="space-40" id="open_account"></div>
								<h4>How to open the account?</h4>
								<div class="row">
									<div class="col-2">
										<img src="{{ url('/images/acc_saving/open_at_aya_branch_icon.png') }}" class="img-fluid open_at_aya_branch_icon">
									</div>
									<div class="col-10" style="padding-top: 30px;margin-left: -30px;">
										<p style="">Open at any AYA branches</p>
									</div>
								</div>

								<div class="space-40" id="requirements"></div>
								<h4>What are requirements?</h4>
								<ul>
									<li>NRC copy (or) Passport copy</li>
									<li>(1) passport size photo</li>
									<li>Valid Business Visa for foreigners</li>
								</ul>
								
								<div class="space-40" id="call_deposit_features"></div>
								<h4>Upon opening a current deposit account</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Make use of cheque for convenient payment.</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Deposit or withdraw money across all channels including ATM withdrawal.</p>
									</div>
								</div>

								<div class="space-40" id="manage_account"></div>
								<h4>How to manage the account?</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Get access of 24/7 banking with AYA iBanking and mBanking.</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Visit our branches to receive over-the-counter banking services.</p>
									</div>
								</div>

								<div class="space-40" id="faqs"></div>
								<h4>FAQs</h4>
								<div class="row">
									<div class="accordion" id="accordionExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingOne">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													How much does cheque book cost?
												</button>
											</h2>
											<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<p>The bank will charge MMK 7500 to issue a cheque book and MMK 125 for stamp duty fees.</p>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingTwo">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													What is the minimum balance required in current account?
												</button>
											</h2>
											<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<p>
														For current accounts, the minimum balance required is as low as MMK 1,000.
													</p>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingThree">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													What is the minimum balance required for seafarer account?
												</button>
											</h2>
											<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<p>
														Minimum amount to maintain in seafarer account is US Dollar 10.
													</p>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingFour">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
													How do I choose a bank branch to open seafarer account?
												</button>
											</h2>
											<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<p>Seafarer account can be opened at following branches:</p>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Bo Aung Kyaw Branch - 1</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Bo Aung Kyaw Branch - 2</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Kyauk Ta Dar Branch</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Myanmar Plaza Branch</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Ahlone Riverview Branch</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Nyaung Oo Branch</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Nay Pyi Taw Branch -1 </p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Mandalay Branch - 2</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Si Taw Gyi Branch (Yangon-48)</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Thilawa Branch (Yangon-63)</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Yangon-87</p>
														</div>
													</div>
													<div class="row">
														<div class="col-1">
															<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
														</div>
														<div class="col-11">
															<p style=""> Mawlamyaing Branch</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingFive">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
													Does current account interest bearing? 
												</button>
											</h2>
											<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<p>
														No, interest is not payable on current accounts.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 d-block d-sm-none">
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Quick look</p>
							<p>
								Non-interest-bearing account designed for individuals engage in daily banking needs such as deposit, withdrawal, remittances, etc.
							</p>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Are you eligible?</p>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Age 18 and above</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Myanmar Citizen (or) Foreign Citizen Resident in Myanmar</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Open in sole or corporate account</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">How to open the account?</p>
							<div class="row">
								<div class="col-3">
									<img src="{{ url('/images/acc_saving/open_at_aya_branch_icon.png') }}" class="img-fluid open_at_aya_branch_icon">
								</div>
								<div class="col-9" style="padding-top: 20px;padding-left: 0px;">
									<p style="">Open at any AYA branches</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-30"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">What are requirements?</p>
							<ul>
								<li>NRC copy (or) Passport copy</li>
								<li>(2) passport size photos</li>
								<li>Valid Business Visa for foreigners</li>
							</ul>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Upon opening a current deposit account</p>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Make use of cheque for convenient payment</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Deposit or withdraw money across all channels including ATM withdrawal.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">How to manage the account?</p>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Get access of 24/7 banking with AYA iBanking and mBanking.</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Visit our branches to receive over-the-counter banking services.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">FAQs</p>
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											How much does cheque book cost?
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p> The bank will charge MMK 7500 to issue a cheque book and MMK 200 for stamp duty fees.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											What is the minimum balance required in current account?
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>
												For current accounts, the minimum balance required is as low as MMK 1,000.
											</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											What is the minimum balance required for seafarer account?
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>
												Minimum amount to maintain in seafarer account is USD 10.
											</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											How do I choose a bank branch to open seafarer account?
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>Seafarer account can be opened at following branches:</p>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Bo Aung Kyaw Branch - 1</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Bo Aung Kyaw Branch - 2</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Kyauk Ta Dar Branch</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Myanmar Plaza Branch</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Ahlone Riverview Branch</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Nyaung Oo Branch</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Nay Pyi Taw Branch -1 </p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Mandalay Branch - 2</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Si Taw Gyi Branch (Yangon-48)</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Thilawa Branch (Yangon-63)</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Yangon-87</p>
												</div>
											</div>
											<div class="row">
												<div class="col-1">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
												</div>
												<div class="col-11">
													<p style=""> Mawlamyaing Branch</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											Does current account interest bearing? 
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>
												No, interest is not payable on current accounts.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-8">
							<div class="space-60"></div>
							<div class="row">
								<div class="col-md-12">
									<h4 style="font-weight: 600;">Related</h4>
								</div>
								<div class="space-20"></div>
								<div class="col-md-6" style="margin-bottom: 40px;">
									<a href="{{ url('/account-saving/current-deposit/regular-current-account') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/regular_current_account.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">Regular Current Account</p>
												<p style="color: #2e2e2e;">Are you looking for an everyday account?</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6" style="margin-bottom: 40px;">
									<a href="{{ url('/account-saving/current-deposit/new-business-current-account') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/new_business_current_account.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">New Business Current Account</p>
												<p style="color: #2e2e2e;">Make your cash management more accessible</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6">
									<a href="{{ url('/account-saving/current-deposit/seafarer-acount') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/seaferer_account.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">Seafarer Account (FCY)</p>
												<p style="color: #2e2e2e;">Unique banking solution for seafarers to manage payroll and finance</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6">
									<a href="{{ url('/account-saving/current-deposit/retail-fca-current') }}">
										<div class="row">
											<div class="col-4">
												<img src="{{ url('/images/acc_saving/retail_fca_current.png') }}" class="img-fluid">
											</div>
											<div class="col-8">
												<p style="margin-bottom: 0px;font-weight: 600;color: #2e2e2e;">Retail FCA Current (FCY)</p>
												<p style="color: #2e2e2e;">Manage your foreign currency payroll is as convenient as local currency</p>
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