@extends('layouts.frontend-app')

@section('title', 'Corporate Social Responsibility – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/csr.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_social_responsibility'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<p>AYA Bank views Corporate Social Responsibility (CSR) as a fundamental element of our corporate strategies, embodying our dedication to serving society in the best possible manner. We recognize our responsibility towards stakeholders and the public, and we strive to make a meaningful impact by operating in ways that benefit society and the environment.</p>
					<p>Being mindful of our actions, we acknowledge the extensive influence we have on various aspects of society, encompassing economic, social, and environmental dimensions.</p>
					<p>In pursuit of achievable and positive long-term goals for our people and the wider community, we have categorized AYA Bank's Corporate Social Responsibility into five key areas:</p>
				</div>
			</div>

			<div class="our_key_enabler_section">
				<div class="container">
					<div class="row">
						<h4>&nbsp;</h4>

						<div class="col-md-4 text-center" >
							<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/healthy_life_style.webp') }}" class="img-fluid key_enablers_icon">
							<p class="csr_key_lable">Healthy Lifestyle</p>
							<p class="key_enablers_health_desc">We advocate for and actively promote initiatives that contribute to a healthy lifestyle, supporting the well-being of individuals and communities.</p>
						</div>
						<div class="col-md-4 text-center" >
							<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/gender_equality.webp') }}" class="img-fluid key_enablers_icon">
							<p class="csr_key_lable">Gender Equality</p>
							<p class="key_enablers_health_desc">We are committed to fostering gender equality and ensuring an inclusive and diverse environment within the bank and the communities we serve.</p>
						</div>
						<div class="col-md-4 text-center" >
							<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/corporate_digital_responsibility.webp') }}" class="img-fluid key_enablers_icon">
							<p class="csr_key_lable">Corporate<br>Digital Responsibility</p>
							<p class="key_enablers_health_desc">Recognizing the significance of the digital age, we embrace responsible digital practices and promote digital literacy to benefit society.</p>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 extra_space"></div>
						<div class="col-md-2 text-center"></div>
						<div class="col-md-4 text-center">
							<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/financial_inclusion.webp') }}" class="img-fluid key_enablers_icon">
							<p class="csr_key_lable">Financial Inclusion</p>
							<p class="key_enablers_health_desc">We strive to enhance financial inclusion, empowering individuals, and businesses to access financial services and opportunities.</p>
						</div>
						<div class="col-md-4 text-center">
							<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/community_engagement.webp') }}" class="img-fluid key_enablers_icon">
							<p class="csr_key_lable">Community Engagement</p>
							<p class="key_enablers_health_desc">We actively engage with communities, investing time and resources to address their specific needs and contribute positively to their development.</p>
						</div>
						<div class="col-md-2 text-center"></div>
					</div>

					<div class="space-40"></div>
					<div class="row">
						<p>By upholding these principles of Corporate Social Responsibility, AYA Bank aims to play a constructive role in creating a better and more sustainable future for all.</p>
					</div>
				</div>
			</div>

			<div class="space-30"></div>
			<div class="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="nav-align-top">
								<ul class="nav nav-pills key_area_tab" role="tablist">
									<li class="nav-item">
										<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-healthy-lifestyle" aria-controls="navs-pills-top-healthy-lifestyle" aria-selected="true" >
											Healthy Lifestyle
										</button>
									</li>
									<li class="nav-item">
										<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-gender-equality" aria-controls="navs-pills-top-gender-equality" aria-selected="false" >
											Gender Equality
										</button>
									</li>
									<li class="nav-item">
										<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-corporate-digital-responsibility" aria-controls="navs-pills-top-corporate-digital-responsibility" aria-selected="false" >
											Corporate Digital Responsibility
										</button>
									</li>
									<li class="nav-item">
										<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-financial-inclusion" aria-controls="navs-pills-top-financial-inclusion" aria-selected="false" >
											Financial Inclusion
										</button>
									</li>
									<li class="nav-item">
										<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-community-engagement" aria-controls="navs-pills-top-community-engagement" aria-selected="false" >
											Community Engagement
										</button>
									</li>
								</ul>
								<div class="tab-content" style="padding: 30px 0px 0px 0px;">
									<div class="tab-pane fade healthy-lifestyle show active" id="navs-pills-top-healthy-lifestyle" role="tabpanel">
										<div class="csr_tab_banner healthy_lifestyle_banner_row"></div>
										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<p class="theme_text_color fw-semibold mb-30" style="font-size: 18px;">Our CSR Approach to Healthy Lifestyle - Health, Happiness, and Harmony</p>
											</div>
											<div class="col-md-12">
												<p>At the core of our success lies the well-being of our people, who serve as the foundation of our achievements. As part of our Corporate Social Responsibility (CSR) commitment, we strive to create and foster a healthy living environment for both our employees and the broader community, aiming to maximize the benefits of good health.</p>
												<p>We firmly believe that cultivating healthy habits can significantly enhance mood, creativity, and productivity. Thus, we actively encourage our employees and the community to adopt and maintain healthy and active lifestyles, reaping the long-term advantages that contribute to overall well-being.</p>
												<p>Our approach to promoting well-being encompasses various aspects:</p>
											</div>
										</div>

										<table class="table table-borderless">
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Emotional_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Emotional Well-Being:</span> We prioritize the emotional well-being of our employees by fostering practices that promote stress management, relaxation techniques, resilience, self-love, and the cultivation of positive emotions.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Physical_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Physical Well-Being:</span> We are dedicated to improving the physical well-being of our workforce and the community through the promotion of healthy living habits and regular exercise.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Workplace_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Workplace Well-Being:</span> We go above and beyond to create a work environment that aligns with the interests, values, and life purpose of our employees, ensuring a sense of meaning, happiness, and professional enrichment.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Social_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Social Well-Being:</span> We place great emphasis on fostering effective communication, meaningful relationships, and strong support networks to combat loneliness and nurture social well-being.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Societal_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Societal Well-Being:</span> We actively engage with the community to contribute to its growth and prosperity, promoting a thriving culture and environment.
													</p>
												</td>
											</tr>
										</table>

										<div class="space-20"></div>
										<div class="row">
											<p>Through these comprehensive efforts, we aim to build overall well-being that encompasses the harmonious functioning of emotions, body, social networks, life purpose, and community, ultimately creating a healthier, happier, and more vibrant society for everyone involved.</p>
										</div>
									</div>
									<div class="tab-pane gender-equality fade" id="navs-pills-top-gender-equality" role="tabpanel">
										<div class="csr_tab_banner gender_equality_banner_row"></div>
										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<p class="theme_text_color fw-semibold mb-30" style="font-size: 18px;">Our CSR Approach to Gender Equality – Careers Have No Genders</p>
											</div>
											<div class="col-md-12">
												<p>Gender equality is not only a fundamental human right but also a crucial factor in achieving peaceful and sustainable societies while unlocking the full human potential. At AYA, we firmly believe in treating everyone equally, providing equal opportunities for all to contribute to the organization's and the nation's development. Our commitment to gender equality ensures a harmonious and productive working environment, leading to the creation of peaceful societies.</p>
												<p>To promote gender equality within our organization, we have implemented various measures to reduce gender bias during recruitment, selection, and allocation of career development opportunities. Our goal is to ensure equal access to employment and positions of leadership and decision-making at all levels. We have taken steps to enhance accountability and transparency in opportunities provided to both men and women.</p>
												<p>Through our unwavering dedication to gender equality, we have achieved a balanced representation of male and female staff across different levels of the organization. At the operational level, we have 46% male and 54% female employees. At the managerial level, the ratio stands at 34% male and 66% female. Furthermore, at the strategic level, we have 65% male and 35% female representation. Overall, our collective workforce comprises 45% male and 55% female members.</p>
												<p>We firmly believe that fostering gender equality not only empowers individuals but also enriches the organization's capabilities and contributes to a more equitable and progressive society. As we continue to uphold these principles, we are dedicated to fostering an inclusive environment that values and respects the contributions of every individual, regardless of gender.</p>
											</div>
										</div>
									</div>
									<div class="tab-pane corporate-digital-responsibility fade" id="navs-pills-top-corporate-digital-responsibility" role="tabpanel">
										<div class="csr_tab_banner corporate_digital_responsibility_banner_row"></div>
										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<p class="theme_text_color fw-semibold mb-30" style="font-size: 18px;">Corporate Digital Responsibility - Fostering Responsible Digital Transformation</p>
											</div>
											<div class="col-md-12">
												<p>In the era of digitalization, which has revolutionized the way we produce, work, and cooperate, banking institutions like ours must actively contribute to the development of new values and innovative digital solutions to meet the evolving needs of people in the virtual age.</p>
												<p>As part of AYA Bank's digital transformation journey, we have embraced both digitalization and digitization processes, integrating cutting-edge technologies throughout the Bank's operations to drive fundamental change. This transformation aims to enhance efficiency, increase business agility, and create new value propositions for our employees, customers, and shareholders. Our corporate social responsibility approach, aligned with our digital transformation, paves the way for new and improved solutions that elevate customer experiences, foster employee innovation, and keep us ahead of the curve.</p>
												<p>In this digitally interconnected society, Corporate Digital Responsibility and Digital Ethics are integral concepts guiding our responsible digitization practices. We uphold a set of practices and behaviors that ensure the integrity of our banking business while using data and digital technologies in socially, economically, and environmentally responsible ways.</p>
												<p>Our guiding principles are as follows:</p>
											</div>
										</div>

										<table class="table table-borderless">
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Emotional_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Digital Ethics:</span> While we recognize the advantages of using personal data for innovation in banking services, product development, and marketing, we are steadfast in protecting consumer data, building trust, and advancing our banking business responsibly.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Physical_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Digital Stewardship:</span> We take personal data stewardship seriously and align our practices with the expectations of our customers. Our approach to information management is proactive and sustainable.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Workplace_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Digital Transparency:</span> We prioritize transparency in our use and storage of personal data, ensuring customers have a clear understanding of how their data is utilized.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/Social_Well_Being.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Data Empowerment:</span> We empower our customers by granting them greater control over their data. Through data analytics, we assist customers in making well-informed decisions.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/csr_digital_literacy.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Digital Literacy:</span> We actively educate and support individuals, societies, and communities in using digital banking applications safely and securely.
													</p>
												</td>
											</tr>
										</table>

										<div class="space-20"></div>
										<div class="row">
											<p>As we continue this transformative digital journey, AYA Bank remains committed to leveraging technology responsibly and ethically, delivering meaningful and positive impacts for all our stakeholders.</p>
										</div>
									</div>
									<div class="tab-pane financial-inclusion fade" id="navs-pills-top-financial-inclusion" role="tabpanel">
										<div class="csr_tab_banner financial_inclusion_banner_row"></div>
										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<p class="theme_text_color fw-semibold mb-30" style="font-size: 18px;">Accelerating Financial Inclusion - Empowering Access to Financial Services</p>
											</div>
											<div class="col-md-12">
												<p>Financial Inclusion is a vital aspect of achieving national economic and social development, as it ensures universal access to a diverse range of financial services at affordable costs. At our core, as a responsible corporate entity, we recognize the significance of extending financial services to those who remain underserved, partnering with financial institutions to make accessible and affordable solutions available to all.</p>
												<p>The recent Covid-19 crisis has underscored the urgency to further embrace digital innovations in promoting financial inclusion. Our ongoing efforts focus on deploying cost-effective digital channels to cater to the financially excluded and underserved populations, tailoring services to their specific needs. The advent of mobile banking services has played a transformative role in propelling financial inclusion in Myanmar, facilitating payments and savings through mobile phones, creating substantial progress in this endeavor.</p>
												<p>As we embark on our journey towards sustainable growth, we understand the pivotal role financial institutions play in advancing financial inclusion. We aim to take a more direct, personalized, and socially responsible approach to enhance our fundamental role in the following ways:</p>
											</div>
										</div>

										<table class="table table-borderless">
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/accelerating_digital_payments.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Accelerating Digital Payments:</span> We actively promote and facilitate digital payment systems to enable seamless and secure transactions, bridging the gap for those previously excluded from the financial ecosystem.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/supporting_government_initiatives_MSME_credit.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Supporting Government Initiatives for MSME Credit:</span> We wholeheartedly support the government's efforts to increase credit supply to Micro, Small, and Medium Enterprises (MSMEs), playing a pivotal role in fostering their growth and contribution to the economy.
													</p>
												</td>
											</tr>
											<tr>
												<td class="aspects-icon-td py-2">
													<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/leveraging_cash_electronic_interfaces.webp') }}" class="img-fluid aspects-icon">
												</td>
												<td valign="middle">
													<p class="aspects-dec">
														<span class="fw-semibold">Leveraging Cash Electronic Interfaces:</span> We harness the potential of cash electronic interfaces such as Point of Sale (POS) terminals, ATMs, and mobile cash-in cash-out agents to provide convenient access to financial services, particularly for individuals residing in remote areas.
													</p>
												</td>
											</tr>
										</table>

										<div class="space-20"></div>
										<div class="row">
											<p>By prioritizing financial inclusion and embracing digital advancements, we aim to empower individuals and communities with enhanced access to financial services, thus driving sustainable development and commendable outcomes for our country as a whole.</p>
										</div>
									</div>
									<div class="tab-pane community-engagement fade" id="navs-pills-top-community-engagement" role="tabpanel">
										<div class="csr_tab_banner community_engagement_banner_row"></div>
										<div class="space-30"></div>
										<div class="row">
											<div class="col-md-12 text-center">
												<p class="theme_text_color fw-semibold mb-30" style="font-size: 18px;">Uniting People, Creating a Brighter Future - Our Commitment to Inclusive CSR</p>
											</div>
											<div class="col-md-12">
												<p>
													At AYA Bank, we firmly believe in building an inclusive organization that places the well-being of our community at the forefront of our priorities. Consequently, our Corporate Social Responsibility (CSR) activities have evolved into a powerful tool to support sustainability and uplift the lives of those we serve. Since our inception, CSR has been an inherent element ingrained in our organizational culture, reflecting our commitment to making a positive impact.
												</p>
												<p>
													Through community engagement, we empower individuals and communities to take an active role in their own well-being and contribute to decisions that shape community development. We collaborate with local educational institutions, offering financial assistance, continuous learning programs, and flexible working arrangements to support the education and growth of the younger generation.
												</p>
												<p>
													In the healthcare sector, we work closely with local hospitals, dispensaries, and civil society organizations, regardless of their status, to provide vital healthcare services to the public. Our philanthropic initiatives encompass various areas of need, amplifying our dedication to creating a positive change in society.
												</p>
												<p>
													Our focus on youth and women footballers reflects our commitment to the holistic development of Myanmar football, creating opportunities for aspiring talents to shine.
												</p>
												<p>
													Furthermore, we encourage our employees to actively participate in community service initiatives organized by the Bank. From environmental efforts like tree planting to campaigns for safety and health, our team engages in various activities aimed at supporting the community's well-being.
												</p>
												<p>
													Our CSR activities are predominantly implemented directly or through the Ayeyarwady Foundation, ensuring impactful interventions that address the community's needs. During the challenging times of the COVID-19 pandemic, AYA Bank and the Ayeyarwady Foundation took decisive action to combat its impact. Notably, we set up a temporary COVID-Care Hospital with a capacity of over 500 beds and 100 medical staff and volunteers in Thuwanna, Yangon, to provide care for coronavirus-infected patients.
												</p>
												<p>
													Throughout our CSR journey, we have engaged in socio-economic development activities across sectors such as education, health, environment, disaster response, and microfinance, contributing to the well-being of the community we proudly serve.
												</p>
											</div>

											<div class="col-md-12 space-20"></div>
										</div>

										<div class="row philanthropic_row">
											<div class="col-md-6">
												<p class="mb-0" style="font-size: 18px;">Learn more about our philanthropic activities?<br>Click here to explore</p>
											</div>
											<div class="col-md-6 text-right">
												<a href="https://maxmyanmargroup.com/ayeyarwady-foundation/" target="_blank"><button class="btn philanthropic_btn">Ayeyarwady Foundation </button></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="space-30"></div>
			<div style="background-color: #fafcfc;">
				<div class="space-30"></div>
				<div class="container">
					<div class="row">
						<div class="col-6">
							<h4 class="fw-bold">Recent Update</h4>
						</div>
						<div class="col-6 text-right">
							<a class="theme_text_color float-end" href="{{ url('/about-aya/news-room/csr-news') }}"><h4 style="font-size: 14px !important;line-height: 34px;">View all&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></h4></a>
						</div>
					</div>
					<div class="row">
						@foreach($blog_list as $b_list)
							<div class="news_blog col-md-4 mb-4">
								<div class="row news_img_div" style="background-image: url('{{ url("/public/".$b_list->featured_image) }}')">
									<!-- <img src="{{ url($b_list->featured_image) }}" class="img-fluid"> -->
								</div>
								<div class="news_content_div">
									<div class="news_title_div">
										<a href="{{ url('/about-aya/news-room/csr-news/'.$b_list->permalink) }}" class="news_title_link">
											<p class="news_title">{!! html_entity_decode($b_list->blog_title) !!}</p>
										</a>
									</div>
									<div class="news_desc_div">
									    {!! html_entity_decode($b_list->blog_desc) !!}
									</div>
									<span class="news_date mb-0">{{ date('d M Y', strtotime($b_list->publish_date)) }}</span>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				<div class="space-30"></div>
			</div>
		</div>
	</div>
</div>

@include('layouts.footer', ['page'=>''])


@endsection('content')