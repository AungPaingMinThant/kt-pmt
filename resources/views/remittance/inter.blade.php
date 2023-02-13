@extends('layouts.frontend-app')

@section('title', 'Internatioanl Remittance – AYA Bank')
<style type="text/css">
	
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'remittance_inter'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'remittance_inter'])

				<div class="row">
					<div class="col-md-6 d-block d-sm-none">
						<img src="{{ url('/images/remittance/local/aya_to_aya_accounts.png') }}" class="img-fluid">
						<div class="space-20"></div>
					</div>
					<div class="col-md-6" style="padding-right: 70px;">
						<p style="color: #a02226;font-size: 16px;font-weight: 600;">AYA to AYA Accounts</p>
						<p>AYA mobile banking can take care of a range of financial needs whenever you wish. Access your account 24/7 and remit within Myanmar swiftly and conveniently.</p>
						<p>Alternatively, you can visit to nearest branch along with your NRC and beneficiary information.</p>
						<div class="space-30"></div>
						<a href="{{ url('/mobile-banking') }}">
							<button class="btn" style="background-color: #ae071d;border-color: #ae071d;color: #fff;">Connect with us via digital!</button>
						</a>
					</div>
					<div class="col-md-6 d-none d-sm-block">
						<img src="{{ url('/images/remittance/local/aya_to_aya_accounts.png') }}" class="img-fluid">
					</div>
				</div>

				<div class="space-50"></div>

				<div class="row">
					<div class="col-md-6 text-left">
						<img src="{{ url('/images/remittance/local/inter_bank_transfer.png') }}" class="img-fluid">
						<div class="space-20"></div>
					</div>
					<div class="col-md-6" style="padding-right: 70px;">
						<p style="color: #a02226;font-size: 16px;font-weight: 600;">Interbank Transfer </p>
						<p>Interbank Transfer to any bank account can be executed quickly and easily with your AYA Personal Internet Banking/ mobile banking or through our branches.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')