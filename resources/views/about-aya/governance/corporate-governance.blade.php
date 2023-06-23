@extends('layouts.frontend-app')

@section('title', 'Corporate Governance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-governance.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_governance'])

			<div class="governance_section governance_bg_grey">
				<div class="container">
					<div class="row governance_title_div">
						<div class="col-md-3 text-center">
							<p class="governance_title theme_text_color fw-500" id="governance_framework_title">Governance Framework</p>
						</div>
						<div class="col-md-3 text-center">
							<p class="governance_title fw-500" id="board_committees_title">Board Committees</p>
						</div>
						<div class="col-md-3 text-center">
							<p class="governance_title fw-500" id="role_committee_title">Role of Committees</p>
						</div>
						<div class="col-md-3 text-center">
							<p class="governance_title fw-500" id="code_ethical_conduct_title">Code of Ethical Conduct</p>
						</div>
					</div>
					<div class="col-md-12 space-80"></div>
					<div class="row governance_framework_leadership">
						<div class="col-md-12">
							<h4 class="fw-bold">Leadership</h4>
							<hr class="bottom_hr">
						</div>
						<div class="row space-30"></div>
						<div class="col-md-4 u_zaw_col">
							<img src="{{ url('/images/about-aya/corporate-governance/u-zaw.webp') }}" class="img-fluid" alt="U Zaw Zaw">
						</div>
						<div class="col-md-8 pt-3 leadership_quote_col">
							<img src="{{ url('/images/about-aya/corporate-governance/open-quote.webp') }}" class="img-fluid mb-20">
							<p>Effective Corporate Governance is critical to the proper functioning of the Bank and the Economy as a whole. To avoid mismanagement, Good Corporate Governance is vital to enable our business to operate more efficiently, to improve access to capital, mitigate risk and safeguard stakeholders.</p>
							<p>Our Board Members and Executive Team lead the Bank to drive responsible growth and deliver maximum profit for our customers, stakeholders, and shareholders. As Chair of the Board, my primary goal is to protect and enhance AYA’s Vision and Mission. We have also clearly defined a Governance Framework that ensures transparency, fairness, and accountability, high ethical conduct in all aspects of our operations. Our dedicated Board members have exercised this responsibility with due diligence and hard work. The team will continue to exercise its fiduciary role at the highest level.</p>
							<img src="{{ url('/images/about-aya/corporate-governance/close-quote.webp') }}" class="img-fluid float-end">
							<div class="space-20"></div>
							<p class="fw-semibold mb-0" style="font-size: 16px">Zaw Zaw</p>
							<p>Founder and Chairman</p>
						</div>
						<div class="space-40"></div>
					</div>

					<div class="row d-none board_committees_bod">
						<div class="col-md-12">
							<h4 class="fw-bold">Board Directors</h4>
							<hr class="bottom_hr">
							<div class="row space-30"></div>
							
							<p>Board is the highest authority within the structure of the Bank and the Board of directors has ultimate responsibility for the bank’s business strategy and financial soundness, organizational structure, governance framework and practices, risk management and compliance obligations. The Board is chaired by Founder and Chairman of the Bank and comprising nine members including three Independent Non-Executive Directors with diverse backgrounds and expertise. The Board ensures compliance with the regulatory and legal framework, and the existence of an effective and productive relationship with key stakeholders. For dedication and best governance, the Board has appointed numbers of committees for designated areas.</p>
							
							<p>The Board of directors play a critical role in the Bank’s success. In order to make sure every director is on board with the Bank’s goal, and the entire Board is in sync with the Bank’s mission, various training programs including orientation programs are provided. The new director orientation program will bring them up to speed on the Bank, its competitive environment, strategies, and board processes.</p>

							<div class="space-30"></div>

							<h5 class="theme_text_color mb-20">Roles and Responsibilities of Board of Directors</h5>
							<p>In discharging their responsibilities, the Board of Directors must take into account the legitimate interests of depositors, shareholders, and other relevant stakeholders. The responsibilities of the Board of Directors shall include –</p>
							<ul class="roles_res_bod_list" style="list-style: numeric;margin-left: -15px;">
								<li>
									<p>Keeping up with material changes in the bank’s business and external environment as well as act necessary changes in a timely manner to protect the long-term interests of the bank.</p>
								</li>
								<li>
									<p>Overseeing the development and approval of the bank’s business objectives and strategies and monitoring their implementation.</p>
								</li>
								<li>
									<p>Playing a leading role in establishing the bank’s corporate culture and values</p>
								</li>
								<li>
									<p>Overseeing implementation of the bank’s governance framework and review periodically that it remains appropriate in the light of material changes to the bank’s size, complexity, geographical footprint, business strategy, markets, and regulatory requirements.</p>
								</li>
								<li>
									<p>Establishing along with bank’s officers, the bank’s risk appetite, taking into account the competitive and regulatory landscape in the banking industry and the bank’s long-term interests, risk exposure and ability to manage risk effectively.</p>
								</li>
								<li>
									<p>Approving the policy and overseeing the implementation of key policies and rules pertaining to the bank’s capital adequacy assessment process, capital and liquidity plans, compliance policies and obligations, and the internal control system.</p>
								</li>
								<li>
									<p>Overseeing the integrity, independence and effectiveness of the bank’s policies and procedures for reporting fraud and other illegal activities</p>
								</li>
								<li>
									<p>Overseeing the development of and approving the bank’s policy on transactions with related parties; and overseeing the compliance of the bank with the Financial Institutions Law, regulations and directives issued there under.</p>
								</li>
							</ul>

							<div class="space-50"></div>
						</div>
					</div>

					<div class="row d-none role_committee">
						<div class="col-md-12">
							<h4 class="fw-bold">Role of Committees</h4>
							<hr class="bottom_hr">
							<div class="row space-30"></div>
						</div>
						<div class="col-md-1">
							<h4>01 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Executive Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Executive Committee</p>
							<p>The Executive Committee is led by an Executive Chairperson of the Bank and serves as steering committee for the rest of the Board. It has the power to facilitate decision-making between board meetings or in urgent and crisis circumstances. The Executive Committee reports to the Board and is responsible for ensuring that the Board’s policies and guidance are implemented in daily operations, and good corporate practices are maintained. In addition to this, the role of the executive committee includes monitoring the ethics policies, human resources, security guidelines, quality management, sound financial management and the Bank’s compliance with regulations.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>02 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Audit Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Audit Committee</p>
							<p>The Board Audit Committee is chaired by an Independent Non-Executive Director and comprised of members from various areas such as risk and compliance, legal, finance and audit. The Board Audit Committee has been providing continuous advice to the Board with regards to the effectiveness and independence of the Bank’s internal audit function, the overall risk governance framework and internal control system. Audit Committee is responsible to ensure that senior management is taking necessary corrective actions in a timely manner to address control weaknesses, non-compliance with policies, laws and regulations, and other problems identified by auditors and other control functions.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>03 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Board Risk and Compliance Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Board Risk and Compliance Committee</p>
							<p>The Board Risk and Compliance Committee (BRCC) is headed by Vice Chairperson of the AYA Bank. BRCC assists the Board to achieve effective corporate governance and oversight responsibilities in relation to risk and compliance management strategy, framework and risk and compliance management function of the Bank. BRCC oversees the policy of risk and compliance, determines Bank’s risk appetite, and risk tolerance, and ensures that risk assessments are performed regularly and monitor the whole risk and compliance process.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>04 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Nomination and Remuneration Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Nomination and Remuneration Committee</p>
							<p>The Nomination and Remuneration Committee is chaired by an Independent Non-Executive Director and the main role of the committee is to set succession and compensation policies in the Bank, identify directors and Senior Management in accordance with the criteria laid down and recommend their appointment to the Board. The committee is responsible for the overall oversight of the compensation system for the entire bank. In addition, the committee shall regularly monitor and reviews outcomes to ensure that the bank-wide remuneration system is operating as intended.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>05 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Human Resources Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Human Resources Committee</p>
							<p>The Human Resources committee is chaired by the Vice Chairperson of the Bank and responsible for assisting the Board in fulfilling its oversight responsibilities for human resources related policies and strategies. The committee is responsible for employees’ compensation, benefits, and performance management, and to ensure that the Bank is following government laws, international and local best practices. The committee’s objective is to retain qualified and productive employees, to ensure human resources risks are appropriately identified and mitigated, and to create an attractive environment for existing and prospective employees of AYA Bank.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>06 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Assets and Liabilities Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Assets and Liabilities Committee</p>
							<p>The Assets and Liabilities Committee (ALCO), chaired by the Executive Chairperson, is responsible for overseeing the management of the bank’s assets and liabilities. ALCO provides an important oversight for effectively evaluating on-and off-balance-sheet risk for the bank. One of the objectives is to ensure adequate liquidity while managing the spread between the interest income and interest expense. Members also consider investments and operational risk.  ALCO members’ responsibilities typically include managing market risk tolerances, establishing appropriate management information systems, and reviewing and approving the bank’s liquidity and funds management policies. This includes developing and maintaining a contingency funding plan, reviewing immediate funding needs and sources, and determining liquidity risk exposures to adverse scenarios with varying probability and severity.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>07 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Credit Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Credit Committee</p>
							<p>The Credit Committee is chaired by the Chief Executive Officer of the Bank and is the decision-making body for approval of credit facilities in the Bank. The purpose of the committee is to oversee the credit and lending strategies, objectives of the bank, the credit risk management of the Bank, reviewing the credit policies and the quality of and performance of the entire Bank’s credit portfolio, and regular assessment of the quality of risk assets in the Bank.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>08 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Product and Business Development Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Product and Business Development Committee</p>
							<p>The Product and Business Development Committee is led by the Chief Executive Officer of the Bank and is comprised of Head of Business Units and Product Development Department. The committee is responsible for overseeing and managing the process and procedures for product design and development in compliance with the Bank’s strategy and regulatory guidelines. That includes reviewing product performance and competitiveness in the current market for its continued relevance and justification.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>09 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Purchasing Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Purchasing Committee</p>
							<p>The Purchasing Committee is managed by the Vice Chairperson of the Bank and is established for independent review and evaluation of purchasing documentation. The committee is obliged to decide the most appropriate supplier or service provider for the Bank and ultimately responsible for the successful outcome of the evaluation process. The committee members must be in no way related to or associated with any of the suppliers being evaluated.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>10 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;IT and Digitalization Steering Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">IT and Digitalization Steering Committee</p>
							<p>The IT & Digitalization and Steering Committee is led by the Chief Executive Officer of the Bank. The primary objective is to manage IT resources and implement IT Governance to align with the strategic direction of the Board. This includes building, acquiring, and implementing the required infrastructure, applications, and services for the Bank. The secondary objective is to support IT projects as defined by the committee. The committee is responsible for evaluating and assessing the performance and compliance of all the IT related processes, practices, and activities.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>11 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Corporate Social Responsibility Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Corporate Social Responsibility Committee</p>
							<p>The Corporate Social Responsibility Committee is chaired by Independent Non-Executive Director and obliged to define the strategy of the Bank’s corporate social responsibilities to implement effectively and oversee the approach to be in line with the Bank’s CSR pillars. The committee determine from time to time and recommend various aspects of corporate social responsibilities including the Bank’s culture, employment issues, health & safety, human rights, workforce diversity & inclusion, the environment, community & social investment, compliance with ethical trading and business practices and other CSR-related matters.</p>
						</div>
						<div class="col-md-12 space-20"></div>
						<div class="col-md-1">
							<h4>12 <span class="theme_text_color role_committee_mobile_title">&nbsp;&nbsp;Health and Safety Committee</span></h4>
						</div>
						<div class="col-md-11 role_committee_title_col">
							<p class="theme_text_color role_committee_title">Health and Safety Committee</p>
							<p>The health and safety committee (HSC) is managed by the Chief Executive Officer of the Bank. The committee is formed to address concerns related to occupational health and safety issues that affect employees. This includes addressing hazards in the workplace, responding the health issues in pandemic efficiently, implementing new safety and procedures, reviewing safety training requirements. The purpose is to create communication with employees and management personnel to improve safety and reduce hazards. The committee holds meetings quarterly and discuss health and safety issues, develop plans and procedures to resolve the identified issues, recommend corrective actions and evaluate the reports submitted to the committee.</p>
						</div>
					</div>

					<div class="row d-none code_ethical_conduct">
						<div class="col-md-12">
							<h4 class="fw-bold">Code of Ethical Conduct</h4>
							<hr class="bottom_hr">
							<div class="row space-30"></div>

							<p>AYA Bank regards high ethical standards as non-negotiable. This Code of Ethical Conduct is adopted to give effect to our <a href="{{ url('/about-aya/who-we-are/corporate-profile/mission-corporate-value-brand-promise') }}" class="theme_text_color text-decoration-underline">Core Values</a> and to guide our relationships with all our stakeholders and other relevant role-players as well as to outline our commitments to them. This conduct is required to maintain and enhance the public’s confidence in AYA Bank.</p>
							<div class="row space-30"></div>
							<h4 class="mb-0">Business Principles</h4>
							<hr class="bottom_hr">
							<div class="row space-20"></div>
							<p class="theme_text_color role_committee_title">Preserve Confidentiality</p>
							<p>AYA Bank assure that all aspects of our communication with individuals, stakeholders regarding their business-related data or personal identities will be held in the strictest confidence. Individuals shall protect the confidentiality of bank detail, business plan, conditions, and customer’s data, to any unauthorized individuals.</p>
							<div class="row space-20"></div>
							<p class="theme_text_color role_committee_title">Anti- Bribery and Corruption</p>
							<p>AYA Bank employees are strictly prohibited on promising, receiving, offering cash or anything of value to any customers, stakeholders, government employees or any individuals for the purpose of improperly influencing decisions or securing benefits for obtaining or retaining business.</p>
							<div class="row space-20"></div>
							<p class="theme_text_color role_committee_title">Fair Business Dealing</p>
							<p>All employees are expected to exercise fair business dealing when conducting all business transaction. Both parties shall work honestly and refrain from any use of deception or unfairness when negotiating the business.</p>

							<div class="row space-30"></div>
							<h4 class="mb-0">Workplace Principles</h4>
							<hr class="bottom_hr">
							<p class="theme_text_color role_committee_title">Discrimination and Harassment</p>
							<p>AYA Bank try its best to make employees feel safe and supported in the workplace, which includes while they are engaged in Bank’s business and at events of the Bank, or at other outside activities with a connection to employment or work, whether during or after normal business hours. Any kind of discrimination or harassment including unwanted verbal or physical harassment based on race, ethnicity, religion, sex, gender, identity, age, or disability will not be tolerated. We have a formal complaint system that acknowledges the victim’s rights to anonymity and security from retaliation.</p>
							<div class="row space-20"></div>
							<p class="theme_text_color role_committee_title">Human rights</p>
							<p>AYA Bank is committed to respecting human rights and demonstrates leadership in responsible workplace practices across our Bank’s Branches and in all regions where we conduct business. We aim to align our Bank’s policies and practices with international standards. Our commitment to fair, ethical, and responsible business practices, as we engage with our employees, clients, vendors, and community, is embodied in our values and Code of Conduct.</p>
							<div class="row space-20"></div>
							<p class="theme_text_color role_committee_title">Conflict of Interest</p>
							<p>Any employee of AYA Bank is obliged to disclose any known or potential conflicts of interest as soon as they arise. This practice is in place to prevent a possible conflict from existing between their own personal interests and the interests of the Bank. As all conflicts of interest will be reviewed on a case-by-case basis, a review may result in disciplinary action. Executive Management has full discretion to deem what disciplinary action is both fitting and necessary, including suspension and/or termination of employment.</p>
							<div class="row space-20"></div>
							<p class="theme_text_color role_committee_title">Use of Bank’s property for private advantage</p>
							<p>Employees are expected to be ensure that all property maintained by Bank is kept in the best possible working condition and is used appropriately for Bank’s business purpose only. Using of Bank’s property for private advantage includes using of supplies, equipment, vehicles, inventory, AYA Bank’s material, products, ideas, or concepts to an outside firm or individual for private advantage.</p>

							<div class="row space-30"></div>
							<h4 class="mb-0">Disclosure Process</h4>
							<hr class="bottom_hr">
							<div class="row space-20"></div>
							<p>Employees are also obliged to disclose the activities of any other employee that falls in direct breach of the AYA Bank’s Code of Ethical Conduct. Employees are given full support and encouragement to disclose any activities or behavior they may view with uncertainty, or that they feel requires clarification. Disclosure may be achieved by speaking to their Head of Department or People Department. Failure to disclosure will be considered an intentional breach of the Code of Ethical Conduct.</p>

							<div class="row space-30"></div>
							<h4 class="mb-0">Displinary Action</h4>
							<hr class="bottom_hr">
							<div class="row space-20"></div>
							<p>Employees found willfully behaving outside any of the above outlined guidelines will be considered to have been in breach of the Code of Ethical Conduct, and to have opposed AYA Bank’s policy of honesty, loyalty, and faithful service. The employee will be subject to disciplinary action up to and including dismissal and all activities undertaken by the employee may be made public knowledge within the AYA community. In order to be a fair process, an “Enquiry Board” comprising of Head of People Department, HOD of accused employee, reporting line Director will access and probe the situation and report its findings and recommendations to Human Resources Committee. Any breach of the Code of Ethical Conduct which is linked with violation of criminal conduct by an employee will also be charged with criminal law.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container governance_framework">
				<div class="space-60"></div>
				<div class="row">
					<div class="col-md-6">
						<h4 class="fw-bold">Governance Framework</h4>
						<hr class="bottom_hr">
						<div class="row space-30"></div>
						<p class="mb-0">Good governance is critical and a foundation attribute to the effective business operations of the Bank. It sets the tone as to how the bank operates and connects to both internally and to the market.</p>
						<div class="row space-50"></div>
						<!-- <button class="btn pdf_button">View Online</button>
						<button class="btn pdf_button">Download PDF</button> -->
					</div>
					<div class="col-md-6">
						<img src="{{ url('/images/about-aya/corporate-governance/governance-framework-pdf.webp') }}" class="img-fluid governance-framework-pdf-img">
					</div>
				</div>
				<div class="space-20"></div>
			</div>
			<div class="d-none container board_committees">
				<div class="space-60"></div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="fw-bold">Board Committees</h4>
						<hr class="bottom_hr">
						<div class="row space-30"></div>
						<img src="{{ url('/images/about-aya/corporate-governance/board-committees-chart.webp') }}" class="img-fluid text-center">
						<p style="font-size: 15px;">Read more on <a href="" class="theme_text_color">Role of Committees</a></p>
					</div>
				</div>
				<div class="space-40"></div>
			</div>
			<div class="d-none board_committees_who_are_on">
				<div class="container">
					<div class="space-60"></div>
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-bold">Who are on the Committees?</h4>
							<hr class="bottom_hr">
							<div class="row space-30"></div>
							<p class="mb-30">The Board operates through a number of committees covering certain specific matters, illustrated in the chart below:</p>
						</div>
						<div class="space-20"></div>
						<div class="col-md-3 committees_icon_col">
							<img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_icon">
							<span class="fw-semibold committees_icon_label">Chairperson</span>
						</div>
						<div class="col-md-3 committees_icon_col">
							<img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_icon">
							<span class="fw-semibold committees_icon_label">Co-Chairperson</span>
						</div>
						<div class="col-md-3 committees_icon_col">
							<img src="{{ url('/images/about-aya/corporate-governance/advisor-icon.webp') }}" class="img-fluid committees_icon">
							<span class="fw-semibold committees_icon_label">Advisor</span>
						</div>
						<div class="col-md-3 committees_icon_col">
							<img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_icon">
							<span class="fw-semibold committees_icon_label">Member</span>
						</div>
					</div>
					<div class="space-40"></div>

					<div class="row">
						<div class="table-responsive text-nowrap committee_table_div">
							<table class="table table-borderless table-striped committee_table">
								<thead>
									<tr valign="middle">
										<td></td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Board<Br>Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Executive Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Board Audit Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Board Risk and Compliance Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 6%;">Board Nomination and Remuneration Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Asset and Liability Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Credit Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">HR Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Product and Business Development Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Purchasing Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">IT and Digitalization Steering Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">CSR Committee</td>
										<td class="f-white text-center" style="font-size: 12px;width: 8%;">Health and Safety Committee</td>
									</tr>
								</thead>
								<tbody class="table-border-bottom-0" style="background-color: #fff;">
									<tr>
										<td class="b-t-l-radius-10 py-4" style="font-size: 15px;">U Zaw Zaw</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="b-t-r-radius-10"></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">Daw Khin Saw Oo</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">U Than Zaw</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/advisor-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">Daw Htay Htay Khaing</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">Daw Khin Ma Ma</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">U Myint Zaw</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;width: 30% !important;">Daw Jasmine Thazin Aung</td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">U Nyein Chan Soe Win</td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">Prof Dr Aung Tun Thet</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">U Min Sein</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">U Tun Lin Oo</td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">U Ko Ko Oo</td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">U Min Wint Oo</td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">Daw Lwin Lwin Aung</td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/co-chairperson-icon.webp') }}" class="img-fluid committees_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4" style="font-size: 15px;">U Nay Lin Htut</td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td><img src="{{ url('/images/about-aya/corporate-governance/member-icon.webp') }}" class="img-fluid committees_member_table_icon"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="space-60"></div>
					</div>
				</div>
			</div>
			<div class="d-none container board_committees">
				<div class="space-60"></div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="fw-bold">Committees Meeting & Attendance</h4>
						<hr class="bottom_hr">
						<div class="row space-30"></div>
						<p class="mb-30">All board members require compulsory attendance at meetings of the Board of Directors if there is no reasonable cause. Board members are required to attend at least 75% of all regularly scheduled meetings. The Secretariate Section under Corporate Affairs Department organizes the management calendar for the year and schedules the meeting of the Board of Directors at least 10 times a year with the interval between two meetings not to exceed two months. During the financial year 2022-2023, the board held 12 regular scheduled meetings and attended by all members of the board.</p>

						<p class="fw-bold">Committee meetings were conducted in budget year 2022-2023 as follows:</p>
						<div class="table-responsive text-nowrap committee_meeting_table_div">
							<table class="table table-borderless table-striped committee_meeting_table">
								<thead>
									<tr valign="middle">
										<td class="f-white px-5 py-4">Meeting Title</td>
										<td class="f-white">No. of Meetings</td>
									</tr>
								</thead>
								<tbody class="table-border-bottom-0" style="background-color: #fff;">
									<tr>
										<td class="b-t-l-radius-10 px-5 py-3">Board Committee</td>
										<td class="b-t-r-radius-10 px-5" class=" b-t-r-radius-10">11</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Executive Committee</td>
										<td class="px-5">20</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Board Audit Committee</td>
										<td class="px-5">11</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Board Risk And Compliance Committee</td>
										<td class="px-5">7</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Board Nomination and Remuneration Committee</td>
										<td class="px-5">3</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Assets and Liabilities Committee</td>
										<td class="px-5">7</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Credit Committee</td>
										<td class="px-5">11</td>
									</tr>
									<tr>
										<td class="px-5 py-3">HRC Committee</td>
										<td class="px-5">12</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Product and Business Development Committee</td>
										<td class="px-5">6</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Purchasing Committee</td>
										<td class="px-5">8</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Corporate Social Responsibility Committee</td>
										<td class="px-5">4</td>
									</tr>
									<tr>
										<td class="px-5 py-3">Health & Safety Committee</td>
										<td class="px-5">4</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="space-60"></div>

						<p class="fw-bold">The attendance of management at meetings of board committees during the financial year 2022-2023 is shown in the table below.</p>
						<div class="table-responsive text-nowrap committee_meeting_attendance_table_div">
							<table class="table table-borderless table-striped committee_meeting_attendance_table">
								<thead>
									<tr valign="middle">
										<td class="f-white text-center py-4">Borad of Directors and members of Board Committees</td>
										<td class="f-white text-center">Board of Directors Meeting</td>
										<td class="f-white text-center">Executive Committee Meeting</td>
										<td class="f-white text-center">Board Audit Committee Meeting</td>
										<td class="f-white text-center">Board Risk and Compliance Committee Meeting</td>
										<td class="f-white text-center">Board Nomination and Remuneration Committee Meeting</td>
										<td class="f-white text-center">Asset Liability Committee</td>
										<td class="f-white text-center">Credit Committee</td>
									</tr>
								</thead>
								<tbody class="table-border-bottom-0" style="background-color: #fff;">
									<tr>
										<td class="b-t-l-radius-10 py-4">Number of meetings held</td>
										<td>12</td>
										<td>20</td>
										<td>11</td>
										<td>7</td>
										<td>3</td>
										<td>7</td>
										<td class="b-t-r-radius-10">11</td>
									</tr>
									<tr>
										<td class="py-4">U Zaw Zaw</td>
										<td>12</td>
										<td></td>
										<td></td>
										<td></td>
										<td>-</td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">Daw Khin Saw Oo</td>
										<td>12</td>
										<td>20</td>
										<td></td>
										<td></td>
										<td>3</td>
										<td>7</td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">U Than Zaw</td>
										<td>12</td>
										<td>20</td>
										<td>11</td>
										<td>7</td>
										<td>-</td>
										<td>7</td>
										<td>11</td>
									</tr>
									<tr>
										<td class="py-4">Daw Htay Htay Khaing</td>
										<td>12</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">Daw Khin Ma Ma</td>
										<td>12</td>
										<td>20</td>
										<td></td>
										<td>7</td>
										<td>3</td>
										<td>7</td>
										<td>11</td>
									</tr>
									<tr>
										<td class="py-4">U Myint Zaw</td>
										<td>12</td>
										<td>20</td>
										<td></td>
										<td>7</td>
										<td></td>
										<td>7</td>
										<td>11</td>
									</tr>
									<tr>
										<td class="py-4" style="width: 20% !important;">Daw Jasmine Thazin Aung</td>
										<td></td>
										<td>20</td>
										<td></td>
										<td></td>
										<td></td>
										<td>7</td>
										<td>11</td>
									</tr>
									<tr>
										<td class="py-4">U Nyein Chan Soe Win</td>
										<td></td>
										<td>20</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">Prof Dr Aung Tun Thet</td>
										<td>12</td>
										<td></td>
										<td></td>
										<td></td>
										<td>3</td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">U Min Sein</td>
										<td>12</td>
										<td></td>
										<td>7</td>
										<td>7</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">U Tun Lin Oo</td>
										<td>12</td>
										<td></td>
										<td>10</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">U Ko Ko Oo</td>
										<td></td>
										<td>20</td>
										<td>9</td>
										<td>7</td>
										<td></td>
										<td>7</td>
										<td>11</td>
									</tr>
									<tr>
										<td class="py-4">U Min Wint Oo</td>
										<td></td>
										<td>20</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">Daw Lwin Lwin Aung</td>
										<td></td>
										<td>20</td>
										<td></td>
										<td></td>
										<td></td>
										<td>7</td>
										<td></td>
									</tr>
									<tr>
										<td class="py-4">U Nay Lin Htut</td>
										<td></td>
										<td>4</td>
										<td></td>
										<td></td>
										<td></td>
										<td>2</td>
										<td>3</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="space-40"></div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])
<script type="text/javascript">
	$("#board_committees_title").click(function() {
		$(".governance_framework_leadership").addClass('d-none');
		$(".governance_framework").addClass('d-none');
		$(".role_committee").addClass('d-none');

		$(".board_committees_bod").removeClass('d-none');
		$(".board_committees").removeClass('d-none');
		$(".board_committees_who_are_on").removeClass('d-none');

		$(".governance_title").removeClass('theme_text_color');
		$("#board_committees_title").addClass('theme_text_color');

		$(".governance_section").addClass('governance_bg_grey');
		$(".governance_section").removeClass('governance_bg_white');
	});

	$("#governance_framework_title").click(function() {
		$(".board_committees_bod").addClass('d-none');
		$(".board_committees").addClass('d-none');
		$(".board_committees_who_are_on").addClass('d-none');
		$(".role_committee").addClass('d-none');
		$(".code_ethical_conduct").addClass('d-none');

		$(".governance_framework_leadership").removeClass('d-none');
		$(".governance_framework").removeClass('d-none');

		$(".governance_title").removeClass('theme_text_color');
		$("#governance_framework_title").addClass('theme_text_color');

		$(".governance_section").addClass('governance_bg_grey');
		$(".governance_section").removeClass('governance_bg_white');
	});

	$("#role_committee_title").click(function() {
		$(".governance_framework_leadership").addClass('d-none');
		$(".governance_framework").addClass('d-none');
		$(".board_committees_bod").addClass('d-none');
		$(".board_committees").addClass('d-none');
		$(".board_committees_who_are_on").addClass('d-none');
		$(".code_ethical_conduct").addClass('d-none');

		$(".role_committee").removeClass('d-none');

		$(".governance_title").removeClass('theme_text_color');
		$("#role_committee_title").addClass('theme_text_color');

		$(".governance_section").removeClass('governance_bg_grey');
		$(".governance_section").addClass('governance_bg_white');
	});

	$("#code_ethical_conduct_title").click(function() {
		$(".governance_framework_leadership").addClass('d-none');
		$(".governance_framework").addClass('d-none');
		$(".board_committees_bod").addClass('d-none');
		$(".board_committees").addClass('d-none');
		$(".board_committees_who_are_on").addClass('d-none');
		$(".role_committee").addClass('d-none');

		$(".code_ethical_conduct").removeClass('d-none');

		$(".governance_title").removeClass('theme_text_color');
		$("#code_ethical_conduct_title").addClass('theme_text_color');

		$(".governance_section").removeClass('governance_bg_grey');
		$(".governance_section").addClass('governance_bg_white');
	});
</script>

@endsection('content')