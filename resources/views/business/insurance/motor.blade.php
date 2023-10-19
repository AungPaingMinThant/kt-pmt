@extends('layouts.frontend-app')

@section('title', 'Motor Insurance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/slide_tab.css') }}" />
<link rel="stylesheet" href="{{ url('/css/pb_insurance.css') }}">
<link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">
<style type="text/css">
	.tab_data_row > .col-md-6 {
		width: 49%;
	}
	.tab_data_row > .col-md-6:not(:nth-child(even)) {
		margin-right: 20px;
	}
	@media only screen and (max-width: 576px){
		.tab_data_row > .col-md-6 {
			width: 100%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_motor_insurance'])

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
								<div class="row tab_data_row">
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-2">
												<img src="{{ url('/images/insurance/motor/loss_damage_vehicle.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-10">
												<p style="font-weight: 600;">Loss or Damage to vehicle </p>
												<p style="color: #4e4e4e;">Coverage for loss or damage to own vehicle due to accident, fire, and/or lightning (up to the maximum amount of total coverage) </p>
											</div>
										</div>
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-2">
												<img src="{{ url('/images/insurance/motor/coverage_to_death_injury.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-10">
												<p style="font-weight: 600;">Death and Injury Benefits</p>
												<p style="color: #4e4e4e;">Coverage for death and disability up to MMK 3 million and payout according to scale of injury prescribed. </p>
											</div>
										</div>
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-2">
												<img src="{{ url('/images/insurance/motor/windshield_protection.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-10">
												<p style="font-weight: 600;">Windscreen Coverage</p>
												<p style="color: #4e4e4e;">Coverage for windscreen up to MMK 3 million in case of damage or loss</p>
											</div>
										</div>
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-2">
												<img src="{{ url('/images/insurance/motor/harm_to_others.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-10">
												<p style="font-weight: 600;">Liabilities for Third Parties</p>
												<p style="color: #4e4e4e;">Compensation liability for another person’s death, bodily injury, property loss and damage (up to MMK 50 million maximum coverage amount).</p>
											</div>
										</div>
									</div>
								</div>
								<div class="space-40"></div>
								<div class="row ">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 20px;color: #A5000B;font-weight: 600;">Additional Coverage</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Strike, Riot, Civil Commotion</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage due to strike or riot and/or civil commotions</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">War Risk</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage due to events such as war, mutiny, rebellion, revolution, military, or usurped power or by any other fighting acts</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Nil Excess</p>
												<p style="color: #4e4e4e;">Coverage for any excess charges in case of damage or loss due to accidents</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Theft</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage to vehicle due to theft</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Additional Excess</p>
												<p style="color: #4e4e4e;">Coverage to enjoy premium discount by contributing additional excess charges. </p>
											</div>
											<div class="space-10"></div>
											<div class="row">
												<div class="table-responsive text-nowrap sh_table_div" style="width: auto;">
													<table class="table table-borderless sh_table" style="width: 550px;">
														<thead>
															<tr valign="middle">
																<td class="f-white py-3 sh_first_td" width="250">Additional Excess Amount</td>
																<td class="f-white py-3 sh_first_td" width="250">Premium Discount</td>
															</tr>
														</thead>
														<tbody class="table-border-bottom-0" style="background-color: #fff;padding-right: 70px;">
														</tbody>
														<tbody class="table-border-bottom-0" style="background-color: #fff;padding-right: 70px;">
															<tr>
																<td class="sh_first_td b-t-l-radius-10 ">MMK 200,000</td>
																<td class="sh_first_td b-t-r-radius-10 ">MMK 25,000</td>
																
															</tr>
															<tr>
																<td class="sh_first_td">MMK 300,000</td>
																<td class="sh_first_td">MMK 35,000</td>
															</tr>
															<tr>
																<td class="sh_first_td">MMK 500,000</td>
																<td class="sh_first_td">MMK 60,000
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="space-20"></div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Acts of God</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage due to flood, windstorm, typhoon, hurricane, volcanic eruption, earthquake, landslide, landslip, or subsidence.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Betterment</p>
												<p style="color: #4e4e4e;">Coverage for repairing or replacing the damaged parts of vehicle with better parts</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane set-text-alert fade" id="navs-pills-top-benefits" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row ">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Emergency Towing Assistance</p>
												<p style="color: #4e4e4e;">Emergency towing services following an accident and coverage up to MMK 300,000</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Fleet Discount</p>
												<p style="color: #4e4e4e;">Up to 10% of fleet discount will be offered under the insured’s name.
												</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Legal Expenses</p>
												<p style="color: #4e4e4e;">Coverage for legal expenses in the event of motor prosecution up to MMK 500,000
												</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">No Claim Bonus (NCB)</p>
												<p style="color: #4e4e4e;">No Claim Bonus up to 40% if claims are not being made 3 years and above.
												</p>
											</div>
											<div class="space-10"></div>
											<div class="row">
												<div class="table-responsive text-nowrap sh_table_div" style="width: auto;">
													<table class="table table-borderless sh_table" style="width: 750px;">
														<thead>
															<tr valign="middle">
																<td class="f-white py-3 sh_first_td" width="150">Period</td>
																<td class="f-white py-3 sh_first_td" width="110">Second Year</td>
																<td class="f-white py-3 sh_first_td" width="110">Third Year</td>
																<td class="f-white py-3 sh_first_td" width="180">Fourth Year and Above</td>
															</tr>
														</thead>
														<tbody class="table-border-bottom-0" style="background-color: #fff;padding-right: 70px;">
														</tbody>
														<tbody class="table-border-bottom-0" style="background-color: #fff;padding-right: 70px;">
															<tr>
																<td class="sh_first_td b-t-l-radius-10 ">Private Vehicle</td>
																<td class="sh_first_td">25%</td>
																<td class="sh_first_td">30%</td>
																<td class="sh_first_td b-t-r-radius-10 ">40%</td>
																
															</tr>
															<tr>
																<td class="sh_first_td">Commercial Vehicle</td>
																<td class="sh_first_td">15%</td>
																<td class="sh_first_td">20%</td>
																<td class="sh_first_td">25%</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="space-20"></div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">24-Hour Emergency Claim Service</p>
												<p style="color: #4e4e4e;">Contact for services from our 24/7 support team in the event of any arising emergency and/or claim.  </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane how-work fade" id="navs-pills-product-highlights" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row ">
									<div class="col-md-1"></div>
									<div class="col-md-11">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Maximum policy term 1 year (renewable on a yearly basis)</p>
												<ul>
													<li>Minimum policy terms up to 3, 6, and 9 months are applicable.</li>
												</ul>
											</div>
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Sum Insured (Car Value)</p>
												<ul>
													<li>Market value of the vehicle</li>
												</ul>
											</div>
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Premium Rating</p>
												<p>0.8% to 2% on sum insured (car value)<br>Subject to – </p>
												<ul>
													<li>Value of car</li>
													<li>Use of the car</li>
													<li>Engine C.C</li>
												</ul>
											</div>
											<div class="space-40"></div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12">
														<p style="font-size: 20px;font-weight: 600;">Eligibility</p>
													</div>
													<div class="col-1">
														<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
													</div>
													<div class="col-11 list_margin">
														<p style="color: #4e4e4e;">Any legally registered motor vehicles, or fleets of vehicles, of private or public use.</p>
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
			</div>

			<div class="container faq_section" style="">
				<!-- <div class="row" style="padding: 25px 20px;background-color: #f5f5f7;border-radius: 6px;">
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

				<div class="space-40"></div> -->
				
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p class="disclaimer_title">Disclaimers</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This Comprehensive Motor Insurance is underwritten by AYA SOMPO Insurance Company Ltd and distributed by AYA Bank PCL. It is not an obligation of, deposit in or guaranteed by AYA Bank. AYA SOMPO Insurance Company Ltd reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AYA SOMPO Insurance Company Ltd.
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This webpage contains only general information and does not have regard to the specific investment objectives, financial situation and the particular needs of any specific person. It is not intended as an offer or recommendation to buy the product. A copy of the product summary can be obtained from AYA Bank branches. The contract of insurance is between the insurer and the insured and not between the Bank and the insured. Bank does not give any warranty, as to the accuracy and completeness of the policies. Bank does not accept any liability or losses attributable to your contract of Insurance. Participation by the Bank’s customers in the insurance products is purely on a voluntary basis and is not linked to availment of any other facility from the bank.
						</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This policy is protected under the Policy Owners’ Protection Scheme which is administered by Myanmar Insurance Association. For detail information on the types of benefits that are covered under the scheme as well as the limits of coverage, where applicable, please visit any of AYA Bank branches.
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