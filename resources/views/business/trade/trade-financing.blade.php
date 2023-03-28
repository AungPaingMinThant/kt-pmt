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
				
				<div class="col-md-12 d-none d-sm-block">
					<div class="row">
						<div class="col-md-4">
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
										<a class="nav-link" href="#project_loan_tender_contract_loan">
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

									<div class="col-md-12">
										<div class="accordion" id="accordionExample">
											<div class="accordion-item">
												<h2 class="accordion-header b-b-none" id="headingOne">
													<button class="accordion-button pl-20 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														<span class="accordion-open">
															<i class="menu-icon tf-icons bx bx-plus"></i>
														</span>
														<span class="accordion-close">
															<i class="menu-icon tf-icons bx bx-minus"></i>
														</span>
														Eligibility
													</button>
												</h2>
												<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
													<div class="accordion-body">
														<div class="col-md-12">
															<img src="{{ url('/images/business/trade/trade-financing/margin-financing.png') }}" class="img-fluid">
															<p class="fw-semibold" style="font-size: 18px;">AYA Micro Loan လျှောက်ထားနိုင်သူများ</p>
															<p class="mm_font">AYA Micro Loan ဝန်ဆောင်မှုကို လျှောက်ထားနိုင်သည့် အသေးစားစီးပွားရေး လုပ်ငန်းများသည်</p>
														</div>
														<div class="row">
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5 mm_font">လုပ်ငန်းလိုင်စင်နှင့်လုပ်ငန်းသက်တမ်းအနည်းဆုံး (၁) နှစ်ရှိရမည်။</p>
															</div>
															<div class="col-1">
																<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
															</div>
															<div class="col-11">
																<p class="micro_loan_points mt-minus-5 mm_font">AYA ဘဏ်မှချမှတ်ထားသော အခြားစံနှုန်းများနှင့်ကိုက်ညီရမည်။</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>


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

									<p class="fw-semibold" style="font-size: 17px;">The Benefits</p>

									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/trade/trade-financing/anytime_withdrawal_facility.png') }}" class="img-fluid w-30">
										<p>Any time withdrawal facility to meet the business needs</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/trade/trade-financing/seamless_transfer.png') }}" class="img-fluid w-30">
										<p>Seamless transfers: Link your business accounts so you can transfer funds with ease and speed</p>
									</div>
									<div class="col-md-4 text-center">
										<img src="{{ url('/images/business/trade/trade-financing/Receive_or_pay_bills.png') }}" class="img-fluid w-30">
										<p>Provides batch transfer for both payroll and supplier payments through online banking</p>
									</div>
								</div>

								<div class="space-40" id="export_financing"></div>
								<p class="export_financing">
									New Business Current Account
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/trade/trade-financing/export_financing.png') }}" class="img-fluid">
									<p class="export_financing_tagline">Cash Deposit or withdraw to coincide with cash requirements of your business</p>
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
										<img src="{{ url('/images/business/trade/trade-financing/Unlimited_cash_withdrawal.png') }}" class="img-fluid w-25">
										<p>Unlimited cash deposit or withdrawal in a month to meet the cash requirement of the business</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/trade/trade-financing/make_your_business_everyday_banking_easier.png') }}" class="img-fluid w-25">
										<p>Make your business’ everyday banking easier to coincide with your business needs</p>
									</div>
								</div>

								<div class="space-40" id="other_trade_financing"></div>
								<p class="other_trade_financing">
									Enterprise FCA Current (FCY)
								</p>
								<div class="row" style="position: relative;">
									<img src="{{ url('/images/business/trade/trade-financing/other_trade_financing.png') }}" class="img-fluid">
									<p class="other_trade_financing_tagline">Mange foreign currency payments efficiently</p>
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
										<img src="{{ url('/images/business/trade/trade-financing/transact_SWIFT_Telegraphic_transfer.png') }}" class="img-fluid w-25">
										<p>Transact SWIFT Telegraphic Transfer with the account currency or invoice currency (Bank’s applicable exchange rate apply)</p>
									</div>
									<div class="col-md-6 text-center">
										<img src="{{ url('/images/business/trade/trade-financing/Receive_or_pay_bills.png') }}" class="img-fluid w-25">
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