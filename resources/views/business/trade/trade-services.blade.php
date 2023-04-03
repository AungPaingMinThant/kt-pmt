@extends('layouts.frontend-app')

@section('title', 'Trade Services – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/business/trade/trade.css') }}" />
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_trade_services'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'bu_trade_services'])
				
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<h3 class="fw-semibold" style="font-size: 18px;">Offering Services</h3>
						</div>
						<div class="col-md-4 d-none d-sm-block">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#import_services">
											<span class="pr-5">Import Services</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#export_services">
											<span>Export Services</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#other_trade_services">
											<span class="pr-5">Other Trade Services</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="import_services">
									Import Services
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/trade/trade-services/import-services.png') }}" class="img-fluid">
									<p class="import_services_tagline">Mitigate risk potential and trade securely</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
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
														Letter of Credit
													</button>
												</h2>
												<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12 import-services-letter-of-credit">
															<p class="import_services_letter_credit_tagline">Benefit from our in-depth expertise in Letter of Credit mechanism</p>
														</div>
														<div class="space-30"></div>
														<p class="fw-semibold" style="font-size: 18px;">Quick Overview</p>
														<p class="mb-10">How can we assist you with international trade settlement?</p>
														<p>We undertake and issue a letter of credit (LC) on behalf of the buyer/ importer to ensure timely payment to the supplier within a designated time if all terms and conditions stated in the LC are met, and all required documents are obtained. </p>
														<div class="space-20"></div>
														<p class="fw-semibold" style="font-size: 17px;">Benefits</p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/secure_method_of_settlement.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">A secure method of settlement that reduces the risk of non-payment for delivering goods.</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/support_building_trust_your_business_partner_relationship.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Support in building trust with your business partner relationship and future business opportunities.</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/process_of_importing_goods.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Provide more comprehensive control over the process of importing goods.</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/international_trade_regulations.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Adopt UCP 600 (Uniform Customs & Practice for Documentary Credits) international trade regulations.</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/efficient_process_to_issue_LC.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">An efficient process to issue LC upon submission of required documents</p>
																</td>
															</tr>
														</table>
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
														Import Documentary Collection
													</button>
												</h2>
												<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12 import-documentary-collection">
															<p class="import_documentary_collection_tagline">Our comprehensive import solutions support your business to expand and grow continuously</p>
														</div>
														<div class="space-30"></div>
														<p class="fw-semibold" style="font-size: 18px;">Quick Overview</p>
														<p class="mb-10">How will the Bank assist for Inward Documentary Collection?</p>
														<p>Inward Documentary Collection is the form of document we issue at the request of the importer to collect payments from the exporter. After the shipment of goods, the importer entrusts the trade document to us alongside specific instructions and terms for their release of goods to the exporter.</p>

														<div class="space-20"></div>
														<p class="fw-semibold mb-10" style="font-size: 17px;">Classification</p>
														<p>Inward collection has two forms including documents against payment (D/P) and documents against acceptance (D/A).</p>

														<div class="space-20"></div>
														<p class="fw-semibold mb-10" style="font-size: 17px;">Documents against Acceptance (DA)</p>
														<p>Releasing the import documents upon acceptance of the bills of exchange/drafts.</p>

														<div class="space-20"></div>
														<p class="fw-semibold mb-10" style="font-size: 17px;">Documents against Payment (DP)</p>
														<p>Releasing the import documents only upon payments.</p>

														<div class="space-20"></div>
														<p class="fw-semibold mb-0" style="font-size: 17px;">Benefits</p>
														<p>Making payments only after shipping confirmations, and thus improve cash flows and importers’ financial position. </p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/Cost_efficient_easy_to_use.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="fw-semibold mb-0 w-80">Cost-efficient and easy to use.</p>
																	<p class="w-80">Low facility fees, easy and simple procedures, and help control the costs</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/added_security.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="fw-semibold mb-0 w-80">Added security.</p>
																	<p class="w-80">Payment is made only upon proof of shipment. Keep control of documents until the goods have been paid for or a bill of exchange has been accepted.</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/universally_regulated.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="fw-semibold mb-0 w-80">Universally regulated.</p>
																	<p class="w-80">Subject to globally recognized rules issued by International Chamber of Commerce.</p>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>									
								</div>

								<div class="space-40" id="export_services"></div>
								<p class="export_services">
									Export Services
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/trade/trade-services/export-services.png') }}" class="img-fluid">
									<p class="export_services_tagline">All your essential needs for exporting business are fully covered by our all-inclusive export solutions</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<div class="col-md-12">
										<div class="accordion import-financing-accord" id="accordionExample">
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingExportOne">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExportServicesOne" aria-expanded="true" aria-controls="collapseExportServicesOne">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Letter of credit Advising and Negotiation
													</button>
												</h2>
												<div id="collapseExportServicesOne" class="accordion-collapse collapse" aria-labelledby="headingExportOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12 letter-credit-advising">
															<p class="letter_credit_advising_tagline">Enjoy greater security and accelerate your business growth confidently with Letter of Credit Advising and Negotiation</p>
														</div>
														<div class="space-30"></div>
														<p><span class="fw-semibold">Letter of credit Advising</span> is a service provided by AYA Bank whereby we advise a beneficiary (exporter) that a letter of credit (L/C) opened by an issuing bank for an applicant (importer) is available. We assure to authenticate the letter of credit issued by the issuer to avoid any forms of fraud.</p>
														<div class="space-20"></div>
														<p class="fw-semibold" style="font-size: 17px;">Benefits of using Letter of Credit Advising</p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/benefits_of_using_letter_of_credit_advising_1.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p>Authentication is guaranteed as we firmly establish a good relationship with a wide range of correspondent banks.</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/benefits_of_using_letter_of_credit_advising_2.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Efficiently manage Letter of Credit (LC) collection</p>
																</td>
															</tr>
														</table>

														<div class="space-20"></div>
														<p><span class="fw-semibold">Negotiation</span> is the process whereby AYA Bank verifies documents and confirms the terms and conditions under LC on behalf of beneficiaries to avoid discrepancies. The documents must be conformed with the letter of credit. Depending upon the credit, the Negotiating Bank will either credit or pay the seller immediately under the terms of the letter of credit, or once it has received payment from the issuing bank. A credit trade line is required before utilizing the facility. </p>

														<div class="space-20"></div>
														<p class="fw-semibold" style="font-size: 17px;">Benefits of using Negotiating Bank</p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/benefits_of_using_negotiating_bank_1.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p>Provides value to the seller, assuming that the terms of the credit line have been met.</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/benefits_of_using_negotiating_bank_2.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Provides certainty, the buyer could not cancel or amend without your consent</p>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingExportTwo">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExporServicestTwo" aria-expanded="true" aria-controls="collapseExporServicestTwo">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Letter of Credit Confirmation
													</button>
												</h2>
												<div id="collapseExporServicestTwo" class="accordion-collapse collapse" aria-labelledby="headingExportTwo" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12 letter-credit-confirmation">
															<p class="letter_credit_confirmation_tagline">A Second Payment Guarantee to the Letter of Credit </p>
														</div>
														<div class="space-30"></div>
														<p>We provide a confirmed letter of credit for importers and exporters to go through deals confidently with one another and secure in the knowledge that we are adding our confirmation to a credit upon the issuing bank’s authorization or request.</p>
														<div class="space-20"></div>
														<p class="fw-semibold" style="font-size: 17px;">Benefits</p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/letter_of_credit_confirmation_benefit_1.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p>the country risk and insolvency risk of the issuing bank are eliminated,</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/letter_of_credit_confirmation_benefit_2.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Guaranteed payment, reduced credit risk, and be on a safe side</p>
																</td>
															</tr>
														</table>

														<div class="space-20"></div>
														<p class="fw-semibold mb-30" style="font-size: 17px;">Features</p>
														<div class="row">
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="margin_financing_eligibility mt-minus-5">Only irrevocable letters of credit can be confirmed.</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="margin_financing_eligibility mt-minus-5">During the issuance phase of a letter of credit, “authorize or request” should be made to add our confirmation to the letter of credit.</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="margin_financing_eligibility mt-minus-5">Confirmation of the letter of credit is subject to terms and conditions and no obligation from the bank.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingExportTwo">
													<button class="accordion-button pl-20 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExporServicestThree" aria-expanded="true" aria-controls="collapseExporServicestThree">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Export Documentary Collections
													</button>
												</h2>
												<div id="collapseExporServicestThree" class="accordion-collapse collapse" aria-labelledby="headingExportTwo" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12 export-documentary-collections">
															<p class="export_documentary_collections_tagline">All your needs for your exporting business’s trading transactions are effectively facilitated.</p>
														</div>
														<div class="space-30"></div>
														<p class="fw-semibold" style="font-size: 18px;">Quick Overview</p>
														
														<p class="mb-10">How will the Bank assist with Outward Document Collection?</p>
														<p>AYA Bank issues at the request of the exporter to collect payments from the importer. After the shipment of goods, the exporter entrusts the trade document to us, with specific instructions and terms for their release of goods to the importer.</p>

														<div class="space-20"></div>
														<p class="fw-semibold mb-10" style="font-size: 17px;">Classification</p>
														<p>Outward collection has two forms including documents against payment (D/P) and documents against acceptance (D/A).</p>

														<div class="space-20"></div>
														<p class="fw-semibold mb-10" style="font-size: 17px;">Documents against Acceptance (DA)</p>
														<p>Releasing the export documents upon acceptance of the bills of exchange/drafts.</p>

														<div class="space-20"></div>
														<p class="fw-semibold mb-10" style="font-size: 17px;">Documents against Payment (DP)</p>
														<p>Releasing the export document only upon payment.</p>

														<div class="space-20"></div>
														<p class="fw-semibold" style="font-size: 17px;">Benefits</p>

														<table class="table table-borderless" cellspacing="0">
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/export_documentation_processing.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p>Export documentation processing is handled by a trusted agent (AYA bank)</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/receive_immediate_advance_against_approved_facility.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Receive an immediate advance against approved facility</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/secure_timely_receipt.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Secure and timely receipt of documents</p>
																</td>
															</tr>
															<tr>
																<td class="trade_services_table_icon_td">
																	<img src="{{ url('/images/business/trade/trade-services/cost_effectiveness.png') }}" class="img-fluid letter-credit-icon">
																</td>
																<td>
																	<p class="w-80">Cost-effectiveness</p>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="space-40" id="other_trade_services"></div>
								<p class="other_trade_services">
									Other Trade Services
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/trade/trade-services/other-trade-services.png') }}" class="img-fluid">
									<p class="other_trade_services_tagline">Lead your business securely with our Banker’s Guarantee</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p class="fw-semibold" style="font-size: 18px;">Banker’s Guarantee</p>
									<p>How is the Banker’s Guarantee helpful to you?</p>
									<p>A Banker’s Guarantee is a guarantee or an assurance that we provide to the beneficiary if the counterparty cannot fulfill the payment or meet its financial obligation of a contract.</p>
									<p>The banker’s guarantee offers financial security to the beneficiary, encouraging them to enter contracts with or without having established relationships with the applicant, and curbs any form of financial loss occurrence. </p>
									<div class="space-20"></div>

									<p class="fw-semibold mb-minus-10" style="font-size: 17px;">Benefits</p>
									<div class="d-none d-sm-block">
										<div class="row income_doc_desktop">
											<div class="col-md-6 salaried_staff_col_6">
												<div class="income_document_div salaried_staff_div">
													<div class="row">
														<p class="mb-10" style="font-weight: 600;font-size: 16px;">To the Applicant:</p>
														<ul style="margin-left: 20px;font-size: 13px">
															<li class="mb-10">Strengthening business growth and entrepreneurial activities that encourages small companies to secure loans or conduct business</li>
															<li class="mb-10">Credibility of the applicant increases on the issuance of the guarantee.</li>
															<li>An easy process and requires minimal documents</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-6 self_employ_col_6">
												<div class="income_document_div self_employ_div">
													<div class="row">
														<p class="mb-10" style="font-weight: 600;font-size: 16px;">To the Beneficiary:</p>
														<ul style="margin-left: 20px;font-size: 13px;">
															<li class="mb-10">It is safe for beneficiaries to enter the contract knowing that due diligence’s been done on their counterparty.</li>
															<li class="mb-10">It serves as a risk management tool for the beneficiary as the Bank presumes the liability to ensure the counterparty fulfill its obligation.</li>
															<li>Bank Guarantee adds “Creditworthiness” to both the applicant and the contract. </li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-6"></div>
										</div>
									</div>

									<div class="d-block d-sm-none">
										<div class="row income_doc_desktop">
											<div class="col-md-12 salaried_staff_col_6">
												<div class="income_document_div salaried_staff_div">
													<div class="row">
														<p class="mb-10" style="font-weight: 600;font-size: 16px;">To the Applicant:</p>
														<ul style="margin-left: 20px;font-size: 13px">
															<li class="mb-10">Strengthening business growth and entrepreneurial activities that encourages small companies to secure loans or conduct business</li>
															<li class="mb-10">Credibility of the applicant increases on the issuance of the guarantee.</li>
															<li>An easy process and requires minimal documents</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-12 self_employ_col_6">
												<div class="income_document_div self_employ_div">
													<div class="row">
														<p class="mb-10" style="font-weight: 600;font-size: 16px;">To the Beneficiary:</p>
														<ul style="margin-left: 20px;font-size: 13px;">
															<li class="mb-10">It is safe for beneficiaries to enter the contract knowing that due diligence’s been done on their counterparty.</li>
															<li class="mb-10">It serves as a risk management tool for the beneficiary as the Bank presumes the liability to ensure the counterparty fulfill its obligation.</li>
															<li>Bank Guarantee adds “Creditworthiness” to both the applicant and the contract. </li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-6"></div>
										</div>
									</div>

									<div class="space-20"></div>
									<p class="fw-semibold mb-30" style="font-size: 17px;">Features</p>
									<table class="table table-borderless" cellspacing="0">
										<tr>
											<td class="trade_services_table_icon_td">
												<img src="{{ url('/images/business/trade/trade-services/customized_and_flexible_solutions.png') }}" class="img-fluid letter-credit-icon">
											</td>
											<td>
												<p>Customized and Flexible Solutions for a wide range of guarantees as per customers’ needs.</p>
											</td>
										</tr>
										<tr>
											<td class="trade_services_table_icon_td">
												<img src="{{ url('/images/business/trade/trade-services/fast_issuance.png') }}" class="img-fluid letter-credit-icon">
											</td>
											<td>
												<p class="w-80">Fast issuance upon receiving all documents in order</p>
											</td>
										</tr>
									</table>

									<div class="space-20"></div>
									<p class="fw-semibold mb-30 type_of_guarantees_title" style="font-size: 17px;">Types of Guarantees</p>
									
									<div class="row type_of_guarantees_row">
										<div class="col-md-6">
											<img src="{{ url('/images/business/trade/trade-services/financial-bank-guarantee.png') }}" class="img-fluid mb-20">
											<p class="theme_text_color fw-semibold">Financial Bank guarantee</p>
											<p class="type_of_guarantees_text">We guarantee on behalf of the buyer / borrower to repay the debts owed to the seller / lender.</p>
										</div>
										<div class="col-md-6">
											<img src="{{ url('/images/business/trade/trade-services/performance-based-guarantee.png') }}" class="img-fluid mb-20">
											<p class="theme_text_color fw-semibold">Performance-based guarantee</p>
											<p class="type_of_guarantees_text">The beneficiary can claim resulting losses from non-performance as laid out in the contract.</p>
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