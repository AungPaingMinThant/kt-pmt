@extends('layouts.frontend-app')

@section('title', 'Foreign Currency Exchage – AYA Bank')
<style type="text/css">
    @media only screen and (max-width: 576px){
	    .benefit_table {
	    	zoom: 65%;
	    }
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'foreign_currency_exchange'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'foreign_currency_exchange'])
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="theme_text_color fw-semibold mb-10">Exchange Rate</h3>
						<p>16th September 2022</p>
					</div>
					<div class="col-md-9">
						<div class="benefit_table_div">
							<table class="text-center table table-bordered-less benefit_table b-b-l-radius-10 b-b-r-radius-10" style="background-color: #f2f2f2;box-shadow: 0 0 15px 15px #f4f4f4 !important">
								<tbody class="text-uppercase">
									<tr class="theme_table_head text-center fw-semibold">
										<td class="b-b-none py-md-4 b-t-l-radius-10 b-b-l-radius-10">Code</td>
										<td class="b-b-none">Foreign Currency</td>
										<td class="b-b-none">Unit</td>
										<td class="b-b-none">Buying</td>
										<td class="b-b-none b-t-r-radius-10 b-b-r-radius-10">Selling</td>
									</tr>
									<tr>
										<td class="py-md-4">USD</td>
										<td>US Dollar</td>
										<td>1</td>
										<td>2105</td>
										<td>2106</td>
									</tr>
									<tr>
										<td class="py-md-4">EUR</td>
										<td>Euro</td>
										<td>1</td>
										<td>2049</td>
										<td>2055</td>
									</tr>
									<tr>
										<td class="py-md-4 b-b-none">SGD</td>
										<td class="b-b-none">SINGAPORE DOLLAR</td>
										<td class="b-b-none">1</td>
										<td class="b-b-none">1477</td>
										<td class="b-t-r-radius-10 b-b-r-radius-10 b-b-none">1481</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-12 mt-20">
						<p class="disclaimer_title">Disclaimers</p>
						<p style="color: #777777;font-size: 12px;">
							Exchange rates fluctuate at times. Rates on this website are for information purposes only and are subject to change without notice. Always confirm actual currency rates with the Bank before making transactions!<br>
							The rates in this table are intended for indicative purposes only. AYA Bank shall not be responsible for any loss or damage arising directly or indirectly from the use of or reliance on the information provided here in.
						</p>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="d-none d-sm-block">
						<div class="col-md-1">
							<img src="{{ url('/images/other-services/foreign-currency-exchange/account_transfer_between_aya_foreign_currency_account.png') }}" class="img-fluid">
						</div>
						<div class="col-md-11">
							<p class="theme_text_color mb-0" style="font-size: 18px;">Account Transfer between AYA Foreign Currency Accounts (FCA)</p>
							<p>Our FCA customers can move money between each other which minimize foreign exchange risk while maximizing payment efficiency in foreign currency.</p>
						</div>
						<div class="space-20"></div>
						<div class="col-md-1">
							<img src="{{ url('/images/other-services/foreign-currency-exchange/account_transfer_between_aya_fca_other_bank_fca.png') }}" class="img-fluid">
						</div>
						<div class="col-md-11">
							<p class="theme_text_color mb-0" style="font-size: 18px;">Account Transfer between AYA FCA and other banks’ FCA</p>
							<p>Our FCA customers can do money transfers through chosen bank or receive from other banks for foreign currencies.</p>
						</div>
					</div>
					<div class="d-block d-sm-none">
						<div class="col-12">
							<img src="{{ url('/images/other-services/foreign-currency-exchange/account_transfer_between_aya_foreign_currency_account.png') }}" class="img-fluid w-20 mb-20">
							<p class="theme_text_color mb-0" style="font-size: 18px;">Account Transfer between AYA Foreign Currency Accounts (FCA)</p>
							<p>Our FCA customers can move money between each other which minimize foreign exchange risk while maximizing payment efficiency in foreign currency.</p>
						</div>
						<div class="space-30"></div>
						<div class="col-12">
							<img src="{{ url('/images/other-services/foreign-currency-exchange/account_transfer_between_aya_fca_other_bank_fca.png') }}" class="img-fluid w-20 mb-20">
							<p class="theme_text_color mb-0" style="font-size: 18px;">Account Transfer between AYA FCA and other banks’ FCA</p>
							<p>Our FCA customers can do money transfers through chosen bank or receive from other banks for foreign currencies.</p>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="color: #343434;font-weight: 600;">FAQs</h3>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									What is the minimum amount to open Foreign currency account?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You can open Foreign currency account with minimum amount USD 100.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What foreign currencies are allowed to open Foreign currency account?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										We provide multi currencies including USD, SGD, EURO and CNY.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Is Foreign currency account interest bearing?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										It is a non-interest-bearing account.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What is AYA Bank's SWIFT Code?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You can transfer money to AYA Bank by SWIFT Telegraphic Transfer and our SWIFT Code is AYABMMMY.
									</p>
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


@endsection('content')