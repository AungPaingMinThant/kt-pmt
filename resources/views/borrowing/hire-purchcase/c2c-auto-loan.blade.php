@extends('layouts.frontend-app')

@section('title', 'C2C Auto Loan – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/c2c_auto_loan.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'c2cautoloan'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#quick_look">
											<span>Quick look</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#why_choose_c2c">
											<span>Why Choose AYA C2C Auto Loan?</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#eligibility">
											<span>Eligibility</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#required-document">
											<span>Required Documents</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#how_to_apply">
											<span>How to apply</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#interest_rates_fees">
											<span>Interest Rates and Fees</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="quick_look">
									An auto financing solution enabling customers to trade with each other. It is a new way of originating auto loans that can help transform the dealership experience. You will be financed by the Bank while choosing a private seller to purchase a vehicle, not limited to a dealership by applying AYA Auto Loan – C2C Plan.
								</p>

								<div class="space-40" id="why_choose_c2c"></div>
								<h4>Why Choose AYA C2C Auto Loan?</h4>
								<div class="row">
									<div class="col-md-2">
										<img src="{{ url('/images/borrowing/hire_purchase/c2c_auto_loan/why_choose_1.png') }}" class="img-fluid w-80">
									</div>
									<div class="col-md-10 pt-30">
										<p>Supports consumer to consumer transaction whereby loan application can be done at any AYA branch with standard down-payment</p>
									</div>
									<div class="col-md-2">
										<img src="{{ url('/images/borrowing/hire_purchase/c2c_auto_loan/why_choose_2.png') }}" class="img-fluid w-80">
									</div>
									<div class="col-md-10 pt-30">
										<p>Able to select automobile from the market</p>
									</div>
								</div>

								<div class="space-60" id="eligibility"></div>
								<h4>Eligibility</h4>
								<div class="row">
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
										<p style="">Stable and reasonable monthly income</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">Age between 20 and 55 at the time of loan application</p>
									</div>
								</div>

								<div class="space-40" id="required-document"></div>
								<h4>Required Documents</h4>
								<p style="color: #ae071d;">Basic Personal Documents</p>
								<ul>
									<li>NRC</li>
									<li>Household Member List</li>
									<li>Original Testimonial Letter from Ward Administration Office</li>
								</ul>
								<p style="color: #ae071d;margin-bottom: -30px;">Income Documents</p>
								<div class="row income_doc_desktop">
									<div class="col-md-6">
										<div class="salaried_staff_div">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">Salary Staff</p>
												<ul style="margin-left: 20px;">
													<li>Salary Slip (minimum 3 months)</li>
													<li>Employment Confirmation Letter</li>
													<li>Bank Statement (minimum 3 months)</li>
													<li>Professional License (such as Doctor License, Seaman’s CDC)</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6" style="margin-left: -80px;">
										<div class="salaried_staff_div">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">Self Employed</p>
												<ul style="margin-left: 20px;">
													<li>Business or Company Registration Documents</li>
													<li>Proof of regular income </li>
													<li>Bank Statements (Minimum 6 months)</li>
													<li>Income/ Financial Statement (Operating Account)</li>
													<li>Tax Receipts</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6"></div>
								</div>
								<p class="mt-minus-30" style="color: #ae071d;">Car Related Documents</p>
								<ul>
									<li>In-Principle Loan Approval Letter</li>
									<li>Sales and Purchase Agreement</li>
									<li>Bill of Lading and Import Declaration (if applicable)</li>
									<li>Owner Book and Premium Book (if applicable)</li>
									<li>Wheel Tax (if applicable)</li>
									<li>Car Photos</li>
								</ul>

								<div class="space-40" id="how_to_apply"></div>
								<h4>How to apply</h4>
								<div class="row">
									<p>Feel free to make an initial enquiry at any AYA branches via phone or in person. Then, visit nearest AYA branch to receive “<b>In-principle Loan Approval</b>” which contains the eligible HP loan amount.</p>
									<a href="https://autocalc.ayabank.com" target="_blank">
										<button class="btn apply_now_btn">
											Branches
										</button>
									</a>
								</div>

								<div class="space-40" id="interest_rates_fees"></div>
								<h4>Interest Rates and Fees</h4>
								<div class="row pl-15">
									<div class="col-md-12 p-30" style="box-shadow: 0 0 10px 10px #f4f4f4 !important;">
										<p class="mb-0">10% per annum</p>
									</div>
									<div class="col-12 mt-20">
										<p style="color: #ae071d;">Terms and Conditions</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Bank shall approve the final loan amount based on the evaluation and authenticity of complete documents submitted by the applicants</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>It is required to give tax (if necessary) to the respective government organization for documentation and registration depend on the house you wish to purchase</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>It is required to fulfill the requirement of making minimum down payment, service charges and other applicable fees related to bank’s facilities before vehicle handover.</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Bank shall approve the final loan amount based on the selling price mentioned on the Sales and Purchase agreement. Any other additional costs will not be financed by the bank.</p>
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
								An auto financing solution enabling customers to trade with each other. It is a new way of originating auto loans that can help transform the dealership experience. You will be financed by the Bank while choosing a private seller to purchase a vehicle, not limited to a dealership by applying AYA Auto Loan – C2C Plan.
							</p>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Why Choose AYA C2C Auto Loan?</p>
							<div class="row">
								<div class="col-3">
									<img src="{{ url('/images/borrowing/hire_purchase/c2c_auto_loan/why_choose_1.png') }}" class="img-fluid">
								</div>
								<div class="col-9">
									<p>Supports consumer to consumer transaction whereby loan application can be done at any AYA branch with standard down-payment</p>
								</div>
								<div class="col-3">
									<img src="{{ url('/images/borrowing/hire_purchase/c2c_auto_loan/why_choose_2.png') }}" class="img-fluid">
								</div>
								<div class="col-9 pt-20">
									<p>Able to select automobile from the market</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Eligibility</p>
							<div class="row">
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
									<p style="">Stable and reasonable monthly income</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Age between 20 and 55 at the time of loan application</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-30"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Required Documents</p>
							<p style="color: #ae071d;">Basic Personal Documents</p>
							<ul>
								<li>NRC</li>
								<li>Household Member List</li>
								<li>Original Testimonial Letter from Ward Administration Office</li>
							</ul>
							<p style="color: #ae071d;margin-bottom: -30px;">Income Documents</p>
							<div class="row income_doc_desktop">
								<div class="col-md-12">
									<div class="salaried_staff_div">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">Salary Staff</p>
											<ul style="margin-left: 20px;">
												<li>Salary Slip (minimum 3 months)</li>
												<li>Employment Confirmation Letter</li>
												<li>Bank Statement (minimum 3 months)</li>
												<li>Professional License (such as Doctor License, Seaman’s CDC)</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="salaried_staff_div self_employ">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">Self Employed</p>
											<ul style="margin-left: 20px;">
												<li>Business or Company Registration Documents</li>
												<li>Proof of regular income </li>
												<li>Bank Statements (Minimum 6 months)</li>
												<li>Income/ Financial Statement (Operating Account)</li>
												<li>Tax Receipts</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
							<p style="color: #ae071d;">Car Related Documents</p>
							<ul>
								<li>In-Principle Loan Approval Letter</li>
								<li>Sales and Purchase Agreement</li>
								<li>Bill of Lading and Import Declaration (if applicable)</li>
								<li>Owner Book and Premium Book (if applicable)</li>
								<li>Wheel Tax (if applicable)</li>
								<li>Car Photos</li>
							</ul>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Interest Rates and Fees</p>
							<div class="row pl-15 pr-15">
								<div class="col-md-12 p-30" style="box-shadow: 0 0 10px 10px #f4f4f4 !important;">
									<p class="mb-0">10% per annum</p>
								</div>
								<div class="col-12 mt-20">
									<p style="color: #ae071d;">Terms and Conditions</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Bank shall approve the final loan amount based on the evaluation and authenticity of complete documents submitted by the applicants</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>It is required to give tax (if necessary) to the respective government organization for documentation and registration depend on the house you wish to purchase</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>It is required to fulfill the requirement of making minimum down payment, service charges and other applicable fees related to bank’s facilities before vehicle handover.</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Bank shall approve the final loan amount based on the selling price mentioned on the Sales and Purchase agreement. Any other additional costs will not be financed by the bank.</p>
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