@extends('layouts.frontend-app')

@section('title', 'Health Insurance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/slide_tab.css') }}" />
<link rel="stylesheet" href="{{ url('/css/pb_insurance.css') }}">
<style type="text/css">
	.tab_data_row > .col-md-4 {
		width: 30%;
	}
	@media (max-width: 1300px) and (min-width: 1000px) {
		.tab_data_row > .col-md-4 {
			width: 48%;
		}
	}
	@media only screen and (max-width: 576px){
		.tab_data_row > .col-md-4 {
			width: 100%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'health_insurance'])

			<div style="">
				<div class="d-none d-sm-block space-60"></div>

				<div class="container-tab">
					<div class="tabs">
						<input type="radio" id="radio-1" name="tabs" checked="">
						<label class="tab" for="radio-1">Coverage</label>
						<input type="radio" id="radio-2" name="tabs">
						<label class="tab" for="radio-2">Benefits</label>
						<input type="radio" id="radio-3" name="tabs">
						<label class="tab" for="radio-3">Product Highlights</label>
						<span class="glider"></span>
					</div>
				</div>
				<div class="space-80"></div>

				<div class="nav-align-top">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;display: none;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" id="coverage_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-coverage" aria-controls="navs-pills-top-coverage" aria-selected="true" >
								Coverage
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="benefit_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-benefits" aria-controls="navs-pills-top-benefits" aria-selected="false" >
								Benefits
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="highlight_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-product-highlights" aria-controls="navs-pills-product-highlights" aria-selected="false" >
								Product Highlights
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;">
						<div class="tab-pane fade show active" id="navs-pills-top-coverage" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" style="column-gap: 20px;">
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/health/icon_1.png') }}" class="img-fluid">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;">Coverage for Hospitalization and Death</p>
												<p style="color: #4e4e4e;">Hospitalization costs and death protection</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/health/icon_2.png') }}" class="img-fluid">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;">Surgical Procedure and Miscarriage</p>
												<p style="color: #4e4e4e;">Coverage for surgical expenses and miscarriage</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/health/icon_3.png') }}" class="img-fluid">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;">Outpatient Benefit</p>
												<p style="color: #4e4e4e;">Coverage for Outpatient Treatments at clinics or hospitals which do not require admission of patient</p>
											</div>
										</div>
									</div>
								</div>
								<div class="space-40"></div>
								<div class="row ">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 18px;color: #000;font-weight: 600;">Eligibility</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #4e4e4e;">Any individuals, or Corporate Employees, between 6 to 60 years of age. A parent or guardian is required if to be insured is between 6 to 18 years of age.)</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 18px;color: #000;">&nbsp;</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #4e4e4e;">Medical Checkup is required if purchased unit is above 4 units or insured age is above 50 for Critical Illness Additional Coverage)</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane set-text-alert fade" id="navs-pills-top-benefits" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" >
									<div class="col-md-12">
										<div class="row">
											<p style="color: #4e4e4e;margin-bottom: 10px;padding-left: 0px;">Of the following (4) types of health plans, you can choose the insurance best suited to your needs.</p>
											<ul  style="margin-left: 16px;color: #4e4e4e;">
												<li>MediCare Classic</li>
												<li>MediCare Classic<sup>+</sup> (incl. additional coverage)</li>
												<li>MediCare Premium</li>
												<li>MediCare Premium<sup>+</sup> (incl. additional coverage)</li>
											</ul>
										</div>
									</div>
									<div class="col-md-12" style="padding: 20px;">
										<style type="text/css">
											table {
											    border-collapse: inherit !important;
											    border-spacing: 0;
											}
											td:not(.last) {
												border-right: none;
											}
											.table_title > td {
												border-bottom: none;
											}
										</style>
										<div class="row">
											<p style="padding-left: 0px;"><span style="font-weight: 600;">Individual Insurance</span> <span style="color: #a02226;">(Values Shown in Myanmar Currency)</span></p>
											
											<div class="benefit_table_div">
												<table class="table table-bordered benefit_table">
													<tbody>
														<tr class="table_title" valign="middle" style="border-top: none;text-align: center;">
															<td style="border-left: none;border-right: none;background-color: #fff;"></td>
															<td class="first" style="color: #666666;border-width: 1px;border-top-left-radius: 10px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;border-left: none;">Hospital cash Daily (Max 60days)</td>
															<td style="color: #666666;border-width: 1px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;width: 13%;">Death Benefit</td>
															<td style="color: #666666;border-width: 1px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;">Out-Patient Department (OPD)</td>
															<td style="color: #666666;border-width: 1px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;width: 13%;">Surgical cash</td>
															<td style="color: #666666;border-width: 1px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;">Miscarriage</td>
															<td class="last" style="color: #666666;border-width: 1px;border-top-right-radius: 10px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-right: none;border-top: none;width: 13%;">Critical illness (6-60 age)</td>
														</tr>
														<tr style="text-align: center;background-color: #fff;border-top-right-radius: 10px;box-shadow: 0 0 17px 0px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%);">
															<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;width: 17%;">MediCare Classic</td>
															<td style="border-width: 1px;">50,000</td>
															<td style="border-width: 1px;">5,000,000</td>
															<td style="border-width: 1px;">UP to 50,000</td>
															<td style="border-width: 1px;">500,000</td>
															<td style="border-width: 1px;">300,000</td>
															<td class="last" style="border-width: 1px;border-top-right-radius: 10px;border-right: none;"></td>
														</tr>
														<tr style="text-align: center;background-color: #fff;">
															<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);">MediCare Classic<sup>+</sup></td>
															<td style="border-width: 1px;">50,000</td>
															<td style="border-width: 1px;">5,000,000</td>
															<td style="border-width: 1px;">UP to 50,000</td>
															<td style="border-width: 1px;">500,000</td>
															<td style="border-width: 1px;">300,000</td>
															<td class="last" style="border-width: 1px;border-right: none;box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);">5,000,000</td>
														</tr>
														<tr style="text-align: center;background-color: #fff;">
															<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);">MediCare Premium</td>
															<td style="border-width: 1px;">100,000</td>
															<td style="border-width: 1px;">10,000,000,000</td>
															<td style="border-width: 1px;">UP to 100,000</td>
															<td style="border-width: 1px;">500,000</td>
															<td style="border-width: 1px;">300,000</td>
															<td class="last" style="border-width: 1px;border-right: none;box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);"></td>
														</tr>
														<tr style="text-align: center;background-color: #fff;border-bottom-right-radius: 10px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%), 12px 13px 17px 0px rgb(149 149 149 / 15%);">
															<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;">MediCare Premium<sup>+</sup></td>
															<td style="border-width: 1px;">100,000</td>
															<td style="border-width: 1px;">10,000,000,000</td>
															<td style="border-width: 1px;">UP to 100,000</td>
															<td style="border-width: 1px;">500,000</td>
															<td style="border-width: 1px;">300,000</td>
															<td class="last" style="border-width: 1px;border-bottom-right-radius: 10px;border-right: none;">10,000,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="space-60"></div>
										<div class="row">
											<p style="padding-left: 0px;"><span style="font-weight: 600;">Collective Insurance</span> <span style="color: #a02226;">(Values Shown in Myanmar Currency)</span></p>
											<div class="benefit_table_div">
												<table class="benefit_table table table-bordered">
													<tbody>
														<tr class="table_title" valign="middle" style="border-top: none;text-align: center;">
															<td style="border-left: none;border-right: none;background-color: #fff;"></td>
															<td class="first" style="color: #666666;border-width: 1px;border-top-left-radius: 10px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;border-left: none;">Hospital cash Daily (Max 60days)</td>
															<td style="color: #666666;border-width: 1px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;width: 13%;">Death Benefit</td>
															<td style="color: #666666;border-width: 1px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;">Out-Patient Department (OPD)</td>
															<td style="color: #666666;border-width: 1px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;width: 13%;">Surgical cash</td>
															<td style="color: #666666;border-width: 1px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-top: none;">Miscarriage</td>
															<td class="last" style="color: #666666;border-width: 1px;border-top-right-radius: 10px;background-color: #ebebeb;font-weight: 600;padding: 20px;border-right: none;border-top: none;width: 13%;">Critical illness (6-60 age)</td>
														</tr>
														<tr style="text-align: center;background-color: #fff;border-top-right-radius: 10px;box-shadow: 0 0 17px 0px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%);">
															<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;width: 17%;">MediCare Classic</td>
															<td style="border-width: 1px;">50,000</td>
															<td style="border-width: 1px;">5,000,000</td>
															<td style="border-width: 1px;">UP to 50,000</td>
															<td style="border-width: 1px;">500,000</td>
															<td style="border-width: 1px;">300,000</td>
															<td class="last" style="border-width: 1px;border-top-right-radius: 10px;border-right: none;"></td>
														</tr>
														<tr style="text-align: center;background-color: #fff;">
															<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);">MediCare Classic<sup>+</sup></td>
															<td style="border-width: 1px;">50,000</td>
															<td style="border-width: 1px;">5,000,000</td>
															<td style="border-width: 1px;">UP to 50,000</td>
															<td style="border-width: 1px;">500,000</td>
															<td style="border-width: 1px;">300,000</td>
															<td class="last" style="border-width: 1px;border-right: none;box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);">5,000,000</td>
														</tr>
														<tr style="text-align: center;background-color: #fff;">
															<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%);">MediCare Premium</td>
															<td style="border-width: 1px;">100,000</td>
															<td style="border-width: 1px;">10,000,000,000</td>
															<td style="border-width: 1px;">UP to 100,000</td>
															<td style="border-width: 1px;">500,000</td>
															<td style="border-width: 1px;">300,000</td>
															<td class="last" style="border-width: 1px;border-right: none;box-shadow: 12px 13px 17px 0px rgb(149 149 149 / 15%);"></td>
														</tr>
														<tr style="text-align: center;background-color: #fff;border-bottom-right-radius: 10px;box-shadow: -12px 13px 17px 0px rgb(149 149 149 / 15%), 12px 13px 17px 0px rgb(149 149 149 / 15%);">
															<td class="first" style="border-width: 1px;font-weight: 600;padding-top: 20px;padding-bottom: 20px;">MediCare Premium<sup>+</sup></td>
															<td style="border-width: 1px;">100,000</td>
															<td style="border-width: 1px;">10,000,000,000</td>
															<td style="border-width: 1px;">UP to 100,000</td>
															<td style="border-width: 1px;">500,000</td>
															<td style="border-width: 1px;">300,000</td>
															<td class="last" style="border-width: 1px;border-bottom-right-radius: 10px;border-right: none;">10,000,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!-- <div class="space-40"></div> -->
										<!-- <div class="row">
											<div class="col-md-12">
												<p style="font-size: 18px;color: #000;font-weight: 600;margin-bottom: 10px;">Access to Insurance</p>
												<ul style="margin-left: 16px;color: #4e4e4e;">
													<li>Health insurance can be purchased by anyone between 6 to 60 years of age. If insured is between 6 to 18 years of age, the policy need to be purchased by a parent or guardian.</li>
													<li>If purchased over a unit (maximum benefit = Myanmar $4,000,000), or if the insurer is over 50 years of age, a health checkup is needed.</li>
												</ul>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane how-work fade" id="navs-pills-product-highlights" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row">
									<div class="col-md-12">
										<p style="font-size: 18px;color: #000;font-weight: 600;margin-bottom: 0;">Insurance Life Span</p>
										<p style="color: #4e4e4e;margin-bottom: 10px;padding-left: 0px;">The maximum insurance life span is up to a year and can be extended annually.</p>
									</div>
									<div class="space-40"></div>
									<div class="col-md-12">
										<p style="font-size: 18px;color: #000;font-weight: 600;margin-bottom: 10px;">Factors That Do Not Include Compensation</p>
										<ul style="margin-left: 16px;color: #4e4e4e;">
											<li>Existing Disease Before Insurance</li>
											<li>Pregnancy causes schizophrenia, childbirth, and mental illness</li>
											<li>Hospitalization for Health Checks</li>
											<li>Hospitalization and Surgery for Children</li>
											<li>Treatments for tooth exceptions to accidents</li>
											<li>Eye-related treatments exception to accidents</li>
											<li>Cosmetic surgeries buying hearing devices</li>
											<li>Pre-insurance Physical Disability Treatment</li>
											<li>Taking drugs</li>
											<li>Criminal offences</li>
											<li>Immunodeficiency Disease</li>
											<li>Injuries directly or indirectly caused by violence, riots, war and war</li>
											<li>Fraudulent Compensation</li>
											<li>Self-injury</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="space-40"></div> -->

			<div class="container faq_section" style="">
				<div class="row" style="padding: 25px 20px;background-color: #f5f5f7;border-radius: 6px;">
					<div class="col-md-9 col-xs-12 d-none d-sm-block">
						<p style="font-size: 18px;color: #2e2e2e;font-weight: 600;margin-bottom: 0;">Get in Touch!</p>
						<p style="color: #2e2e2e;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Making your future secure with us, find your nearest branch to apply in person.</p>
					</div>
					<div class="col-md-3 col-xs-12 text-right d-none d-sm-block" style="padding-top: 10px;padding-left: 0px;text-align: right;">
						<a href="#" target="_blank">
							<button class="btn read_more_btn">More Details</button>
						</a>
					</div>

					<div class="col-md-9 col-xs-12 text-center d-block d-sm-none">
						<p style="font-size: 18px;color: #2e2e2e;font-weight: 600;margin-bottom: 0;">Get in Touch!</p>
						<p style="color: #2e2e2e;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Making your future secure with us, find your nearest branch to apply in person.</p>
					</div>
					<div class="col-md-3 col-xs-12 text-center d-block d-sm-none" style="padding-top: 20px;padding-left: 0px;text-align: right;">
						<a href="#" target="_blank">
							<button class="btn read_more_btn">More Details</button>
						</a>
					</div>
				</div>

				<div class="space-40"></div>
				
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p style="font-size: 18px;color: #1d1d1f;font-weight: 600;margin-bottom: 10px;">Disclaimers</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This Health Insurance is underwritten by AYA Sompo Insurance Company Ltd and distributed by AYA Bank Co Ltd. It is not an obligation of, deposit in or guaranteed by AYA Bank. AYA Sompo Insurance Company Ltd reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AYA Sompo Insurance Company Ltd. 
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This webpage contains only general information and does not have regard to the specific investment objectives, financial situation and the particular needs of any specific person. It is not intended as an offer or recommendation to buy the product. A copy of the product summary can be obtained from AYA Bank branches. The contract of insurance is between the insurer and the insured and not between the Bank and the insured. Bank does not give any warranty, as to the accuracy and completeness of the policies. Bank does not accept any liability or losses attributable to your contract of Insurance. Participation by the Bank’s customers in the insurance products is purely on a voluntary basis and is not linked to availment of any other facility from the bank.
						</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This policy is protected under the Policy Owners’ Protection Scheme which is administered by Myanmar Insurance Corporation. For detail information on the types of benefits that are covered under the scheme as well as the limits of coverage, where applicable, please visit any of AYA Bank branches. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

<script type="text/javascript">
	document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
		if(!button.classList.contains('delete')) {
		button.classList.add('delete');
		setTimeout(() => button.classList.remove('delete'), 3200);
		}
		e.preventDefault();
	}));

	$("#radio-1").click(function(){
		$("#coverage_tab").click();
	});
	$("#radio-2").click(function(){
		$("#benefit_tab").click();
	});
	$("#radio-3").click(function(){
		$("#highlight_tab").click();
	});
</script>

@endsection('content')