@extends('layouts.frontend-app')

@section('title', 'Risk Management Framework – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/risk-management.css') }}">
<style type="text/css">
	
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'risk_mgmt_framework'])

			<div class="container risk_container">
				<div class="space-40"></div>
				<div class="col-md-12">
					<h4 class="fw-bold">Risk Management Framework</h4>
				</div>
				<div class="row">
					<div class="col-md-8" style="padding-right: 40px;">
						<div class="space-20"></div>
						<div class="row text-center">
							<p class="fw-semibold" style="font-size: 18px;">AYA Risk Management Framework</p>
							<img src="{{ url('/images/about-aya/risk-management/risk_mgmt_framework_chart.png') }}" class="img-fluid">
						</div>

						<div class="space-30"></div>

						<div class="row">
							<p>AYA Bank has designed an Enterprise Risk Management Framework that adheres to the standards of the Risk Management Guidelines set by the Central Bank of Myanmar (CBM). This framework encompasses all risks the Bank encounters, whether internally or externally. These risks include strategic, operational, sectoral, legal, compliance, Environmental, Social and Governance (ESG), and cybersecurity risks. The framework stipulates comprehensive procedures and guidelines for the contextualization of risks, connecting them to strategic objectives, identification, assessment, mitigation, internal controls, communication, monitoring, and governance.</p>
							<p>The framework utilizes appropriate risk indicators to proactively detect risks. It acknowledges the risks encountered by key stakeholders and the potential amplified impact on the organization, which could threaten business continuity. These factors are considered when formulating risk responses.</p>
							<p>Risk management, as per this framework, is seen as a tool for decision-making. It aims not only to reduce the impact of risks but also facilitates effective resource distribution based on risk impact ranking and risk appetite. Strategic decisions made by the Bank take into account both risks and opportunities. The framework recommends methods for identifying and measuring primary, secondary, consequential, and residual risks, thereby aiding efficient decision-making.</p>
						</div>
					</div>
					<div class="col-md-4">
						@include('about-aya.governance.sidebar', ['side_page'=>'risk_mgmt_framework'])
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

@endsection('content')