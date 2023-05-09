@extends('layouts.frontend-app')

@section('title', 'Domestic Marine Cargo Insurance – AYA Bank')
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

			@include('layouts.banner', ['page'=>'bu_domestic_marine_cargo_insurance'])

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
								<div class="row tab_data_row" style="column-gap: 30px;">
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/business/insurance/fire_explosion.png') }}" class="img-fluid coverage_icon" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;">Fire & Explosion</p>
												<p class="mb-0 coverage_detail" style="color: #4e4e4e;">Coverage loss or damage caused by fire or explosion</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/business/insurance/overtruning_derailment.png') }}" class="img-fluid coverage_icon" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;">Overturning & Derailment</p>
												<p class="mb-0 coverage_detail" style="color: #4e4e4e;">Coverage for overturning or derailment of land conveyance</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/business/insurance/discharge_cargo.png') }}" class="img-fluid coverage_icon" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;">Discharge of Cargo</p>
												<p class="mb-0 coverage_detail" style="color: #4e4e4e;">Coverage for discharge of cargo at a port of distress</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/business/insurance/stranded_sunk_grounded.png') }}" class="img-fluid coverage_icon" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;">Stranded, sunk, grounded or capsized</p>
												<p class="mb-0 coverage_detail" style="color: #4e4e4e;">Coverage for vessel or craft being stranded, sunk, grounded or capsized</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/business/insurance/collision_with_external_objects.png') }}" class="img-fluid coverage_icon" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9">
												<p style="font-weight: 600;">Collision with External Object</p>
												<p class="mb-0 coverage_detail" style="color: #4e4e4e;">Coverage for collision or contact of vessel/craft or conveyance with any external object other than water</p>
											</div>
										</div>
									</div>
								</div>
								<div class="space-40"></div>
								<div class="row ">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<p class="theme_text_color fw-semibold" style="font-size: 20px;">Additional Coverage</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Port of Arrival Cover</p>
												<p style="color: #4e4e4e;">Coverage for 30 days before departure and 30 days before unloading at the port of arrival</p>
											</div>
										</div>
									</div>
									<div class="space-40"></div>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<p class="theme_text_color fw-semibold" style="font-size: 20px;">Eligibility</p>
												<p style="color: #4e4e4e;">Any person who owns a property or who has a legal obligation over safety of a property e.g., Owners of goods traded, Business owners, Manufacturers and Distributors, etc.</p>
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
											<div class="col-md-12 text-center">
												<p>Below illustration shows how to provide protection for insured goods along the route of transportation.</p>
												<img src="{{ url('/images/business/insurance/domestic-marine-cargo/domestic-marine-cargo-benefit.jpg') }}" class="img-fluid">
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
												<p>Calculated based on sum insured (cargo value)</p>
												<p>Subject to:</p>
												<ul>
													<li>Type of Cargo</li>
													<li>Type of Voyage</li>
													<li>Season of the Trip</li>
												</ul>
											</div>
											<div class="space-20"></div>
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Policy Term</p>
												<p>Coverage is applicable for single voyage.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="space-40"></div> -->
			<!-- more_detail_section -->
			<div class="container faq_section">
				<div class="row" style="padding: 25px 20px;background-color: #f5f5f7;border-radius: 6px;">
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
				</div>

				<div class="space-40"></div>
				
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p class="disclaimer_title">Disclaimers</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This Domestic Marine Cargo Insurance is underwritten by AYA SOMPO Insurance Company Ltd and distributed by AYA Bank PCL. It is not an obligation of, deposit in or guaranteed by AYA Bank. AYA SOMPO Insurance Company Ltd reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AYA SOMPO Insurance Company Ltd.
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