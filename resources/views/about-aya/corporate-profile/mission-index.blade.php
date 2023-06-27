@extends('layouts.frontend-app')

@section('title', 'Mission, Corporate Values, Brand Promise – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/mission_promise.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'mission_promise'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-bold">Our Mission</h4>
					<p>To be recognized as the leading bank in Myanmar through pursuit of Excellence and long term sustainable growth for the bank and its stakeholders.</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<h4 class="fw-bold">Our Corporate Values</h4>
					<p>Our shared core values form the foundation of the AYA Bank. These values underpin every aspect of all our business dealings, irrespective of the business or jurisdiction involved.</p>
				</div>
				<div class="space-20"></div>
			</div>
			<div class="ethics_section">
				<div class="container">
					<div class="row ethics_box_row">
						<div class="col-2 text-center ethics_box">
							<div class="text-center">
								We pursue our objectives with <b>EXCELLENCE</b>
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">
								We progress as a <b>TEAM</b> with Transparency
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">
								We think and act in all <b>HONESTY</b> & Accountability
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">							
								We maintain <b>INTEGRITY</b> in all our dealings
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">
								We <b>CARE</b> for our customers, our colleagues and the people we interact with and in all our actions
							</div>
						</div>
						<div class="col-2 text-center ethics_box">
							<div class="text-center">							
								We always act with <b>SINCERITY</b>
							</div>
						</div>

						<div class="col-12 space-60"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">Excellence</p>
							<p>We shall strive to deliver the highest quality in every aspect of our business and approach every challenge with a determination to succeed. Improvement can occur at all levels within the Bank. We go beyond good quality and acceptable products, into delivering excellence to our customers in everything we do.
								<ul style="margin-left: 16px;padding-left: 0px;color: #4e4e4e;">
									<li class="mb-20">Delivering excellence is the continued effort AYA Bank makes to improve our services, products, business deals and communications on a daily basis, both peer-to-peer, company-wide and with customers.</li>
									<li class="mb-20">Delivering excellence is filling in the gaps between what our customers voice their needs and what we offer.</li>
									<li>Delivering excellence is to be supportive, responsive and above all, reliable in every performance no matter how big or small</li>
								</ul>
							</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">Team</p>
							<p>We represent AYA bank as a team “One Team, One Goal”. The best teamwork comes from team members who are working independently towards one goal in unison. We break down silos and collaborate across boundaries. In AYA, everyone is given equal opportunity for participation. By being open to different ideas from our colleagues, customers and the world around us, we will find more ways to win.</p>
							<p>We build the culture of working with each other in a way that takes advantage of each team member’s unique strengths to achieve results that exceed the cumulative results they could have individually accomplished. Whatever and however we practiced our business, our transparency in everything we do is our ultimate goal. It is based on collaboration and open communication in both directions, up and down, coordinated by leaders. AYA is committed to helping our customers by working together with equal parts humility and ambition.</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">Honesty</p>
							<p>We affirm that honesty is essential in building trust between us, and our valued customers and stakeholders as stated in our Brand Promise “Your trusted Partner”. We believe ‘honesty’ strengthens trust and brand loyalty. Being honest in the workplace fosters open communication and constructive feedback. We adhere to the highest standards of accuracy and sincerity in advancing the interests of those we represent and in communicating with the public.</p>
							<p>We encourage honesty at work from the start and at all times. We’re honest and open in all that we do. We build open and honest relationships. We have no tolerance for politics, hidden agendas or passive-aggressive behavior. So, all our customers, partners and other stakeholders can feel confident in interacting and collaborating with us. We take pride in our accountable business practices in accordance with our Good Corporate Governance guidelines.</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">Integrity</p>
							<p>We describe integrity as one of the fundamental values and the act of conducting ourselves in an honest, loyal, reliable and ethical way with everyone we do business with. We seek to maintain the highest standards of integrity and independence through a set of strong values and principles. Strengthening resilience, integrity and efficiency of our financial service infrastructure with focus on deepening technology advances.</p>
							<p>What we do have an impact on the industry, people’s lives, and communities. We take this seriously and act with integrity. We are transparent and committed in doing what is best for our customers and our partners. </p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">Care</p>
							<p>We strongly believe that caring is an integral component of an organization and encourage to demonstrate every day by expressing and accepting caring in our professional relationships. Cultivating a caring company culture makes a difference. First impression creates a big impact.</p>
							<p><span class="fw-semibold">WE CARE ABOUT OUR CUSTOMERS</span> - Through our talents, passion and hard work, we constantly push ourselves to connect with others, focus on responding with compassion, and arrive every day inspired to make an impact. To create a Solid Brand Story, we must show customers that we care about their experience and respect them as people.</p>
							<p><span class="fw-semibold">WE CARE ABOUT OUR COMMUNITIES</span> — We aim to make a difference in the communities where we work and live. Our commitment to corporate social responsibility makes a positive impact by strengthening our connections.</p>
						</div>

						<div class="col-12 space-30"></div>

						<div class="col-12 ethics_des_col">
							<p class="theme_text_color fw-bold" style="font-size: 16px;">Sincerity</p>
							<p>It is embedded in our values that sincerity is a strength which allows us to build credibility in the workplace. It is a tremendous asset for an organization, and we always urge employees to portray their sincerity at the workplace. Employees are empowered to find the best and most sincere path to handle tasks and solve issues. This allows us to always see our relationships as collaborative and never adversarial. Since ‘sincerity’ gives the confidence,</p>
							<div class="row">
								<div class="col-1 sincerity_check_icon_col text-right">
									<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
								</div>
								<div class="col-11 sincerity_check_text_col">
									<p class="sincerity_check_text">We are able to attract more clients</p>
								</div>
								<div class="col-1 sincerity_check_icon_col text-right">
									<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
								</div>
								<div class="col-11 sincerity_check_text_col">
									<p class="sincerity_check_text">Our employees trust us more</p>
								</div>
								<div class="col-1 sincerity_check_icon_col text-right">
									<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
								</div>
								<div class="col-11 sincerity_check_text_col">
									<p class="sincerity_check_text">People want to work for us again and continuously</p>
								</div>
								<div class="col-1 sincerity_check_icon_col text-right">
									<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
								</div>
								<div class="col-11 sincerity_check_text_col">
									<p class="sincerity_check_text">We build stronger relationships with your partners and suppliers</p>
								</div>
								<div class="col-1 sincerity_check_icon_col text-right">
									<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
								</div>
								<div class="col-11 sincerity_check_text_col">
									<p class="sincerity_check_text">We are respected by others who know that sincerity is a core value </p>
								</div>
							</div>

							<div class="space-30"></div>

							<div class="row">
								<div class="col-md-4 cat_card">
									<div class="card h-100">
										<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/social_sustainability_thumb.webp') }}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title mb-10">Social Sustainability, the best way to create our Future!</h5>
											<!-- <a href="" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a> -->
										</div>
									</div>
								</div>
								<div class="col-md-4 cat_card">
									<div class="card h-100">
										<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/aya_culture_thumb.webp') }}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title mb-10">AYA Culture</h5>
											<!-- <a href="" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a> -->
										</div>
									</div>
								</div>
								<div class="col-md-4 cat_card">
									<div class="card h-100">
										<img src="{{ url('/images/about-aya/corporate-profile/mission-promise/life_at_aya_thumb.jpg') }}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title mb-10">Life at AYA</h5>
											<!-- <a href="" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a> -->
										</div>
									</div>
								</div>
							</div>

							<div class="space-60"></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="space-40"></div>

			<div class="container">
				<div class="col-12">
					<div class="row">
						<h4 class="fw-bold">Our Brand Promise – Your Trusted Partner</h4>
						<div class="space-20"></div>
					</div>
					<div class="brand_promise">
						<div class="col-md-4 brand_promise_desc">
							<p>AYA Bank is the bank of choice for anyone who is looking for fast, reliable, honest banking relationships. AYA Bank offers the full range of retail and commercial banking products and services and is in tune with domestic customs and international standards in its governance and operations.</p>
							<p>For your long-term banking needs, AYA bank is your trusted partner in Myanmar.</p>
						</div>
						<div class="col-md-8"></div>
					</div>
					<div class="space-20"></div>
					<div class="row">
						<p>Our brand promise represent the foundational commitment and deeply held beliefs that allow AYA to navigate complex situations while keeping our identity and culture at the forefront. AYA Bank regards Brand Promise as a standard and non-negotiable. This will be adopted to give effect to our core values and to guide our relationships with all our stakeholders and other relevant role-players as well as to outline our commitments to them. We strive our utmost to maintain our Brand Promise and enhance the public’s confidence in AYA Bank.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')