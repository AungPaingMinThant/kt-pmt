@extends('layouts.frontend-app')

@section('title', 'Short Term Endownment Life Insurance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/slide_tab.css') }}" />
<link rel="stylesheet" href="{{ url('/css/pb_insurance.css') }}">
<style type="text/css">
	.glider, .tab {
		width: 300px;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'life_short_term_insurance'])

			<div style="">
				<div class="d-none d-sm-block space-60"></div>

				<div class="container-tab">
					<div class="tabs">
						<input type="radio" id="radio-1" name="tabs" checked="">
						<label class="tab" for="radio-1">Key Policy Specifications</label>
						<input type="radio" id="radio-2" name="tabs">
						<label class="tab" for="radio-2">Key Policy Benefit</label>
						<span class="glider"></span>
					</div>
				</div>
				<div class="space-80"></div>

				<div class="nav-align-top">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;display: none;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" id="key_spec_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-key_spec" aria-controls="navs-pills-top-key_spec" aria-selected="true" >
								Key Policy Specifications
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="key_benefit_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-key-benefit" aria-controls="navs-pills-top-key-benefit" aria-selected="false" >
								Key Policy Benefit
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;">
						<div class="tab-pane fade show active" id="navs-pills-top-key_spec" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row">
									<div class="col-md-6">
										<p style="color: #aa004f;font-weight: 600;margin-bottom: 5px;">Insurable Age</p>
										<p>10 Years to 60 Years old</p>
									</div>
									<div class="col-md-6">
										<p style="color: #aa004f;font-weight: 600;margin-bottom: 5px;">Policy Term</p>
										<p>5 Years, 7 Years and 10 Years</p>
									</div>
									<div class="col-md-6">
										<p style="color: #aa004f;font-weight: 600;margin-bottom: 5px;">Sum Assured</p>
										<p>Starting from MMK 1 million</p>
									</div>
									<div class="col-md-6">
										<p style="color: #aa004f;font-weight: 600;margin-bottom: 5px;">Premium Rate</p>
										<p>Premium rates are calculate based on insured age, policy terms and sum assured amount.</p>
									</div>
								</div>
								<div class="space-40"></div>
							</div>
						</div>
						<div class="tab-pane set-text-alert fade" id="navs-pills-top-key-benefit" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row ">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Death Benefit</p>
												<p style="color: #4e4e4e;">Sum assured paid to the beneficiary in the event of unfortunate death of insured</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Total Permanent Disability Benefit</p>
												<p style="color: #4e4e4e;">Sum assured paid to insured in the event of permanent disability</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Maturity Benefit</p>
												<p style="color: #4e4e4e;">Sum Assured paid out at the end of policy term</p>
											</div>
										</div>
									</div>
								</div>
								<div class="space-40"></div>
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

				<div class="space-40"></div>
				
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p class="disclaimer_title">Disclaimers</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							Short-Term Endowment Life Insurance is underwritten by AIA Myanmar and distributed by AYA Bank Co Ltd. It is not an obligation of, deposit in or guaranteed by AYA Bank. AIA Myanmar reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AIA Myanmar.
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
		$("#key_spec_tab").click();
	});
	$("#radio-2").click(function(){
		$("#key_benefit_tab").click();
	});
</script>

@endsection('content')