@extends('layouts.frontend-app')

@section('title', 'Shareholding Information – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

@section('content')
@php
	$page_data = App\Models\AboutAYA\AyabankProfileShareholdingInfo::first();
	$page_data_table = App\Models\AboutAYA\AyabankProfileShareholdingInfoTable::get();
@endphp
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_bank_profile'])

			<div class="container sh_section">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold">{!! $page_data->page_title !!}</h4>
				</div>
				<div class="row">
					{!! $page_data->first_desc !!}
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
								<tbody class="table-border-bottom-0" style="background-color: #fff;padding-right: 70px;">
									@php $table_count = 1; @endphp
									@foreach($page_data_table as $p_table)
										<tr>
											@if($table_count == 1)
												<td class="sh_first_td b-t-l-radius-10 ">{{$p_table->shareholding_name}}</td>
											@else
												<td class="sh_first_td">{{$p_table->shareholding_name}}</td>
											@endif
											<td class="sh_second_td">
												@if($p_table->shareholding_board == '0')
													<i class='bx bx-check' style="font-size: 25px;"></i>
												@endif
											</td>
											@if($table_count == 1)
												<td class="sh_third_td b-t-r-radius-10">{{$p_table->shareholding_percent}}</td>
											@else
												<td class="sh_third_td">{{$p_table->shareholding_percent}}</td>
											@endif
										</tr>
										@php $table_count = $table_count + 1; @endphp
									@endforeach
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