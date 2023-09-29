@extends('layouts.frontend-app')

@section('title', 'Foreign Currency Exchange – AYA Bank')
<style type="text/css">
	.fx_cta_col {
		display: table;
	}
	.FAQ_button {
	    background-color: #ae071d !important;
	    color: #fff !important;
	    font-weight: 500;
	    padding: 15px 35px !important;
	    border: 1px solid #ae071d !important;
	    display: table-cell;
	    vertical-align: middle;
	    float: right;
	}
	.FAQ_button:hover {
		background-color: #fff !important;
	    color: #ae071d !important;
	    border: 1px solid #ae071d !important;
	}
    @media only screen and (max-width: 576px){
	    .benefit_table {
	    	zoom: 65%;
	    }
	    .fx_other_services {
	    	display: none !important;
	    }
	    .fx_cta_col {
			text-align: center;
		}
		.FAQ_button {
		    float: none;
		    margin-top: 20px;
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
						<p><?php  echo date('j<\s\up>S</\s\up> F Y  (h:i A)', strtotime($exchange_rate_buy_sell->updated_at)); ?></p>
					</div>
					<div class="col-md-9">
						<div class="benefit_table_div">
							<table class="text-center table table-bordered-less benefit_table b-b-l-radius-10 b-b-r-radius-10" style="background-color: #fff;box-shadow: 0 0 15px 15px #f4f4f4 !important">
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
										<td>{{ $exchange_rate_buy_sell->USD_buying }}</td>
										<td>{{ $exchange_rate_buy_sell->USD_selling }}</td>
									</tr>
									<tr>
										<td class="py-md-4">EUR</td>
										<td>Euro</td>
										<td>1</td>
										<td>{{ $exchange_rate_buy_sell->EUR_buying }}</td>
										<td>{{ $exchange_rate_buy_sell->EUR_selling }}</td>
									</tr>
									<tr>
										<td class="py-md-4 b-b-none">SGD</td>
										<td class="b-b-none">SINGAPORE DOLLAR</td>
										<td class="b-b-none">1</td>
										<td class="b-b-none">{{ $exchange_rate_buy_sell->SGD_buying }}</td>
										<td class="b-t-r-radius-10 b-b-r-radius-10 b-b-none">{{ $exchange_rate_buy_sell->SGD_selling }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row special_purpose_row">
							<div class="space-40"></div>
							<p class="mb-30"><span class="theme_text_color fw-semibold" style="font-size: 16px;padding-right: 20px;">Worker Remittance Rate : </span>{{ $worker_remittance->USD }} USD = {{ number_format($worker_remittance->MMK) }} MMK</p>

							<p class="theme_text_color fw-semibold" style="font-size: 16px;">
								{{$page_data->section_title}}
							</p>

							{!! htmlspecialchars_decode($page_data->section_desc) !!}
						</div>
					</div>

					<div class="space-20"></div>
					<div class="col-md-12" style="background-color: #f2f2f2;padding: 20px 20px 20px 30px;border-radius: 5px;margin-left: 15px;margin-right: 15px;">
						<div class="row">
							<div class="col-md-6 fx_cta_col">
								<p style="font-weight: 600;font-size: 16px;display: table-cell;vertical-align: middle;">You can find FX Counter Locations at</p>
							</div>
							<div class="col-md-6 text-right fx_cta_col">
								<a href="{{ url('/about-aya/network/fx-counter-locations') }}">
									<button class="btn FAQ_button">FX Counter Locations</button>
								</a>
							</div>
						</div>
					</div>
					<div class="space-20"></div>

					<div class="col-md-12 mt-20">
						<p class="disclaimer_title">
							{{ $page_data->disclaimer_title }}
						</p>
						<p style="color: #777777;font-size: 12px !important;">
							{!! htmlspecialchars_decode($page_data->disclaimer_desc) !!}
						</p>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-12">
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