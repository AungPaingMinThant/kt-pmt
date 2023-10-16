@extends('layouts.frontend-app')

@section('title', 'Corporate Goals – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-goals.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_goals'])

			<div class="container">
				<div class="space-40"></div>
				<div class="row">
					<p>AYA Bank, driven by its core values, has set forth four strategic goals that form the foundation of its strategic direction, proven to be successful throughout the years. These goals are aligned with the bank's commitment to delivering exceptional value to its customers:</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-3 text-center">
						<img src="{{ url('/images/about-aya/corporate-goals/customer_icon.webp') }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_customer') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">01</span><span class="fw-semibold goal_step_title">Customers</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<img src="{{ url('/images/about-aya/corporate-goals/community_icon.webp') }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_community') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">02</span><span class="fw-semibold goal_step_title">Community</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<img src="{{ url('/images/about-aya/corporate-goals/staff_icon.webp') }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_staff') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">03</span><span class="fw-semibold goal_step_title">Staff</span>
							</p>
						</a>
					</div>
					<div class="col-md-3 text-center">
						<img src="{{ url('/images/about-aya/corporate-goals/stakeholder_icon.webp') }}" class="img-fluid">
						<a href="{{ url('/about-aya/who-we-are/corporate-profile/corporate-goals#for_shareholders') }}" style="text-decoration: none !important;">
							<p>
								<span class="fw-bold goal_step_number">04</span><span class="fw-semibold goal_step_title">Shareholders</span>
							</p>
						</a>
					</div>
				</div>
				<div class="space-20" id="for_customer"></div>
			</div>
			
			<div class="section_container_bg for_customer_container" >
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">For Customers</h4>
						<p style="color: #1d1d1f;font-weight: 500;font-size: 16px;">To achieve high level of customer satisfaction by,</p>
						<ul class="for_customer_list" style="color: #1d1d1f;font-weight: 500;font-size: 16px;">
							<li>Providing honest, efficient and courteous service</li>
							<li>Offering a full range of products and services</li>
							<li>Providing easy accessibility in terms of reach and delivery channels</li>
							<li>Employing technology as the enabler for all customer service endeavors</li>
						</ul>
					</div>
					<div class="space-20"></div>
					<div class="row for_customer_CTA">
						<div class="col-md-6">
							<div>
								<p>We are committed to making a positive impact in the communities we serve by fostering fair and responsible banking practices. Whether individuals, business owners, or entrepreneurs, we are dedicated to providing personalized guidance and advice at scale, empowering our customers to make informed financial decisions and build long-term financial wellness and resilience.</p>
								<p class="mission_info" style="display: none;">Central to our operations is our unwavering focus on cultivating a customer-centric culture. It is ingrained in our core values, reflecting our dedication to always putting the customer first. By consistently prioritizing the needs and aspirations of our customers, we aim to foster trust, loyalty, and enduring relationships.</p>
								<p class="mission_info" style="display: none;">At AYA Bank, our commitment to customer satisfaction goes beyond mere words. We actively strive to exceed expectations, continuously innovating and adapting to the evolving needs of our customers. Through our customer-centric initiatives and unwavering dedication, we aim to create lasting value and make a meaningful difference in the lives of our customers.</p>

								<p class="theme_text_color cursor-pointer mission_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer mission_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>

								<img src="{{ url('/images/about-aya/corporate-goals/mission.webp') }}" class="img-fluid">
								<a href="{{ url('about-aya/who-we-are/corporate-profile/mission-corporate-value-brand-promise') }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">Mission, Corporate Values and Brand Value</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<p>At AYA Bank, we leverage our expertise to proactively identify and seize opportunities on behalf of our customers. Through a deep understanding of the financial landscape and market dynamics, we aim to provide strategic guidance and support that enables our customers to capitalize on favorable prospects and achieve their financial goals.</p>
							<p class="social_sustainability_info" style="display: none;">Recognizing the increasing significance of digital channels in today's interconnected world, we place a strong emphasis on investing in a robust digital experience for our customers. By harnessing the power of technology, we strive to deliver seamless and convenient banking services that cater to the evolving needs and preferences of our digitally savvy customers. Our digital initiatives are designed to enhance accessibility, streamline processes, and provide secure and user-friendly platforms for our customers to manage their finances with ease.</p>
							<p class="social_sustainability_info" style="display: none;">We are committed to driving financial inclusion across Myanmar, particularly in rural areas, to connect underserved communities to mainstream banking services. We understand that access to financial resources and services is crucial for socioeconomic development and empowerment. By accelerating action on financial inclusion, we aim to bridge the gap between urban and rural areas, ensuring that all individuals have equal opportunities to participate in the formal financial system. Through innovative approaches, inclusive products, and extensive outreach efforts, we strive to empower rural communities and enable them to thrive economically.</p>
							<p class="social_sustainability_info" style="display: none;">At AYA Bank, our dedication to our customers extends beyond traditional banking services. We are driven by a passion for unlocking potential, creating opportunities, and fostering sustainable growth. Through our expertise, digital advancements, and commitment to financial inclusion, we aim to empower individuals and communities, supporting them in their journey towards financial success and a brighter future.</p>
							
							<p class="theme_text_color cursor-pointer social_sustainability_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer social_sustainability_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>

							<img src="{{ url('/images/about-aya/corporate-goals/social_sustainability.webp') }}" class="img-fluid">
							<a href="{{ url('about-aya/sustainability/our-approach/social-sustainability') }}" style="text-decoration: none !important;">
								<p class="for_customer_mission_tagline">Social Sustainability</p>
							</a>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>
			
			<div class="section_container_bg for_community_container" id="for_community" style="background-color: #f9f9fb">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">For Community</h4>
						<p style="color: #1d1d1f;font-weight: 500;font-size: 16px;">To be a good corporate citizen and build long term sustainable and active engagement with the community we serves</p>
					</div>
					<div class="space-20"></div>
					<div class="row for_community_CTA">
						<div class="col-md-6">
							<div>
								<p>Our strategic goal for the community encompasses the following principles:</p>
								<ul class="ungc_list">
									<li>Demonstrating Our Values: We firmly believe in upholding our values and operating in a transparent and ethical manner. We actively engage with the public, fostering open communication and providing insights into our operations and decision-making processes. <span class="ungc_list_info" style="display: none;">By doing so, we strive to build trust and confidence while ensuring a sustainable future for all stakeholders.</span></li>
									<li class="ungc_list_info" style="display: none;">Embracing Sustainability: Sustainability lies at the core of our operations. As a responsible organization, we are proud to be one of the signatory companies of the UN Global Compact (UNGC). We integrate the UNGC principles into our practices, policies, and operations, with a particular focus on human rights, labor standards, environmental preservation, and combating corruption. By adhering to these principles, we contribute to the advancement of global sustainability goals while aligning our actions with internationally recognized standards.</li>
									<li class="ungc_list_info" style="display: none;">Active Community Engagement: We recognize the importance of active engagement with the community. Through our initiatives, we aim to make a positive impact, supporting the well-being and development of the communities we serve. We actively seek opportunities to collaborate with local organizations, government agencies, and community leaders to address social challenges, promote economic growth, and enhance the overall quality of life.</li>
								</ul>
								<p class="ungc_list_info" style="display: none;">At AYA Bank, our commitment to the community extends beyond financial services. We are dedicated to fostering an inclusive and sustainable future, guided by our core values and international standards. Through responsible practices, meaningful engagement, and strategic partnerships, we strive to create a lasting and positive impact on the communities we serve.</p>

								<p class="theme_text_color cursor-pointer ungc_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer ungc_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>

								<img src="{{ url('/images/about-aya/corporate-goals/UNGC_commitment.webp') }}" class="img-fluid">
								<a href="{{ url('about-aya/sustainability/our-commitment/ungc-compliance') }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">UNGC Commitment</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<p>At AYA Bank, we deeply understand the importance of contributing to the well-being of our communities and the individuals who call them home. To fulfill this responsibility, we have established a comprehensive Corporate Social Responsibility (CSR) Policy that guides our actions and ensures the generation of value for all stakeholders.</p>
							<p class="csr_info" style="display: none;">Our CSR initiatives go beyond philanthropy and are rooted in a socially responsible culture. We actively engage with various interest groups, including customers, suppliers, employees, shareholders, business partners, stakeholders, and the broader society. By doing so, we aim to create a positive impact on multiple fronts, fostering sustainable development and nurturing a sense of collective well-being.</p>
							<p class="csr_info" style="display: none;">Aligned with our CSR Policy, we promote activities that generate value for all stakeholders. These activities are designed to have a meaningful and lasting impact, addressing social, economic, and environmental challenges. Through our CSR efforts, we contribute to the communities we serve while upholding our commitment to responsible and sustainable business practices.</p>
							<p class="csr_info" style="display: none;">Incorporating CSR into our business strategy, we ensure that our operations reflect a comprehensive approach to social responsibility. We integrate sustainability considerations, ethical practices, and community engagement into our decision-making processes. By doing so, we strive to create shared value, where our business objectives align with the interests and needs of our stakeholders.</p>
							<p class="csr_info" style="display: none;">At AYA Bank, we believe that true success is not measured solely by financial performance but also by the positive impact we have on society and the environment. Through our CSR initiatives and sustainable business strategy, we are dedicated to making a difference, fostering a culture of social responsibility, and contributing to a better future for all.</p>

							<p class="theme_text_color cursor-pointer csr_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer csr_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>

							<img src="{{ url('/images/about-aya/corporate-goals/social_sustainability.webp') }}" class="img-fluid">
							<a href="{{ url('about-aya/sustainability/corporate-social-responsibility') }}" style="text-decoration: none !important;">
								<p class="for_community_csr_tagline">Corporate Social Responsibility</p>
							</a>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>

			<div class="section_container_bg for_staff_container" id="for_staff">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">For Staff</h4>
						<p style="color: #1d1d1f;font-weight: 500;font-size: 16px;">To ensure a highly competent and dedicated workforce by implementing transparent policies, and fostering staff well-being and goodwill</p>
					</div>
					<div class="space-20"></div>
					<div class="row for_staff_CTA">
						<div class="col-md-6">
							<div>
								<p>Our strategic goal for staff encompasses the following principles:</p>
								<ul class="ungc_list">
									<li>Equality and Inclusivity: We are deeply committed to creating a workplace that upholds equal rights, responsibilities, and opportunities for all genders. We actively promote gender equality and have been honored with the globally recognized EDGE Certificate for Gender Equality awarded by the Business Coalition for Gender Equality (BCGE) Association. <span class="people_info" style="display: none;">Through our policies and practices, we strive to foster an inclusive and diverse workforce where every individual feels valued and has the opportunity to thrive.</span></li>
									<li class="people_info" style="display: none;">Transparent Policies: We believe in transparency and clarity when it comes to our policies and procedures. We ensure that our staff understands the expectations placed upon them through the adoption of a comprehensive business code of ethics. This code outlines the standards of conduct related to ethics, values, environment, diversity, employee respect, and customer service. By providing clear guidelines, we establish a framework that guides our employees' behavior and helps maintain the highest professional standards.</li>
									<li class="people_info" style="display: none;">Upholding Corporate Policies: We hold our staff to the highest standards of professionalism and conduct, both in their work and general behavior. Our corporate policies serve as guiding principles for our employees, ensuring that they adhere to ethical practices and comply with the policies set forth by the organization. We expect our staff to embrace these policies and contribute to maintaining the reputation and integrity of AYA Bank.</li>
								</ul>
								<p class="people_info" style="display: none;">At AYA Bank, we are dedicated to cultivating a positive work environment that values and supports our staff. We prioritize their well-being, personal growth, and professional development. By creating a culture of respect, transparency, and accountability, we foster a workforce that is highly motivated, committed, and equipped to deliver exceptional service to our customers and stakeholders.</p>

								<p class="theme_text_color cursor-pointer people_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer people_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>

								<img src="{{ url('/images/about-aya/corporate-goals/people.webp') }}" class="img-fluid">
								<a href="{{ url('about-aya/career/aya-culture') }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">AYA Culture</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<p>The well-being and safety of our employees are of paramount importance. We recognize the significance of creating a clear workplace health and safety program that not only protects our employees but also prevents accidents and injuries.</p>
							<p>By implementing robust health and safety policies and procedures, we ensure compliance with government legislation related to health and safety. <span class="emp_development_info" style="display: none;">This commitment enables us to provide a secure and healthy working environment where our employees can thrive and contribute effectively.</span></p>
							<p class="emp_development_info" style="display: none;">In addition to ensuring a safe workplace, we are dedicated to enhancing the skills and capabilities of our employees. We organize comprehensive learning and development programs that empower our staff to go above and beyond in their roles. These initiatives encompass training sessions, workshops, and other developmental opportunities that enable our employees to acquire new skills, expand their knowledge, and stay abreast of industry trends. By investing in their growth and professional development, we foster a culture of continuous learning and equip our employees with the tools they need to excel in their careers.</p>
							<p class="emp_development_info" style="display: none;">Recognizing the importance of education, we understand the value of supporting our staff who choose to pursue part-time education programs. To accommodate their educational pursuits, we initiate flexible working hours, allowing them to balance their work responsibilities with their educational commitments. This flexibility enables our employees to further their education, broaden their horizons, and achieve their personal and professional goals.</p>
							<p class="emp_development_info" style="display: none;">We prioritize the holistic well-being of our employees, fostering a culture that values their health, safety, and personal growth. By providing a safe working environment, offering learning and development opportunities, and supporting educational pursuits, we strive to create a workplace that nurtures and empowers our staff to reach their full potential.</p>

							<p class="theme_text_color cursor-pointer emp_development_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer emp_development_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>

							<img src="{{ url('/images/about-aya/corporate-goals/social_sustainability.webp') }}" class="img-fluid">
							<a href="{{ url('about-aya/career/employee-development') }}" style="text-decoration: none !important;">
								<p class="for_customer_mission_tagline">Employee Development</p>
							</a>
						</div>
						<div class="space-60"></div>
						<div class="col-md-12 staff_quote">
							<p style="font-size: 20px;">“ Young people need confidence to express their ideas which could improve the Bank. They need to seek opportunity to talk openly. They need to find a room for creativity. They need to be courageous to share their initiatives. For the benefit of the Bank and to accelerate its growth, I would like to encourage young people to come up with innovative ideas and plans. ” </p>
							<small>U Zaw Zaw, Founder and Chairman</small>
						</div>
					</div>
					<div class="space-60"></div>
				</div>
			</div>

			<div class="section_container_bg for_shareholders_container" id="for_shareholders" style="background-color: #f9f9fb">
				<div class="space-60"></div>
				<div class="container">
					<div class="row">
						<h4 class="fw-bold" style="color: #1d1d1f;">For Shareholders</h4>
						<p style="color: #1d1d1f;font-weight: 500;font-size: 16px;">To build sustained shareholder value through rapid growth, international standards of governance, risk and compliance</p>
					</div>
					<div class="space-20"></div>
					<div class="row for_shareholders_CTA">
						<div class="col-md-6">
							<div>
								<p>Our strategic goal for shareholders focuses on the following principles:</p>
								<ul class="ungc_list">
									<li>Governance, Risk, and Compliance: Our Board of Directors and executive management team work in close collaboration to ensure that we comply with relevant laws, regulations, and industry best practices. We have established effective governance structures that provide guidance for sound decision-making, accountability, and transparency. <span class="governance_framework_info" style="display: none;">By upholding high standards of corporate governance, we strive to meet our responsibilities to all stakeholders, including our valued shareholders.</span></li>
									<li class="governance_framework_info" style="display: none;">Risk Identification and Management: We recognize the importance of identifying and managing potential risks to safeguard the assets of the bank and its shareholders. We have robust risk management frameworks and processes in place to identify, assess, and mitigate risks effectively. By proactively managing risks, we aim to protect the interests of our shareholders and ensure the long-term sustainability of our business.</li>
									<li class="governance_framework_info" style="display: none;">Balanced Stakeholder Interests: At AYA Bank, we believe in serving the interests of shareholders, customers, and employees in a well-balanced manner, both in the present and the future. We are committed to creating value for our shareholders by driving sustainable growth and profitability. Simultaneously, we prioritize the needs and satisfaction of our customers, ensuring they receive exceptional service and products. Furthermore, we value our employees as key contributors to our success, fostering a supportive and rewarding work environment that recognizes their contributions.</li>
								</ul>
								<p class="governance_framework_info" style="display: none;">By adhering to international standards and embracing the principles of governance, risk management, and compliance, we strive to create an environment of trust, stability, and sustained shareholder value. At AYA Bank, we are dedicated to maintaining the confidence of our shareholders while pursuing strategies that drive growth and profitability, thus ensuring a prosperous future for all stakeholders involved.</p>
								<p class="governance_framework_info" style="display: none;">We understand the importance of taking a long-term view in creating value for our shareholders. We are committed to fostering constructive and meaningful communication with our shareholders, recognizing their vital role in the success of our organization.</p>

								<p class="theme_text_color cursor-pointer governance_framework_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
								<p class="theme_text_color cursor-pointer governance_framework_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>

								<img src="{{ url('/images/about-aya/corporate-goals/governance_framework.webp') }}" class="img-fluid">
								<a href="{{ url('/about-aya/governance/corporate-governance#governance-framework') }}" style="text-decoration: none !important;">
									<p class="for_customer_mission_tagline">Governance Framewok</p>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<p>Transparency and commitment to our shareholders are top priorities for us. We strive to build trust through open and transparent communication channels. By providing accessible, accurate, and timely information, we ensure that our shareholders are well-informed about the company's performance, strategy, and key developments. We strictly adhere to our duties to inform shareholders, fulfilling our responsibilities to provide comprehensive and reliable information.</p>
							<p class="report_info" style="display: none;">We recognize that effective communication is a two-way process. We actively engage with our shareholders, listening to their perspectives, feedback, and concerns. By maintaining a dialogue, we can better understand their expectations and incorporate their insights into our decision-making processes. We value the trust placed in us by our shareholders and are committed to nurturing strong relationships built on transparency, integrity, and mutual respect.</p>
							<p class="report_info" style="display: none;">As part of our commitment to transparency, we comply with all regulatory requirements and best practices governing shareholder communication. We go beyond mere compliance, aiming to exceed expectations and deliver clear and concise information that enables our shareholders to make informed decisions.</p>
							<p class="report_info" style="display: none;">At AYA Bank, we view our shareholders as long-term partners in our journey toward sustained growth and success. By prioritizing transparency, commitment, and trust in our communication efforts, we aim to build enduring relationships and ensure that our shareholders have the necessary information to confidently participate in the company's progress.</p>

							<p class="theme_text_color cursor-pointer report_info_read_more">Read More&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>
							<p class="theme_text_color cursor-pointer report_info_hide d-none">Show Less&nbsp;<i class='bx bx-chevron-up' style="font-size: 18px;line-height: 18px;"></i>&nbsp;</p>

							<img src="{{ url('/images/about-aya/corporate-goals/report.webp') }}" class="img-fluid">
							<a href="{{ url('/about-aya/news-room/reports') }}" style="text-decoration: none !important;">
								<p class="for_community_csr_tagline">Reports</p>
							</a>
						</div>
					</div>
					<div class="space-100"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.footer', ['page'=>''])

<script type="text/javascript">
	$(".mission_info_read_more").click(function() {
		$(".mission_info").show('toggle');
		$(".mission_info_hide").removeClass('d-none');
		$(".mission_info_read_more").addClass('d-none');
	});
	$(".mission_info_hide").click(function() {
		$(".mission_info").hide('toggle');
		$(".mission_info_read_more").removeClass('d-none');
		$(".mission_info_hide").addClass('d-none');
	});

	$(".social_sustainability_info_read_more").click(function() {
		$(".social_sustainability_info").show('toggle');
		$(".social_sustainability_info_hide").removeClass('d-none');
		$(".social_sustainability_info_read_more").addClass('d-none');
	});
	$(".social_sustainability_info_hide").click(function() {
		$(".social_sustainability_info").hide('toggle');
		$(".social_sustainability_info_read_more").removeClass('d-none');
		$(".social_sustainability_info_hide").addClass('d-none');
	});

	$(".ungc_info_read_more").click(function() {
		$(".ungc_list_info").show('toggle');
		$(".ungc_info_hide").removeClass('d-none');
		$(".ungc_info_read_more").addClass('d-none');
	});
	$(".ungc_info_hide").click(function() {
		$(".ungc_list_info").hide('toggle');
		$(".ungc_info_read_more").removeClass('d-none');
		$(".ungc_info_hide").addClass('d-none');
	});

	$(".csr_info_read_more").click(function() {
		$(".csr_info").show('toggle');
		$(".csr_info_hide").removeClass('d-none');
		$(".csr_info_read_more").addClass('d-none');
	});
	$(".csr_info_hide").click(function() {
		$(".csr_info").hide('toggle');
		$(".csr_info_read_more").removeClass('d-none');
		$(".csr_info_hide").addClass('d-none');
	});

	$(".people_info_read_more").click(function() {
		$(".people_info").show('toggle');
		$(".people_info_hide").removeClass('d-none');
		$(".people_info_read_more").addClass('d-none');
	});
	$(".people_info_hide").click(function() {
		$(".people_info").hide('toggle');
		$(".people_info_read_more").removeClass('d-none');
		$(".people_info_hide").addClass('d-none');
	});

	$(".emp_development_info_read_more").click(function() {
		$(".emp_development_info").show('toggle');
		$(".emp_development_info_hide").removeClass('d-none');
		$(".emp_development_info_read_more").addClass('d-none');
	});
	$(".emp_development_info_hide").click(function() {
		$(".emp_development_info").hide('toggle');
		$(".emp_development_info_read_more").removeClass('d-none');
		$(".emp_development_info_hide").addClass('d-none');
	});

	$(".governance_framework_info_read_more").click(function() {
		$(".governance_framework_info").show('toggle');
		$(".governance_framework_info_hide").removeClass('d-none');
		$(".governance_framework_info_read_more").addClass('d-none');
	});
	$(".governance_framework_info_hide").click(function() {
		$(".governance_framework_info").hide('toggle');
		$(".governance_framework_info_read_more").removeClass('d-none');
		$(".governance_framework_info_hide").addClass('d-none');
	});

	$(".report_info_read_more").click(function() {
		$(".report_info").show('toggle');
		$(".report_info_hide").removeClass('d-none');
		$(".report_info_read_more").addClass('d-none');
	});
	$(".report_info_hide").click(function() {
		$(".report_info").hide('toggle');
		$(".report_info_read_more").removeClass('d-none');
		$(".report_info_hide").addClass('d-none');
	});
</script>

@endsection('content')