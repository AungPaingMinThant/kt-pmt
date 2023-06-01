@extends('layouts.frontend-app')

@section('title', 'AYA Bank Profile – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/ayabank-profile.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_bank_profile'])

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold">A Full Service Bank</h4>
				</div>
				<div class="row">
					<div class="col pr-5">
						<p>AYA Bank is a leading private sector bank in Myanmar. The Bank was licensed by the Central Bank of Myanmar as a development bank on 2nd July 2010 and relicensed under the Financial Institutions Law 2016 as a full service bank. Registered as a Private Company Limited by Shares on 14th July 2010 and established on 11th August 2010, AYA Bank has been part of promoting the stability of financial system of the nation.</p>
					</div>
					<div class="col pr-5">
						<p>To create long-term growth, value and sustainability, AYA Bank was reincorporated as a Public Company Limited on 30th December 2022. The Bank is committed to the strategic roadmap of going public with higher level of transparency, financial rigor, stringent reporting deadlines and compliance requirements. This transition from private to public intends to distribute ownership among general public shareholders in the future and allows them to reap the benefits of a business's success by delivering strong returns.</p>
					</div>
					<div class="col">
						<p>Headquartered in Yangon, AYA Bank is serving individuals, small- and middle-market businesses, large corporations, and government sector with extensive branch network across the country. Our comprehensive network does not end local, and we are connected to the wider Asia region and global.</p>
					</div>
				</div>

				<div class="space-20"></div>
				
				<div class="row full_service_bank_img"></div>

				<div class="space-30"></div>

				<div class="row">
					<div class="col">
						<p>YA Bank is the country’s second largest bank with more than (3.2) million customers and (265) branches. Our large and loyal customer base has been one of the key drivers of our success, allowing us for rapid growth over the years. The Bank focus on deepening relationships with customers, providing best-in-class customer service, and leveraging technology as the enabler to rapidly expand the customer base.</p>
					</div>
				</div>

				<div class="space-20"></div>

				<div class="row">
					<h4 class="fw-semibold text-center">Corporate Information</h4>

					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="row">
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/native_name.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/founded.png') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/u_zaw.png') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/daw_khin_saw_oo.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/type.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/product.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/headquarter.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/slogan.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
							<div class="col text-center">
								<img src="{{ url('/images/about-aya/ayabank-profile/website.webp') }}" class="img-fluid corporate_information_icon rounded-circle">
							</div>
						</div>

						
					</div>
					<div class="col-md-2">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')