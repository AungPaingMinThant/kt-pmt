@extends('layouts.frontend-app')

@section('title', 'Corporate Strategy – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/our-strategies.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_strategy'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<p>As Myanmar's one of the largest banks, AYA Bank benefits from a substantial client base and a diverse economy brimming with development opportunities. Our ambition is to utilize our industry know-how and cutting-edge digital competencies to fuel AYA Bank's sustainable growth, all while fostering a steady economic climate that underpins our long-term expansion objectives.</p>
					<p>Embracing our recently revamped three-year strategy, we're dedicated to positioning AYA Bank as Myanmar's most reliable and trusted financial institution, with a strong customer-first approach. Our objective is to offer tailor-made solutions that address both individual needs and corporate demands. We recognize that a consistent, clear strategic approach is the key to achieving continued growth and delivering long-term value to our stakeholders.</p>
					<p>To effectively implement our strategies, we emphasize having robust enablers as the underlying cornerstone of our banking operations. Ensuring that the Bank's operations align with our inherent values and principles, and are sustainable, is of utmost importance.</p>

					<div class="space-20"></div>
					
					<h4>Our Strategic Pillars</h4>

					<div class="col-md-3 pillar_graphic_outer">
						<div class="row pillar_graphic sale_productivity">
							<p class="sale_productivity_lbl">SALES PRODUCTIVITY</p>
						</div>
					</div>
					<div class="col-md-3 pillar_graphic_outer">
						<div class="row pillar_graphic credit_infra">
							<p class="credit_infra_lbl">CREDIT INFRASTRUCTURE</p>
						</div>
					</div>
					<div class="col-md-3 pillar_graphic_outer">
						<div class="row pillar_graphic digitalization">
							<p class="digitalization_lbl">DIGITALIZATION</p>
						</div>
					</div>
					<div class="col-md-3 pillar_graphic_outer">
						<div class="row pillar_graphic innovation">
							<p class="innovation_lbl">INNOVATION</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="space-80"></div>

			<div class="our_key_enabler_section">
				<div class="container">
					<div class="row">
						<h4>Our Key Enablers</h4>

						<div class="col-md-4 key_enablers_outer" >
							<img src="{{ url('/images/about-aya/corporate-strategy/health_culture_icon.webp') }}" class="img-fluid key_enablers_icon">
							<p class="key_enablers_health_lable">HEALTH AND CULTURE</p>
						</div>
						<div class="col-md-4 key_enablers_outer" >
							<img src="{{ url('/images/about-aya/corporate-strategy/organization_icon.webp') }}" class="img-fluid key_enablers_icon">
							<p class="key_enablers_org_lable">ORGANIZATION</p>
						</div>
						<div class="col-md-4 key_enablers_outer">
							<img src="{{ url('/images/about-aya/corporate-strategy/finance_icon.webp') }}" class="img-fluid key_enablers_icon key_enablers_finance_icon">
							<p class="key_enablers_finance_lable">FINANCE</p>
						</div>
					</div>
				</div>
			</div>

			<div class="space-80"></div>

			<div class="strategic_pillars">
				<div class="container">
					<div class="row">
						<h4 class="mb-10">Our Strategic Pillars</h4>
						<hr class="pillar_bottom_hr">

						<div class="space-20"></div>

						<div class="col-md-6 strategic_pillar_col increase_sale_productivity">
							<h5 class="fw-bold">Maximizing Sales Productivity</h5>
							<p>Consistent enhancement of sales productivity forms a crucial aspect of our strategic approach, emphasizing gradual optimization through effective sales planning and a highly skilled sales force.</p>
							<div class="row">
								<div class="col-md-1 pillar_bullet_col">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-md-11 pillar_bullet_fact_col">
									<p class="mb-10">Quick Team Enablement</p>
									<p>Our front-line staff is expertly trained with effective sales toolkits to exceed ever-changing customer expectations and tackle any challenges.</p>
								</div>
								<div class="col-md-1 pillar_bullet_col">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-md-11 pillar_bullet_fact_col">
									<p class="mb-10">Adoption of Sales Tools</p>
									<p>We harness state-of-the-art sales tools to better monitor the bank's sales activities, identify promising leads swiftly, and aid data-driven decision making to streamline sales processes.</p>
								</div>
								<div class="col-md-1 pillar_bullet_col">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-md-11 pillar_bullet_fact_col">
									<p class="mb-10">Targeting the Right Sales Goals</p>
									<p>We set and concentrate on specific, measurable objectives that align with realistic targets.</p>
								</div>
								<div class="col-md-1 pillar_bullet_col">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-md-11 pillar_bullet_fact_col">
									<p class="mb-10">Sales Performance Tracking with Key Metrics</p>
									<p>We use key metrics to ensure alignment with set goals, enabling us to detect potential issues and devise effective solutions.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 strategic_pillar_col accelerating_digitalization">
							<h5 class="fw-bold">Accelerating Digitalization</h5>
							<p>Given the growing importance of digitalization in banking, we are dedicated to its acceleration, ensuring 24/7 access to the Bank. Significant investments in digitalization will improve customer experience and their lifestyle over time. We utilize modern technological tools to optimize our work processes and digitize operations. Stabilizing the core banking system is one of our main priorities, simplifying business processes for round-the-clock operations. Also, the increasing regulatory demands on financial institutions propel us towards digitalization, enabling us to respond to regulatory pressure effectively.</p>
						</div>
						<div class="col-md-6 strategic_pillar_col strength_credit_infra">
							<h5 class="fw-bold">Strengthening Credit Infrastructure</h5>
							<p>Our priority is to invest in the improvement of our credit infrastructure, facilitating high-quality loan products and enhancing the efficiency of our credit risk decisions through digitalization. This approach helps us manage our capital more effectively, stay ahead in managing exposures and clients, streamline service delivery, and support front-line business growth strategies.</p>
						</div>
						<div class="col-md-6 strategic_pillar_col creating_values_innovation">
							<h5 class="fw-bold">Creating Values through Innovation</h5>
							<p>Our creativity inspires us to identify and fulfill unmet needs innovatively, thereby creating greater value for our customers and societies. We constantly stay abreast of evolving banking trends, making banking more convenient, efficient, and secure through innovation.</p>
						</div>
					</div>
					<div class="space-40"></div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="">
				<div class="container">
					<div class="row">
						<h4 class="mb-10">Our Key Enablers</h4>
						<hr class="pillar_bottom_hr">
					</div>
					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-5">
							<img src="{{ url('/images/about-aya/corporate-strategy/health_culture.webp') }}" class="img-fluid">
						</div>
						<div class="col-md-7 health_culture_desc_col">
							<div class="row">
								<p class="enabler_title">Health and Culture</p>
								<p>AYA Bank acknowledges that organizational health and culture impact our employees’ performance, the Bank's productivity, and our strategic objectives. </p>
								<p>We've established a distinctive culture that transcends internal aspirations and is governed by our bank’s <a href="{{ url('/about-aya/who-we-are/corporate-profile/mission-corporate-value-brand-promise') }}" class="fw-semibold theme_text_color text-decoration-underline">core values</a> and <a href="{{ url('/about-aya/who-we-are/corporate-profile/mission-corporate-value-brand-promise') }}" class="fw-semibold theme_text_color text-decoration-underline">brand promise</a>. </p>
								<p>We build purpose-driven, performance-focused, and principles-led organizations, promoting employees’ health and safety through workplace health programs, policies, compensation benefits, and rewards.</p>
							</div>
						</div>
					</div>
					<div class="space-40"></div>
					
					<div class="row organization_row">
						<div class="col-md-7 organization_desc_col">
							<div class="row">
								<p class="enabler_title">Organization</p>
								<p>Customer-centricity pervades our culture and all employee actions. Our top management spearheads change across the bank and sets the tone for the workforce. </p>
								<p>We emphasize understanding customer needs and crafting tailored solutions. We create empowered teams with a shared purpose, adopting an agile approach to thrive amid change.</p>
							</div>
						</div>
						<div class="col-md-5">
							<img src="{{ url('/images/about-aya/corporate-strategy/organization.webp') }}" class="img-fluid">
						</div>
					</div>
					
					<div class="space-50"></div>
					
					<div class="row">
						<div class="col-md-5">
							<img src="{{ url('/images/about-aya/corporate-strategy/finance.webp') }}" class="img-fluid">
						</div>
						<div class="col-md-7 health_culture_desc_col">
							<div class="row">
								<p class="enabler_title">Finance</p>
								<p>Finance plays a pivotal role in building a sustainable organization and influencing outcomes. It is the core of our business, expanding our reach across the bank’s priority areas. The objective of Finance is to maximize shareholder value by providing timely and reliable data, and key financial recommendations for informed business and strategic decisions. </p>
								<p>Finance works in close collaboration with Senior Management to understand business outlooks, potential threats, and to quantify their financial impact and it is also the strategic partner of the business units. It plays a critical role in reviewing the effectiveness of cost optimization, efficient asset utilization, and effective liabilities management in line with the relevant regulatory requirements. </p>
								<p>In essence, Finance safeguards the organization's interests while driving sustainable growth for all stakeholders.</p>
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