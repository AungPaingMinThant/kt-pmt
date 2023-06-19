@extends('layouts.frontend-app')

@section('title', 'Industrial All Risk Insurance (IAR) Insurance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/slide_tab.css') }}" />
<link rel="stylesheet" href="{{ url('/css/business/insurance.css') }}">
<style type="text/css">
	.tab_data_row > .col-md-6 {
		width: 48%;
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

			@include('layouts.banner', ['page'=>'bu_IAR_insurance'])

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
								<div class="row tab_data_row IAR_data_row" style="column-gap: 20px;">
									<div class="col-md-3 benefit_feature_box" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/air_craft_damage.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Aircraft Damage</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/impact_damage.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Impact Damage</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/subsidence_landslide.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Susidence and Landslide</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/explosion.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Explosion</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/impact_vehicles.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Impact of Vehicles</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box" style="padding: 10px 10px 10px 20px;margin-bottom: 35px;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/riot_strike.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Riot Strike & Malicious Damage</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/wind_storm.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Windstorm</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/earthquake_volcanic.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Earthquake Volcanic Eruption</p>
										</div>
									</div>

									<div class="col-md-3 benefit_feature_box coverage_div_2" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;display: none;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/fire_lightning_domesticgas_explosion.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Fire, Lighting, Domestic Gas, Explosion</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box coverage_div_2" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;display: none;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/storm_tempest.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Storm, Tempest</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box coverage_div_2" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;display: none;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/pirates_thieves_non_delivery.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Burglary Theft</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box coverage_div_2" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;display: none;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/business_interruption.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Business Interruption</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box coverage_div_2" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;display: none;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/accidental_bodily_injury.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Accidental Damage</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box coverage_div_2" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;display: none;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/flood_inundation.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Flood Inundation</p>
										</div>
									</div>
									<div class="col-md-3 benefit_feature_box coverage_div_2" style="padding: 10px 20px 10px 20px;margin-bottom: 35px;display: none;">
										<div class="row">
											<img src="{{ url('/images/business/insurance/spontaneous_combustion.png') }}" class="img-fluid IAR_coverage_icon">
											<p class="fw-semibold">Spontaneous Combustion</p>
										</div>
									</div>

									<div class="load_more_div">
										<div class="col-md-12 text-center">
											<button class="btn load_more_btn" id="load_more_btn_1">Load more <i class="menu-icon tf-icons bx bx-chevron-down"></i> </button>
										</div>
									</div>

									<div class="hide_div" style="display: none;">
										<div class="col-md-12 text-center">
											<button class="btn load_more_btn" id="hide_btn_1">Show Less <i class="menu-icon tf-icons bx bx-chevron-up"></i> </button>
										</div>
									</div>
								</div>
								<div class="space-40"></div>
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<p class="theme_text_color fw-semibold" style="font-size: 20px;">Eligibility</p>
												<p class="mb-0">Any person who has insurable interest (i.e., who owns a property or who has a legal obligation over safety of a property).</p>
												<p>For coverage of all items in the premises, see below:</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p>Building</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p>Machinery</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p>Furniture, Fixture and Fitting</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p>Stocks – Finished Goods, Work in Process, and Raw Materials</p>
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
												<p>A wider insurance coverage than standard Fire Insurance. All perils are covered unless it is excluded in the policy terms.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p>Flexible in choosing preferred covers with favorable premium rate compared to standard Fire Insurance.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p>Flexible Terms & Conditions (adjusting deductible, sub limits and premium)</p>
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
												<p style="font-size: 20px;font-weight: 600;">Premium Rating</p>
												<p>Subject to following risk factors: <span class="theme_text_color fw-semibold">COPEM</span></p>												<ul>
													<li><span class="theme_text_color fw-semibold">C</span> – Construction (Type of Construction, Total Area Sq m/Sq Ft of Construction)</li>
													<li><span class="theme_text_color fw-semibold">O</span> – Occupancy (Occupancy & Type of Items Stored at the Warehouses)</li>
													<li><span class="theme_text_color fw-semibold">P</span> – Protection (Fire Extinguishing Arrangement)</li>
													<li><span class="theme_text_color fw-semibold">E</span> – External Exposure (Location of the Risk)</li>
													<li><span class="theme_text_color fw-semibold">M</span> – Management (Maintenance plan for the building or FEA)</li>
												</ul>
											</div>
											<div class="space-20"></div>
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Policy Term</p>
												<p>Maximum policy term 1 year (Renewable on a yearly basis)</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container faq_section">
				<!-- <div class="row" style="padding: 25px 20px;background-color: #f5f5f7;border-radius: 6px;">
					<div class="col-md-9 col-xs-12 d-none d-sm-block">
						<p style="font-size: 18px;color: #2e2e2e;font-weight: 600;margin-bottom: 0;">Get in Touch!</p>
						<p style="color: #2e2e2e;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Making your future secure with us, find your nearest branch to apply in person.</p>
					</div>
					<div class="col-md-3 col-xs-12 text-right d-none d-sm-block" style="padding-top: 10px;padding-left: 0px;text-align: right;">
						<a href="#" target="_blank">
							<button class="btn read_more_btn">Find Branches</button>
						</a>
					</div>

					<div class="col-md-9 col-xs-12 text-center d-block d-sm-none">
						<p style="font-size: 18px;color: #2e2e2e;font-weight: 600;margin-bottom: 0;">Get in Touch!</p>
						<p style="color: #2e2e2e;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Making your future secure with us, find your nearest branch to apply in person.</p>
					</div>
					<div class="col-md-3 col-xs-12 text-center d-block d-sm-none" style="padding-top: 20px;padding-left: 0px;text-align: right;">
						<a href="#" target="_blank">
							<button class="btn read_more_btn">Find Branches</button>
						</a>
					</div>
				</div> -->

				<div class="space-40"></div>
				
				<div class="row px-0">
					<p class="disclaimer_title">Disclaimers</p>
					<p style="color: #777777;font-weight: 400;font-size: 12px;">
						This Industrial All Risk Insurance (IAR) is underwritten by AYA SOMPO Insurance Company Ltd and distributed by AYA Bank PCL. It is not an obligation of, deposit in or guaranteed by AYA Bank. AYA SOMPO Insurance Company Ltd reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AYA SOMPO Insurance Company Ltd.
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
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

<script type="text/javascript">
	$("#load_more_btn_1").click(function() {
		$(".coverage_div_2").slideToggle('show');
		$(".coverage_div_2").css('display','contents !important');
		$("#load_more_btn_1").addClass('d-none');
		$("#hide_btn_1").removeClass('d-none');
		$(".hide_div").css('display','none');
		$(".hide_div").slideToggle('show');
	});

	$("#hide_btn_1").click(function() {
		$(".coverage_div_2").slideToggle('hide');
		$("#load_more_btn_1").removeClass('d-none');
		$("#hide_btn_1").addClass('d-none');
	});
	
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