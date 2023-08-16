@extends('layouts.frontend-app')

@section('title', 'AYA Culture – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/career.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'aya_culture'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<p>AYA Bank PCL stands as a vibrant community serving a diverse clientele and is a beacon of inclusion for individuals from all walks of life. Our culture is meticulously curated to be a bridge connecting our people to their aspirations, thereby empowering them to make significant contributions to both the economy and the environment. At AYA Bank, we strive to bring out the best in each of us, to better serve each other!</p>
				</div>
				<div class="space-20"></div>

				<div class="row">
					<h4 class="fw-semibold mb-10 theme_text_color">Our Values</h4>
					<p>Our culture is anchored in our core values - Excellence, Team Spirit, Honesty, Integrity, Care, and Sincerity - which form the bedrock of AYA Bank's culture. We encourage every member of our team to embody and radiate these values. They are our commitment to our people, customers, the community, and all stakeholders, fostering a warm and inclusive environment where diversity is celebrated, and everyone's viewpoints are valued and respected. These values inspire us to create a culture that emphasizes,</p>

					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-4 our_value_point_col">
							<div class="card card-h">
								<div class="row text-center">
									<img src="{{ url('/images/about-aya/career/aya-culture/innovation_icon.webp') }}" alt="Innovation" class="card-img-top our_value_point_img">
								</div>
								<div class="card-body">
									<p class="card-title fw-semibold mb-20" style="font-size: 16px;">Innovation</p>
									<p class="card_detail_info mb-30">AYA is a cradle for the inventive spirit and the pursuit of continuous learning. We endeavor to foster the growth of our people, develop innovative products, ideate groundbreaking strategies, and continually enhance our service delivery mechanisms, all the while consciously working towards achieving a more sustainable business model.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 our_value_point_col">
							<div class="card card-h">
								<div class="row text-center">
									<img src="{{ url('/images/about-aya/career/aya-culture/purposeful_intent.webp') }}" alt="Purposeful Intent" class="card-img-top our_value_point_img">
								</div>
								<div class="card-body">
									<p class="card-title fw-semibold mb-20" style="font-size: 16px;">Purposeful Intent</p>
									<p class="card_detail_info mb-30">At AYA Bank's core lies a profound commitment to the welfare of the people and places it serves. This purpose-driven ethos ensures every employee feels valued, recognized, and integral to our mission.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 our_value_point_col">
							<div class="card card-h">
								<div class="row text-center">
									<img src="{{ url('/images/about-aya/career/aya-culture/collaboration_icon.webp') }}" alt="Purposeful Intent" class="card-img-top our_value_point_img">
								</div>
								<div class="card-body">
									<p class="card-title fw-semibold mb-20" style="font-size: 16px;">Collaboration</p>
									<p class="card_detail_info mb-30">Our leadership model encourages and enables everyone to bring their unique talents and enthusiasm to the fore in order to achieve collective goals. Our team members are well-informed, empowered to make sound decisions, and supported in their path to success, irrespective of whether they are individual contributors, managers, or seasoned leaders. To encourage healthy working relationships and collaboration, we foster strong and authentic bonds between employees with team bonding activities and events.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA_div drive_growth_CTA">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-4 CTA_detail_col_1"></div>
						<div class="col-md-8 CTA_detail_col_2">
							<p class="f-white fw-semibold" style="font-size: 20px;">Governance and Ethical Practices</p>
							<p class="f-white">By adhering to the established norms of corporate governance and ethical responsibilities, AYA Bank PCL consistently delivers tangible outcomes, thereby cementing our status as a front-runner in responsible finance. Adherence to legal compliance and regulatory obligations, far from being a mere necessity for financial institutions, paves the way for new opportunities. By embracing ethical practices and exercising due diligence, AYA Bank seamlessly aligns its diverse development model, its Corporate Social Responsibility (CSR) objectives, and its internal policies and procedures. </p>
							<p class="f-white">This conscientious approach extends to safeguarding against corruption, performing thorough due diligence, and conducting risk assessments. We are committed to upholding the highest standards of governance and ethics, and expect all senior management, officers, and employees, by virtue of their affiliation with AYA Bank PCL, to exemplify the highest standards of personal and professional integrity. It is our expectation that everyone adheres to the Corporate Governance Guidelines and complies with all applicable laws, rules, and regulations within the country.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA2_div">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-8 CTA2_detail_col_1">
							<p class="theme_text_color fw-semibold" style="font-size: 20px;">Equal Opportunity, Embracing Diversity, and Championing Inclusion</p>
							<p>At AYA Bank PCL, we champion equal opportunities for all our employees and prospective talents, irrespective of their race, religion, sexual orientation, marital status, age, or genetic information. We consistently strive to enhance equality and inclusivity in our workplace, making it a thriving and nurturing environment for everyone.</p>
							<p style="font-size: 20px;">Leadership and Commitment</p>
							<p>Our management team sets the tone with a resolute ambition and an active roadmap advocating for equality, diversity, and inclusion. We steadfastly uphold policies promoting non-discrimination and equal opportunities, along with unbiased talent acquisition and selection processes. Several in-house initiatives propel us towards this objective, and our partnerships with non-profit organizations further our commitment to gender equality. Our efforts to foster an internationally inclusive environment have earned us the EDGE Certification (The Certification for Workplace Diversity, Equity, and Inclusion) since 2019. This esteemed certification is the global benchmark for effective assessment methodology and standardization in the realm of workplace diversity.</p>
							<p>At AYA Bank PCL, we ensure that: </p>
							<div class="row">
								<div class="col-1 bullet_square_col">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11 leadership_commitment">
									Each individual feels unique, valued, and acknowledged. 
								</div>
							</div>
							<div class="row">
								<div class="col-1 bullet_square_col">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11 leadership_commitment">
									Our high-performing teams are a vibrant mix of varied skills, backgrounds, professions, and experiences. 
								</div>
							</div>
							<div class="row">
								<div class="col-1 bullet_square_col">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11 leadership_commitment">
									Our leaders contribute actively towards building a more equitable environment.
								</div>
							</div>
							<div class="row">
								<div class="col-1 bullet_square_col">
									<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11 leadership_commitment">
									Diversity and inclusion are non-negotiable business necessities.
								</div>
							</div>
						</div>
						<div class="col-md-4 CTA2_detail_col_2"></div>
					</div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA_div">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-4 CTA_detail_2_col_1"></div>
						<div class="col-md-8 CTA_bond_detail_col_2">
							<p class="f-white fw-semibold" style="font-size: 20px;">Bonded by Shared Values</p>
							<p class="f-white">Our team is united by shared values and common goals, fostering a robust sense of engagement and camaraderie. Our workforce mirrors the communities we serve and constitutes a multi-generational fabric that:</p>
							<div class="row">
								<div class="col-1 bullet_square_col">
									<img src="{{ url('/images/white_bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11 leadership_commitment f-white">
									Presents challenges, but we keep our eyes on the larger vision and continually learn from one another. 
								</div>
							</div>
							<div class="row">
								<div class="col-1 bullet_square_col">
									<img src="{{ url('/images/white_bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11 leadership_commitment f-white">
									Benefits from a wide spectrum of skills and experiences. 
								</div>
							</div>
							<div class="row">
								<div class="col-1 bullet_square_col">
									<img src="{{ url('/images/white_bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11 leadership_commitment f-white">
									Grasps the differing needs of each generation and explores solutions, which often leads to unearthing new opportunities.
								</div>
							</div>
							<div class="row">
								<div class="col-1 bullet_square_col">
									<img src="{{ url('/images/white_bullet_square.jpg') }}" class="img-fluid bullet_square">
								</div>
								<div class="col-11 leadership_commitment f-white">
									Communicates and aligns with each other at town hall meetings for more engagement between operational units
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA2_div">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-8 CTA3_detail_col_1">
							<p class="theme_text_color fw-semibold" style="font-size: 20px;">Continual Growth and Learning</p>
							<p>We are committed to perpetual evolution and are constantly inspired to envision and build for the future. We encourage ongoing learning and development to ensure our people are well-prepared to meet the demands of an ever-changing, increasingly digitalized work environment. Our investments in training and development across all levels allow us to cultivate a robust succession pipeline of future leaders.</p> 
							<p>We also foster a culture of listening, which encourages our people to align their personal values with AYA’s core values, thereby strengthening our collective mission.</p>
						</div>
						<div class="col-md-4 CTA3_detail_col_2"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')