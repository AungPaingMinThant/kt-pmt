@extends('layouts.frontend-app')

@section('title', 'Fixed Deposit – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/auto_loan.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'fixed_deposit'])

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
											<span>How to do deposit placement?</span>
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
											<span>Features of fixed deposit</span>
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
										<a class="nav-link" href="#benefits">
											<span>Why choose?</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="quick_look">
									Highest return on savings of excess cash for an extended period of time. Our Fixed Deposit is available with a competitive range of terms from minimum 1 month to maximum 24 months.
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
										<p style="">Myanmar Citizen</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Open in sole or joint account</p>
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
									<li>NRC copy</li>
									<li>(1) passport size photo</li>
								</ul>
								
								<div class="space-40" id="call_deposit_features"></div>
								<h4>Upon placement of a fixed deposit</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Start saving with initial deposit just MMK 10,000.</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">a fixed deposit certificate will be issued.</p>
									</div>
								</div>

								<div class="space-40" id="manage_account"></div>
								<h4>How to manage the account?</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Visit our branches to make placement, renewal or withdrawal.</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Choose any renewal option at account opening: such as principal/interest or both will be automatically renewed for the same tenor at the prevailing interest rate.</p>
									</div>
								</div>

								<div class="space-40" id="benefits"></div>
								<h4>Benefits</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Higher interest rates for longer tenor investment.</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Flexible choice of tenor with respective interest rate.</p>
									</div>

									<div class="col-12" style="margin-top: 40px;">
										<table class="table table-bordered benefit_table">
											<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);border-bottom-right-radius: 10px;font-weight: 500;background-color: transparent;">
												<tr style="background-color: #f5f5f7;border-top: none;">
													<td style="border-width: 1px;border-top: none;border-left: none;padding: 20px;">Tenor</td>
													<td class="last" style="border-width: 1px;border-right: none;border-top: none;">Interest Rates</td>
												</tr>
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">1 month</td>
													<td style="border-right: none;">8.55% p.a.</td>
												</tr>
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">3 months</td>
													<td style="border-right: none;">9.00% p.a.</td>
												</tr>
												<tr>
													<td style="border-left: none;padding: 20px;">6 months</td>
													<td style="border-right: none;">9.25% p.a.</td>
												</tr>
												<tr>
													<td style="border-left: none;padding: 20px;">9 months</td>
													<td style="border-right: none;">9.30% p.a.</td>
												</tr>
												<tr>
													<td style="border-left: none;padding: 20px;">12 months</td>
													<td style="border-right: none;">9.50% p.a.</td>
												</tr>
												<tr style="background-color: #fff;border-bottom-right-radius: 10px;border-bottom: none;">
													<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">24 months</td>
													<td class="last" style="border-width: 1px;border-bottom-right-radius: 10px;border-right: none;border-bottom: none;">9.75% p.a.</td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="space-40"></div>

									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Receive interest to the linked saving deposit account or current account at the maturity.</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Receive interest every 6 months for the placement of 24 months Fixed Deposit.</p>
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
								Highest return on savings of excess cash for an extended period of time. Our fixed deposit saving is available with a competitive range of terms from minimum 1 month to maximum 24 months
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
									<p style="">Myanmar Citizen</p>
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
								<li>NRC copy</li>
								<li>(2) passport size photos</li>
							</ul>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Upon placement of a fixed deposit</p>
							<div class="row">
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Start saving with initial deposit just MMK 10,000</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">a fixed deposit certificate will be issued</p>
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
									<p style="">Visit our branches to make placement, renewal or withdrawal</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Choose any renewal option at account opening: such as principal/interest or both will be automatically renewed for the same tenor at the prevailing interest rate.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Benefits</p>
						</div>
						<div class="col-1">
							<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
						</div>
						<div class="col-11">
							<p style="">Higher interest rates for longer tenor investment</p>
						</div>
						<div class="col-1">
							<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
						</div>
						<div class="col-11">
							<p style="">Flexible choice of tenor with respective interest rate</p>
						</div>

						<div class="col-12" style="margin-top: 40px;">
							<table class="table table-bordered benefit_table">
								<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);border-bottom-right-radius: 10px;font-weight: 500;background-color: transparent;">
									<tr style="background-color: #f5f5f7;border-top: none;">
										<td style="border-width: 1px;border-top: none;border-left: none;padding: 20px;">Tenor</td>
										<td class="last" style="border-width: 1px;border-right: none;border-top: none;">Interest Rates</td>
									</tr>
									<tr style="background-color: #fff;border-top: none;">
										<td style="border-left: none;padding: 20px;">1 month</td>
										<td style="border-right: none;">8.55% p.a.</td>
									</tr>
									<tr style="background-color: #fff;border-top: none;">
										<td style="border-left: none;padding: 20px;">3 months</td>
										<td style="border-right: none;">9.00% p.a.</td>
									</tr>
									<tr>
										<td style="border-left: none;padding: 20px;">6 months</td>
										<td style="border-right: none;">9.25% p.a.</td>
									</tr>
									<tr>
										<td style="border-left: none;padding: 20px;">9 months</td>
										<td style="border-right: none;">9.30% p.a.</td>
									</tr>
									<tr>
										<td style="border-left: none;padding: 20px;">12 months</td>
										<td style="border-right: none;">9.50% p.a.</td>
									</tr>
									<tr style="background-color: #fff;border-bottom-right-radius: 10px;border-bottom: none;">
										<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">24 months</td>
										<td class="last" style="border-width: 1px;border-bottom-right-radius: 10px;border-right: none;border-bottom: none;">9.75% p.a.</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="space-40"></div>

						<div class="col-1">
							<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
						</div>
						<div class="col-11">
							<p style="">Receive interest to the linked saving deposit account or current account at the maturity.</p>
						</div>
						<div class="col-1">
							<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
						</div>
						<div class="col-11">
							<p style="">Receive interest every 6 months for the placement of 24 months Fixed Deposit.</p>
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