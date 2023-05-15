@extends('layouts.frontend-app')

@section('title', 'Contractor’s All Risk & Erection All Risk (CAR & EAR) Insurance – AYA Bank')
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

			@include('layouts.banner', ['page'=>'bu_car_ear_insurance'])

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
								<div class="row">
									<p class="mb-30">Provide insurance coverage for any damage that occurs during the construction process.</p>
									<p class="fw-semibold mb-10">Material Damage:</p>
									<p>Cover almost any sudden and unexpected material loss or damage occurring to the property insured on the site.</p>
								</div>
								<div class="space-30"></div>
								<div class="row">
									<div class="col-md-12">
										<p class="theme_text_color fw-semibold" style="font-size: 20px;">Additional Coverage</p>
										<p class="fw-semibold mb-10">Third Party Liability:</p>
										<p>When the insured becomes legally liable to pay as damages consequent upon</p>
									</div>
								</div>
								<div class="space-30"></div>
								<div class="row tab_data_row" style="column-gap: 30px;">
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<table>
											<tr>
												<td class="car_ear_coverage_icon_td">
													<img src="{{ url('/images/business/insurance/accidental_bodily_injury.png') }}" class="img-fluid car_ear_coverage_icon">
												</td>
												<td>
													<p class="mb-0 coverage_detail">accidental bodily injury to or illness of third parties (whether fatal or not)</p>
												</td>
											</tr>
										</table>
									</div>
									<div class="col-md-6 benefit_feature_box" style="padding: 20px;margin-bottom: 35px;">
										<table>
											<tr>
												<td class="car_ear_coverage_icon_td">
													<img src="{{ url('/images/business/insurance/accidental_loss_damage.png') }}" class="img-fluid car_ear_coverage_icon">
												</td>
												<td>
													<p class="mb-0 coverage_detail">accidental loss of or damage to property belonging to third parties</p>
												</td>
											</tr>
										</table>
									</div>
									<div class="col-md-12">
										<ul class="third_party_liabilities">
											<li>Occurring in direct connection with the construction or erection of the items insured and</li>
											<li>Happening on or in the immediate vicinity of the site</li>
											<li>during the Period of Cover</li>
										</ul>
									</div>
								</div>

								<div class="space-40"></div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<p class="theme_text_color fw-semibold" style="font-size: 20px;">Eligibility</p>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 list_margin">
											<p>Principle, Owner, or Employer</p>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 list_margin">
											<p>Contractor</p>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 list_margin">
											<p>Sub-contractors</p>
										</div>
										<div class="col-1">
											<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
										</div>
										<div class="col-11 list_margin">
											<p>Consultant, Engineer</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane set-text-alert fade" id="navs-pills-top-benefits" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row ">
									<div class="col-md-6">
										<p class="fw-semibold theme_text_color mb-10" style="font-size: 15px;">All Contractors Insurance (CAR)</p>
										<p>Covers the risks during</p>
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 car_ear_benefit_list_margin">
												<p>Construction works of buildings such as office, factory, shopping mall, dwelling use.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 car_ear_benefit_list_margin">
												<p>Construction works of civil engineering such as construction of road, railway, quay, tunnel, dam, floodgate, airport, underground structures, plaza.</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<p class="fw-semibold theme_text_color" style="font-size: 15px;">Complete Installation Insurance (EAR)</p>
										<p>Covers the risk during;</p>
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 car_ear_benefit_list_margin">
												<p>Installation or various and/or erection works of various infrastructures.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 car_ear_benefit_list_margin">
												<p>Construction works of plants, factory, etc.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 car_ear_benefit_list_margin">
												<p>Erection works of superstructures of bridges, steel towers, etc.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane how-work fade" id="navs-pills-product-highlights" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container">
								<div class="row ">
									<div class="col-md-1"></div>
									<div class="col-md-11">
										<div class="row tab_data_row" style="column-gap: 30px;">
											<div class="col-md-12">
												<p class="fw-semibold" style="font-size: 20px;">Premium Rating</p>
												<p>Based on Total Contract Value (TCV) upon completion which includes:</p>
											</div>

											<div class="col-md-5 prod_highlight_1 benefit_feature_box">
												<p class="fw-semibold theme_text_color">I. Engineering Costs</p>
												<p class="mb-0">Cost of goods or works of suppliers (i.e., material cost) including:</p>
												<p class="mb-0">Tax, custom duties, Insurance cost, transportation cost, Cost of construction/ erection (i.e., labor cost), Various other costs (e.g., commission)</p>
											</div>

											<div class="col-md-5 prod_highlight_1 benefit_feature_box">
												<p class="fw-semibold theme_text_color">II.Service Equipment Supplied by the Principal</p>
												<p class="mb-0">Construction/Erection Period Works Period<br>Commences</p>
												<ul style="margin-left: 40px;">
													<li>Directly upon commencement of work or</li>
													<li>At the time after the unloading of subject matter of insurance from the conveyance on the site</li>
												</ul>
											</div>

											<div class="space-40"></div>
											
											<div class="col-md-12">
												<p class="fw-semibold" style="font-size: 20px;">Expires</p>
												<p>At the time when the works are taken over by the principal or put into service or the date specified in the schedule.</p>
											</div>

											<div class="space-30"></div>
											
											<div class="col-md-12">
												<p class="fw-semibold" style="font-size: 20px;">Policy Term</p>
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
							This Contractor’s All Risk & Erection All Risk is underwritten by AYA SOMPO Insurance Company Ltd and distributed by AYA Bank PCL. It is not an obligation of, deposit in or guaranteed by AYA Bank. AYA SOMPO Insurance Company Ltd reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AYA SOMPO Insurance Company Ltd.
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