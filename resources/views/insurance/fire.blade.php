@extends('layouts.frontend-app')

@section('title', 'Fire Insurance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/slide_tab.css') }}" />
<link rel="stylesheet" href="{{ url('/css/pb_insurance.css') }}">
<style type="text/css">
	.tab_data_row > .col-md-4 {
		width: 32%;
	}
	.tab_data_row > .col-md-4:not(:nth-child(3)) {
		margin-right: 20px;
	}
	@media (max-width: 1300px) and (min-width: 1000px) {
		.tab_data_row > .col-md-4 {
			width: 49%;
		}
		.tab_data_row > .col-md-4:not(:nth-child(even)) {
			margin-right: 20px;
		}
		.tab_data_row > .col-md-4:not(:nth-child(odd)) {
			margin-right: 0px;
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

			@include('layouts.banner', ['page'=>'fire_insurance'])

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
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/fire/Fire_Posse_Fire_icon.png') }}" class="img-fluid">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;margin-bottom: 5px;">Fire / Accidental Fire</p>
												<p style="color: #4e4e4e;">Coverage for total and partial loss or damage caused by fire and accidental fire.</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/fire/Household_gas_leak_icon.png') }}" class="img-fluid">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;margin-bottom: 5px">Explosions Coverage</p>
												<p style="color: #4e4e4e;">Coverage for total or partial loss and damage caused by domestic gas explosion.</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/fire/Infectious_Fire_icon.png') }}" class="img-fluid">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;margin-bottom: 5px">Contagious Fire</p>
												<p style="color: #4e4e4e;">Coverage for total and partial loss or damage caused by contagious fire.</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px 20px 0px 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/fire/Thunderstorms_and_Fire_Loss_icon.png') }}" class="img-fluid">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;margin-bottom: 5px">Lightning Strike</p>
												<p style="color: #4e4e4e;">Coverage for total and partial loss or damage caused by lightning.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="space-40"></div>
								<div class="row ">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 20px;color: #a02226;font-weight: 600;">Additional Coverage</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Aircraft Damage</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage and fire caused by aircraft and other aerial devices.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Impact Damage</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage caused to property from the impact of vehicles (excluding own vehicle)</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Subsidence and Landslide</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage caused by subsidence and/or heave of the site on which the building/s stand.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Storm, Tempest</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage and fire caused by Hurricane, Cyclone, Typhoon and Windstorm</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Explosion</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage and fire caused by an explosion.</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 20px;color: #a02226;font-weight: 600;">&nbsp;</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Burglary</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage caused by theft following forcible and violent entry.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Earthquake and volcanic eruption</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage caused by fire following earthquake and volcanic eruptions.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Flood and Inundation</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage caused by fire following flood and inundation.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Spontaneous Combustion</p>
												<p style="color: #4e4e4e;">Coverage for loss or damage to the property insured by fire only caused by its own spontaneous fermentation, heating, or combustion.</p>
											</div>
										</div>
									</div>
									<div class="space-40"></div>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 18px;color: #000;font-weight: 600;">Eligibility</p>
												<p style="color: #4e4e4e;">Any person who has insurable interest (i.e., who owns a property or who has a legal obligation over safety of a property).<br>For coverage of all items in the premises, </p>
											</div>
											<div class="col-11">												
												<p style="color: #4e4e4e;width: 80%;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>Building
												</p>
												<p style="color: #4e4e4e;width: 80%;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>Machinery
												</p>
												<p style="color: #4e4e4e;width: 80%;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>Furniture, Fixture and Fitting
												</p>
												<p style="color: #4e4e4e;width: 80%;">
													<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>Stocks
												</p>
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
									<div class="col-md-5">
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">No Claim Bonus</p>
												<p style="color: #4e4e4e;">No Claim Bonus of up to 25% of the total premium will be offered based on less premium amount.</p>
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">24-Hour Emergency Claim Service</p>
												<p style="color: #4e4e4e;">Contact for services from our 24/7 support team in the event of any arising emergency and/or claim.</p>
											</div>
										</div>
									</div>
									<div class="col-md-1"></div>
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
												<p style="font-size: 20px;font-weight: 600;">Premium Rating</p>
												<p>0.13% to 3.5% on sum insured (Property Value)<br>Subject to – </p>
												<ul>
													<li>Construction type and building condition.</li>
													<li>Situation and/or location of the building</li>
													<li>Occupancy of the building</li>
												</ul>
											</div>

											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Policy Term</p>
												<ul>
													<li>Maximum policy term 1 year (renewable on a yearly basis)</li>
													<li>Minimum policy term up to 10 days</li>
												</ul>
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

				<div class="space-30"></div>
				
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p class="disclaimer_title">Disclaimers</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This Fire Insurance is underwritten by AYA SOMPO Insurance Company Ltd and distributed by AYA Bank Co Ltd. It is not an obligation of, deposit in or guaranteed by AYA Bank. AYA SOMPO Insurance Company Ltd reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AYA SOMPO Insurance Company Ltd.
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