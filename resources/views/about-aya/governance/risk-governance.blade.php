@extends('layouts.frontend-app')

@section('title', 'Risk Governance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/risk-management.css') }}">
<style type="text/css">
	
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'risk_governance'])

			<div class="container risk_container">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-8">
						<h4 class="fw-bold">Risk Governance</h4>
						<div class="space-20"></div>
						<div class="row text-center">
							<p class="fw-semibold" style="font-size: 18px;">Reporting lines of Risk Management Function</p>
							<img src="{{ url('/images/about-aya/risk-management/risk_governane_chart.webp') }}" class="img-fluid">
						</div>

						<div class="space-40"></div>

						<div class="accordion import-financing-accord" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="padding: 10px 0px 10px 20px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Margin Financing (Letter of Credit)
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="col-md-12 margin-financing-letter-of-credit">
											<p class="margin_financing_tagline">Enlarge your investment power with our LC Margin Financing</p>
										</div>
										<div class="space-30"></div>
										<p>We strategically provide financing for importers to cover their credit risk on a temporary basis. Through this type of collateral, we allow importers to expand investment by leveraging their assets. The LC Margin Financing product is where LC is issued for less than cash margin collateralized for your import business.</p>
										<div class="space-20"></div>
										<p class="fw-semibold" style="font-size: 17px;">Features and Benefits</p>

										<table class="table table-borderless" cellspacing="0">
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/convenient-line-of-credit-for-issuing-letter-of-credit.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p>A convenient line of credit for issuing letter of credit</p>
												</td>
											</tr>
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/leverage-the-value-of-assets.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p class="w-80">Able to leverage the value of assets you already own to increase the size of your working capital</p>
												</td>
											</tr>
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/flexible-repayment-and-on-your-own-schedule.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p class="w-80">Flexible repayment and on your own schedule as long as your outstanding debt is within margin maintenance requirement</p>
												</td>
											</tr>
										</table>

										<div class="space-20"></div>
										<p class="fw-semibold mb-30" style="font-size: 17px;">Eligibility</p>
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p class="margin_financing_eligibility mt-minus-5">Finance for marketable or non-perishable goods</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p class="margin_financing_eligibility mt-minus-5">Goods must be not subject to price volatility</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p class="margin_financing_eligibility mt-minus-5">Importers buying on sight or credit terms are required to use LC as a settlement method for sales agreements</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingTwo">
									<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="padding: 10px 0px 10px 20px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Trust Receipt
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="col-md-12 trust-receipt">
											<p class="trust_receipt_tagline">Invest more in working capital to achieve tangible profits</p>
										</div>
										<div class="space-30"></div>
										<p>We provide advances for settlement of bills drawn by the buyer for the goods purchased under letter of credit. A credit trade line is required before utilizing the facility.  Through the trust receipt, importers can release the goods against their undertaking to sell and the proceeds can be used to pay off the loan. <span style="font-size: 13px;">Importers can enjoy the longer tenor which granted by AYA (Repayment at TR’s maturity date)</span></p>
										<div class="space-20"></div>
										<p class="fw-semibold" style="font-size: 17px;">Features and Benefits</p>

										<table class="table table-borderless" cellspacing="0">
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/trust_receipt_benefit_1.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p>Help with liquidity by financing customer’s international payables, hence increasing confidence between importer and seller</p>
												</td>
											</tr>
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/trust_receipt_benefit_2.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p class="w-80">A sound choice for importers with insufficient cash flow</p>
												</td>
											</tr>
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/trust_receipt_benefit_3.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p class="w-80">Paying back loans only after goods are sold</p>
												</td>
											</tr>
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/trust_receipt_benefit_4.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p class="w-80">Flexible repayment plan</p>
												</td>
											</tr>
										</table>

										<div class="space-20"></div>
										<p class="fw-semibold mb-30" style="font-size: 17px;">Eligibility</p>
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p class="margin_financing_eligibility mt-minus-5">Importers buying on sight or credit terms whereby sales agreement required use of LC as settlement method</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p class="margin_financing_eligibility mt-minus-5">Goods must be marketable, non-perishable, and not subject to price volatility.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="padding: 10px 0px 10px 20px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Import Invoice Financing
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="col-md-12 import-invoice-financing">
											<p class="import_invoice_financing_tagline">Avoid any credit and cash flow setbacks and instantly fulfill your business liquidity needs with our Invoice Financing</p>
										</div>
										<div class="space-30"></div>
										<p>We support import invoice financing for instant coverage of your business needs associated with receiving goods for import.</p>
										<div class="space-20"></div>
										<p class="fw-semibold" style="font-size: 17px;">Features and Benefits</p>

										<table class="table table-borderless" cellspacing="0">
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/import_invoice_financing_benefit_1.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p>More flexibility than business loans or overdrafts</p>
												</td>
											</tr>
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/import_invoice_financing_benefit_2.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p class="w-80">Payment is guaranteed to your exporter</p>
												</td>
											</tr>
											<tr>
												<td class="benefit_table_icon_td">
													<img src="{{ url('/images/business/trade/trade-financing/import_invoice_financing_benefit_3.png') }}" class="img-fluid c-b-l-icon">
												</td>
												<td>
													<p class="w-80">Maintain a smooth operation of the supply chain and improve cash flow</p>
												</td>
											</tr>
										</table>

										<div class="space-20"></div>
										<p class="fw-semibold mb-30" style="font-size: 17px;">Eligibility</p>
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p class="margin_financing_eligibility mt-minus-5">Goods must be merchandized goods, be marketable, non-perishable, saleable, and not subject to price volatility.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11">
												<p class="margin_financing_eligibility mt-minus-5">Goods to be financed at the discretion of the Bank</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row risk_side_bar">
							<p class="risk_sidebar_title">Risk Management</p>
							<p class="risk_sidebar_link"><a href="{{ url('/about-aya/governance/risk-management') }}">Overview</a></p>
							<p class="risk_sidebar_link side_active"><a href="{{ url('/about-aya/governance/risk-management/risk-governance') }}">Risk Governance</a></p>
							<p class="risk_sidebar_link">Risk Management Framework</p>
							<p class="risk_sidebar_link">Risk Management Control</p>
							<p class="risk_sidebar_link">Managing Risk</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])
<script src="{{ url('/js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript">
	var swiper = new Swiper(".slide-content-desktop", {
		slidesPerView: 3,
		spaceBetween: 5,
		loop: true,
		centerSlide: 'true',
		fade: 'true',
		grabCursor: 'true',
		pagination: {
			el: ".swiper-pagination-desktop",
			clickable: true,
			dynamicBullets: true,
			loop: true,
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
				slidesPerView: 2,
			},
			1200: {
				slidesPerView: 3,	
			},
		},
	});
</script>

@endsection('content')