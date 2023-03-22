@extends('layouts.frontend-app')

@section('title', 'Corporate Business Loan – AYA Bank')
<style type="text/css">
	.nav-link, h4 {
		color: #2e2e2e !important;
	}
	.nav-link {
		padding: 0 1.25rem 1rem 0 !important;
		font-size: 16px;
	}
	.nav-item-separate {
		border-bottom: 4px solid #a02226;
		width: 80%;
		margin-top: 5px;
		display: none;
	}
	.nav-pills .nav-link.active {
		border-radius: 0;
		padding-bottom: 0px !important;
		color: #ae071d !important;
	}
	.nav-pills .nav-link.active .nav-item-separate {
		display: block;
	}
	.scroll_content::-webkit-scrollbar{
	    display: none;
	}
	#myScrollspy {
		position: sticky;
		top: 20px;
		z-index: 99;
	}
	.bullet_square {
		float: right;
		margin-top: 7px;
		width: 13%;
	}
	#capex_financing, .working_capital_financing, .demand_loan {
		padding-right: 250px;
		font-size: 18px;
		font-weight: 700;
	}
	.secure_req_application_icon {
    	margin-top: -5px;
	}
	.secure_credit_fact {
		padding-left: 0 !important;
	}
	.capex_financing_tagline {
		color: #fff;
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		width: 85% !important;
		position: absolute;
		top: 80%;
		left: 4%;
	}
	.working_capital_financing_tagline {
		color: #fff;
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		width: 65% !important;
		position: absolute;
		top: 80%;
		left: 4%;
	}
	.demand_loan_tagline {
		color: #fff;
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
		position: absolute;
		top: 85%;
		left: 4%;
	}
	@media (max-width: 1300px) and (min-width: 1000px) {
		.capex_financing_tagline{
			width: 60% !important;
		}
		.demand_loan_tagline {
			width: 45% !important;
			top: 75%;
		}
		.bullet_square {
			width: 20%;
		}
	}
	@media only screen and (max-width: 576px){
		.calldeposit__mobile_title {
			font-size: calc(1.2625rem + 0.15vw);
			font-weight: 600 !important;
		}
		.bullet_square {
			width: 60%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'business_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'bu_borrowing_corporate_business_loan'])

			<div class="container section_1" >
				<div class="space-40"></div>
				<div class="col-md-12">
					<p>If you are operating a business with ongoing capital requirements, we offer a full range of loan packages to suit your property financing needs. We work closely with business clients in advising on appropriate credit facilities and tenors in alignment with their business nature.  </p>
				</div>
				<div class="space-20"></div>

				<div class="col-md-12">
					<p class="fw-semibold" style="font-size: 16px;">Basic Requirements your company should meet,</p>
				</div>
				<div class="col-md-12">
					<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i><span class="mx-3">Good credit scores</span></p>
					<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i><span class="mx-3">Healthy financial records coupled with sound purposes for utilizing loans</span></p>
					<p><i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i><span class="mx-3">All prerequisites requested from AYA Bank</span></p>
				</div>

				<div class="space-40"></div>

				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-12">
							<h3></h3>
						</div>
						<div class="col-md-4">
							<nav id="myScrollspy">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#capex_financing">
											<span class="pr-5">CAPEX Financing / Assets Acquisition Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#working_capital_financing">
											<span class="pr-5">Working Capital Financing<br>(Overdraft – OD)</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#demand_loan">
											<span class="pr-5">Demand Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#project_loan_tender_contract_loan">
											<span class="pr-5">Project Loan / Tender Contract Loan</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#franchise_financing">
											<span class="pr-5">Franchise Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#trade_financing">
											<span class="pr-5">Trade Financing</span>
											<hr class="nav-item-separate">
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div id="scroll_content" data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="">
								<p id="capex_financing">
									CAPEX Financing / Assets Acquisition Financing
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/CAPEX_financing.png') }}" class="img-fluid">
									<p class="capex_financing_tagline">Time to fuel your business<br>for the next stage of growth</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>You have vision but require a large amount of financing to invest in fixed assets?</p>
									<p>We have tools to make it happen. AYA Bank offers CAPEX loans, either short, medium or long term, which do not have a fixed date for repayment. It carries a floating interest rate which may varies according to the prime rate. It can be "called" for repayment by the lending institution anytime.</p>

									<div class="space-20"></div>

									<p class="fw-semibold" style="font-size: 17px;">Features and Benefits</p>

									<div class="col-md-2">
										<img src="{{ url('/images/business/borrowing/corporate-business-loan/maximum_loan_tenor_12_months.png') }}" class="img-fluid w-80">
									</div>
									<div class="col-md-10 pt-30">
										<p>Maximum Loan Tenor: 12 months from the date of drawdown</p>
									</div>
									<div class="col-md-2">
										<img src="{{ url('/images/business/borrowing/corporate-business-loan/CAPEX_share_securities.png') }}" class="img-fluid w-80">
									</div>
									<div class="col-md-10 pt-30">
										<p>It can be considered under business loans, trade advances, inventory funding, loans against share & securities etc. This would be reviewed from time to time by the Credit Committee.</p>
									</div>

									<div class="space-20"></div>

									<div class="col-md-12">
										<p class="fw-semibold" style="font-size: 17px;">Fees and Charges</p>
										<div class="space-10"></div>
										<table class="table table-bordered" style="width: 70%;">
											<tbody style="box-shadow: 0px 0px 50px 20px rgb(149 149 149 / 20%);border-bottom-right-radius: 10px;font-weight: 500;background-color: transparent;">
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">Interest rate</td>
													<td style="border-right: none;">9% - 14.5% per annum</td>
												</tr>
												<tr style="background-color: #fff;border-top: none;">
													<td style="border-left: none;padding: 20px;">Facility fee</td>
													<td style="border-right: none;">1% - 2% per annum</td>
												</tr>
												<tr>
													<td style="border-left: none;padding: 20px;">Default fee</td>
													<td style="border-right: none;">2% per month</td>
												</tr>
												<tr style="background-color: #fff;border-bottom-right-radius: 10px;border-bottom: none;">
													<td style="border-width: 1px;border-bottom: none;border-left: none;padding: 20px;">Penalty fee</td>
													<td class="last" style="border-width: 1px;border-bottom-right-radius: 10px;border-right: none;border-bottom: none;">2% per month</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="space-40" id="working_capital_financing"></div>
								<p class="working_capital_financing">
									Working Capital Financing (Overdraft – OD)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/working_capital_financing_OD.png') }}" class="img-fluid">
									<p class="working_capital_financing_tagline">Cash Deposit or withdraw to coincide with cash requirements of your business</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Designed for businesses which require to transact frequently and able to link with New Business Call Account.</p>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Initial cash deposit requires MMK 10,000 for minimum</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Enabling Interbank payments and SWIFT Telegraphic transfer</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Manage payroll and supplier payments via online banking or cheque</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>No annual or monthly maintenance fee</p>
									</div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/borrowing/corporate-business-loan/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-25">
										<p>Unlimited cash deposit or withdrawal in a month to meet the cash requirement of the business</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/borrowing/corporate-business-loan/make_your_business_everyday_banking_easier.png') }}" class="img-fluid w-25">
										<p>Make your business’ everyday banking easier to coincide with your business needs</p>
									</div>
								</div>

								<div class="space-40" id="demand_loan"></div>
								<p class="demand_loan">
									Demand Loan
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/demand_loan.png') }}" class="img-fluid">
									<p class="demand_loan_tagline">Mange foreign currency payments efficiently</p>
								</div>
								<div class="row">
									<div class="space-30"></div>
									<p>Designed to meet the requirements of regular businesses, corporate firms, importers, and exporters receiving and making payments in foreign currencies.</p>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Open account in United States Dollar, Euro, Singapore Dollar, Chinese Yuan or Thai Baht</p>
									</div>
									<div class="col-1">
										<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
									</div>
									<div class="col-11">
										<p>Suitable for business with international trade payment or any foreign currency payments</p>
									</div>

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/borrowing/corporate-business-loan/transact_SWIFT_Telegraphic_transfer.png') }}" class="img-fluid w-25">
										<p>Transact SWIFT Telegraphic Transfer with the account currency or invoice currency (Bank’s applicable exchange rate apply)</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/borrowing/corporate-business-loan/Receive_or_pay_bills.png') }}" class="img-fluid w-25">
										<p>Local or international foreign currency payments online or over-the-counter</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 d-block d-sm-none">
					<div class="row">
						<div class="col-md-12">
							<p class="calldeposit__mobile_title">
								CAPEX Financing / Assets Acquisition Financing
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/borrowing/corporate-business-loan/regular-current-account.png') }}" class="img-fluid">
								<p style="color:#fff;font-weight: 500;font-size: 16px;line-height: 22px;position: absolute;top: 70%;left: 2%;width: 100%;">Open a Current Account to increase efficiency and transparency of business transactions</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>The simple current account that provides your business with an accurate record of transactions. It allows your business the flexibility to carry out a large number of transactions while offering services built specifically for business needs.</p>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Initial deposit requires MMK 10,000 for minimum</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Enabling Interbank payments and SWIFT Telegraphic transfer</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Manage payroll and supplier payments via online banking or cheque</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>No annual or monthly maintenance fee</p>
								</div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/anytime_withdrawal_facility.png') }}" class="img-fluid w-30">
									<p>Any time withdrawal facility to meet the business needs</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/seamless_transfer.png') }}" class="img-fluid w-30">
									<p>Seamless transfers: Link your business accounts so you can transfer funds with ease and speed</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/Receive_or_pay_bills.png') }}" class="img-fluid w-30">
									<p>Provides batch transfer for both payroll and supplier payments through online banking</p>
								</div>
							</div>

							<div class="space-40"></div>
							<p class="calldeposit__mobile_title">
								Working Capital Financing (Overdraft – OD)
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/borrowing/corporate-business-loan/working_capital_financing.png') }}" class="img-fluid">
								<p style="color:#fff;font-weight: 500;font-size: 16px;line-height: 22px;position: absolute;top: 70%;left: 4%;width: 90%;">Cash Deposit or withdraw to coincide with cash requirements of your business</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Designed for businesses which require to transact frequently and able to link with New Business Call Account.</p>

								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Initial cash deposit requires MMK 10,000 for minimum</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Enabling Interbank payments and SWIFT Telegraphic transfer </p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Manage payroll and supplier payments via online banking or cheque </p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>No annual or monthly maintenance fee </p>
								</div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-30">
									<p>Unlimited cash deposit or withdrawal in a month to meet the cash requirement of the business</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/make_your_business_everyday_banking_easier.png') }}" class="img-fluid w-30">
									<p>Make your business’ everyday banking easier to coincide with your business needs</p>
								</div>
							</div>

							<div class="space-40" id="western_union_inward"></div>
							<p class="calldeposit__mobile_title">
								Demand Loan
							</p>
							<div class="row" style="position: relative;">
								<img src="{{ url('/images/business/borrowing/corporate-business-loan/demand_loan.png') }}" class="img-fluid">
								<p style="color:#fff;font-weight: 500;font-size: 18px;line-height: 22px;position: absolute;top: 70%;left: 4%;width: 90%;">Mange foreign currency payments efficiently</p>
							</div>
							<div class="row">
								<div class="space-30"></div>
								<p>Designed to meet the requirements of regular businesses, corporate firms, importers, and exporters receiving and making payments in foreign currencies.</p>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Open account in United States Dollar, Euro, Singapore Dollar, Chinese Yuan or Thai Baht</p>
								</div>
								<div class="col-1">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11">
									<p>Suitable for business with international trade payment or any foreign currency payments</p>
								</div>

								<p class="fw-semibold text-center" style="font-size: 18px;">The Benefits</p>

								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/transact_SWIFT_Telegraphic_transfer.png') }}" class="img-fluid w-30">
									<p>Transact SWIFT Telegraphic Transfer with the account currency or invoice currency (Bank’s applicable exchange rate apply)</p>
								</div>
								<div class="col-md-12 text-center">
									<img src="{{ url('/images/business/borrowing/corporate-business-loan/Receive_or_pay_bills.png') }}" class="img-fluid w-30">
									<p>Local or international foreign currency payments online or over-the-counter</p>
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