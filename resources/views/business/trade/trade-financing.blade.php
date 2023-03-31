@extends('layouts.frontend-app')

@section('title', 'Trade Financing – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/trade/trade.css') }}" />
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_trade_financing'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'bu_trade_financing'])
				
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<h3 class="fw-semibold" style="font-size: 18px;">Offering Services</h3>
						</div>
						<div class="col-md-4 d-none d-sm-block">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#import_financing">
											<span class="pr-5">Import Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#export_financing">
											<span>Export Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#other_trade_financing">
											<span class="pr-5">Other Trade Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="import_financing">
									Import Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/trade/trade-financing/import-financing.png') }}" class="img-fluid">
									<p class="import_financing_tagline">Incessantly secure fruitful outcomes in your trading business</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Importers can receive goods/commodities earlier and make a simple payment through our flexible and straightforward import trade financing model. They can effectively conduct better cash flow management and trade transactions management with our short-term credit facility on purchase. Our product also helps importers to trade securely and mitigate foreign currency-related risk.</p>
									<div class="space-20"></div>
									<div class="col-md-12">
										<div class="accordion import-financing-accord" id="accordionExample">
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingOne">
													<button class="accordion-button pl-20" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
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
								</div>

								<div class="space-40" id="export_financing"></div>
								<p class="export_financing">
									Export Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/trade/trade-financing/export-financing.png') }}" class="img-fluid">
									<p class="export_financing_tagline">Facilitating the commerce of commodities internationally</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>We provide various types of funding and services to the exporters to facilitate the exports from the country. Exporters are financed for the purchase of capital goods through a loan agreement granted to the importer. This short-term loan helps businesses fulfill orders from oversea customers.</p>
									<div class="space-20"></div>
									<div class="col-md-12">
										<div class="accordion import-financing-accord" id="accordionExample">
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingExportOne">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExportOne" aria-expanded="true" aria-controls="collapseExportOne">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Pre-Shipment Financing
													</button>
												</h2>
												<div id="collapseExportOne" class="accordion-collapse collapse" aria-labelledby="headingExportOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12 pre-shipment-financing">
															<p class="pre_shipment_financing_tagline">Your working-capital needs are effectively covered</p>
														</div>
														<div class="space-30"></div>
														<p>Our pre-shipment financing facility offers exporters a loan/advance to enjoy pre-export financing. Providing a firm order is secured by the exporter, we enable the exporter to purchase, process, manufacture, or package goods prior to shipment.</p>
														<div class="space-20"></div>
														<p class="fw-semibold" style="font-size: 17px;">Features and Benefits</p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="benefit_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-financing/pre_shipment_financing_benefit_1.png') }}" class="img-fluid c-b-l-icon">
																</td>
																<td>
																	<p>Pre-production cost is financed by using sales contracts as a repayment source.</p>
																</td>
															</tr>
															<tr>
																<td class="benefit_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-financing/pre_shipment_financing_benefit_2.png') }}" class="img-fluid c-b-l-icon">
																</td>
																<td>
																	<p class="w-80">Help develop your business smoothly and free up your funds for better cash flow management</p>
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
																<p class="margin_financing_eligibility mt-minus-5">Exporters selling under Letter of Credit (Preferred Instrument).</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="margin_financing_eligibility mt-minus-5">Exporters selling under collection terms with long-established relationships with buyers.</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="margin_financing_eligibility mt-minus-5">Exporters selling on credit terms or open account basis.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingExportTwo">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExportTwo" aria-expanded="true" aria-controls="collapseExportTwo">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Post Shipment Financing
													</button>
												</h2>
												<div id="collapseExportTwo" class="accordion-collapse collapse" aria-labelledby="headingExportTwo" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12 post-shipment-financing">
															<p class="post_shipment_financing_tagline">Improve positive cashflow for the export of goods for your business</p>
														</div>
														<div class="space-30"></div>
														<p>Smoothly sail your business while we take care of post shipment financing for you. Post-shipment finance is a special credit provided to exporters by AYA Bank to meet working capital requirements after the actual shipment of goods. It bridges the financial gap between the date of shipment and actual receipt of payment from an overseas buyer thereof.</p>
														<div class="space-20"></div>
														<p class="fw-semibold" style="font-size: 17px;">Features and Benefits</p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="benefit_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-financing/post_shipment_financing_benefit_1.png') }}" class="img-fluid c-b-l-icon">
																</td>
																<td>
																	<p>Enabling eligible exporters to procure raw materials, suppliers, process, manufacture or ship the goods meant for export</p>
																</td>
															</tr>
															<tr>
																<td class="benefit_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-financing/post_shipment_financing_benefit_2.png') }}" class="img-fluid c-b-l-icon">
																</td>
																<td>
																	<p class="w-80">Fulfilling an important cash flow avenue for exporters to manufacture finished goods</p>
																</td>
															</tr>
															<tr>
																<td class="benefit_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-financing/post_shipment_financing_benefit_3.png') }}" class="img-fluid c-b-l-icon">
																</td>
																<td>
																	<p class="w-80">Flexible financing period </p>
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
																<p class="margin_financing_eligibility mt-minus-5">Exporters selling under Letter of Credit terms</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="margin_financing_eligibility mt-minus-5">Exporters selling on credit terms</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="margin_financing_eligibility mt-minus-5">Exporters selling under collection terms long - established relationships with buyers.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="space-40" id="other_trade_financing"></div>
								<p class="other_trade_financing">
									Other Trade Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/trade/trade-financing/other-trade-financing.png') }}" class="img-fluid">
									<p class="other_trade_financing_tagline">A comprehensive solution for your trade finance needs</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>We cover a wide range of financial products that exporters and importers utilize to make trade transactions feasible.</p>
									<div class="space-20"></div>
									<div class="col-md-12">
										<div class="accordion import-financing-accord" id="accordionExample">
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingOtherTradeOne">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOtherTradeOne" aria-expanded="true" aria-controls="collapseOtherTradeOne">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Invoice Financing
													</button>
												</h2>
												<div id="collapseOtherTradeOne" class="accordion-collapse collapse" aria-labelledby="headingOtherTradeOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12 invoice-financing">
															<p class="invoice_financing_tagline">Make use of your unpaid invoices as security to satisfy your funding needs</p>
														</div>
														<div class="space-30"></div>
														<p>We provide you with the required cash in advance to get better cash flow for trading businesses. We lend/offer money through invoice financing based on what your customers owe to your business or for your due invoices. With this type of financing, known as invoice factoring or receivable/payable financing, the sellers or buyers may discount or finance their invoices to obtain better liquidity. The bank may provide short-term advanced money to companies’ receivables or help them pay their due invoices.</p>
														<div class="space-20"></div>
														<p class="fw-semibold" style="font-size: 17px;">Features and Benefits</p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="benefit_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-financing/invoice_financing_benefit_1.png') }}" class="img-fluid c-b-l-icon">
																</td>
																<td>
																	<p>Equity is maintained well</p>
																</td>
															</tr>
															<tr>
																<td class="benefit_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-financing/invoice_financing_benefit_2.png') }}" class="img-fluid c-b-l-icon">
																</td>
																<td>
																	<p class="w-80">Financing made easy and quickly</p>
																</td>
															</tr>
															<tr>
																<td class="benefit_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-financing/invoice_financing_benefit_3.png') }}" class="img-fluid c-b-l-icon">
																</td>
																<td>
																	<p class="w-80">Able to access finance quickly</p>
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
																<p class="margin_financing_eligibility mt-minus-5">Goods to be financed at the discretion of the Bank.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="space-40"></div>
								<div class="">
									<div class="col-md-12 c-b-l-div" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;">
										<p style="font-weight: 600;font-size: 16px;">Have any questions?</p>
										<a href="#" target="_blank">
											<button class="btn contact_us_btn">Contact Us</button>
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
<script type="text/javascript">
	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});
</script>
@endsection('content')