@extends('layouts.frontend-app')

@section('title', 'Business Practices – AYA Bank')
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
					<h4 class="fw-semibold">Business Practices</h4>
				</div>
				<div class="row">
					<p>AYA Bank aims to have an overall positive impact on financial sector as well as social and environment through responsible practices, align with our Code of Business Conduct, effective governance and risk and compliance framework. We grow as a responsible business at the strategic, portfolio and transactional levels and across all business areas with following key highlights,</p>
				</div>
			</div>

			<div class="space-60"></div>

			<div class="">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-4 CTA_business_practice_detail_col_1"></div>
						<div class="col-md-8 CTA_business_practice_detail_col_2">
							<p class="theme_text_color" style="font-size: 20px;">Consumer Financial Protection</p>
							<p class="mb-30">AYA Bank protects and safeguards customers with accurate and unbiased information on financial solutions offered by the Bank, complying with all applicable laws, regulations, corporate policies and best practices. We deliver appropriate knowledge to our clients for their financial planning and ensure a strong, fair and consistent consumer experience.  For decades, AYA Bank establishes a deed of trust with our creditors such as deposit holders, businesses, and other parties through our strong creditor’s right deals. </p>
						</div>
					</div>
				</div>
			</div>

			<div class="space-40"></div>

			<div class="CTA_div responsible_CTA">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-8 sh_CTA_detail_col_2">
							<p class="f-white" style="font-size: 20px;">Responsible Lending</p>
							<p class="f-white">We act carefully and responsibly at all times to ensure borrower’s affordability, transparency of terms and conditions and support a borrower if they experience repayment difficulties. Our lending policy follow the guidelines set out by the regulator and formalized responsible lending guidelines.</p>
						</div>
						<div class="col-md-4 sh_CTA_detail_col_1"></div>
					</div>
				</div>
			</div>

			<div class="space-80"></div>

			<div class="transparent_CTA">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-4 CTA_transparent_marketing_detail_col_1"></div>
						<div class="col-md-8 CTA_transparent_marketing_detail_col_2">
							<p class="theme_text_color" style="font-size: 20px;">Transparent Marketing</p>
							<p class="mb-30">We promote products, services and the company in a transparent manner ensuring that no advertisements are misleading, inaccurate or misrepresent products, services, or terms and activities are in conformity with all applicable laws, regulations and comply with the company’s marketing advertising guidelines.</p>
						</div>
					</div>
				</div>
			</div>
			

			<div class="space-40"></div>
			<div class="CTA_financial_div">
				<div class="financial_red_bg">
					<div class="container">
						<div class="row">
							<div class="col-md-8 CTA_financial_detail_col_2">
								<p class="f-white" style="font-size: 20px;">Financial Inclusion</p>
								<p class="f-white">We provide financial solutions and services to meet the evolving needs of vulnerable, marginalized, underrepresented and under resourced groups including small- and medium-sized businesses, NGOs, INGOs and women, minorities, veterans, people with disabilities. A wide range of banking products and services are accessible by individuals and businesses at an affordable terms and conditions and the Bank will not knowingly undertake activities that would disproportionally harm any group.</p>
								<p class="f-white">To ensure adequacy and effectiveness of the Bank's internal control systems, both financial and non-financial auditing practices are in place. AYA Bank is audited under International Standards of Auditing (ISA) by a big-four international firm, Deloitte from year 2016 to 2019 and by a leading local audit firm, Win Thin & Associates from year 2020 to date. To enhance control mechanism, a global management consulting firm was engaged to analyze and provide professional advice on the Bank’s non-financial data.</p>
								<p class="f-white mb-30">AYA Bank have always ensure to promote responsible business practices by delivering on our purpose and striving to be a good corporate citizen. With a long term sustainable development as our ambition, the Bank continue to further strengthen its governance, risk and compliance structure as a measure to ensure balance and sustain growth.</p>
							</div>
							<div class="col-md-4 "></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@include('layouts.footer', ['page'=>''])


@endsection('content')