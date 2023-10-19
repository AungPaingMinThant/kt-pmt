@extends('layouts.frontend-app')

@section('title', 'SME – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/borrowing/sme.css') }}" />
<link rel="stylesheet" href="{{ url('/css/swiper-bundle.min.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_borrowing_SME'])

			<div class="container section_1" >
				<div class="space-40"></div>
				<div class="col-md-9">
					<p>Growing Your SME Business?</p>
					<p>AYA SME financing solution can help funding for expanding and developing your business.</p>
					<p>AYA Bank understands your need for capital growth and smooth business operations. We will work with you individually to determine the best credit option for your business. Let's get a broader understanding of what it takes to qualify for SME financing.</p>
				</div>
				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 18px;">Why AYA SME Financing Solutions?</p>
				</div>
				<div class="row why_use_AYA_outer">
					<div class="col-md-4 outer_benefit_box benefit_section_col">
						<div class="row">
							<div class="col-md-12">
								<img src="{{ url('/images/business/borrowing/sme/friendly_advisor_for_SMEs.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Friendly Advisors for SMEs</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 outer_benefit_box benefit_section_col">
						<div class="row">
							<div class="col-md-12">
								<img src="{{ url('/images/business/borrowing/sme/variety_of_loan_products.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Variety of Loan Products</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 outer_benefit_box benefit_section_col">
						<div class="row">
							<div class="col-md-12">
								<img src="{{ url('/images/business/borrowing/sme/flexible_payment_schedules.png') }}" class="img-fluid benefit_icon">
								<p class="fw-semibold mb-0">Flexible Payment Schedules</p>
							</div>
						</div>
					</div>
				</div>

				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 18px;">Who are eligible?</p>
					<p>Any Small or Medium Enterprise applying for AYA SME Financing Solutions should be</p>
				</div>
				<div class="row">
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">Registered and operating in Myanmar for at least 2 years.</p>
					</div>
					<div class="col-1">
						<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
					</div>
					<div class="col-11">
						<p class="should-apply-point mt-minus-5">Meet the standards set by AYA Bank.</p>
					</div>
				</div>
				<div class="col-md-12">
					<p>AYA Bank adheres to the Myanmar SME Development Law of 2015. If you meet the aforementioned requirements, please contact us and we will gladly assist you in expanding your business.</p>
				</div>

				<div class="space-40"></div>
				<div class="col-md-12">
					<!-- <h3 class="fw-bold">Success Story</h3> -->
					<p class="fw-bold" style="font-size: 18px;">Success Story</p>
				</div>
			</div>
			<div class="success_story_section">
				<div class="slide-container swiper">
		            <div class="slide-content">
		                <div class="card-wrapper swiper-wrapper">
		                	<div class="card swiper-slide share_your_credits">
		                        <div class="card-content">
		                        	<div class="row">
		                        		<div class="col-md-6 photo_div" style="padding: 0px;">
		                        			<img src="{{ url('/images/business/borrowing/sme/juno_floral.jpg') }}" class="img-fluid">
		                        		</div>
		                        		<div class="col-md-6 info_div">
		                        			<p class="juno_desc" style="color: #000;">“With AYA Micro Loan support, the owner of floral service is able to expand her business, dedicated to delighting customers.”</p>
		                        			<p class="description juno_desc" style="color: #000;">Thanks to AYA Bank’s Micro Loan with low interest rates. We have continued offering our Juno Floral Service with high-quality domestic and international flowers, maintaining our standards.</p>
		                        			<p class="description phz_name_property"><b>Ma Lay Lay Htoo</b><br>Juno Floral Service</p>
		                        		</div>
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="card swiper-slide share_your_credits">
		                        <div class="card-content">
		                        	<div class="row">
		                        		<div class="col-md-6 photo_div" style="padding: 0px;">
		                        			<img src="{{ url('/images/business/borrowing/sme/moe_fashion.jpg') }}" class="img-fluid">
		                        		</div>
		                        		<div class="col-md-6 info_div">
		                        			<p class="juno_desc" style="color: #000;">For a dedicated owner of fashion shop, AYA Bank's SME - Micro Loan helped the business thrive, bringing in more satisfied customers than ever!</p>
		                        			<p class="description juno_desc" style="color: #000;">“With the support of AYA Bank's Micro Loan, I've been able to stock my store with the latest fashion trends. This has not only elevated my business but also expanded the choices available to my customers.”</p>
		                        			<p class="description moe_fashion_name_property"><b>Ma Thu Zar Moe</b><br>Moe Fashion Shop (Owner)</p>
		                        		</div>
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="card swiper-slide share_your_credits">
		                        <div class="card-content">
		                        	<div class="row">
		                        		<div class="col-md-6 photo_div" style="padding: 0px;">
		                        			<img src="{{ url('/images/business/borrowing/sme/phyo_hein_zaw.jpg') }}" class="img-fluid">
		                        		</div>
		                        		<div class="col-md-6 info_div">
		                        			<p class="phz_desc" style="color: #000;">“How AYA SME loan gave this mobile shop owner a competitive advantage to expand his business”</p>
		                        			<p class="description phz_desc" style="color: #000;">I've been dreaming about expanding my Snoopy mobile shop business across the nation. With the financial assistance of AYA SME Financing Solutions, I was able to realize my dream and open a total of 9 mobile shops.</p>
		                        			<p class="description phz_name_property"><b>Ko Phyo Hein Zaw</b><br>Snoopy Mobile</p>
		                        		</div>
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="card swiper-slide paywave_slide">
		                        <div class="card-content">
		                            <div class="row" style="">
		                        		<div class="col-md-6 photo_div" style="padding: 0px;">
		                        			<img src="{{ url('/images/business/borrowing/sme/U_Zaw_Oo.jpg') }}" class="img-fluid">
		                        		</div>
		                        		<div class="col-md-6 info_div">
		                        			<p class="uzo_desc" style="color: #000;">“With years of experience, the owner upgraded preschool to primary school using AYA financing and confide more in AYA”</p>
		                        			<p class="description uzo_desc" style="color: #000;">When I needed business financing to upgrade from Preschool to Primary School, AYA Bank offered me AYA SME Financing Solutions to meet my financial needs and expand my business. I will continue to use AYA SME Financing Service if I plan to expand into High school as well.</p>
		                        			<p class="description uzo_name_property"><b>U Zaw Oo</b><br>MPPS Founder</p>
		                        		</div>
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="card swiper-slide">
		                        <div class="card-content">
		                            <div class="row" style="">
		                        		<div class="col-md-6 photo_div" style="padding: 0px;">
		                        			<img src="{{ url('/images/business/borrowing/sme/Daw_Than_Shin.jpg') }}" class="img-fluid">
		                        		</div>
		                        		<div class="col-md-6 info_div">
		                        			<p class="daw_than_shin_desc" style="color: #000;">“SME business owner finds the right loan and financing partner to grow successfully”</p>
		                        			<p class=" description daw_than_shin_desc" style="color: #000;">Branch in-charge of AYA Bank has explained me about AYA SME Financing in detail when I needed to boost my business. And with the help of AYA SME Financing Solutions, I could grow my business efficiently and effectively. I also encourage you to apply AYA SME Financing service if you need to grow your business.</p>
		                        			<p class="description daw_than_shin_name_property"><b>Daw Than Shin</b><br>Hsu Myat Win Business (Founder)</p>
		                        		</div>
		                        	</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-12 testimonial_quote"></div>
		            <div class="swiper-button-next swiper-navBtn"></div>
		            <div class="swiper-button-prev swiper-navBtn"></div>
		            <!-- <div class="swiper-pagination"></div> -->
		        </div>
			</div>

			<div class="space-100 d-none d-sm-block"></div>
			<div class="space-100 d-none d-sm-block"></div>
			<div class="space-100 d-none d-sm-block"></div>
			<div class="container section_1" >
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<p class="fw-bold" style="font-size: 18px;">What We Offer</p>
						</div>
						<div class="col-md-4 d-none d-sm-block">
							<nav id="myScrollspy">
								<ul class="side-nav nav nav-pills flex-column">
									<li class="">
										<a class="side-link active" id="working_capital_loan_over_draft_link" href="#working_capital_loan_over_draft" style="width: 80%;">
											<span class="pr-5">Working Capital Loan (Overdraft – OD)</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="">
										<a class="side-link" id="demand_loan_link" href="#demand_loan">
											<span class="pr-5">Demand Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="">
										<a class="side-link" id="jica_sme_two_step_loan_link" href="#jica_sme_two_step_loan">
											<span class="pr-5">JICA SME Two Step Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="">
										<a class="side-link" id="aya_sme_loan_link" href="#aya_sme_loan">
											<span class="pr-5">AYA SME Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="">
										<a class="side-link" id="agriculture_loan_link" href="#agriculture_loan">
											<span class="pr-5">Agriculture Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="">
										<a class="side-link" id="micro_loan_link" href="#micro_loan">
											<span class="pr-5">Micro Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="working_capital_loan_over_draft">
									Working Capital Loan (Overdraft – OD)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/sme/working_capital_loan_OD.png') }}">
									<p class="working_capital_loan_tagline">Get fund for day-to-day operations of your business</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Our short-term financing will cover the day-to-day sales and marketing, product development, and other operations of your business. You can obtain financing for ordinary business expenses like operating expenses and inventory purchases.</p>

									<div class="space-20"></div>

									<p class="fw-semibold" style="font-size: 17px;">SME Financing Solutions</p>

									<table class="table table-bordered fee_charge_table">
										<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Loan Amount</td>
												<td style="border-right: none;">Up to MMK 1 Billion</td>
											</tr>
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Collateral</td>
												<td style="border-right: none;">Landed Property, Condo</td>
											</tr>
											<tr>
												<td style="border-left: none;padding: 20px;">Loan Tenor</td>
												<td style="border-right: none;">1 Year</td>
											</tr>
											<tr style="background-color: #fff;border-bottom: none;">
												<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Interest</td>
												<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">10% p.a. to 14.5% p.a. (Service Charges Included)</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="space-40" id="demand_loan"></div>
								<p class="demand_loan" style="font-size:18px; font-weight: 700;">
									Demand Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/sme/demand_loan.png') }}">
									<p class="working_capital_loan_tagline">Enjoy convenience of demanding repayment at any time</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>If you are looking forward to boosting your capital investment or business expansion, let us help you grow your business! AYA Bank offers Demand Loan to SMEs and Corporates for fixed asset purchases, capital expenditure purchases and industrial building construction, etc.
									</p>

									<div class="space-20"></div>

									<p class="fw-semibold" style="font-size: 17px;">SME Financing Solutions</p>

									<table class="table table-bordered fee_charge_table">
										<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Loan Amount</td>
												<td style="border-right: none;">Up to 1 Billion MMK</td>
											</tr>
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Collateral</td>
												<td style="border-right: none;">Landed Property, Condo</td>
											</tr>
											<tr>
												<td style="border-left: none;padding: 20px;">Loan Tenor</td>
												<td style="border-right: none;">Up to 3 Years</td>
											</tr>
											<tr style="background-color: #fff;border-bottom: none;">
												<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Interest</td>
												<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">10% p.a. to 14.5% p.a.</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="space-40" id="jica_sme_two_step_loan"></div>
								<p class="jica_sme_two_step_loan">
									JICA SME Two Step Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/sme/JICA_SME_two_step_loan.png') }}" class="img-fluid">
									<p class="jica_sme_two_step_loan_tagline">Providing financial support of Capital Expenditure for SMEs going forward</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>In support of domestic small and medium enterprises, we offer JICA Two Step Loan, funded by JICA, to expand your business grow by allocating 80% of the loan amount to acquire, upgrade, and expand fixed assets and 20% to working capital.</p>
									
									<div class="space-20"></div>

									<p class="fw-semibold" style="font-size: 17px;">SME Financing Solutions</p>

									<table class="table table-bordered fee_charge_table">
										<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Loan Amount</td>
												<td style="border-right: none;">Up to MMK 500 Million</td>
											</tr>
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Collateral</td>
												<td style="border-right: none;">Landed Property, Condo</td>
											</tr>
											<tr>
												<td style="border-left: none;padding: 20px;">Loan Tenor</td>
												<td style="border-right: none;">Up to 5 Years</td>
											</tr>
											<tr style="background-color: #fff;border-bottom: none;">
												<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Interest</td>
												<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">5.5% p.a. to 10% p.a.</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="space-40" id="aya_sme_loan"></div>
								<p class="aya_sme_loan">
									AYA SME Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/sme/AYA_SME_loan.png') }}" class="img-fluid">
									<p class="aya_sme_loan_tagline">Enhance your operations and cash flow using the AYA SME Loan facility</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Are you a SME business owner with a steady monthly income or a store owner? Our SME loan can be utilized for business expansion in addition to day-to-day expenses. It consists of financing for fixed assets such as industrial buildings, equipment, and machinery, as well as working capital such as operating expenses, accounts payable to suppliers, etc.</p>
									<div class="space-20"></div>

									<p class="fw-semibold" style="font-size: 17px;">SME Financing Solutions</p>

									<table class="table table-bordered fee_charge_table">
										<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Loan Amount</td>
												<td style="border-right: none;">Depends on loan purpose & repayment capacity</td>
											</tr>
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Collateral</td>
												<td style="border-right: none;">Landed Property, Condo, Apartment</td>
											</tr>
											<tr>
												<td style="border-left: none;padding: 20px;">Loan Tenor</td>
												<td style="border-right: none;">Up to 3 Years</td>
											</tr>
											<tr style="background-color: #fff;border-bottom: none;">
												<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Interest</td>
												<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">10% p.a. to 14.5% p.a.</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="space-40" id="agriculture_loan"></div>
								<p class="agriculture_loan">
									Agriculture Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/sme/agriculture_loan.png') }}" class="img-fluid">
									<p class="agriculture_loan_tagline">Financing your agribusiness through our flexible loan for seasonal agricultural operations</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Seasonal loan for financing SMEs in the agriculture sector. You can get support by way of short term credit in harvesting specific crops for each season.</p>
									<div class="space-20"></div>

									<p class="fw-semibold" style="font-size: 17px;">SME Financing Solutions</p>

									<table class="table table-bordered fee_charge_table">
										<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Loan Amount</td>
												<td style="border-right: none;">Depend on Loan Purpose & Repayment Capacity</td>
											</tr>
											<tr style="background-color: #fff;border-top: none;">
												<td style="border-left: none;padding: 20px;">Collateral</td>
												<td style="border-right: none;">Landed Property, Condo</td>
											</tr>
											<tr>
												<td style="border-left: none;padding: 20px;">Loan Tenor</td>
												<td style="border-right: none;">Up to 6 Months</td>
											</tr>
											<tr style="background-color: #fff;border-bottom: none;">
												<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Interest</td>
												<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">10% p.a. to 14.5% p.a. (Services Charges Included)</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="space-40" id="micro_loan"></div>
								<!-- Micro Loan Css -->
								<style type="text/css">
									.accordion-body .apply-tab .nav-tabs .tab_title.active span {
										border-bottom: 5px solid #A5000B;
									}
									.accordion-body .apply-tab .nav-pills .tab_title.active, .accordion-body .apply-tab .nav-pills .tab_title.active:hover, .accordion-body .apply-tab .nav-pills .tab_title.active:focus {
									    background-color: transparent !important;
									    color: #000 !important;
									    box-shadow: none !important;
									    border-bottom: 5px solid #ae002c !important;
									    border-radius: 0;
									    font-weight: 500;
									}

									.accordion-body .return-tab .nav-tabs .tab_title.active span {
										border-bottom: 5px solid #A5000B;
									}
									.accordion-body .return-tab .nav-pills .tab_title.active, .accordion-body .return-tab .nav-pills .tab_title.active:hover, .accordion-body .return-tab .nav-pills .tab_title.active:focus {
									    background-color: transparent !important;
									    color: #000 !important;
									    box-shadow: none !important;
									    border-bottom: 5px solid #ae002c !important;
									    border-radius: 0;
									    font-weight: 500;
									}

									.apply-tab-link {
									    display: block;
									    padding: 0.5rem 1.25rem;
									    color: #222222;
									    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
									}
									.nav-pills .apply-tab-link {
									    background: none;
									    border: 0;
									    border-radius: 0.375rem;
									}
								</style>
								<p class="micro_loan">
									Micro Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/sme/micro_loan.png') }}" class="img-fluid">
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Need funds for regular operations, capital investments, or business expansion? AYA Bank will help you finance your ambitions and create your own opportunities. We provide Microloans with minimal collateral requirements or without collateral for the uninterrupted operation and expansion of small enterprises with growth potential.</p>
									
									<div class="space-20"></div>

									<div class="col-md-12">
										<div class="accordion" id="accordionExample">
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingOne">
													<button class="accordion-button pl-20" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Eligibility
													</button>
												</h2>
												<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12">
															<p class="fw-semibold" style="font-size: 18px;">Who can apply?</p>
															<p>Small enterprises that can apply for AYA Micro Loan services:</p>
														</div>
														<div class="row">
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5 ">A Valid Business License and an operational business of (1) year.</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5 ">Must comply with other terms and conditions apply by AYA Bank.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingTwo">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														AYA Micro Loan
													</button>
												</h2>
												<div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="apply-tab nav-align-top mb-4">
															<ul class="nav nav-pills " role="tablist">
																<li class="nav-item apply-with-collectral-tab">
																	<button type="button" class="tab_title apply-tab-link active  fw-semibold" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-apply-with-collectral" aria-controls="navs-pills-top-apply-with-collectral" aria-selected="true" >
																		If applying <br>with collateral
																	</button>
																</li>
																<li class="nav-item">
																	<button type="button" class="tab_title apply-tab-link apply-tab-link  fw-semibold" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-apply-with-CGI" aria-controls="navs-pills-top-apply-with-CGI" aria-selected="false" >
																		If applying through CGI (Credit Guarantee Insurance)<br>without collateral
																	</button>
																</li>
															</ul>
															<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;box-shadow: none;">
																<div class="tab-pane fade show active" id="navs-pills-top-apply-with-collectral" role="tabpanel" style="padding-bottom: 20px;">
																	<div>
																		<table class="table table-bordered fee_charge_table">
																			<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
																				<tr style="background-color: #fff;border-top: none;">
																					<td style="border-left: none;padding: 20px;width: 30%;">Loan Amount</td>
																					<td style="border-right: none;">Up to MMK 30,000,000</td>
																				</tr>
																				<tr style="background-color: #fff;border-top: none;">
																					<td style="border-left: none;padding: 20px;">Collateral</td>
																					<td style="border-right: none;">Apartment, business/shop title-owned, Vehicle with your ownership title</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;">Loan Tenor</td>
																					<td style="border-right: none;">Up to (2) years</td>
																				</tr>
																				<tr style="background-color: #fff;border-bottom: none;">
																					<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Interest</td>
																					<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">
																						<p class="mb-10">For loan term (1) year : 9.5% per year</p>
																						<p><span style="color: transparent;user-select: none;">For loan term (1) year : </span>0.79% per month</p>
																						<p class="mb-10">For loan term (2) years : 8.5% per year</p>
																						<p><span style="color: transparent;user-select: none;">For loan term (2) years : </span>0.70% per month</p>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
																<div class="tab-pane apply-with-CGI fade" id="navs-pills-top-apply-with-CGI" role="tabpanel" style="padding-bottom: 20px;">
																	<div>
																		<table class="table table-bordered fee_charge_table">
																			<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);font-weight: 500;background-color: transparent;">
																				<tr style="background-color: #fff;border-top: none;">
																					<td style="border-left: none;padding: 20px;width: 35%;">Loan Amount</td>
																					<td style="border-right: none;">Up to MMK 10,000,000</td>
																				</tr>
																				<tr style="background-color: #fff;border-top: none;">
																					<td style="border-left: none;padding: 20px;">Loan Tenor</td>
																					<td style="border-right: none;">Up to (2) years</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;">Interest</td>
																					<td style="border-right: none;width: 70%;">
																						<p class="mb-10">For loan term (1) year : 10.5% per year</p>
																						<p><span style="color: transparent;user-select: none;">For loan term (1) year : </span>0.87% per month</p>
																						<p class="mb-10">For loan term (2) years : 9.0% per year</p>
																						<p><span style="color: transparent;user-select: none;">For loan term (2) years : </span>0.75% per month</p>
																					</td>
																				</tr>
																				<tr style="background-color: #fff;border-bottom: none;">
																					<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Myanma Insurance (CGI) premium</td>
																					<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">
																						<p class="mb-10">First year : 3% of the approved loan amount</p>
																						<p>Second year : 2.5% of the remaining loan amount</p>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>

														<p class=" fw-semibold" style="font-size: 17px;">Repayment Terms</p>

														<div class="row">
															<div class="col-1 micro_bullet_square_div">
																<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid micro_bullet_square">
															</div>
															<div class="col-11 micro_bullet_fact_div">
																<p class=" micro_loan_return_points">Interest will be collected using the Upfront Method.</p>
															</div>
															<div class="col-1 micro_bullet_square">
																<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid micro_bullet_square">
															</div>
															<div class="col-11 micro_bullet_fact_div">
																<p class=" micro_loan_return_points">At the time of loan approval, the annual interest rate is deducted in advance from the loan amount, leaving the remainder available for use.</p>
															</div>
															<div class="col-12">
																<p>*** The principal loan amount must be repaid to the bank every month.</p>
															</div>
														</div>

														<div class="space-20"></div>

														<div class="return-tab nav-align-top mb-4">
															<ul class="nav nav-pills " role="tablist">
																<li class="nav-item return-collectral-tab">
																	<button type="button" class="tab_title nav-link return-tab active  fw-semibold" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-return-collectral" aria-controls="navs-pills-return-collectral" aria-selected="true" >
																		Applying loan <br>with collateral
																	</button>
																</li>
																<li class="nav-item">
																	<button type="button" class="tab_title nav-link return-tab  fw-semibold" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-return-CGI" aria-controls="navs-pills-return-CGI" aria-selected="false" >
																		Applying loan through CGI <br>(without collateral)
																	</button>
																</li>
															</ul>
															<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;box-shadow: none;">
																<div class="tab-pane fade show active" id="navs-pills-return-collectral" role="tabpanel" style="padding-bottom: 20px;">
																	<div class="table-responsive text-nowrap" style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%) !important;">
																		<table class="table table-bordered return_collectral_table ">
																			<tbody style="font-weight: 500;background-color: transparent;">
																				<tr style="background-color: #fff;border-top: none;">
																					<td class="w-30" style="border-left: none;padding: 20px;">Approved loan amount (example)</td>
																					<td>5,000,000</td>
																					<td>10,000,000</td>
																					<td style="border-right: none;">30,000,000</td>
																				</tr>
																				<tr style="background-color: #fff;border-top: none;">
																					<td style="border-left: none;padding: 20px;">Interest per annum</td>
																					<td>9.5%</td>
																					<td>9.5%</td>
																					<td style="border-right: none;">9.5%</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;">Total (1) year interest</td>
																					<td>475,000</td>
																					<td>950,000</td>
																					<td style="border-right: none;">2,850,000</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;">Loan amount (after interest)</td>
																					<td>4,525,000</td>
																					<td>9,050,000</td>
																					<td style="border-right: none;">27,150,000</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;"> Monthly principal amount to be repaid</td>
																					<td>416,666</td>
																					<td>833,333</td>
																					<td style="border-right: none;">2,500,000</td>
																				</tr>
																				<tr style="background-color: #fff;border-bottom: none;">
																					<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Daily principal amount</td>
																					<td>13,698</td>
																					<td>27,397</td>
																					<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">82,191</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
																<div class="tab-pane brand-new-pre-owned fade" id="navs-pills-return-CGI" role="tabpanel" style="padding-bottom: 20px;">
																	<div class="table-responsive text-nowrap" style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%) !important;">
																		<table class="table table-bordered return_collectral_table">
																			<tbody style="font-weight: 500;background-color: transparent;">
																				<tr style="background-color: #fff;border-top: none;">
																					<td class="w-30" style="border-left: none;padding: 20px;">Approved loan amount (example)</td>
																					<td>5,000,000</td>
																					<td style="border-right: none;">10,000,000</td>
																				</tr>
																				<tr style="background-color: #fff;border-top: none;">
																					<td style="border-left: none;padding: 20px;">Interest per annum</td>
																					<td>10.5%</td>
																					<td style="border-right: none;">10.5%</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;">Total (1) year interest</td>
																					<td>525,000</td>
																					<td style="border-right: none;">1,050,000</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;">Loan amount (after interest)</td>
																					<td>4,475,000</td>
																					<td style="border-right: none;">8,950,000</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;">Monthly principal amount to be repaid</td>
																					<td>416,666</td>
																					<td style="border-right: none;">833,333</td>
																				</tr>
																				<tr>
																					<td style="border-left: none;padding: 20px;">Daily principal amount</td>
																					<td>13,698</td>
																					<td style="border-right: none;">27,397</td>
																				</tr>
																				<tr style="background-color: #fff;border-bottom: none;">
																					<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Premium to be paid to Myanma Insurance (3%)</td>
																					<td>150,000</td>
																					<td class="last" style="border-width: 1px;border-right: none;border-bottom: none;">300,000</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingThree">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Required Documents
													</button>
												</h2>
												<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="row">
															<p class="fw-semibold" style="font-size: 18px;">Business related documents</p>
														</div>
														<div class="row">
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">Business license and permit</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">Investment plan for business</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">Trade Receipts/Ledger and Records (Previous 3 months)</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">Business photos (front, back, left, right and interior)</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">SME Member Card</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">SME Certificate (if approved)</p>
															</div>
														</div>

														<div class="space-20"></div>
														
														<div class="row">
															<p style="font-size: 18px;"><span class="fw-semibold">Documents related to loan applicants</span> (at least 2 applicants)</p>
														</div>														
														<div class="row">
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">National Identity Card (copy) and Household Registration (copy)</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">(2) license size photos</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5">Proof of Residence (Municipal Tax or Land Tax or Meter Bill)</p>
															</div>
														</div>
														
														<div class="space-20"></div>

														<div class="row">
															<p class="fw-semibold" style="font-size: 18px;">Documents related to insurance</p>
														</div>
														<div class="row">
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<div class="row">
																	<div class="col-4">
																		<p class="micro_loan_points mt-minus-5">If it is an apartment</p>
																	</div>
																	<div class="col-8">
																		<p class="micro_loan_points mt-minus-5">- Related agreements</p>
																		<p class="micro_loan_points mt-minus-5">- Copy of BCC; A copy of the contract signed by the landlord and contractor</p>
																	</div>
																</div>

																<div class="row">
																	<div class="col-4">
																		<p class="micro_loan_points mt-minus-5">If it is a title-owned shop</p>
																	</div>
																	<div class="col-8">
																		<p class="micro_loan_points mt-minus-5">- A copy of the Title-deed</p>
																	</div>
																</div>

																<div class="row">
																	<div class="col-4">
																		<p class="micro_loan_points mt-minus-5">If it is a registered vehicle</p>
																	</div>
																	<div class="col-8">
																		<p class="micro_loan_points mt-minus-5">- Car ownership book</p>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="space-20"></div>
														<div class="row">
															<p>Additional documents may be required depending on the purpose of the loan application and the type of business.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingFour">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														How to Apply
													</button>
												</h2>
												<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p class="mb-0">Check at the nearest AYA Bank branches whether you meet the loan criteria. You can find out at once and apply with the necessary documents</p>
														<img src="{{ url('/images/business/borrowing/sme/Customer-Journey.jpg') }}" class="img-fluid text-center">
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingFive">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Fees & Charges
													</button>
												</h2>
												<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<p>No service charges by the Bank to apply AYA Micro Loan.</p>
														<p>However, if you apply with collateral, collateral valuation fees, lawyer fees and service fees related to government offices shall be borne by the applicant(s).</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="">
									<div class="col-md-12 text-left">
										<p><a href="{{ url('/file/business/borrowing/AYA_Micro_Loan_FAQ.pdf') }}" target="_blank" class="text-decoration-underline">Find out more</a> about our Micro Loan to help you manage your finance.</p>
									</div>
								</div>

								<div class="space-40"></div>
								<div class="">
									<div class="col-md-12 c-b-l-div" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-weight: 600;font-size: 16px;">Find out more about SME Loan at</p>
										<a href="{{ url('/file/business/borrowing/AYA_SME_FAQ.pdf') }}" target="_blank">
											<button class="btn contact_us_btn">FAQ</button>
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
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript">
	var cur_url = window.location.href;
	var parts = cur_url.split('#');
	var last_part = parts.at(-1);

	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});

	$(".side-link").click(function(e) {
		$(".side-link").removeClass('active');

		var nav_link_href = $(this).attr('href');

		if (nav_link_href == '#working_capital_loan_over_draft') {
	  		$("#working_capital_loan_over_draft_link").addClass('active');
	  	}

		if (nav_link_href == '#demand_loan') {
	  		$("#demand_loan_link").addClass('active');
	  	}

	  	if (nav_link_href == '#jica_sme_two_step_loan') {
	  		$("#jica_sme_two_step_loan_link").addClass('active');
	  	}

	  	if (nav_link_href == '#aya_sme_loan') {
	  		$("#aya_sme_loan_link").addClass('active');
	  	}

	  	if (nav_link_href == '#agriculture_loan') {
	  		$("#agriculture_loan_link").addClass('active');
	  	}

	  	if (nav_link_href == '#micro_loan') {
	  		$("#micro_loan_link").addClass('active');
	  	}
	});

	if (last_part == 'working_capital_loan_over_draft') {
		$(".side-link").removeClass('active');
  		$("#working_capital_loan_over_draft_link").addClass('active');
  	}

	if (last_part == 'demand_loan') {
		$(".side-link").removeClass('active');
  		$("#demand_loan_link").addClass('active');
  	}

  	if (last_part == 'jica_sme_two_step_loan') {
  		$(".side-link").removeClass('active');
  		$("#jica_sme_two_step_loan_link").addClass('active');
  	}

  	if (last_part == 'aya_sme_loan') {
		$(".side-link").removeClass('active');
  		$("#aya_sme_loan_link").addClass('active');
  	}

  	if (last_part == 'agriculture_loan') {
		$(".side-link").removeClass('active');
  		$("#agriculture_loan_link").addClass('active');
  	}

  	if (last_part == 'micro_loan') {
		$(".side-link").removeClass('active');
  		$("#micro_loan_link").addClass('active');
  	}

  	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();

		var working_capital_loan_over_draft_section = $("#working_capital_loan_over_draft");
		if (scrollTop > working_capital_loan_over_draft_section.offset().top - 60) {
			$(".side-link").removeClass('active');
  			$("#working_capital_loan_over_draft_link").addClass('active');
		}

		var working_capital_loan_over_draft_section = $("#demand_loan");
		if (scrollTop > working_capital_loan_over_draft_section.offset().top - 60) {
			$(".side-link").removeClass('active');
  			$("#demand_loan_link").addClass('active');
		}
		

		var jica_sme_two_step_loan_section = $("#jica_sme_two_step_loan");
		if (scrollTop > jica_sme_two_step_loan_section.offset().top - 60) {
			$(".side-link").removeClass('active');
  			$("#jica_sme_two_step_loan_link").addClass('active');
		}

		var aya_sme_loan_section = $("#aya_sme_loan");
		if (scrollTop > aya_sme_loan_section.offset().top - 60) {
			$(".side-link").removeClass('active');
  			$("#aya_sme_loan_link").addClass('active');
		}

		var agriculture_loan_section = $("#agriculture_loan");
		if (scrollTop > agriculture_loan_section.offset().top - 60) {
			$(".side-link").removeClass('active');
  			$("#agriculture_loan_link").addClass('active');
		}

		var micro_loan_section = $("#micro_loan");
		if (scrollTop > micro_loan_section.offset().top - 60) {
			$(".side-link").removeClass('active');
  			$("#micro_loan_link").addClass('active');
		}
	});

	$(".apply-tab-link").click(function() {
		$(".apply-tab-link").addClass('active');
		$(".apply-tab-link").not(this).removeClass('active');
	});

	var swiper = new Swiper(".slide-content", {
		slidesPerView: 3,
		spaceBetween: 0,
		loop: true,
		centeredSlides: 'true',
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
				slidesPerView: 3,
			},
		},
	});
</script>
@endsection('content')