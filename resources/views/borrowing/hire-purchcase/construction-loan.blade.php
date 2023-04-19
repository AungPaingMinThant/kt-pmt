@extends('layouts.frontend-app')

@section('title', 'Construction Loan – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/education_loan.css') }}" />

<style type="text/css">
	.salaried_staff_div {
	    padding: 70px 90px 70px 70px;
	}
	.income_document_div {
		height: 385px;
	}
	@media (max-width: 1300px) and (min-width: 1271px) {
		.salaried_staff_div {
			padding: 50px 80px 70px 50px;
		}
		.income_document_div {
		    height: 340px;
		}
	}
	@media (max-width: 1270px) and (min-width: 1000px) {
		.salaried_staff_div {
	    padding: 50px 90px 70px 50px;
	}
	@media only screen and (max-width: 576px){
		.salaried_staff_div {
		    padding: 50px 60px 70px 45px;
		}
	}
</style>

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'constructionloan'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-3">
							<nav id="myScrollspy">
								<ul class="side-nav nav nav-pills flex-column">
									<li>
										<a class="side-link active" href="#quick_look">
											<span>Quick look</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li>
										<a class="side-link" href="#why_choose_HCR">
											<span>Why Choose HCR Loan?</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li>
										<a class="side-link" href="#eligibility">
											<span>Eligibility</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li>
										<a class="side-link" href="#required-document">
											<span>Required Documents</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li>
										<a class="side-link" href="#how_to_apply">
											<span>How to apply</span>
											<hr class="nav-item-separate">
										</a>
									</li>									
									<li>
										<a class="side-link" href="#interest_rates_fees">
											<span>Interest Rates and Fees</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-9">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="quick_look">
									Building a new home, or doing major renovations or construction of a house are great ways to make your dream home a reality. Critical first step is to know how you will be financed for the construction. We offer a mortgage to build or renovate a home. Learn more about our options for home construction renovation financing below to make payment to contractors, architect, interior decorator and purchase of related materials.
								</p>

								<div class="space-40" id="why_choose_HCR"></div>
								<h4>Why Choose AYA HCR Loan?</h4>
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/borrowing/hire_purchase/construction_loan/why_choose_quick_smooth.png') }}" class="img-fluid mb-20" style="width: 80%;">
											</div>
											<div class="col-md-9 pt-20">
												<p>Quick and smooth process</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/borrowing/hire_purchase/construction_loan/why_choose_fixed_monthly_installment_plan.png') }}" class="img-fluid mb-20" style="width: 80%;">
											</div>
											<div class="col-md-9 pt-20">
												<p>Fixed monthly installment plan</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/borrowing/hire_purchase/construction_loan/why_choose_offer_loan_tenor_25_years.png') }}" class="img-fluid mb-20" style="width: 80%;">
											</div>
											<div class="col-md-9 pt-20">
												<p>Offers Loan tenor up to 25 years</p>
											</div>
										</div>
									</div>
								</div>

								<div class="space-60" id="eligibility"></div>
								<h4>Eligibility</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>Myanmar Citizen</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>Stable and reasonable monthly income</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>Age between 20 and 55 at the time of loan application</p>
									</div>
								</div>
								

								<div class="space-40" id="required-document"></div>
								<h4>Required Documents</h4>
								<p class="theme_text_color">Personal Information</p>
								<ul>
									<li>NRC and Household List (Copy)</li>
									<li>Original testimonial letter from Ward Administration Office</li>
									<li>Original testimonial letter from Police Station</li>
									<li>One Passport Size Photo of each applicant</li>
								</ul>
								<p class="theme_text_color">Guarantor Information</p>
								<ul >
									<li>Guarantor’s NRC</li>
									<li>Guarantor’s Income Proof (Salary Slip)</li>
								</ul>
								<p class="mb-minus-30" style="color: #ae071d;">Income Information</p>
								<div class="row income_doc_desktop mb-minus-30">
									<div class="col-md-6">
										<div class="income_document_div salaried_staff_div">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">Salary Staff</p>
												<ul style="margin-left: 20px;">
													<li>Employment Confirmation letter</li>
													<li>Salary Slip (minimum 3 months)</li>
													<li>Professional License (such as Doctor License, Seaman’s CDC)</li>
													<li>Bank Statement (minimum 3 months)</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6" style="margin-left: -50px;">
										<div class="income_document_div salaried_staff_div">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">Self Employed</p>
												<ul style="margin-left: 20px;">
													<li>Business License or Company License</li>
													<li>Form 6, Form 26 & Form E</li>
													<li>Memorandum and Articles of Association</li>
													<li>Income/Financial Statement (Operating Account)</li>
													<li>Tax Receipts (for 3years)</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<p class="theme_text_color">Property Information</p>
								<ul>
									<li>Sales and Purchase Agreement executed with Seller (Land Owner’s signature to be included)</li>
								</ul>
								<ul class="mb-10" style="list-style: none;">
									<li class="black_text_color fw-semibold">Title Documents</li>
								</ul>
								<ul>
									<li>Construction or renovation plan</li>
									<li>Land Map/ Land History (Form 105/ 106)</li>
									<li>Registered related contracts</li>
									<li>Sales and Purchase Agreement executed between Land Owner and Developer (as per property type)</li>
								</ul>
								<ul class="mb-10" style="list-style: none;">
									<li class="black_text_color fw-semibold">Project Documents (For Individual Program)</li>
								</ul>
								<ul>
									<li>Project related documents</li>
									<li>Construction permit issued by YCDC</li>
									<li>Building Completion Certificate (BCC)</li>
								</ul>

								<div class="space-40" id="how_to_apply"></div>
								<h4 class="mb-30">How to apply</h4>
								<div class="row">
									<p>Feel free to make an initial enquiry at any AYA branches via phone or in person. Then, visit nearest AYA branch to receive <b>“In-principle Loan Approval”</b> which contains the eligible HP loan amount.</p>
									<a href="#" target="_blank">
										<button class="btn apply_now_btn">
											Branches
										</button>
									</a>
								</div>

								<div class="space-40" id="interest_rates_fees"></div>
								<h4 class="mb-30">Interest Rates and Fees</h4>
								<div class="row pl-15">
									<div class="col-md-12 p-30" style="box-shadow: 0 0 10px 10px #f4f4f4 !important;">
										<p class="mb-0">10% per annum</p>
									</div>
									<div class="col-12 mt-40">
										<p class="theme_text_color">Terms and Conditions</p>
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
										<p>It is required to fulfill the requirement of making minimum down payment, service charges and other applicable fees.</p>
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
								Building a new home, or doing major renovations or construction of a house are great ways to make your dream home a reality. Critical first step is to know how you will be financed for the construction. We offer a mortgage to build or renovate a home. Learn more about our options for home construction renovation financing below to make payment to contractors, architect, interior decorator and purchase of related materials.
							</p>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Why Choose AYA HCR Loan?</p>
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-3">
											<img src="{{ url('/images/borrowing/hire_purchase/construction_loan/why_choose_quick_smooth.png') }}" class="img-fluid mb-20">
										</div>
										<div class="col-9 pt-20">
											<p>Quick and smooth process</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-3">
											<img src="{{ url('/images/borrowing/hire_purchase/construction_loan/why_choose_fixed_monthly_installment_plan.png') }}" class="img-fluid mb-20">
										</div>
										<div class="col-9 pt-20">
											<p>Fixed monthly installment plan</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-3">
											<img src="{{ url('/images/borrowing/hire_purchase/construction_loan/why_choose_offer_loan_tenor_25_years.png') }}" class="img-fluid mb-20">
										</div>
										<div class="col-9 pt-20">
											<p>Offers Loan tenor up to 25 years</p>
										</div>
									</div>
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
									<p>Myanmar Citizen</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p>Stable and reasonable monthly income</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p>Age between 20 and 55 at the time of loan application</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-30"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Required Documents</p>
							<p class="theme_text_color">Personal Information</p>
							<ul>
								<li>NRC and Household List (Copy)</li>
								<li>Original testimonial letter from Ward Administration Office</li>
								<li>Original testimonial letter from Police Station</li>
								<li>One Passport Size Photo of each applicant</li>
							</ul>
							<p class="theme_text_color">Guarantor Information</p>
							<ul >
								<li>Guarantor’s NRC</li>
								<li>Guarantor’s Income Proof (Salary Slip)</li>
							</ul>
							<p class="theme_text_color">Income Information</p>
							<div class="row income_doc_desktop">
								<div class="col-md-12">
									<div class="income_document_div">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">Salary applicants</p>
											<ul style="margin-left: 20px;">
												<li>Employment Confirmation letter</li>
												<li>Salary Slip (minimum 3 months)</li>
												<li>Professional License (such as Doctor License, Seaman’s CDC)</li>
												<li>Bank Statement (minimum 3 months)</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="income_document_div self_employ">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">Self Employed</p>
											<ul style="margin-left: 20px;">
												<li>Business License or Company License</li>
												<li>Form 6, Form 26 & Form E</li>
												<li>Memorandum and Articles of Association</li>
												<li>Income/Financial Statement (Operating Account)</li>
												<li>Tax Receipts (for 3years)</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
							<p class="theme_text_color">Property Information</p>
							<ul>
								<li>Sales and Purchase Agreement executed with Seller (Land Owner’s signature to be included)</li>
							</ul>
							<ul class="mb-10" style="list-style: none;">
								<li class="black_text_color fw-semibold">Title Documents</li>
							</ul>
							<ul>
								<li>Construction or renovation plan</li>
								<li>Land Map/ Land History (Form 105/ 106)</li>
								<li>Registered related contracts</li>
								<li>Sales and Purchase Agreement executed between Land Owner and Developer (as per property type)</li>
							</ul>
							<ul class="mb-10" style="list-style: none;">
								<li class="black_text_color fw-semibold">Project Documents (For Individual Program)</li>
							</ul>
							<ul>
								<li>Project related documents</li>
								<li>Construction permit issued by YCDC</li>
								<li>Building Completion Certificate (BCC)</li>
							</ul>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">How to Apply</p>

							<div class="row">
								<div class="">
									<div class="col-md-12 text-center" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-size: 16px;">Feel free to make an initial enquiry at any AYA branches via phone or in person. Then, visit nearest AYA branch to receive <b>“In-principle Loan Approval”</b> which contains the eligible HP loan amount.</p>
										<a href="#" target="_blank">
											<button class="btn apply_now_btn">
												Branches
											</button>
										</a>
									</div>
								</div>
							</div>
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
									<p class="theme_text_color">Terms and Conditions</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Bank shall approve the final loan amount based on the evaluation and authenticity of complete documents submitted by the applicants.</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>It is required to give tax (if necessary) to the respective government organization for documentation and registration depend on the house you wish to purchase.</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>It is required to fulfill the requirement of making minimum down payment, service charges and other applicable fees.</p>
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
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript">
	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});

	$(".side-link").click(function() {
		$(".side-link").addClass('active');
		$(".side-link").not(this).removeClass('active');
	});
</script>


@endsection('content')