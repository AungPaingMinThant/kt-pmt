@extends('layouts.frontend-app')

@section('title', 'Auto Loan – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/auto_loan.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'autoloan'])

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
										<a class="nav-link" href="#features">
											<span>Features</span>
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
									Getting a brand new car or pre-owned, AYA auto financing is right solution for you.  With AYA Auto Loan, you can just make the down payment to own your dream car. Visit our authorized auto dealers today to stop dreaming and start driving.
								</p>

								<div class="space-40" id="features"></div>
								<h4>Features</h4>
								<div class="">
									<div class="benefit_table_div">
										<table class="benefit_table table table-bordered">
											<tbody>
												<tr class="table_title" valign="middle" style="border-top: none;text-align: center;">
													<td style="border-left: none;border-right: none;background-color: #fff;width: 20%;"></td>
													<td class="first brand_new_title">Brand New Car</td>
													<td class="brand_new_chinese_title">Brand New Car<br>(Chinese Brand)</td>
													<td class="last pre_owned_car">Pre-Owned Car</td>
												</tr>
												<tr style="text-align: center;background-color: #fff;border-top-right-radius: 10px;box-shadow: 0 0 17px 0px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%);">
													<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;width: 17%;text-align: left;">Down Payment</td>
													<td style="border-width: 1px;">Minimum 40%</td>
													<td style="border-width: 1px;">Minimum 50%</td>
													<td class="last" style="border-width: 1px;border-top-right-radius: 10px;border-right: none;">Minimum 50%</td>
												</tr>
												<tr style="text-align: center;background-color: #fff;">
													<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);text-align: left;">Loan Tenor</td>
													<td style="border-width: 1px;">Maximum 5 Years</td>
													<td style="border-width: 1px;">Maximum 5 Years</td>
													<td class="last" style="border-width: 1px;border-right: none;box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);">Maximum 5 Years</td>
												</tr>
												<tr style="text-align: center;background-color: #fff;border-bottom-right-radius: 10px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%), 12px 13px 17px 0px rgb(149 149 149 / 15%);">
													<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;text-align: left;">Interest Rate</td>
													<td style="border-width: 1px;">10%  per annum</td>
													<td style="border-width: 1px;">10%  per annum</td>
													<td class="last" style="border-width: 1px;border-bottom-right-radius: 10px;border-right: none;">10%  per annum</td>
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
										<p style="">You Must be a Myanmar Citizen</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">You must have regular monthly income</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">You must be minimum 20 years of age</p>
									</div>
									<div class="col-1">
										<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
									</div>
									<div class="col-11">
										<p style="">The maximum age of applicant shall not exceed 55</p>
									</div>
									<div class="col-12">
										<p style="color: #777777;font-size: 12px;">Note: <b>Joint applicant</b> is allowed (only for immediate family members) for customers with age over 55 and low income. <b>Documents</b> which reveal accurate information of above are required to provide at the point of application such as NRC, Household Member List, Income Statement or Salary slip. </p>
									</div>

									<div class="space-20"></div>

									<div class="col-12 loan_eligibility_check">
										<div class="row">
											<div class="col-md-8 loan_eligibility_check_inner">
												<p style="font-size: 20px;font-weight: 500;">Check your loan eligibility now!</p>
												<p>To know your estimated loan eligibility amount, calculate at AYA Auto Loan Calculator</p>
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

								<div class="space-40" id="required-document"></div>
								<h4>Required Documents</h4>
								<p class="theme_text_color">Basic Personal Documents</p>
								<ul>
									<li>NRC</li>
									<li>Household Member List</li>
									<li>Original Testimonial Letter from Ward Administration Office</li>
								</ul>
								<p style="color: #ae071d;margin-bottom: -20px;">Income Documents</p>
								<div class="row income_doc_desktop">
									<div class="col-md-6">
										<div class="income_document_div salaried_staff_div">
											<div class="row">
												<p style="font-weight: 600;font-size: 16px;">Salaried Staff</p>
												<ul style="margin-left: 20px;">
													<li>Salary Slip (minimum 3 months)</li>
													<li>Employment Confirmation Letter</li>
													<li>Bank Statement (minimum 6 months) (Optional)</li>
													<li>Professional License (such as Doctor License, Seaman’s CDC)</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6" style="margin-left: -50px;">
										<div class="income_document_div self_employ_div">
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
								
								<div class="space-40" id="how_to_apply"></div>
								<h4>How to apply</h4>
								<div class="nav-align-top mb-4">
									<ul class="nav nav-pills " role="tablist">
										<li class="nav-item">
											<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-brand-new-car" aria-controls="navs-pills-top-brand-new-car" aria-selected="true" >
												Brand New Car Only
											</button>
										</li>
										<li class="nav-item">
											<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-brand-new-pre-owned" aria-controls="navs-pills-top-brand-new-pre-owned" aria-selected="false" >
												Brand New or Pre-Owned Car
											</button>
										</li>
									</ul>
									<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;box-shadow: none;">
										<div class="tab-pane fade show active" id="navs-pills-top-brand-new-car" role="tabpanel" style="padding-bottom: 20px;">
											<div>
												<p style="margin-bottom: 30px;">Feel free to make an initial enquiry at any AYA branches via phone or in person. Then, visit nearest AYA branch to receive <b>“In-principle Loan Approval”</b> which contains the eligible HP loan amount.</p>
											</div>
											<div class="d-none d-sm-block">
												<div class="row step_slide_row">
													<div class="col-md-12">
												      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;">
												            <div class="slide-content slide-content-desktop">
												                <div class="card-wrapper swiper-wrapper">
												                    <div class="card swiper-slide slide_1">
												                        <div class="card-content">
												                        	<div class="row">
												                        		<img src="{{ url('/images/borrowing/hire_purchase/auto_loan/how_to_apply_step_1.png') }}" class="img-fluid" style="width: 40%">
												                        	</div>
												                        	<div class="space-20"></div>
												                            <div class="row">
												                            	<div class="col-md-12">
												                            		<p style="color: #ae071d;font-weight: 600;">STEP - 1</p>
																					<p class="step_point_title">Select AYA Branch to Apply “In-principle loan approval letter”</p>
																					<p class="step_desc">You can apply “In-principle loan approval letter” to know your estimated eligible loan amount at the selected AYA branch along with the following documents.</p>
																					<ul class="step_points">
																						<li>Basic Personal Documents</li>
																						<li>Income Documents</li>
																					</ul>
												                            	</div>
												                            </div>
												                            <div class="space-40"></div>
												                        </div>
												                    </div>
												                    <div class="card swiper-slide slide_2">
												                    	<div class="card-content">
												                        	<div class="row">
												                        		<img src="{{ url('/images/borrowing/hire_purchase/auto_loan/how_to_apply_step_2.png') }}" class="img-fluid" style="width: 40%">
												                        	</div>
												                        	<div class="space-20"></div>
												                            <div class="row">
												                            	<div class="col-md-12">
												                            		<p style="color: #ae071d;font-weight: 600;">STEP - 2</p>
																					<p class="step_point_title">Get “In-Principle Loan Approval Letter”</p>
																					<p class="step_desc">You will receive “In-Principle Loan Approval Letter” and authorized Car dealers list, and your loan amount will be based on your income and repayment capability.</p>
												                            	</div>
												                            </div>
												                            <div class="space-40"></div>
												                        </div>
												                    </div>
												                    <div class="card swiper-slide slide_3">
												                        <div class="card-content">
												                        	<div class="row">
												                        		<img src="{{ url('/images/borrowing/hire_purchase/auto_loan/how_to_apply_step_3.png') }}" class="img-fluid" style="width: 40%">
												                        	</div>
												                        	<div class="space-20"></div>
												                            <div class="row">
												                            	<div class="col-md-12">
												                            		<p style="color: #ae071d;font-weight: 600;">STEP - 3</p>
																					<p class="step_point_title">Choose your Car and Submit IP Loan Approval Letter</p>
																					<p class="step_desc">To choose your dream car at AYA authorized dealer showroom and submit original “In-Principle Loan Approval Letter” and other required documents as follows, then sign “Sales and Purchase agreement”.</p>
																					<ul class="step_points">
																						<li>Basic Personal Documents</li>
																						<li>Income Documents</li>
																						<li>Car Related Documents</li>
																					</ul>
												                            	</div>
												                            </div>
												                            <div class="space-40"></div>
												                        </div>
												                    </div>
												                    <div class="card swiper-slide slide_4">
												                        <div class="card-content">
												                        	<div class="row">
												                        		<img src="{{ url('/images/borrowing/hire_purchase/auto_loan/how_to_apply_step_4.png') }}" class="img-fluid" style="width: 40%">
												                        	</div>
												                        	<div class="space-20"></div>
												                            <div class="row">
												                            	<div class="col-md-12">
												                            		<p style="color: #ae071d;font-weight: 600;">STEP - 4</p>
																					<p class="step_point_title">Get your Dream Car</p>
																					<p class="step_desc">You will obtain final loan approval from AYA Bank and receive car from the dealer after successful car registration.</p>
												                            	</div>
												                            </div>
												                            <div class="space-40"></div>
												                        </div>
												                    </div>
												                </div>
												            </div>
												        </div>
												    </div>
												</div>
											</div>
										</div>
										<div class="tab-pane brand-new-pre-owned fade" id="navs-pills-top-brand-new-pre-owned" role="tabpanel" style="padding-bottom: 20px;">
											<div class="row">
												<div class="col-1">
													<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
												</div>
												<div class="col-11">
													<p>Alternatively, you can visit our authorized dealers, choose your car and prepare required documents which will be advised by such dealer.</p>
												</div>
												<div class="col-1">
													<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
												</div>
												<div class="col-11">
													<p>Complete the application forms and submit at nearest branches or dealer.</p>
												</div>
												<div class="col-12" style="padding-left: 30px;">
													<p>Find Available Car Brands <a href="{{ url('/images/borrowing/hire_purchase/auto_loan/Available-Brands.jpg') }}" target="_blank">Here</a> !</p>
												</div>
											</div>
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
											<p>It is required to fulfill the requirement of making minimum down payment , service charges and other applicable fees related to bank’s facilities before receiving the car.</p>
										</div>
										<div class="col-1">
											<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
										</div>
										<div class="col-11">
											<p>Bank shall approve the final loan amount based on the selling price mentioned on the Sales and Purchase agreement. Any other additional costs (i.e. Registration of vehicle at Road Transport Administration Department, etc.) will not be financed by the bank.</p>
										</div>
									</div>
								</div>								

								<div class="space-40" id="faqs"></div>
								<div class="">
									<div class="col-md-12" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-weight: 600;font-size: 16px;">Find more about AYA Auto Loan at</p>
										<a href="{{ url('/file/personal/borrowing/hire_purchase/auto_loan/Auto Loan English.pdf') }}" target="_blank">
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
								Getting a brand new car or pre-owned, AYA auto financing is right solution for you.  With AYA Auto Loan, you can just make the down payment to own your dream car. Visit our authorized auto dealers today to stop dreaming and start driving.
							</p>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">Features</p>
							<div class="">
								<div class="benefit_table_div">
									<table class="benefit_table table table-bordered">
										<tbody>
											<tr class="table_title" valign="middle" style="border-top: none;text-align: center;">
												<td style="border-left: none;border-right: none;background-color: #fff;width: 20%;"></td>
												<td class="first brand_new_title">Brand New Car</td>
												<td class="brand_new_chinese_title">Brand New Car<br>(Chinese Brand)</td>
												<td class="last pre_owned_car">Pre-Owned Car</td>
											</tr>
											<tr style="text-align: center;background-color: #fff;border-top-right-radius: 10px;box-shadow: 0 0 17px 0px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%);">
												<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;width: 17%;text-align: left;">Down Payment</td>
												<td style="border-width: 1px;">Minimum 40%</td>
												<td style="border-width: 1px;">Minimum 50%</td>
												<td class="last" style="border-width: 1px;border-top-right-radius: 10px;border-right: none;">Minimum 50%</td>
											</tr>
											<tr style="text-align: center;background-color: #fff;">
												<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);text-align: left;">Loan Tenor</td>
												<td style="border-width: 1px;">Maximum 5 Years</td>
												<td style="border-width: 1px;">Maximum 5 Years</td>
												<td class="last" style="border-width: 1px;border-right: none;box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);">Maximum 5 Years</td>
											</tr>
											<tr style="text-align: center;background-color: #fff;border-bottom-right-radius: 10px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%), 12px 13px 17px 0px rgb(149 149 149 / 15%);">
												<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;text-align: left;">Interest Rate</td>
												<td style="border-width: 1px;">10%  per annum</td>
												<td style="border-width: 1px;">10%  per annum</td>
												<td class="last" style="border-width: 1px;border-bottom-right-radius: 10px;border-right: none;">10%  per annum</td>
											</tr>
										</tbody>
									</table>
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
									<p style="">You Must be a Myanmar Citizen</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">You must have regular monthly income</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">You must be minimum 20 years of age</p>
								</div>
								<div class="col-1">
									<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
								</div>
								<div class="col-11">
									<p style="">The maximum age of applicant shall not exceed 55</p>
								</div>
								<div class="col-12">
									<p style="color: #777777;font-size: 12px;">Note: <b>Joint applicant</b> is allowed (only for immediate family members) for customers with age over 55 and low income. Documents which reveal accurate information of above are required to provide at the point of application such as NRC, Household Member List, Income Statement or Salary slip. </p>
								</div>

								<div class="space-20"></div>

								<div class="col-12 loan_eligibility_check">
									<div class="row">
										<div class="col-md-8 loan_eligibility_check_inner">
											<p style="font-size: 20px;font-weight: 500;">Check your loan eligibility now!</p>
											<p>To know your estimated loan eligibility amount, calculate at AYA Auto Loan Calculator</p>
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
							<p class="theme_text_color">Basic Personal Documents</p>
							<ul>
								<li>NRC</li>
								<li>Household Member List</li>
								<li>Original Testimonial Letter from Ward Administration Office</li>
							</ul>
							<p style="color: #ae071d;margin-bottom: -30px;">Income Documents</p>
							<div class="row income_doc_desktop">
								<div class="col-md-12">
									<div class="income_document_div">
										<div class="row">
											<p style="font-weight: 600;font-size: 16px;">Salaried Staff</p>
											<ul style="margin-left: 20px;">
												<li>Salary Slip (minimum 3 months)</li>
												<li>Employment Confirmation Letter</li>
												<li>Bank Statement (minimum 6 months) (Optional)</li>
												<li>Professional License (such as Doctor License, Seaman’s CDC)</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="income_document_div self_employ">
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
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="call_deposit_title">How to Apply</p>
							<div class="nav-align-top mb-4">
								<ul class="nav nav-pills " role="tablist" style="justify-content: center;">
									<li class="nav-item">
										<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-brand-new-car-mobile" aria-controls="navs-pills-top-brand-new-car-mobile" aria-selected="true" >
											Brand New Car Only
										</button>
									</li>
									<li class="nav-item">
										<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-brand-new-pre-owned-mobile" aria-controls="navs-pills-top-brand-new-pre-owned-mobile" aria-selected="false" >
											Brand New or Pre-Owned Car
										</button>
									</li>
								</ul>
								<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;box-shadow: none;">
									<div class="tab-pane fade show active" id="navs-pills-top-brand-new-car-mobile" role="tabpanel" style="padding-bottom: 20px;">
										<div>
											<p style="margin-bottom: 30px;">Feel free to make an initial enquiry at any AYA branches via phone or in person. Then, visit nearest AYA branch to receive <b>“In-principle Loan Approval”</b> which contains the eligible HP loan amount.</p>
										</div>
										<div class="d-block d-sm-none">
											<div class="row step_slide_row">
												<div class="col-md-12">
											      	<div class="slide-container swiper" style="padding-bottom: 40px;padding-bottom: 40px;padding-left: 0px;padding-right: 0px;margin-left: 10px;">
											            <div class="slide-content slide-content-mobile">
											                <div class="card-wrapper swiper-wrapper">
											                    <div class="card swiper-slide">
											                        <div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/auto_loan/how_to_apply_step_1.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 1</p>
																				<p class="step_point_title">Select AYA Branch to Apply “In-principle loan approval letter”</p>
																				<p class="step_desc">You can apply “In-principle loan approval letter” to know your estimated eligible loan amount at the selected AYA branch along with the following documents.</p>
																				<ul class="step_points">
																					<li>Basic Personal Documents</li>
																					<li>Income Documents</li>
																				</ul>
											                            	</div>
											                            </div>
											                            <div class="space-20"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide">
											                    	<div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/auto_loan/how_to_apply_step_2.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 2</p>
																				<p class="step_point_title">Get “In-Principle Loan Approval Letter”</p>
																				<p class="step_desc">You will receive “In-Principle Loan Approval Letter” and authorized Car dealers list, and your loan amount will be based on your income and repayment capability.</p>
											                            	</div>
											                            </div>
											                            <div class="space-20"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide">
											                        <div class="card-content" style="padding-bottom: 30px;">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/auto_loan/how_to_apply_step_3.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 3</p>
																				<p class="step_point_title">Choose your Car and Submit IP Loan Approval Letter</p>
																				<p class="step_desc">To choose your dream car at AYA authorized dealer showroom and submit original “In-Principle Loan Approval Letter” and other required documents as follows, then sign “Sales and Purchase agreement”.</p>
																				<ul class="step_points">
																					<li>Basic Personal Documents</li>
																					<li>Income Documents</li>
																					<li>Car Related Documents</li>
																				</ul>
											                            	</div>
											                            </div>
											                            <div class="space-20"></div>
											                        </div>
											                    </div>
											                    <div class="card swiper-slide">
											                        <div class="card-content">
											                        	<div class="row">
											                        		<img src="{{ url('/images/borrowing/hire_purchase/auto_loan/how_to_apply_step_4.png') }}" class="img-fluid" style="width: 40%">
											                        	</div>
											                        	<div class="space-20"></div>
											                            <div class="row">
											                            	<div class="col-md-12">
											                            		<p style="color: #ae071d;font-weight: 600;">STEP - 4</p>
																				<p class="step_point_title">Get your Dream Car</p>
																				<p class="step_desc">You will obtain final loan approval from AYA Bank and receive car from the dealer after successful car registration.</p>
											                            	</div>
											                            </div>
											                            <div class="space-20"></div>
											                        </div>
											                    </div>
											                </div>
											            </div>
											            <div class="swiper-pagination"></div>
											        </div>
											    </div>
											</div>
										</div>
									</div>
									<div class="tab-pane brand-new-pre-owned-mobile fade" id="navs-pills-top-brand-new-pre-owned-mobile" role="tabpanel" style="padding-bottom: 20px;">
										<div class="row">
											<div class="col-1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11">
												<p>Alternatively, you can visit our authorized dealers, choose your car and prepare required documents which will be advised by such dealer.</p>
											</div>
											<div class="col-1">
												<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
											</div>
											<div class="col-11">
												<p>Complete the application forms and submit at nearest branches or dealer.</p>
											</div>
											<div class="col-12" style="padding-left: 30px;">
												<p>Find Available Car Brands <a href="{{ url('/images/borrowing/hire_purchase/auto_loan/Available-Brands.jpg') }}" target="_blank">Here</a> !</p>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-12">
										<p class="theme_text_color">Terms and Conditions</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square bullet_square_mobile">
									</div>
									<div class="col-11">
										<p>It is required to fulfill the requirement of making minimum down payment , service charges and other applicable fees related to bank’s facilities before receiving the car.</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square bullet_square_mobile">
									</div>
									<div class="col-11">
										<p>Bank shall approve the final loan amount based on the selling price mentioned on the Sales and Purchase agreement. Any other additional costs (i.e. Registration of vehicle at Road Transport Administration Department, etc.) will not be financed by the bank.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="space-20"></div>
					<div class="row">
						<div class="">
							<div class="col-md-12 text-center" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
								<p style="font-weight: 600;font-size: 16px;">Find more about AYA Auto Loan at</p>
								<a href="{{ url('/file/personal/borrowing/hire_purchase/auto_loan/Auto Loan English.pdf') }}" target="_blank">
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
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
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
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
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