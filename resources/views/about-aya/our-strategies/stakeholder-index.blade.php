@extends('layouts.frontend-app')

@section('title', 'Stakeholder Management – AYA Bank Profile – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_bank_profile'])

			<div class="container sh_section">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold">Shareholding Information</h4>
				</div>
				<div class="row">
					<p>AYA Bank is organized independently as a stand-alone business and has been operating with its own culture, management structure, business structure and legal structure. It is incorporated with shares, owned by following shareholders:</p>
				</div>

				<div class="space-20"></div>
				
				<div class="row">
					<div class="table-responsive text-nowrap sh_table_div">
						<table class="table table-borderless sh_table">
							<thead>
								<tr valign="middle">
									<td class="f-white py-4 sh_first_td" width="250">Name</td>
									<td class="f-white sh_second_td">Board Member</td>
									<td class="f-white sh_third_td" style="text-align: right;">Holding %</td>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0" style="background-color: #fff;padding-right: 70px;">
								<tr>
									<td class="sh_first_td b-t-l-radius-10 ">U Zaw Zaw</td>
									<td class="sh_second_td"><i class='bx bx-check' style="font-size: 25px;"></i></td>
									<td class="sh_third_td b-t-r-radius-10">74.00 %</td>
								</tr>
								<tr>
									<td class="sh_first_td">Daw Htay Htay Khaing</td>
									<td class="sh_second_td"><i class='bx bx-check' style="font-size: 25px;"></i></td>
									<td class="sh_third_td">12.14 %</td>
								</tr>
								<tr>
									<td class="sh_first_td">U Soe Tint</td>
									<td class="sh_second_td"></td>
									<td class="sh_third_td">4.50 %</td>
								</tr>
								<tr>
									<td class="sh_first_td">U Ohn Kyaw</td>
									<td class="sh_second_td"></td>
									<td class="sh_third_td">4.50 %</td>
								</tr>
								<tr>
									<td class="sh_first_td">Daw San San</td>
									<td class="sh_second_td"></td>
									<td class="sh_third_td">2.428 %</td>
								</tr>
								<tr>
									<td class="sh_first_td">U Than Zaw</td>
									<td class="sh_second_td"><i class='bx bx-check' style="font-size: 25px;"></i></td>
									<td class="sh_third_td">2.428 %</td>
								</tr>
								<tr>
									<td class="sh_first_td">Daw Khin Saw Oo</td>
									<td class="sh_second_td"><i class='bx bx-check' style="font-size: 25px;"></i></td>
									<td class="sh_third_td">0.002%</td>
								</tr>
								<tr>
									<td class="sh_first_td">Daw Khin Ma Ma</td>
									<td class="sh_second_td"><i class='bx bx-check' style="font-size: 25px;"></i></td>
									<td class="sh_third_td">0.002%</td>
								</tr>
								<tr>
									<td class="sh_first_td">U Myint Zaw</td>
									<td class="sh_second_td"><i class='bx bx-check' style="font-size: 25px;"></i></td>
									<td class="sh_third_td">0.002%</td>
								</tr>
								<tr>
									<td class="sh_first_td py-3" colspan="2" style="border-top: 1px solid #ccc;"><b>Total</b></td>
									<td class="sh_third_td" style="border-top: 1px solid #ccc;"><b>100 %</b></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')