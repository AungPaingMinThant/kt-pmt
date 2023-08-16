@extends('layouts.frontend-app')

@section('title', 'Sustainability – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/sustainability.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'sustainability'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold mb-10">Our Pledge to a Sustainable Strategy</h4>
					<hr class="bottom_hr">
					<p>In our mission to build a better future for Myanmar, we firmly embed the principle of "Sustainability" at the core of our operations. It's intricately woven into every facet of our business, ranging from operational procedures to corporate culture and communication.</p>
					<p>As part of our strategic commitments, we adhere to a set of guiding principles that primarily focus on treating our internal and external customers, along with the communities we serve, with utmost respect. We aim to utilize natural resources responsibly, thus fostering a spirit of long-term investment. It's imperative for us to evaluate how our business operations affect and benefit others from environmental, economic, and social perspectives. The path to sustainable development is paved by maintaining a harmonious balance between these key aspects.</p>
					<p>Culture plays a pivotal role in establishing sustainability throughout our Bank's operations. We adhere to the principle of "setting the tone at the top". Our steadfast leadership and vibrant corporate culture foster an environment that encourages sustainable business practices throughout the Bank.</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<h4 class="fw-semibold">Delving Deeper into Sustainability</h4>
					<p>We are embarking on significant strides toward augmenting sustainability by:</p>
					<div class="space-20"></div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/about-aya/sustainability/establishing_sustainability_goals.webp') }}" class="img-fluid mb-20 sustainability_strides">
						<p class="fw-semibold">Establishing Sustainability goals</p>
						<p>We delineate precise, quantifiable goals to enhance our sustainability performance and monitor their progression.</p>
					</div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/about-aya/sustainability/undertaking_sustainability_audit.webp') }}" class="img-fluid mb-20 sustainability_strides">
						<p class="fw-semibold">Undertaking a Sustainability Audit</p>
						<p>We assess our Bank's current practices, pinpoint areas that require enhancement, and implement necessary improvements.</p>
					</div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/about-aya/sustainability/engaging_employees.webp') }}" class="img-fluid mb-20 sustainability_strides">
						<p class="fw-semibold">Engaging Employees</p>
						<p>Employees are instrumental in realizing the Bank's sustainability goals. We cultivate a culture of sustainability within the Bank by involving employees at every level.</p>
					</div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/about-aya/sustainability/partnering_suppliers.webp') }}" class="img-fluid mb-20 sustainability_strides">
						<p class="fw-semibold">Partnering with Suppliers</p>
						<p>We collaborate with our suppliers to foster sustainable practices throughout our supply chain.</p>
					</div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/about-aya/sustainability/communicating_stakeholders.webp') }}" class="img-fluid mb-20 sustainability_strides">
						<p class="fw-semibold">Communicating with Stakeholders</p>
						<p>We convey our sustainability initiatives to stakeholders, including customers, investors, and the community, to facilitate better decision-making and improve accountability.</p>
					</div>
				</div>
				<div class="space-20"></div>
			</div>
			<div style="background-color: #a02225;">
				<div class="container-fluid" style="padding: 40px 40px 0px 40px;">
					<div class="row" >
						<div class="col-md-3 pillar_column" style="position: relative;">
							<img src="{{ url('/images/about-aya/sustainability/3_pillar.webp') }}" class="img-fluid three_pillar_statue">
							<p class="fw-light f-white" style="font-size: 21px;position: absolute;top: 0;">Our sustainability efforts revolve around three primary pillars – People, Profit, and Planet.</p>
						</div>
						<div class="col-md-3 pillar_column">
							<div class="row">
								<div class="col-8">
									<p class="fw-semibold">The Social Pillar <br>(For People)</p>
								</div>
								<div class="col-4 text-right">
									<img src="{{ url('/images/about-aya/sustainability/social_pillar.webp') }}" class="three_pillar_icon">
								</div>
								<div class="space-30"></div>
								<div class="col-md-12">
									<p class="mb-0">The Social Pillar (For People) emphasizes business practices that enhance the health, safety, and well-being of people, encompassing all our stakeholders – employees, customers, partners, and local communities. This involves ensuring equitable access to natural resources and necessities like water, food, and clean air, while fostering a diverse, equitable, and inclusive organization, ensuring employee welfare, fair wages, gender equality, and the safety of workers and customers.</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 pillar_column">
							<div class="row">
								<div class="col-8">
									<p class="fw-semibold">The Economic Pillar <br>(For Profit)</p>
								</div>
								<div class="col-4 text-right">
									<img src="{{ url('/images/about-aya/sustainability/economic_pillar.webp') }}" class="three_pillar_icon">
								</div>
								<div class="space-30"></div>
								<div class="col-md-12">
									<p class="mb-0">The Economic Pillar (For Profit) concentrates on long-term planning, governance, cost optimization, and transparency in our business operations. We give due consideration to the business models, policies, and practices that need to be implemented to ensure the survival and prosperity of our business as an economic entity that provides employment and economic opportunities for society.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 pillar_column">
							<div class="row">
								<div class="col-8">
									<p class="fw-semibold">The Environmental Pillar <br>(For Planet)</p>
								</div>
								<div class="col-4 text-right">
									<img src="{{ url('/images/about-aya/sustainability/environmental_pillar.webp') }}" class="three_pillar_icon">
								</div>
								<div class="space-30"></div>
								<div class="col-md-12">
									<p class="mb-0">The Environmental Pillar (For Planet) aims to reduce environmental harm, protect the planet, and minimize the use of natural resources. The overarching goal is to halt the depletion of resources over time. This involves practices like waste management, reducing fossil fuel consumption, and promoting more sustainable consumer practices.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="space-20"></div>
			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-4 sustainability_CTA_col">
						<div class="card h-100">
							<div style="position: relative;">
								<img src="{{ url('/images/about-aya/sustainability/social_sustainability.webp') }}" alt="Social Sustainability" class="card-img-top">
								<p class="social_sustainability_CTA_tagline">Our Unwavering Pledge to a Sustainable Future</p>
							</div>
							<div class="card-body">
								<p class="card-title fw-semibold mb-20" style="font-size: 16px;">Social Sustainability</p>
								<p class="card_detail_info mb-30">We are dedicated to expressing our commitment towards playing our part in crafting a sustainable future. Social sustainability serves as an indicator of community welfare and expanding opportunities for everyone, now and in the future. This encompasses fostering a workplace that is respectful, collaborative, and inclusive, promoting professional growth and development, and enabling us to attract, retain, and engage employees effectively.</p>

								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/social-sustainability#enriching_lives_financial') }}">Enriching Lives through Financial Inclusion <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/social-sustainability#championing_human_rights') }}">Championing Human Rights - Fundamental for a Prosperous Future! <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline mb-0">
									<a href="{{ url('/about-aya/sustainability/our-approach/social-sustainability#business_ethics') }}">Business Ethics - An Imperative Competence <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 sustainability_CTA_col">
						<div class="card h-100">
							<img src="{{ url('/images/about-aya/sustainability/environmental_sustainability.webp') }}" alt="Environmental Sustainability" class="card-img-top">
							<p class="environmental_sustainability_CTA_tagline">Save the Environment, Save our Future!</p>
							<div class="card-body">
								<p class="card-title fw-semibold mb-20" style="font-size: 16px;">Environmental Sustainability</p>
								<p class="card-title fw-semibold mb-20">
									Reaffirming our Commitment</a>
								</p>
								<p class="card_detail_info mb-30">We are acutely aware that our business activities may directly or indirectly affect the environment. This encompasses our operations as well as broader concerns such as land and energy consumption, waste management, and water and air pollution. To maintain an ecological balance and safeguard the environment, we are committed to adopting eco-friendly technologies and products and actively participating in environmental conservation efforts.</p>

								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/environmental-sustainability#join_us_making_difference') }}">Join us in Making a Difference! <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/environmental-sustainability#leading_charge_green_financing') }}">Leading the Charge in Green Financing! <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/environmental-sustainability#planting_trees_future_generations') }}">Planting Trees for Future Generations! <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/environmental-sustainability#combating_air_pollution') }}">Combating Air Pollution Actively! <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/environmental-sustainability#embrace_digitalization_protect') }}">Embrace Digitalization and Protect the Planet! <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline mb-0">
									<a href="{{ url('/about-aya/sustainability/our-approach/environmental-sustainability#recovering_impact_digital_transformation') }}">Recovering the Impact of Digital<br>Transformation! <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 sustainability_CTA_col">
						<div class="card h-100">
							<img src="{{ url('/images/about-aya/sustainability/economic_sustainability.webp') }}" alt="Economic Sustainability" class="card-img-top">
							<p class="economic_sustainability_CTA_tagline">Embracing Economic Sustainability: Responsible, Ethical, and Profitable Business Practices</p>
							<div class="card-body">
								<p class="card-title fw-semibold mb-20" style="font-size: 16px;">Economic Sustainability</p>
								<p class="card_detail_info mb-30">We firmly believe that the essence of economic sustainability in business involves conducting our operations responsibly, optimizing our bottom line without inflicting harm on the environment and society that surround us. It is our mission to create a business model that is not only profitable for the Bank but also holds itself accountable, adheres to ethical standards, and contributes positively to society and the environment.</p>

								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/economic-sustainability#long_term_planning_cornerstone_sustainability') }}">Long-term Planning - The Cornerstone of Sustainability <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/economic-sustainability#cost_optimization_key_driver_towards_sustainability') }}">Cost Optimization - A Key Driver towards Sustainability <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline">
									<a href="{{ url('/about-aya/sustainability/our-approach/economic-sustainability#empowering_micro_small_medium_enterprises_overcome_economic_challenges') }}">Empowering Micro, Small, and Medium Enterprises – Overcome Economic Challenges <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
								<p class="text-decoration-underline mb-0">
									<a href="{{ url('/about-aya/sustainability/our-approach/economic-sustainability#focus_retail_banking_tailoring_services_customers_needs') }}">Focus on Retail Banking - Tailoring Services to Customers' Needs <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="space-40"></div>
			</div>

			<div style="background-color: #fafcfc;">
				<div class="container">
					<div class="space-40"></div>
					<div class="row">
						<h4 class="fw-semibold mb-10">UNGC Compliance</h4>
						<hr class="bottom_hr">
						<p>We take immense pride in being one of the signatories of the UN Global Compact (UNGC), the world's largest initiative designed to steer corporations towards practices fostering a sustainable and inclusive future. As active participants in the UNGC, we regularly provide updates on our progress concerning the implementation of the UNGC's Ten Principles and the activities we undertake in line with them.</p>

						<p class="text-decoration-underline">
							<a href="{{ url('/about-aya/sustainability/our-commitment/ungc-compliance') }}">View all our Commitment</a>
						</p>
					</div>
					<div class="space-30"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.footer', ['page'=>''])


@endsection('content')