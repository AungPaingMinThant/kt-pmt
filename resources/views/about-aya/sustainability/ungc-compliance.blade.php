@extends('layouts.frontend-app')

@section('title', 'UNGC Compliance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/sustainability.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'ungc_compliance'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold mb-10">Commitment towards Sustainable and Inclusive Future</h4>
					<hr class="bottom_hr">
					<p>We take immense pride in being one of the signatories of the UN Global Compact (UNGC), the world's largest initiative designed to steer corporations towards practices fostering a sustainable and inclusive future. As active participants in the UNGC, we regularly provide updates on our progress concerning the implementation of the UNGC's Ten Principles and the activities we undertake in line with them.</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<h4 class="fw-semibold mb-10">Pledge from the Chief Executive Officer of AYA Bank PCL</h4>
					<hr class="bottom_hr">
					<p class="drop-cap">Ayeyarwady Bank Public Company Limited (AYA Bank PCL), as Myanmar's one of the largest bank by customer deposits, loans and advances, capital, branches, and customer count, marches steadfastly towards a sustainable future. The integration of sustainability into our core business practices presents a significant challenge; however, with our principle-based approach, we believe that overcoming these hurdles is well within our reach.</p>
					<p>As a signatory of the UNGC, we strive to align our operations with fundamental responsibilities in areas such as human rights, labor relations, environmental protection, and anti-corruption measures. By integrating the UNGC's Ten Principles into our strategic approach, policies, and procedures, and by cultivating a culture of integrity, we are not only upholding our fundamental duties towards the people and planet but also laying the groundwork for long-term success. We are dedicated to continuously improving our efforts to minimize any adverse environmental impacts on the communities we serve.</p>
					<p>Through multiple initiatives, AYA Bank has been tirelessly working towards enhancing internal governance standards and building credibility and brand value. We remain dedicated to developing a comprehensive corporate social responsibility framework within our business model and ensuring compliance with all UNGC principles aligned with best current practices.</p>
					<p>We would like to share a summary of our progress in adhering to the Ten Principles. We further pledge to communicate this information to our stakeholders via our various communication platforms.</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<h4 class="fw-semibold mb-10">Adherence to UNGC's Ten Principles by AYA Bank</h4>
					<hr class="bottom_hr">
					<div class="space-20"></div>
				</div>
				<div class="row">
					<img src="{{ url('/images/about-aya/ungc-compliance/human_rights_icon.webp') }}" class="img-fluid principle_icon">
					<p class="theme_text_color fw-semibold principle_title"><span style="font-size: 30px;font-weight: bold;">H</span>uman Rights</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<p>AYA Bank has formulated the Code of Ethical Conduct and an Employee Handbook, providing clear guidelines to all employees and offering a standard communication framework for all stakeholders.</p>

					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 1: Businesses should support and respect the protection of internationally proclaimed human rights
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>AYA Bank continues to promote and uphold human rights norms and respect fundamental human rights for all our stakeholders.</li>
											<li>As the bank expands its retail network, our advocacy efforts will reach nationwide.</li>
											<li>Our Whistleblowing policy encourages voicing concerns about any wrongdoing or malpractice.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingTwo">
								<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 2: Make sure that they are not complicit in human rights abuses.
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>AYA Bank remains committed to not assisting in any form of human rights violations.</li>
											<li>Our Human Rights and Code of Ethical Conduct guidelines derive from the Universal Declaration of Human Rights and the Ten Principles of the UNGC. </li>
											<li>We provide ongoing awareness training and offer various channels for staff and stakeholders to express concerns and provide feedback.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="space-40"></div>
				<div class="row">
					<img src="{{ url('/images/about-aya/ungc-compliance/labour_icon.webp') }}" class="img-fluid principle_icon">
					<p class="theme_text_color fw-semibold principle_title"><span style="font-size: 30px;font-weight: bold;">L</span>abour</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<p>AYA Bank is proud to be an "Employer of Choice" with over 6000 employees as of 31st May 2023. We recognize our human capital as the driving force behind our growth to 265 branches within 12 years.</p>

					<div class="accordion" id="accordionLabour">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingThree">
								<button class="accordion-button" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 3: Businesses should uphold the freedom of association and the effective recognition of the right to collective bargaining.
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionLabour">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>We promote a conducive and rewarding work environment, emphasizing transparency in our procedures and processes when dealing with our employees and customers.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingFour">
								<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 4: The elimination of all forms of forced and compulsory labour. 
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionLabour">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>AYA Bank continuously reviews policies and guidelines for transparency and compliance with ILO core labour principles concerning forced labour and underage workers.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingFive">
								<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 5: The effective abolition of child labour.
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionLabour">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>We have the Child Labor Principle in place as part of responsible business conduct. </li>
											<li>Our Human Rights Procedures ensure vendors follow "No Child Labor Standard".</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingSix">
								<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 6: The elimination of discrimination in respect of employment and occupation.
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionLabour">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>AYA Bank has received EDGE Certification for our commitment to gender equality, diversity, and inclusion.</li>
											<li>Our workforce has a 33 percent representation of women on the board of directors and a labour force participation rate of 45 percent men and 55 percent women.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="row">
					<img src="{{ url('/images/about-aya/ungc-compliance/environment_icon.webp') }}" class="img-fluid principle_icon">
					<p class="theme_text_color fw-semibold principle_title"><span style="font-size: 30px;font-weight: bold;">E</span>nvironment</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<p>AYA Bank places a high emphasis on environmental sustainability, incorporating environmentally oriented thinking into our banking operations, lending, products, services, and community activities.</p>

					<div class="accordion" id="accordionEnvironment">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingSeven">
								<button class="accordion-button" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 7: Businesses should support a precautionary approach to environmental challenges.
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionEnvironment">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>We introduced 'SME Green Financing' to support the transition to clean energy and environmental benefits.</li>
											<li>We are offering the financing for Solar energy system which has a measurable effect on the environment.</li>
											<li>Our suppliers must sign a mandatory SCP (Supplier Code of Conduct Policy) to reduce negative environmental impact.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingEight">
								<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 8:  Undertake initiatives to promote greater environmental responsibility.
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionEnvironment">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>AYA Bank goes green by promoting paperless services and products through technological advancements.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingNine">
								<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 9: Encourages the development and diffusion of environmentally friendly technologies.
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionEnvironment">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>We strive to reduce our carbon footprint, setting goals and practices on energy use, waste reduction, offering digital services, and incorporating guidelines on reducing environmental impact into our training programs.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="row">
					<img src="{{ url('/images/about-aya/ungc-compliance/anti_corruption_icon.webp') }}" class="img-fluid principle_icon">
					<p class="theme_text_color fw-semibold principle_title"><span style="font-size: 30px;font-weight: bold;">A</span>nti-Corruption</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<p>Under the Myanmar Anti-Corruption Law 2013, AYA Bank has a stringent Anti-Corruption Policy, taking strict measures against corruption and ensuring transparency in all business activities.</p>

					<div class="accordion" id="accordionAntiCorruption">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingTen">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen" style="font-weight: 600 !important;font-size: 14px !important;position: relative;">
									Principle 10: Businesses should work against corruption in all its forms, including extortion and bribery.
									<span class="accordion-open">
										<i class="menu-icon tf-icons bx bx-plus"></i>
									</span>
									<span class="accordion-close">
										<i class="menu-icon tf-icons bx bx-minus"></i>
									</span>
								</button>
							</h2>
							<div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen" data-bs-parent="#accordionAntiCorruption">
								<div class="accordion-body" style="padding: 20px 20px 0px 20px !important;">
									<div class="row">
										<ul style="list-style: disc;margin-left: 20px;">
											<li>AYA Bank has implemented anti-bribery and anti-corruption policy, ensuring effectiveness along the supply chain.</li>
											<li>We maintain a watchful eye on all financial transactions, identifying any irregular activities, and have clear whistleblowing procedures in place.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="space-40"></div>
				<div class="row text-center py-1 update_date_div">
					<p class="mb-0" style="color: #333333;">Last Updated – June 2023</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')