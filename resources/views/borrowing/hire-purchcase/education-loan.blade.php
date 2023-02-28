@extends('layouts.frontend-app')

@section('title', 'Education Loan – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/education_loan.css') }}" />
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/swiper_partner.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'educationloan'])

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
										<a class="nav-link" href="#why_choose_edu">
											<span>Why Choose AYA Education Loan?</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#eligibility">
											<span>Eligibility</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#how_to_apply">
											<span>How to apply</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#required-document">
											<span>Required Documents</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#interest_rates_fees">
											<span>Interest Rates and Fees</span>
										</a>
									</li>									
									<li class="nav-item">
										<a class="nav-link" href="#faqs">
											<span>FAQs</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="quick_look">
									To meet your child’s learning goals, AYA Education Loan provides financial support for completing Diploma, Degree and Post Graduate programs from our partner institutions - Local Private Bordering Schools, Universities and International Schools.
								</p>

								<div class="space-40" id="why_choose_edu"></div>
								<h4>Why Choose AYA Education Loan?</h4>
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_apply_any_branches.png') }}" class="img-fluid mb-20">
											</div>
											<div class="col-md-9 pt-20">
												<p>Apply at any AYA branch with minimum down-payment and 13% interest per annum.</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_quick_smooth.png') }}" class="img-fluid mb-20">
											</div>
											<div class="col-md-9 pt-20">
												<p>Quick and smooth process</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_fixed_monthly_installment_plan.png') }}" class="img-fluid mb-20">
											</div>
											<div class="col-md-9 pt-20">
												<p>Fixed monthly installment plan</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_loan_tenor_upto_5_years.png') }}" class="img-fluid mb-20">
											</div>
											<div class="col-md-9 pt-20">
												<p>Loan tenor up to 5 years</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_borrow_upto_80.png') }}" class="img-fluid mb-20">
											</div>
											<div class="col-md-9 pt-20">
												<p>Borrow up to 80% of Program fees from MMK 500,000 to MMK 30,000,000</p>
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
										<p>Primary applicant must be Myanmar citizen and age 18 and above. (Under-age students will require co-applicant who must be Myanmar citizen and student’s spouse, sibling or parent)</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>Primary Applicant (or co-applicant) must have stable and reasonable monthly income</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p>Guarantor must be Myanmar citizen who is student’s spouse, sibling, parent or colleague (minimum 21 years old)</p>
									</div>
								</div>

								<div class="space-40" id="how_to_apply"></div>
								<h4 class="mb-30">How to apply</h4>
								<div class="row step_slide_row">
									<div class="col-md-12">
								      	<div class="apply_steps slide-container swiper" style="padding-bottom: 0px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
								            <div class="slide-content slide-content-desktop">
								                <div class="card-wrapper swiper-wrapper">
								                    <div class="card swiper-slide slide_1">
								                        <div class="card-content">
								                        	<div class="row">
								                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_1.png') }}" class="img-fluid w-30">
								                        	</div>
								                        	<div class="space-20"></div>
								                            <div class="row">
								                            	<div class="col-md-12">
								                            		<p style="color: #ae071d;font-weight: 600;">STEP - 1</p>
																	<p class="step_desc">Enquire at nearest Branches</p>
								                            	</div>
								                            </div>
								                            <div class="space-40"></div>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide slide_2">
								                    	<div class="card-content">
								                        	<div class="row">
								                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_2.png') }}" class="img-fluid w-30">
								                        	</div>
								                        	<div class="space-20"></div>
								                            <div class="row">
								                            	<div class="col-md-12">
								                            		<p style="color: #ae071d;font-weight: 600;">STEP - 2</p>
																	<p class="step_desc">Choose your University at Partner Institutions</p>
								                            	</div>
								                            </div>
								                            <div class="space-60"></div>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide slide_3">
								                        <div class="card-content">
								                        	<div class="row">
								                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_3.png') }}" class="img-fluid w-30">
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
								                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_4.png') }}" class="img-fluid w-30">
								                        	</div>
								                        	<div class="space-20"></div>
								                            <div class="row">
								                            	<div class="col-md-12">
								                            		<p style="color: #ae071d;font-weight: 600;">STEP - 4</p>
																	<p class="step_desc">Building your future with AYA Education Loan</p>
								                            	</div>
								                            </div>
								                            <div class="space-60"></div>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide slide_5">
								                        <div class="card-content">
								                        	<div class="row">
								                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_5.png') }}" class="img-fluid w-30">
								                        	</div>
								                        	<div class="space-20"></div>
								                            <div class="row">
								                            	<div class="col-md-12">
								                            		<p style="color: #ae071d;font-weight: 600;">STEP - 5</p>
																	<p class="step_desc">Monthly Instalment Payment to Bank</p>
								                            	</div>
								                            </div>
								                            <div class="space-60"></div>
								                        </div>
								                    </div>
								                </div>
								            </div>
								        </div>
								    </div>
								</div>

								<div class="space-40"></div>
								
								<div class="row">
									<div class="col-md-12">
										<p class="mb-minus-10">Explore options available to position your child’s education journey with our <a href="{{ url('/file/personal/borrowing/hire_purchase/edu_loan/Partner Institutions.docx') }}" style="color: #a02226;">partner institutions</a></p>
										<div class="slide-container slide-container-partner swiper" style="padding: 40px 0px 40px 0px;">
								            <div class="slide-content slide-content-partner">
								                <div class="card-wrapper swiper-wrapper">
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                        	<img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Myanmar_Imperial_University_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Myanmar Imperial University (MIU)</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide share_your_credits">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Myanmar_Institute_of_Business_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Myanmar Institute of Business(MIB)</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide paywave_slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/myanmar_metropolitan_college_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Myanmar Metropolitan College (MMC)</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/strategy_first_university_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Strategy First University (SFU)</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Crown_Education_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Crown Education</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/HCIS_LCIS_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">HCIS / LCIS</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Victoria_University_College_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Victoria University College</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/London_Business_Academy_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">London Business Academy, Mandalay</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/inet_college_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">iNet College</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/British_University_College_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">British University College</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Yangon_Academy_International_School_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Yangon Academy International School</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/yec_learning_center_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Y.E.C Learning Center</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/gusto_university_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">Gusto University</p>
								                        </div>
								                    </div>
								                    <div class="card swiper-slide">
								                        <div class="card-content text-center">
								                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/YIUS_institute_logo.png') }}" class="img-fluid partner_logo w-50">
								                            <p class="name" style="font-weight: 500;font-size: 15px;">YIUS Pre-University Level Studies</p>
								                        </div>
								                    </div>
								                </div>
								            </div>

								            <div class="swiper-button-next swiper-button-next-partner swiper-navBtn"></div>
								            <div class="swiper-button-prev swiper-button-next-partner swiper-navBtn"></div>
								            <div class="swiper-pagination swiper-pagination-partner"></div>
								        </div>
									</div>
									<div class="col-md-12">
										<p class="mb-0">Upon your successful submission of AYA Education Loan Application Form along with required documents to the bank, approval process could take up to 5 Working days. Once approved and you agree on the terms and conditions of the AYA Education Loan, you will be contacted to visit AYA Bank with your guarantor to deposit the required down payment for the program fees.</p>
									</div>
								</div>

								<div class="space-40" id="required-document"></div>
								<h4>Required Documents</h4>
								<ul class="mb-minus-20">
									<li>Completed application form</li>
									<li>NRC of main applicant/co-applicant and guarantor</li>
									<li>Ward Administration Recommendation Letter</li>
									<li>Household Member List</li>
									<li>Income documents of main applicant (co-applicant if any)</li>
								</ul>
								<div class="row income_doc_desktop">
									<div class="col-md-6">
										<div class="salaried_staff_div">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">For Salaried applicants</p>
												<ul style="margin-left: 20px;">
													<li>Letter of Employment or Contract</li>
													<li>Pay Slips (Past 3months) (applicant & co-applicant)</li>
													<li>Bank Statement (Past 3months) (applicant & co-applicant)</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6" style="margin-left: -80px;">
										<div class="salaried_staff_div">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">For self-employed applicants</p>
												<ul style="margin-left: 20px;">
													<li>Business License/Contract</li>
													<li>Other source of income</li>
													<li>Past 3 months Bank Statements</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6"></div>
								</div>

								<div class="space-40" id="interest_rates_fees"></div>
								<h4 class="mb-30">Interest Rates and Fees</h4>
								<div class="row">
									<div class="col-md-12">
										<table class="table table-bordered interest_rates_fees_table">
											<tbody>
												<tr class="b-t-none">
													<td class="w-30 f-600 b-l-none">Service Charges Fee</td>
													<td class="b-r-none">NIL</td>
												</tr>
												<tr>
													<td class="f-600 b-l-none">Interest Rate</td>
													<td class="b-r-none">As low as 13%</td>
												</tr>
												<tr class="b-b-none">
													<td class="f-600 b-l-none">Cancellation Fee</td>
													<td class="b-r-none">No cancellation fees or charges. Your loan repayment must be paid up in full upon your cancellation request or you can repay monthly until your last payment has been made.</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							

								<div class="space-40" id="faqs"></div>
								<div class="">
									<div class="col-md-12" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-weight: 600;font-size: 16px;">Find more about AYA Education Loan at</p>
										<a href="{{ url('/file/personal/borrowing/hire_purchase/edu_loan/Education Loan English.pdf') }}" target="_blank">
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
								To meet your child’s learning goals, AYA Education Loan provides financial support for completing Diploma, Degree and Post Graduate programs from our partner institutions - Local Private Bordering Schools, Universities and International Schools.
							</p>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Why Choose AYA Education Loan?</p>
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-3">
											<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_apply_any_branches.png') }}" class="img-fluid mb-20">
										</div>
										<div class="col-9 pt-20">
											<p>Apply at any AYA branch with minimum down-payment and 13% interest per annum.</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-3">
											<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_quick_smooth.png') }}" class="img-fluid mb-20">
										</div>
										<div class="col-9 pt-20">
											<p>Quick and smooth process</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-3">
											<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_fixed_monthly_installment_plan.png') }}" class="img-fluid mb-20">
										</div>
										<div class="col-9 pt-20">
											<p>Fixed monthly installment plan</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-3">
											<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_loan_tenor_upto_5_years.png') }}" class="img-fluid mb-20">
										</div>
										<div class="col-9 pt-20">
											<p>Loan tenor up to 5 years</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-3">
											<img src="{{ url('/images/borrowing/hire_purchase/education_loan/why_choose_borrow_upto_80.png') }}" class="img-fluid mb-20">
										</div>
										<div class="col-9 pt-20">
											<p>Borrow up to 80% of Program fees from MMK 500,000 to MMK 30,000,000</p>
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
									<p style="">Primary applicant must be Myanmar citizen and age 18 and above. (Under-age students will require co-applicant who must be Myanmar citizen and student’s spouse, sibling or parent)</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Primary Applicant (or co-applicant) must have stable and reasonable monthly incomee</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">Guarantor must be Myanmar citizen who is student’s spouse, sibling, parent or colleague (minimum 21 years old)</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">How to Apply</p>

							<div class="row step_slide_row">
								<div class="col-md-12">
							      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;margin-left: 10px;">
							            <div class="slide-content slide-content-mobile">
							                <div class="card-wrapper swiper-wrapper">
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row">
							                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_1.png') }}" class="img-fluid" style="width: 40%">
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p style="color: #ae071d;font-weight: 600;">STEP - 1</p>
																<p class="step_desc">Enquire at nearest Branches</p>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                    	<div class="card-content">
							                        	<div class="row">
							                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_2.png') }}" class="img-fluid" style="width: 40%">
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p style="color: #ae071d;font-weight: 600;">STEP - 2</p>
																<p class="step_desc">Choose your University at Partner Institutions</p>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content" style="padding-bottom: 30px;">
							                        	<div class="row">
							                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_3.png') }}" class="img-fluid" style="width: 40%">
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p style="color: #ae071d;font-weight: 600;">STEP - 3</p>
																<p class="step_desc">Keep required documents ready and apply</p>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row">
							                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_4.png') }}" class="img-fluid" style="width: 40%">
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p style="color: #ae071d;font-weight: 600;">STEP - 4</p>
																<p class="step_desc">Building your future with AYA Education Loan</p>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content">
							                        	<div class="row">
							                        		<img src="{{ url('/images/borrowing/hire_purchase/education_loan/how_to_apply_step_5.png') }}" class="img-fluid" style="width: 40%">
							                        	</div>
							                        	<div class="space-20"></div>
							                            <div class="row">
							                            	<div class="col-md-12">
							                            		<p style="color: #ae071d;font-weight: 600;">STEP - 5</p>
																<p class="step_desc">Monthly Instalment Payment to Bank</p>
							                            	</div>
							                            </div>
							                            <div class="space-20"></div>
							                        </div>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>

							<div class="space-40"></div>
								
							<div class="row">
								<div class="col-md-12">
									<p class="mb-minus-10">Explore options available to position your child’s education journey with our <a href="{{ url('/file/personal/borrowing/hire_purchase/edu_loan/Partner Institutions.docx') }}" style="color: #a02226;">partner institutions</a></p>
									<div class="slide-container slide-container-partner swiper" style="padding: 40px 0px 40px 0px;">
							            <div class="slide-content slide-content-partner">
							                <div class="card-wrapper swiper-wrapper">
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                        	<img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Myanmar_Imperial_University_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Myanmar Imperial University (MIU)</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide share_your_credits">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Myanmar_Institute_of_Business_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Myanmar Institute of Business(MIB)</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide paywave_slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/myanmar_metropolitan_college_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Myanmar Metropolitan College (MMC)</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/strategy_first_university_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Strategy First University (SFU)</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Crown_Education_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Crown Education</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/HCIS_LCIS_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">HCIS / LCIS</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Victoria_University_College_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Victoria University College</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/London_Business_Academy_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">London Business Academy, Mandalay</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/inet_college_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">iNet College</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/British_University_College_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">British University College</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/Yangon_Academy_International_School_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Yangon Academy International School</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/yec_learning_center_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Y.E.C Learning Center</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/gusto_university_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">Gusto University</p>
							                        </div>
							                    </div>
							                    <div class="card swiper-slide">
							                        <div class="card-content text-center">
							                            <img src="{{ url('/images/borrowing/hire_purchase/education_loan/partners/YIUS_institute_logo.png') }}" class="img-fluid partner_logo w-50">
							                            <p class="name" style="font-weight: 500;font-size: 15px;">YIUS Pre-University Level Studies</p>
							                        </div>
							                    </div>
							                </div>
							            </div>

							            <div class="swiper-button-next swiper-button-next-partner swiper-navBtn"></div>
							            <div class="swiper-button-prev swiper-button-next-partner swiper-navBtn"></div>
							            <div class="swiper-pagination swiper-pagination-partner"></div>
							        </div>
								</div>
								<div class="col-md-12">
									<p class="mb-0">Upon your successful submission of AYA Education Loan Application Form along with required documents to the bank, approval process could take up to 5 Working days. Once approved and you agree on the terms and conditions of the AYA Education Loan, you will be contacted to visit AYA Bank with your guarantor to deposit the required down payment for the program fees.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="space-30"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Required Documents</p>
							<ul class="mb-minus-20">
								<li>Completed application form</li>
								<li>NRC of main applicant/co-applicant and guarantor</li>
								<li>Ward Administration Recommendation Letter</li>
								<li>Household Member List</li>
								<li>Income documents of main applicant (co-applicant if any)</li>
							</ul>
							<div class="row income_doc_desktop">
								<div class="col-md-12">
									<div class="salaried_staff_div">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">For Salaried applicants</p>
											<ul style="margin-left: 20px;">
												<li>Letter of Employment or Contract</li>
												<li>Pay Slips (Past 3months) (applicant & co-applicant)</li>
												<li>Bank Statement (Past 3months) (applicant & co-applicant)</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="salaried_staff_div self_employ">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">For self-employed applicants</p>
											<ul style="margin-left: 20px;">
												<li>Business License/Contract</li>
												<li>Other source of income</li>
												<li>Past 3 months Bank Statements</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-bordered interest_rates_fees_table">
								<tbody>
									<tr class="b-t-none">
										<td class="w-30 f-600 b-l-none">Service Charges Fee</td>
										<td class="b-r-none">NIL</td>
									</tr>
									<tr>
										<td class="f-600 b-l-none">Interest Rate</td>
										<td class="b-r-none">As low as 13%</td>
									</tr>
									<tr class="b-b-none">
										<td class="f-600 b-l-none">Cancellation Fee</td>
										<td class="b-r-none">No cancellation fees or charges. Your loan repayment must be paid up in full upon your cancellation request or you can repay monthly until your last payment has been made.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="">
							<div class="col-md-12 text-center" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
								<p style="font-weight: 600;font-size: 16px;">Find more about AYA Education Loan at</p>
								<a href="{{ url('/file/personal/borrowing/hire_purchase/edu_loan/Education Loan English.pdf') }}" target="_blank">
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

	var swiper = new Swiper(".slide-content-desktop", {
		slidesPerView: 4,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			dynamicBullets: true,
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 4,
			},
		},
	});

	var swiper = new Swiper(".slide-content-mobile", {
		slidesPerView: 1,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			dynamicBullets: true,
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

	var swiper = new Swiper(".slide-content-partner", {
		slidesPerView: 3,
		spaceBetween: 25,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-partner",
			clickable: true,
			dynamicBullets: true,
		},
		navigation: {
			nextEl: ".swiper-button-next-partner",
			prevEl: ".swiper-button-prev-partner",
		},

		breakpoints:{
			0: {
				slidesPerView: 1,
			},
			520: {
				slidesPerView: 2,
			},
			950: {
				slidesPerView: 3,
			},
		},
	});
</script>


@endsection('content')