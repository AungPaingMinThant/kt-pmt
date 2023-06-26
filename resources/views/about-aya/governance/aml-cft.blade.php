@extends('layouts.frontend-app')

@section('title', 'Implementation of AML/CFT – AYA Bank')

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aml_cft'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<p class="fw-semibold text-uppercase" style="font-size: 16px;">ANTI-MONEY LAUNDERING & COUNTER FINANCING OF TERRORISM POLICY AND COMPREHENSIVE INTERNAL SAFEGUARDS</p>

					<p>The complexity of financial institutions can sometimes be exploited through deceptive tactics by money launderers, using the system to conceal illegal funds. To safeguard against such activities, we have devised an elaborate set of internal controls that significantly amplify the chances of interception and prevention of such illicit deeds. The anti-money laundering (AML) and counter financing of terrorism (CFT) framework is specifically designed to dissuade individuals or groups from infiltrating the financial system with unlawfully obtained funds.</p>
					<p>At AYA Bank, our AML/CFT framework outlines the governing principles and detailed procedures that aim to guard the Bank from being involved or associated in any form with money laundering or terrorist financing activities, including but not limited to securities fraud and market manipulation.</p>
					<p>We are unequivocally committed to adherence to AML regulations, thus ensuring that we do not, inadvertently, or otherwise, facilitate money laundering activities. Our adherence to AML/CFT regulations is not merely a statutory requirement but a core component of our commitment to responsible banking practices and the maintenance of our customers' trust.</p>
					<p>We rigorously comply with the Pyidaungsu Hluttaw Law No.11/2014 "Anti-Money Laundering Law", Pyidaungsu Hluttaw Law No.23/2014 "Counter Terrorism Law", the Ministry of Home Affairs "Anti-Money Laundering Rules and Counter Terrorism Financing Rules", and regulations set by the Central Bank of Myanmar. We also strive to incorporate, to the greatest extent practicable, the recommendations of the Financial Action Task Force (FATF), a global watchdog that sets standards and promotes the effective implementation of legal, regulatory, and operational measures for combating money laundering, terrorist financing, and other related threats to the integrity of the international financial system.</p>

					<div class="space-20"></div>

					<p class="theme_text_color fw-semibold mb-10" style="font-size: 16px;">Main Components in AML/CFT Framework</p>
					<img src="{{ url('/images/about-aya/aml-cft/AML_chart.webp') }}" class="img-fluid" style="padding: 0;">

					<div class="space-30"></div>

					<p>An effective and comprehensive Anti-Money Laundering and Counter Financing of Terrorism (AML/CFT) framework often encompasses the seven key elements identified above. The operational success of such a framework heavily depends on each individual component functioning optimally and in concert with others.</p>
					<p>Under this extensive AML/CFT structure, we undertake a proactive and systematic approach to curb potential illegal activities. We strive to identify, prevent, and report any suspicious activity, which may indicate terrorist financing or money laundering, thereby contributing to the stability and integrity of the financial system.</p>
					<p>Our meticulous vigilance against such illicit activities involves constant monitoring of transactions to detect unusual patterns, implementing rigorous customer due diligence procedures to understand the nature of our clients' activities, and training our staff regularly on the latest trends and methods in money laundering and terrorism financing. We are committed to upholding the highest standards of compliance and continuously enhancing our framework to ensure its effectiveness.</p>
					<p>When suspicious activity is identified, we follow stringent reporting protocols, adhering to both internal procedures and regulatory requirements. This ensures that the appropriate authorities are informed promptly, allowing for swift action to be taken.</p>
					<p>By embracing these rigorous measures, we aim to ensure our financial institution is not only compliant with the laws and regulations governing AML/CFT but also actively contributes to the broader societal fight against money laundering and the financing of terrorism. In doing so, we protect our clients, our reputation, and the integrity of the global financial system.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')