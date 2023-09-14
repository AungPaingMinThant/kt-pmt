@extends('layouts.frontend-app')

@section('title', 'Correspondent Bank – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/correspondent.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'correspondent_bank'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<h4>Secure and Easy Transfer, Your Money, Our Priority!</h4>
					<p>Access overseas financial services through our correspondent banking relationships.</p>
					<div class="col-1 bullet_square_col">
						<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
					</div>
					<div class="col-11 correspondent_services">
						Quick remittance/payment into your AYA Bank Account from overseas
					</div>
					<div class="col-1 bullet_square_col">
						<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
					</div>
					<div class="col-11 correspondent_services">
						Settle cross-border transactions securely and swiftly
					</div>
					<div class="col-1 bullet_square_col">
						<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
					</div>
					<div class="col-11 correspondent_services">
						Remitting major currencies through 20+ correspondence banks
					</div>
					<div class="space-30"></div>
					<div class="col-12">
						<p class="swiftcode_txt">
							AYA BANK SWIFT CODE: 
							<button class="btn swiftcode_btn">AYABMMMY</button>
						</p>
					</div>
					<div class="space-30"></div>
					<div class="col-12">
						<h4 class="fw-bold">Correspondent Network</h4>
						<hr class="bottom_hr">

						<div class="space-40"></div>
						<img src="{{ url('/images/about-aya/network/correspondent-bank/map.png') }}" class="img-fluid text-center correspondent_network_map">
						<div class="space-40"></div>

						<table class="table table-borderless correspondent_network_table">
							<thead>
								<tr valign="middle">
									<td class="py-3 f-white" style="font-size: 12px;width: 4%;background-color: #696969;"><b>CURRENCY</td>
									<td class="py-3 f-white" style="font-size: 12px;width: 10%;background-color: #09b400;"><b>CORRESPONDENT BANK</td>
									<td class="py-3 f-white" style="font-size: 12px;width: 4%;background-color: #035fb5;"><b>LOCATION</td>
									<td class="py-3 f-white" style="font-size: 12px;width: 4%;background-color: #937dbe;"><b>SWIFT CODE</td>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0" style="background-color: #f5f5f5;">
								<tr>
									<td rowspan="9" valign="top" class="py-3 theme_text_color">US Dollar<br>(US$)</td>
									<td class="py-3">UNITED OVERSEAS BANK LIMITED</td>
									<td>SINGAPORE</td>
									<td>UOVBSGSG</td>
								</tr>
								<tr>
									<td class="py-3">OVERSEA-CHINESE BANKING CORPORATION LIMITED</td>
									<td>SINGAPORE</td>
									<td>OCBCSGSG</td>
								</tr>
								<tr>
									<td class="py-3">DBS BANK LIMITED</td>
									<td>SINGAPORE</td>
									<td>DBSSSGSG</td>
								</tr>
								<tr>
									<td class="py-3">MIZUHO BANK LIMITED, SINGAPORE BRANCH</td>
									<td>SINGAPORE</td>
									<td>MHCBSGSG</td>
								</tr>
								<tr>
									<td class="py-3">BANGKOK BANK PUBLIC COMPANY LIMITED</td>
									<td>BANGKOK, THAILAND</td>
									<td>BKKBTHBK</td>
								</tr>
								<tr>
									<td class="py-3">KASIKORNBANK PUBLIC COMPANY LIMITED</td>
									<td>BANGKOK, THAILAND</td>
									<td>KASITHBK</td>
								</tr>
								<tr>
									<td class="py-3">SIAM COMMERCIAL BANK PCL</td>
									<td>BANGKOK, THAILAND</td>
									<td>SICOTHBK</td>
								</tr>
								<tr>
									<td class="py-3">KRUNG THAI BANK PUBLIC COMPANY LIMITED</td>
									<td>BANGKOK, THAILAND</td>
									<td>KRTHTHBK</td>
								</tr>
								<tr>
									<td class="py-3">MIZUHO BANK LIMITED</td>
									<td>TOKYO, JAPAN</td>
									<td>MHCBJPJT</td>
								</tr>
								<tr>
									<td rowspan="2" valign="top" class="py-3 theme_text_color">Euro<br>(€)</td>
									<td class="py-3">UNITED OVERSEAS BANK LIMITED</td>
									<td>SINGAPORE</td>
									<td>UOVBSGSG</td>
								</tr>
								<tr>
									<td class="py-3">ODDO BHF AKTIENGESELLSCHAFT</td>
									<td>FRANKFURT, GERMANY</td>
									<td>BHFBDEFF</td>
								</tr>
								<tr>
									<td rowspan="3" valign="top" class="py-3 theme_text_color">Singapore Dollar<br>(S$)</td>
									<td class="py-3">UNITED OVERSEAS BANK LIMITED</td>
									<td>SINGAPORE</td>
									<td>UOVBSGSG</td>
								</tr>
								<tr>
									<td class="py-3">OVERSEA-CHINESE BANKING CORPORATION LIMITED</td>
									<td>SINGAPORE</td>
									<td>OCBCSGSG</td>
								</tr>
								<tr>
									<td class="py-3">DBS BANK LIMITED</td>
									<td>SINGAPORE</td>
									<td>DBSSSGSG</td>
								</tr>
								<tr>
									<td valign="top" class="py-3 theme_text_color">Japanese Yen<br>(¥)</td>
									<td class="py-3">MIZUHO BANK LIMITED</td>
									<td>TOKYO, JAPAN</td>
									<td>MHCBJPJT</td>
								</tr>
								<tr>
									<td rowspan="4" valign="top" class="py-3 theme_text_color">Thai Baht<br>(฿)</td>
									<td class="py-3">BANGKOK BANK PUBLIC COMPANY LIMITED</td>
									<td>BANGKOK, THAILAND</td>
									<td>BKKBTHBK</td>
								</tr>
								<tr>
									<td class="py-3">KASIKORNBANK PUBLIC COMPANY LIMITED</td>
									<td>BANGKOK, THAILAND</td>
									<td>KASITHBK</td>
								</tr>
								<tr>
									<td class="py-3">SIAM COMMERCIAL BANK PCL</td>
									<td>BANGKOK, THAILAND</td>
									<td>SICOTHBK</td>
								</tr>
								<tr>
									<td class="py-3">KRUNG THAI BANK PUBLIC COMPANY LIMITED</td>
									<td>BANGKOK, THAILAND</td>
									<td>KRTHTHBK</td>
								</tr>
							</tbody>
						</table>

						<div class="space-40"></div>
						<h4 class="fw-bold">Explore More</h4>
						<hr class="bottom_hr">
						<div class="space-20"></div>
						<div class="row">
							<div class="col-md-4 mb-20">
								<div class="card">
									<div style="position: relative;">
										<img src="{{ url('/images/about-aya/network/correspondent-bank/personal_inter_remittnace.webp') }}" alt="International Remittance" class="card-img-top">
									</div>
									<div class="card-body">
										<p class="card-title fw-semibold mb-0" style="font-size: 16px;">Personal Banking</p>
										<p class="card-title fw-semibold mb-20" style="font-size: 15px;">International Remittance</p>
										<p class="card_detail_info mb-30">AYA International Remittance is secure and a quick way to send and receive money, across the global network</p>

										<p class="text-decoration-underline">
											<a href="{{ url('/personal-banking/remittance/international') }}">Learn more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<div style="position: relative;">
										<img src="{{ url('/images/about-aya/network/correspondent-bank/business_inter_remittnace.webp') }}" alt="Social Sustainability" class="card-img-top">
									</div>
									<div class="card-body">
										<p class="card-title fw-semibold mb-0" style="font-size: 16px;">Business Banking</p>
										<p class="card-title fw-semibold mb-20" style="font-size: 15px;">International Remittance</p>
										<p class="card_detail_info mb-30">Send payments to overseas securely<br>&nbsp;<br>&nbsp;</p>

										<p class="text-decoration-underline">
											<a href="{{ url('/business/remittance-payments/international-payments') }}">Learn more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
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
</div>


<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

@endsection('content')