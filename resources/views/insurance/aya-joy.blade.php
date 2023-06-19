@extends('layouts.frontend-app')

@section('title', 'AYA Joy Travel Insurance – AYA Bank')
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

			@include('layouts.banner', ['page'=>'aya_joy_insurance'])

			<div style="">
				<div class="d-none d-sm-block space-60"></div>

				<div class="container-tab">
					<div class="tabs">
						<input type="radio" id="radio-1" name="tabs" checked="">
						<label class="tab" for="radio-1">Coverage</label>
						<input type="radio" id="radio-2" name="tabs">
						<label class="tab" for="radio-2">Benefits</label>
						<input type="radio" id="radio-3" name="tabs">
						<label class="tab" for="radio-3" id="radio-3-label">Product Highlights</label>
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
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/aya-joy/accidental_death.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9" style="padding-left:0;">
												<p style="font-weight: 600;margin-bottom: 0;">Accidental Death</p>
												<p style="color: #4e4e4e;margin-bottom: 0;">Coverage for Accidental Death up to MMK 10,000,000</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/aya-joy/personal_liability.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9" style="padding-left:0;">
												<p style="font-weight: 600;margin-bottom: 0;">Personal Liability</p>
												<p style="color: #4e4e4e;margin-bottom: 0;">Indemnify up to MMK 100,000,000 for legal liability to third party due to your negligence</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/aya-joy/medical_hospital_other_expenses.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9" style="padding-left:0;">
												<p style="font-weight: 600;margin-bottom: 0;">Medical, Hospital & Other Expenses</p>
												<p style="color: #4e4e4e;margin-bottom: 0;">Coverage for medical, hospital and other expenses up to MMK 100,000,000</p>
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
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Hospital Allowance</p>
												<p style="color: #4e4e4e;">Total coverage amount for hospital allowance is up to MMK 3,000,000 with MMK 100,000 (Per Day)</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Baggage Delay</p>
												<p style="color: #4e4e4e;">MMK 50,000 for every 6 full consecutive hours if your check-in baggage is delayed upon arrival at the scheduled destination abroad</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Flight Delay</p>
												<p style="color: #4e4e4e;">MMK 50,000 for every 6 full consecutive hours delay and MMK 70,000 for every 6 full consecutive hours thereafter</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Loss to baggage and Personal Effects</p>
												<p style="color: #4e4e4e;">Maximum MMK 200,000 any one article or pair or set of articles</p>
											</div>
										</div>
									</div>
									<div class="space-40"></div>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Eligibility</p>
											</div>
											<div class="col-6">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Adult</p>
												<p style="color: #4e4e4e;">Aged below 70 years old and must be a Myanmar citizen, Myanmar Permanent Resident, or otherwise legally employed in Myanmar and/or their Spouse and Children</p>
											</div>
											<div class="col-6">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Children</p>
												<p style="color: #4e4e4e;">Aged between 30 days and 18 years old, or up to 23 years old if studying full-time in a recognized institution.</p>
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
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Variety Plan</p>
												<p style="color: #4e4e4e;">When choosing AYA Joy Travel Insurance, it is helpful to remember that all plans-Express Plan, Eco Plan, Individual Plan and Family Plan. Compare them to find the coverage that is the best fit for your needs and financial situation.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Hassle-Free Claims</p>
												<p style="color: #4e4e4e;">Considering a problem within a trip that may occur, AYA Joy Travel Insurance policy can come in handy to make the claim process smoother. Fast and reliable claims give you a sense of calm to focus on your recovery.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Quick Premium Payment</p>
												<p style="color: #4e4e4e;">Choosing from a range of options, you can now make online payment quickly and effortlessly. Pay your premium digitally, or make payments by cash at our physical locations and get your policy within one week. It is comfort, safety and available 24/7 services.</p>
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
												<p style="font-size: 20px;font-weight: 600;margin-bottom: 5px;">Premium Rating</p>
												<p style="font-size: 20px;font-weight: 600;margin-bottom: 5px;">Policy Term</p>
												<p>From a minimum of 1 day to a maximum of 31 consecutive days</p>
											</div>
											<div class="space-10"></div>
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;margin-bottom: 5px;">Exclusions</p>
												<ul style="list-style: number;">
													<li>Pre-existing Medical Conditions</li>
													<li>Suicide or attempted suicide, intentional self-injury</li>
													<li>By the effect or influence of alcohol or drugs</li>
													<li>Directly or indirectly by AIDS or ARC and HIV related diseases </li>
													<li>Pregnancy, childbirth (including surgical delivery), abortion, miscarriage and its related complications except miscarriage due to bodily injury as a direct result of an Accident.</li>
													<li>Travelling on, or against medical advice</li>
													<li>For the purpose of obtaining treatment and medical check-up.</li>
													<li>Physiological or psychosomatic disorders.</li>
													<li>Engaging in sports or games in a professional capacity </li>
													<li>Dangerous and adventure activities eg. racing, motor rallies and competitions, mountaineering, rock climbing, and hiking/trekking, pot-holing, parachuting, sky diving, high diving and hot air balloon.</li>
													<li>Related to any illegal activities.</li>
													<li>Loss or damage to hired or leased equipment; testing of any kind of conveyance.</li>
													<li>Employment on oversea in connection with any trade, employment or profession.</li>
													<li>War, invasion, act of foreign enemy hostilities, civil war, rebellion, revolution, insurrection, strike, riot or civil commotion, terrorist</li>
													<li>Ionizing radiations or contamination by radioactivity, nuclear component </li>
													<li>Consequential loss or damage of any kind</li>
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
							This AYA Joy Travel Insurance is underwritten by AYA SOMPO Insurance Company Ltd and distributed by AYA Bank Co Ltd. It is not an obligation of, deposit in or guaranteed by AYA Bank. AYA SOMPO Insurance Company Ltd reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AYA SOMPO Insurance Company Ltd.
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
@include('layouts.footer', ['page'=>'personalbanking'])

<script type="text/javascript">
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