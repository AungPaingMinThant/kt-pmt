@extends('layouts.frontend-app')

@section('title', 'Home Loan – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/auto_loan.css') }}" />
<style type="text/css">
	.features_table {
		box-shadow: 0 0 17px 0px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%);
    	border-radius: 5px;
	}
	.income_document_div {
	    background-image: url('../../../images/borrowing/hire_purchase/auto_loan/income_document_bg_3.png');
	}
	.salaried_staff_div {
		background-image: url('../../../images/borrowing/hire_purchase/auto_loan/income_document_bg_2.png');
	}
	.sme_business_owner {
		padding: 60px 140px 70px 70px;
		height: 388px;
	}
	.business_owner {
		height: 388px;
	}
	.business_owner {
		padding: 70px 170px 70px 50px;
	}
	@media (max-width: 1300px) and (min-width: 1271px) {
		.sme_business_owner, .business_owner {
			padding: 50px 60px 70px 55px;
		}
	}
	@media (max-width: 1270px) and (min-width: 1000px){
		.step_slide_row {
		    width: 110%;
		}
		.sme_business_owner, .business_owner {
			padding: 50px 60px 70px 55px;
		}
		.salaried_staff_div {
			background-image: url('../../../images/borrowing/hire_purchase/auto_loan/income_document_bg_4.png');
		}
		.income_document_div {
		    background-image: url('../../../images/borrowing/hire_purchase/auto_loan/income_document_bg_4.png');
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'homeloan'])

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
										<a class="side-link" href="#features">
											<span>Features</span>
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
										<a class="side-link" href="#required_document">
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
										<a class="side-link" href="#faqs">
											<span>FAQ</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-9">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="quick_look">
									Staying at your own house is the real comfort for your family. Our home loan solution is here to provide you that comfort. With choice of affordable repayment options of your needs, take control of your future. The future is yours now.
								</p>

								<div class="space-40" id="features"></div>
								<h4>Features</h4>
								<div class="">
									<div class="benefit_table_div">
										<table class="table table-bordered features_table">
											<tbody>
												<tr>
													<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Types of property</td>
													<td class="text-center">Apartment, Condominium, Landed Property</td>
												</tr>
												<tr>
													<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Interest Rate</td>
													<td class="text-center">10% per annum</td>
												</tr>
												<tr>
													<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Loan Tenor</td>
													<td class="text-center">Maximum 25 years</td>
												</tr>
												<tr>
													<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Application Fee</td>
													<td class="text-center">MMK 50,000</td>
												</tr>
												<tr>
													<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Service Charges</td>
													<td class="text-center">2% of loan amount</td>
												</tr>
												<tr>
													<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Early Repayment Fees</td>
													<td class="text-center">3% in the first three years</td>
												</tr>
												<tr>
													<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Property purchase value</td>
													<td class="text-center">Minimum MMK  20,000,000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="space-60" id="eligibility"></div>
								<h4>Eligibility</h4>
								<div class="row">
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>You Must be a Myanmar Citizen</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>You must have regular monthly income</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>You must be minimum 20 years of age</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>The maximum age of applicant shall not exceed 55</p>
									</div>
									<div class="col-12">
										<p style="color: #777777;font-size: 12px;">Note: <b>Joint applicant</b> is allowed (only for immediate family members) for customers with age over 50 and low income.<br><b>Documents</b> which reveal accurate information of above are required to provide at the point of application such as NRC, Household Member List, Income Statement or Salary slip.</p>
									</div>

									<div class="space-20"></div>

									<div class="col-12 loan_eligibility_check">
										<div class="row">
											<div class="col-md-8 loan_eligibility_check_inner">
												<p style="font-size: 20px;font-weight: 500;">Check your loan eligibility now!</p>
												<p>To know your estimated loan eligibility amount, calculate at AYA Home Loan Calculator</p>
												<a href="https://homecalc.ayabank.com/" target="_blank">
													<button class="btn apply_now_btn">
														Calculate
													</button>
												</a>
											</div>
											<div class="col-md-4"></div>
										</div>
									</div>
								</div>

								<div class="space-40" id="required_document"></div>
								<h4>Required Documents</h4>
								<p class="theme_text_color">Basic Personal Information</p>
								<ul>
									<li>NRIC</li>
									<li>Household list</li>
									<li>Original testimonial letter from Ward Administration Office</li>
									<li>Applicant passport photo</li>
								</ul>
								<p class="theme_text_color mb-lg-n4">Income Documents</p>
								<div class="row income_doc_desktop mb-lg-n3">
									<div class="col-md-6">
										<div class="income_document_div salaried_staff_div">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">Salaried Employee</p>
												<ul style="margin-left: 20px;">
													<li>Salary Slip (minimum 3 months)</li>
													<li>Employment Confirmation Letter</li>
													<li>Bank Statement (minimum 6 months) (Optional)</li>
													<li>Professional License (such as Doctor License, Seaman’s CDC)</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<p class="mb-lg-n4 fw-semibold">Self Employed</p>
								<div class="row income_doc_desktop">
									<div class="col-md-6">
										<div class="income_document_div sme_business_owner">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">SME Business Owner</p>
												<ul style="margin-left: 20px;">
													<li>Valid Business License</li>
													<li>Business or Company Registration Documents</li>
													<li>Proof of regular income</li>
													<li>Bank Statements<br>(Minimum 6 months)</li>
													<li>Income/ Financial Statement (Operating Account)</li>
													<li>Tax Receipts</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6" style="margin-left: -50px;">
										<div class="income_document_div business_owner">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">Business Owner</p>
												<ul style="margin-left: 20px;">
													<li>Valid company registration documents</li>
													<li>Bank Statements (Minimum 6 months)</li>
													<li>Income/ Financial Statement (Operating Account)</li>
													<li>Tax Receipts</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6"></div>
								</div>
								
								<div class="space-20" id="how_to_apply"></div>
								<h4>How to apply</h4>
								<p>Feel free to make an initial enquiry at any AYA branches via phone or in person. Then, visit nearest AYA branch to receive <b>“In-principle Loan Approval”</b> which contains the eligible HP loan amount.</p>
								<div class="nav-align-top mb-4">
									<ul class="nav nav-pills auto_loan_nav" role="tablist">
										<li class="nav-item">
											<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-dealer-program" aria-controls="navs-pills-top-dealer-program" aria-selected="true" >
												Dealer Program
											</button>
										</li>
										<li class="nav-item">
											<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-individual-program" aria-controls="navs-pills-top-individual-program" aria-selected="false" >
												Individual Program
											</button>
										</li>
									</ul>
									<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;box-shadow: none;border-top: 1px solid #cccccc2e;border-radius: 0;">
										<div class="tab-pane fade show active" id="navs-pills-top-dealer-program" role="tabpanel" style="padding-bottom: 20px;">
											<div>
												<p style="margin-bottom: 30px;">Choose from wide range of residences from our list of authorized developers to purchase your dream home.</p>
											</div>
											<div class="row">
												<div class="col-1" style="position: relative;">
													<div class="swiper-button-prev swiper-button-prev-dealer swiper-navBtn"></div>
												</div>
												<div class="col-md-10">
											      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
											            <div class="slide-content slide-content-dealer-desktop">
											                <div class="card-wrapper swiper-wrapper">
											                    <div class="card swiper-slide slide_1">
											                        <div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_1.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 1</p>
																				<p class="step_desc">Enquire at nearest Branches</p>
											                            	</div>
											                            </div>
											                            <div class="space-60"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide slide_2">
											                    	<div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_2.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 2</p>
																				<p class="step_desc">Choose your home at Authorized Developers</p>
											                            	</div>
											                            </div>
											                            <div class="space-60"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide slide_3">
											                        <div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_3.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 3</p>
																				<p class="step_desc">Keep required documents ready and apply</p>
											                            	</div>
											                            </div>
											                            <div class="space-60"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide slide_4">
											                        <div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_4.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 4</p>
																				<p class="step_desc">Home Sweet Home<br>Monthly Instalment Payment to Bank</p>
											                            	</div>
											                            </div>
											                            <div class="space-60"></div>
											                        </div>
											                    </div>
											                </div>
											            </div>
											        </div>
											    </div>
											    <div class="col-1" style="position: relative;">
													<div class="swiper-button-next swiper-button-next-dealer swiper-navBtn"></div>
												</div>
												<div class="col-12" style="position: relative;">
													<div class="swiper-pagination swiper-pagination-dealer-desktop"></div>
												</div>
											</div>
										</div>
										<div class="tab-pane individual-program fade" id="navs-pills-top-individual-program" role="tabpanel" style="padding-bottom: 20px;">
											<div>
												<p style="margin-bottom: 30px;">Choose the residence you wish to purchase from any developer rather than bank’s authorized developers.</p>
											</div>
											<div class="row">
												<div class="col-1" style="position: relative;">
													<div class="swiper-button-prev swiper-button-prev-individual swiper-navBtn"></div>
												</div>
												<div class="col-md-10">
											      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
											            <div class="slide-content slide-content-individual-desktop">
											                <div class="card-wrapper swiper-wrapper">
											                    <div class="card swiper-slide slide_1">
											                        <div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_individual_step_1.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 1</p>
																				<p class="step_desc">Choose your home from different Developers</p>
											                            	</div>
											                            </div>
											                            <div class="space-60"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide slide_2">
											                    	<div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_1.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 2</p>
																				<p class="step_desc">Enquire at nearest Branches</p>
											                            	</div>
											                            </div>
											                            <div class="space-60"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide slide_3">
											                        <div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_3.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 3</p>
																				<p class="step_desc">Keep required documents ready and apply</p>
											                            	</div>
											                            </div>
											                            <div class="space-60"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide slide_4">
											                        <div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_4.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 4</p>
																				<p class="step_desc">Home Sweet Home<br>Monthly Instalment Payment to Bank</p>
											                            	</div>
											                            </div>
											                            <div class="space-60"></div>
											                        </div>
											                    </div>
											                </div>
											            </div>
											        </div>
											    </div>
											    <div class="col-1" style="position: relative;">
													<div class="swiper-button-next swiper-button-next-individual swiper-navBtn"></div>
												</div>
												<div class="col-12" style="position: relative;">
													<div class="swiper-pagination swiper-pagination-individual-desktop"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="">
										<div class="benefit_table_div mb-30">
											<table class="benefit_table table table-bordered">
												<tbody>
													<tr class="table_title b-t-none text-center" valign="middle">
														<td class="b-l-none b-r-none invert-bg-white w-20"></td>
														<td class="first brand_new_title py-md-3">DEALER PROGRAM</td>
														<td class="last pre_owned_car">INDIVIDUAL PROGRAM</td>
													</tr>
													<tr class="invert-bg-white b-t-r-radius-10" style="box-shadow: 0 0 17px 0px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%);">
														<td class="px-md-4 border-1 fw-semibold py-md-3 px-md-3 b-t-none">Room/Land Price</td>
														<td class="text-center border-1 py-md-3 px-md-3">Condo/Apartment: 200 Lakhs and above<br>Landed Property: 500 Lakhs and above</td>
														<td class="text-center border-1 py-md-3 px-md-3 b-r-none b-t-r-radius-10">Condo/Apartment: 200 Lakhs and above<br>Landed Property: 500 Lakhs and above</td>
													</tr>
													<tr style="background-color: #fff;">
														<td class="border-1 fw-semibold" style="box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);text-align: left;">Type of Land</td>
														<td class="border-1 py-md-4">
															<ul class="mb-0">
																<li>Grant/Leasehold Land</li>
																<li>Freehold Land</li>
																<li>YCDC Land</li>
																<li>DUHD Land</li>
															</ul>															
														</td>
														<td class="border-1 b-b-none b-r-none" style="box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);">
															<ul class="mb-0">
																<li>Grant/Leasehold Land</li>
																<li>Freehold Land</li>
																<li>YCDC Land</li>
																<li>DUHD Land</li>
															</ul>
														</td>
													</tr>
													<tr style="background-color: #fff;">
														<td class="border-1 fw-semibold" style="padding-top: 20px;padding-bottom: 20px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);text-align: left;">Construction Completion</td>
														<td class="text-center border-1">Minimum 75%</td>
														<td class="text-center border-1 b-b-none b-r-none" style="box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);">100%</td>
													</tr>
													<tr class="b-t-none b-b-none invert-bg-white b-b-r-radius-10" style="box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%), 12px 13px 17px 0px rgb(149 149 149 / 15%);">
														<td class="border-1 b-b-none fw-semibold" style="padding-top: 20px;padding-bottom: 20px;text-align: left;">Max Loan Tenor</td>
														<td class="text-center border-1 b-b-none">Maximum 25years</td>
														<td class="text-center b-b-none b-r-none border-1 b-b-r-radius-10">Maximum 25years</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

									<div class="row">
										<div class="col-12">
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
											<p>It is required to fulfill the requirement of making minimum down payment 25%, service charges and other applicable fees related to bank’s facilities before living at the residence.</p>
										</div>
										<div class="col-1">
											<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
										</div>
										<div class="col-11">
											<p>Bank shall approve the final loan amount based on the selling price mentioned on the Sales and Purchase agreement. Any other additional costs will not be financed by the bank.</p>
										</div>
									</div>
								</div>								

								<div class="space-40" id="faqs"></div>
								<div class="">
									<div class="col-md-12" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-weight: 600;font-size: 16px;">Find more about AYA Home Loan at</p>
										<a href="{{ url('/file/personal/borrowing/hire_purchase/home_loan/Home_Loan_English.pdf') }}" target="_blank">
											<button class="btn FAQ_button">FAQ</button>
										</a>
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
								Staying at your own house is the real comfort for your family. Our home loan solution is here to provide you that comfort. With choice of affordable repayment options of your needs, take control of your future. The future is yours now.
							</p>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Features</p>
							<div class="">
								<table class="table table-bordered features_table">
									<tbody>
										<tr>
											<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Types of property</td>
											<td class="text-center">Apartment, Condominium, Landed Property</td>
										</tr>
										<tr>
											<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Interest Rate</td>
											<td class="text-center">10% per annum</td>
										</tr>
										<tr>
											<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Loan Tenor</td>
											<td class="text-center">Maximum 25 years</td>
										</tr>
										<tr>
											<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Application Fee</td>
											<td class="text-center">MMK 50,000</td>
										</tr>
										<tr>
											<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Service Charges</td>
											<td class="text-center">2% of loan amount</td>
										</tr>
										<tr>
											<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Early Repayment Fees</td>
											<td class="text-center">3% in the first three years</td>
										</tr>
										<tr>
											<td class="w-30 f-600 b-l-none py-md-3 px-md-4">Property purchase value</td>
											<td class="text-center">Minimum MMK  20,000,000</td>
										</tr>
									</tbody>
								</table>
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
									<p>You Must be a Myanmar Citizen</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p>You must have regular monthly income</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p>You must be minimum 20 years of age</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p>The maximum age of applicant shall not <br>exceed 55</p>
								</div>
								<div class="col-12">
									<p style="color: #777777;font-size: 12px;">Note: <b>Joint applicant</b> is allowed (only for immediate family members) for customers with age over 50 and low income.<br><b>Documents</b> which reveal accurate information of above are required to provide at the point of application such as NRC, Household Member List, Income Statement or Salary slip.</p>
								</div>

								<div class="space-20"></div>

								<div class="col-12 loan_eligibility_check">
									<div class="row">
										<div class="col-md-8 loan_eligibility_check_inner">
											<p style="font-size: 20px;font-weight: 500;">Check your loan eligibility now!</p>
											<p>To know your estimated loan eligibility amount, calculate at AYA Home Loan Calculator</p>
											<a href="https://autocalc.ayabank.com" target="_blank">
												<button class="btn apply_now_btn">
													Calculate
												</button>
											</a>
										</div>
										<div class="col-md-4"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="space-30"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Required Documents</p>
							<p class="theme_text_color">Basic Personal Information</p>
							<ul>
								<li>NRIC</li>
								<li>Household list</li>
								<li>Original testimonial letter from Ward Administration Office</li>
								<li>Applicant passport photo</li>
							</ul>
							<p class="theme_text_color mb-lg-n4">Income Documents</p>
							<div class="row income_doc_desktop">
								<div class="col-md-12">
									<div class="income_document_div">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">Salaried Employee</p>
											<ul style="margin-left: 20px;">
												<li>Salary Slip (minimum 3 months)</li>
												<li>Employment Confirmation Letter</li>
												<li>Bank Statement (minimum 6 months) (Optional)</li>
												<li>Professional License (such as Doctor License, Seaman’s CDC)</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<p class="mb-lg-n4 fw-semibold self_employ_title">Self Employed</p>
							<div class="row income_doc_desktop">
								<div class="col-md-12">
									<div class="income_document_div self_employ">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">SME Business Owner</p>
											<ul style="margin-left: 20px;">
												<li>Valid Business License</li>
												<li>Business or Company Registration Documents</li>
												<li>Proof of regular income</li>
												<li>Bank Statements (Minimum 6 months)</li>
												<li>Income/ Financial Statement (Operating Account)</li>
												<li>Tax Receipts</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="income_document_div self_employ">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">Business Owner</p>
											<ul style="margin-left: 20px;">
												<li>Valid company registration documents</li>
												<li>Bank Statements (Minimum 6 months)</li>
												<li>Income/ Financial Statement (Operating Account)</li>
												<li>Tax Receipts</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">How to Apply</p>
							<p>Feel free to make an initial enquiry at any AYA branches via phone or in person. Then, visit nearest AYA branch to receive <b>“In-principle Loan Approval”</b> which contains the eligible HP loan amount.</p>
							<div class="nav-align-top mb-4">
								<ul class="nav nav-pills auto_loan_nav" role="tablist" style="justify-content: center;">
									<li class="nav-item">
										<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-dealer-program-mobile" aria-controls="navs-pills-top-dealer-program-mobile" aria-selected="true" >
											Dealer Program
										</button>
									</li>
									<li class="nav-item">
										<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-individual-program-mobile" aria-controls="navs-pills-top-individual-program-mobile" aria-selected="false" >
											Individual Program
										</button>
									</li>
								</ul>
								<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;box-shadow: none;border-top: 1px solid #cccccc2e;border-radius: 0;">
									<div class="tab-pane fade show active" id="navs-pills-top-dealer-program-mobile" role="tabpanel" style="padding-bottom: 20px;">
										<div>
											<p style="margin-bottom: 30px;">Choose from wide range of residences from our list of authorized developers to purchase your dream home.</p>
										</div>
										<div class="row">
											<div class="col-1" style="position: relative;">
												<div class="swiper-button-prev swiper-button-prev-dealer-mobile swiper-navBtn"></div>
											</div>
											<div class="col-9">
										      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;margin-left: 10px;">
										            <div class="slide-content slide-content-dealer-mobile">
										                <div class="card-wrapper swiper-wrapper">
										                    <div class="card swiper-slide slide_1">
										                        <div class="card-content">
										                        	<div class="row">
										                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_1.png') }}" class="img-fluid" style="width: 40%">
										                        	</div>
										                        	<div class="space-20"></div>
										                            <div class="row">
										                            	<div class="col-md-12">
										                            		<p style="color: #ae071d;font-weight: 600;">STEP - 1</p>
																			<p class="step_desc">Enquire at nearest Branches</p>
										                            	</div>
										                            </div>
										                            <div class="space-60"></div>
										                        </div>
										                    </div>
										                    <div class="card swiper-slide slide_2">
										                    	<div class="card-content">
										                        	<div class="row">
										                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_2.png') }}" class="img-fluid" style="width: 40%">
										                        	</div>
										                        	<div class="space-20"></div>
										                            <div class="row">
										                            	<div class="col-md-12">
										                            		<p style="color: #ae071d;font-weight: 600;">STEP - 2</p>
																			<p class="step_desc">Choose your home at Authorized Developers</p>
										                            	</div>
										                            </div>
										                            <div class="space-60"></div>
										                        </div>
										                    </div>
										                    <div class="card swiper-slide slide_3">
										                        <div class="card-content">
										                        	<div class="row">
										                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_3.png') }}" class="img-fluid" style="width: 40%">
										                        	</div>
										                        	<div class="space-20"></div>
										                            <div class="row">
										                            	<div class="col-md-12">
										                            		<p style="color: #ae071d;font-weight: 600;">STEP - 3</p>
																			<p class="step_desc">Keep required documents ready and apply</p>
										                            	</div>
										                            </div>
										                            <div class="space-60"></div>
										                        </div>
										                    </div>
										                    <div class="card swiper-slide slide_4">
										                        <div class="card-content">
										                        	<div class="row">
										                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_4.png') }}" class="img-fluid" style="width: 40%">
										                        	</div>
										                        	<div class="space-20"></div>
										                            <div class="row">
										                            	<div class="col-md-12">
										                            		<p style="color: #ae071d;font-weight: 600;">STEP - 4</p>
																			<p class="step_desc">Home Sweet Home<br>Monthly Instalment Payment to Bank</p>
										                            	</div>
										                            </div>
										                            <div class="space-60"></div>
										                        </div>
										                    </div>
										                </div>
										            </div>
										            <div class="swiper-pagination"></div>
										        </div>
										    </div>
										    <div class="col-1" style="position: relative;">
												<div class="swiper-button-next swiper-button-next-dealer-mobile swiper-navBtn" style="left: 20%;"></div>
											</div>
											<div class="col-12" style="position: relative;">
												<div class="swiper-pagination swiper-pagination-dealer-mobile"></div>
											</div>
										</div>
									</div>
									<div class="tab-pane individual-program-mobile fade" id="navs-pills-top-individual-program-mobile" role="tabpanel" style="padding-bottom: 20px;">
										<div>
											<p style="margin-bottom: 30px;">Choose the residence you wish to purchase from any developer rather than bank’s authorized developers.</p>
										</div>
										<div class="row">
											<div class="col-1" style="position: relative;">
												<div class="swiper-button-prev swiper-button-prev-individual-mobile swiper-navBtn"></div>
											</div>
											<div class="col-9">
										      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;margin-left: 10px;">
										            <div class="slide-content slide-content-individual-mobile">
										                <div class="card-wrapper swiper-wrapper">
										                    <div class="card swiper-slide slide_1">
										                        <div class="card-content">
										                        	<div class="row">
										                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_individual_step_1.png') }}" class="img-fluid" style="width: 40%">
										                        	</div>
										                        	<div class="space-20"></div>
										                            <div class="row">
										                            	<div class="col-md-12">
										                            		<p style="color: #ae071d;font-weight: 600;">STEP - 1</p>
																			<p class="step_desc">Choose your home from different Developers</p>
										                            	</div>
										                            </div>
										                            <div class="space-60"></div>
										                        </div>
										                    </div>
										                    <div class="card swiper-slide slide_2">
										                    	<div class="card-content">
										                        	<div class="row">
										                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_1.png') }}" class="img-fluid" style="width: 40%">
										                        	</div>
										                        	<div class="space-20"></div>
										                            <div class="row">
										                            	<div class="col-md-12">
										                            		<p style="color: #ae071d;font-weight: 600;">STEP - 2</p>
																			<p class="step_desc">Enquire at nearest Branches</p>
										                            	</div>
										                            </div>
										                            <div class="space-60"></div>
										                        </div>
										                    </div>
										                    <div class="card swiper-slide slide_3">
										                        <div class="card-content">
										                        	<div class="row">
										                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_3.png') }}" class="img-fluid" style="width: 40%">
										                        	</div>
										                        	<div class="space-20"></div>
										                            <div class="row">
										                            	<div class="col-md-12">
										                            		<p style="color: #ae071d;font-weight: 600;">STEP - 3</p>
																			<p class="step_desc">Keep required documents ready and apply</p>
										                            	</div>
										                            </div>
										                            <div class="space-60"></div>
										                        </div>
										                    </div>
										                    <div class="card swiper-slide slide_4">
										                        <div class="card-content">
										                        	<div class="row">
										                        		<img src="{{ url('/images/borrowing/hire_purchase/home_loan/how_to_apply_step_4.png') }}" class="img-fluid" style="width: 40%">
										                        	</div>
										                        	<div class="space-20"></div>
										                            <div class="row">
										                            	<div class="col-md-12">
										                            		<p style="color: #ae071d;font-weight: 600;">STEP - 4</p>
																			<p class="step_desc">Home Sweet Home<br>Monthly Instalment Payment to Bank</p>
										                            	</div>
										                            </div>
										                            <div class="space-60"></div>
										                        </div>
										                    </div>
										                </div>
										            </div>
										            <div class="swiper-pagination"></div>
										        </div>
										    </div>
										    <div class="col-1" style="position: relative;">
												<div class="swiper-button-next swiper-button-next-individual-mobile swiper-navBtn"></div>
											</div>
											<div class="col-12" style="position: relative;">
												<div class="swiper-pagination swiper-pagination-individual-mobile"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="">
									<div class="benefit_table_div mb-30">
										<table class="benefit_table table table-bordered" style="zoom: 70%;">
											<tbody>
												<tr class="table_title b-t-none text-center" valign="middle">
													<td class="b-l-none b-r-none invert-bg-white w-20"></td>
													<td class="first brand_new_title py-md-3">DEALER PROGRAM</td>
													<td class="last pre_owned_car">INDIVIDUAL PROGRAM</td>
												</tr>
												<tr class="invert-bg-white b-t-r-radius-10" style="box-shadow: 0 0 17px 0px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%);">
													<td class="px-md-4 border-1 fw-semibold py-md-3 px-md-3 b-t-none">Room/Land Price</td>
													<td class="text-center border-1 py-md-3 px-md-3">Condo/Apartment: 200 Lakhs and above<br>Landed Property: 500 Lakhs and above</td>
													<td class="text-center border-1 py-md-3 px-md-3  b-t-r-radius-10">Condo/Apartment: 200 Lakhs and above<br>Landed Property: 500 Lakhs and above</td>
												</tr>
												<tr style="background-color: #fff;">
													<td class="border-1 fw-semibold" style="box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);text-align: left;">Type of Land</td>
													<td class="border-1 py-md-4">
														<ul class="mb-0">
															<li>Grant/Leasehold Land</li>
															<li>Freehold Land</li>
															<li>YCDC Land</li>
															<li>DUHD Land</li>
														</ul>															
													</td>
													<td class="border-1 b-b-none " style="box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);">
														<ul class="mb-0">
															<li>Grant/Leasehold Land</li>
															<li>Freehold Land</li>
															<li>YCDC Land</li>
															<li>DUHD Land</li>
														</ul>
													</td>
												</tr>
												<tr style="background-color: #fff;">
													<td class="border-1 fw-semibold" style="padding-top: 20px;padding-bottom: 20px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);text-align: left;">Construction Completion</td>
													<td class="text-center border-1">Minimum 75%</td>
													<td class="text-center border-1 b-b-none " style="box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);">100%</td>
												</tr>
												<tr class="b-t-none invert-bg-white b-b-r-radius-10" style="box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%), 12px 13px 17px 0px rgb(149 149 149 / 15%);">
													<td class="border-1 b-b-none fw-semibold" style="padding-top: 20px;padding-bottom: 20px;text-align: left;">Max Loan Tenor</td>
													<td class="text-center border-1 b-b-none">Maximum 25years</td>
													<td class="text-center b-b-none  border-1 b-b-r-radius-10">Maximum 25years</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="row">
									<div class="col-12">
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
										<p>It is required to fulfill the requirement of making minimum down payment 25%, service charges and other applicable fees related to bank’s facilities before living at the residence.</p>
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

					<div class="space-20"></div>
					<div class="row">
						<div class="">
							<div class="col-md-12 text-center" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
								<p style="font-weight: 600;font-size: 16px;">Find more about AYA Home Loan at</p>
								<a href="{{ url('/file/personal/borrowing/hire_purchase/home_loan/Home_Loan_English.pdf') }}" target="_blank">
									<button class="btn FAQ_button">FAQ</button>
								</a>
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

	var swiper = new Swiper(".slide-content-dealer-desktop", {
		slidesPerView: 3,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-dealer-desktop",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next-dealer",
			prevEl: ".swiper-button-prev-dealer",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 2,
			},
			1300: {
				slidesPerView: 3,	
			},
		},
	});

	var swiper = new Swiper(".slide-content-individual-desktop", {
		slidesPerView: 3,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-individual-desktop",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next-individual",
			prevEl: ".swiper-button-prev-individual",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 2,
			},
			1300: {
				slidesPerView: 3,	
			},
		},
	});


	var swiper = new Swiper(".slide-content-dealer-mobile", {
		slidesPerView: 1,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-dealer-mobile",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next-dealer-mobile",
			prevEl: ".swiper-button-prev-dealer-mobile",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 1,
			},
			950: {
				slidesPerView: 1,
			},
		},
	});

	var swiper = new Swiper(".slide-content-individual-mobile", {
		slidesPerView: 1,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-individual-mobile",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next-individual-mobile",
			prevEl: ".swiper-button-prev-individual-mobile",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 1,
			},
			950: {
				slidesPerView: 1,
			},
		},
	});
</script>


@endsection('content')