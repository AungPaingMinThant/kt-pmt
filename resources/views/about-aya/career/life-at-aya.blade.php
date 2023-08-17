@extends('layouts.frontend-app')

@section('title', 'Life At AYA – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/career.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'life_at_aya'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<h4 class="fw-semibold">What makes us unique?</h4>
					<p>Here at AYA Bank, you will find every opportunity to build a meaningful career and working toward a better shared future. With an inclusive culture, excellent learning and development, and a reward package that lets our people set their priorities, there are plenty of reasons this is a great place to work.</p>

					<div class="space-30"></div>

					<iframe width="887" height="499" src="https://www.youtube.com/embed/hbW64vpUkd4" title="The Inspiring Future of Banking with AYA Bank" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class="space-60"></div>
			</div>
				
			<div class="life-at-aya-section" style="background-color: #fafcfc;">
				<div class="container">
					<div class="row py-5 life-at-aya-section-row">
						<div class="col-md-5 life-at-aya-desc-col">
							<p class="theme_text_color fw-semibold" style="font-size: 16px;">Work-life balance</p>
							<p>For many people, work finishes at the end of the working day. But for some, it exceeds normal scheduled working hours for the day, even weekends, and holidays. We believe in the power of employee’s work-life balance and adopt the workplace practices to minimize work-related stress, excessive workload, and hostile work environment.</p>
							<p class="mb-0 theme_text_color">
								<a class="theme_text_color life-at-aya-link" data-bs-toggle="modal" data-bs-target="#work-life-balance-modal">Find out more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
							</p>
						</div>
						<div class="col-md-7 text-right">
							<img src="{{ url('/images/about-aya/career/life-at-aya/work_life_balance.webp') }}" alt="Work-life balance" class="img-fluid life-at-aya-images">
						</div>
					</div>
				</div>
			</div>

			<div class="life-at-aya-section">
				<div class="container">
					<div class="row py-5 life-at-aya-section-row">
						<div class="col-md-7">
							<img src="{{ url('/images/about-aya/career/life-at-aya/health_wellness.webp') }}" alt="Health and Wellness" class="img-fluid life-at-aya-images-invert">
						</div>
						<div class="col-md-5 life-at-aya-desc-col">
							<p class="theme_text_color fw-semibold" style="font-size: 16px;">Health and Wellness</p>
							<p>Our people professionals take a lead role in steering the health and wellness agenda. We ensure that everyone in the organization from top management to operational staff regards it as a priority and integrate health practices into the Bank’s day-to-day operations. We take a proactive approach and develop programs to promote the physical and mental health of our people as well as to prevent issues from arising.</p>
							<p class="mb-0 theme_text_color">
								<a class="theme_text_color life-at-aya-link" data-bs-toggle="modal" data-bs-target="#health-wellness-modal">Find out more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="life-at-aya-section" style="background-color: #fafcfc;">
				<div class="container">
					<div class="row py-5 life-at-aya-section-row">
						<div class="col-md-5 life-at-aya-desc-col">
							<p class="theme_text_color fw-semibold" style="font-size: 16px;">Financial Wellbeing</p>
							<p>While maintaining priority of products and services which are beneficial and convenient for our customers, AYA Bank remains vigilant and focused on supporting our internal customers, “Our employees”. We use our creativity and take actions to make a positive difference to the world and our employees. As part of our commitment to be a great place to work, we fully understand the different requirements of diverse people and develop various financial benefits to accommodate their needs. </p>
							<p class="mb-0 theme_text_color">
								<a class="theme_text_color life-at-aya-link" data-bs-toggle="modal" data-bs-target="#financial-wellbeing-modal">Find out more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
							</p>
						</div>
						<div class="col-md-7 text-right">
							<img src="{{ url('/images/about-aya/career/life-at-aya/financial_wellbeing.webp') }}" alt="Financial Wellbeing" class="img-fluid life-at-aya-images">
						</div>
					</div>
				</div>
			</div>

			<div class="life-at-aya-section">
				<div class="container">
					<div class="row py-5 life-at-aya-section-row">
						<div class="col-md-7">
							<img src="{{ url('/images/about-aya/career/life-at-aya/family_support_care.webp') }}" alt="Family Support and Care" class="img-fluid life-at-aya-images-invert">
						</div>
						<div class="col-md-5 life-at-aya-desc-col">
							<p class="theme_text_color fw-semibold" style="font-size: 16px;">Family Support and Care</p>
							<p>AYA Bank understands that a career is made up of many things – ranging from professional growth to supporting a family. We focus on supporting our people as well as their families, making sure they can be their best both at work and at home.</p>
							<p class="mb-0 theme_text_color">
								<a class="theme_text_color life-at-aya-link" data-bs-toggle="modal" data-bs-target="#family-support-care-modal">Find out more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="life-at-aya-section" style="background-color: #fafcfc;">
				<div class="container">
					<div class="row py-5 life-at-aya-section-row">
						<div class="col-md-5 life-at-aya-desc-col">
							<p class="theme_text_color fw-semibold" style="font-size: 16px;">Rewards</p>
							<p>AYA Bank is committed to turning employees’ dreams into reality. We believe that the elements of <i>“reward and recognizing”</i> for the individual efforts and work accomplishment, and reinforce the desired behaviors displayed by our people is a good culture to be built. And it is yet incredibility impactful to ensure ongoing success of the Bank.</p>
							<p class="mb-0 theme_text_color">
								<a class="theme_text_color life-at-aya-link" data-bs-toggle="modal" data-bs-target="#rewards-modal">Find out more <i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></a>
							</p>
						</div>
						<div class="col-md-7 text-right">
							<img src="{{ url('/images/about-aya/career/life-at-aya/rewards.webp') }}" alt="Rewards" class="img-fluid life-at-aya-images">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="work-life-balance-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 px-5 modal-desc">
						<h5 class="theme_text_color fw-semibold mb-20">Work-life balance</h5>

						<p class="mb-10">For many people, work finishes at the end of the working day. But for some, it exceeds normal scheduled working hours for the day, even weekends, and holidays. We believe in the power of employee’s work-life balance and adopt the workplace practices to minimize work-related stress, excessive workload, and hostile work environment.</p>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">We recognize that each employee is different, takes attentive listening to our people and approach to find what works best.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">We support for flexible and remote working as and when necessary and based on nature of work.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">We allow free time for corporate level volunteering activity for return to community.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">We offer a range of useful benefits for physical wellness, studying and family support.</p>
							</div>
						</div>
						<p>These opportunities give AYA people the work-life balance, which is necessary to make them happier, motivated, and more productive.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="health-wellness-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 px-5 modal-desc">
						<h5 class="theme_text_color fw-semibold mb-20">Health and Wellness</h5>

						<p class="mb-10">Our people professionals take a lead role in steering the health and wellness agenda. We ensure that everyone in the organization from top management to operational staff regards it as a priority and integrate health practices into the Bank’s day-to-day operations. We take a proactive approach and develop programs to promote the physical and mental health of our people as well as to prevent issues from arising.</p>

						<div class="space-20"></div>
						<div class="table-responsive text-nowrap sh_table_div">
							<table class="table table-bordered sh_table">
								<thead>
									<tr>
										<th style="width: 33.33%;">Healthy Body</th>
										<th style="width: 33.33%;">Healthy Mind</th>
										<th style="width: 33.33%;">Healthy Workplace</th>
									</tr>
								</thead>
								<tbody>
									<tr valign="top">
										<td>
											<ul style="list-style: disc;padding-left: 15px;">
												<li><p>Welfare Support for medical coverage</p></li>
												<li><p>Life Insurance</p></li>
												<li><p>Health and safety awareness</p></li>
												<li><p>Fitness sessions</p></li>
												<li><p>Arrangements for recreation in workplace</p></li>
											</ul>
										</td>
										<td>
											<ul style="list-style: disc;padding-left: 15px;">
												<li><p>‘Employee Voice Channel’ to access people professionals to discuss concerns and issues.</p></li>
												<li><p>Harness a culture of appreciation and recognition.</p></li>
												<li><p>Workshops and tools to help support wellness</p></li>
												<li><p>Practices to bring ‘mindfulness based stress release’ to the workplace</p></li>
												<li><p>Talent development programs that motivate and engage employees</p></li>
											</ul>
										</td>
										<td>
											<ul style="list-style: disc;padding-left: 15px;">
												<li><p>Drive diversity and inclusion for better employee engagement and relationship</p></li>
												<li><p>Corporate level networking activities</p></li>
												<li><p>Firm policies, procedures and guidelines for non-discrimination, anti-harassment, and grievance mechanisms</p></li>
											</ul>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="space-20"></div>
						
						<p>During the COVID-19 pandemic, we were able to provide our workforce with timely support from quarantine center, vaccination campaigns, and healthcare packages to ‘မေတ္တာဖြင့်မျှဝေခြင်း Sharing with Care’ program. We establish various arrangements to promote health and general well-being of our people while maintaining a stable and sustainable way to work.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="financial-wellbeing-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 px-5 modal-desc">
						<h5 class="theme_text_color fw-semibold mb-20">Financial Wellbeing</h5>

						<p class="mb-10">While maintaining priority of products and services which are beneficial and convenient for our customers, AYA Bank remains vigilant and focused on supporting our internal customers, “Our employees”. We use our creativity and take actions to make a positive difference to the world and our employees. As part of our commitment to be a great place to work, we fully understand the different requirements of diverse people and develop various financial benefits to accommodate their needs.</p>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact"><b>Cost of Living Allowance (COLA) program</b> to help our employees cope with unexpected hardships that place undue financial stress on them and their families.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact"><b>Sharing with Care Program</b> to provide necessities to non-clerical staff during COVID-19 pandemic.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact"><b>Financial assistance through staff loan program</b> to provide financing and long-term benefits to our people. </p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact"><b>Employee loan benefit</b> offers special rate of interest to employee on consumer loans including home loan and auto loan</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact"><b>Provident Fund</b> offers special rate of interest to employee on consumer loans including home loan and auto loan</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="family-support-care-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 px-5 modal-desc">
						<h5 class="theme_text_color fw-semibold mb-20">Family Support and Care</h5>

						<p class="mb-10">AYA Bank understands that a career is made up of many things – ranging from professional growth to supporting a family. We focus on supporting our people as well as their families, making sure they can be their best both at work and at home.</p>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">We grant <b>maternity Leave</b> with full coverage to bring female employees to be able to balance between work and family life. We are leading the impressive initiative of having <b>a Lactation Room</b> for all the working moms at AYA Bank Head Offices.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact"><b>Paternity leave</b> is also provided for the working fathers to enable them in spending time with their new-born child.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">Our <b>family support scheme</b> cover marriage allowance, childbirth support and child education allowance.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">Families of our people are taken care of during COVID-19 pandemic by provision of <b>financial support, and quarantine facility arrangement</b> for immediate families together with <b>‘family care package’ and ‘healthcare package’</b> by AYA Bank.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact"><b>Be understanding</b> – Our strong and compassionate leaders play a crucial role here. Perhaps their staff have young children or troubled teenagers, or elderly or sick parents that they care for. Without crossing professional boundaries, leaders are empowered for flexible arrangement and result-based performance management system.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="rewards-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 px-5 modal-desc">
						<h5 class="theme_text_color fw-semibold mb-20">Rewards</h5>

						<p class="mb-30">AYA Bank is committed to turning employees’ dreams into reality. We believe that the elements of <i>“reward and recognizing”</i> for the individual efforts and work accomplishment, and reinforce the desired behaviors displayed by our people is a good culture to be built. And it is yet incredibility impactful to ensure ongoing success of the Bank. We recognize them for their contribution, initiative for the bank and outstanding performance through compliments, gratitude, private notes or emails, awards as well as empower them to pursue their varied interests, in both professional and personal lives. To ensure the success of every AYA personnel, we offer meaningful rewards, and associate recognition programs.</p>

						<p class="fw-semibold mb-10" style="font-size: 16px;">Monetary Rewards</p>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">Competitive incentive scheme-based performance, and achievements.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">End-of-year bonus designed as lump-sum payment in cash.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">Allowances according to job nature and position.</p>
							</div>
						</div>

						<div class="space-20"></div>
						
						<p class="fw-semibold mb-10" style="font-size: 16px;">Non-monetary Rewards</p>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">Appreciation with a note or words in public.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">Promotion for employee who positively exceeds the expectations in their current role.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1 bullet_square_col">
								<img src="{{ url('/images/bullet_square.jpg') }}" class="img-fluid life_at_aya_bullet_square">
							</div>
							<div class="col-11">
								<p class="work-life-balance-fact">Fringe benefits such as medical leave, commuter benefits, etc.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.footer', ['page'=>''])


@endsection('content')