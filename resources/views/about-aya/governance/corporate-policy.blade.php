@extends('layouts.frontend-app')

@section('title', 'Corporate Policies – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/corporate-policies.css') }}" />
<style type="text/css">
	
</style>

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'corporate_policies'])

			<div class="container risk_container">
				<div class="space-40" id="people_concerns"></div>
				<div class="col-md-12">
					<h4 class="fw-bold theme_text_color">People Concerns</h4>

					<div class="accordion" id="accordionPeopleConcernExample">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingPeopleConcernsOne">
								<button class="accordion-button corporate-policies-accor-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeopleConcernsOne" aria-expanded="true" aria-controls="collapsePeopleConcernsOne" style="padding: 5px 20px 5px 20px !important;">
									Internship Policy and Procedure
								</button>
							</h2>
							<div id="collapsePeopleConcernsOne" class="accordion-collapse collapse show" aria-labelledby="headingPeopleConcernsOne" data-bs-parent="#accordionPeopleConcernExample">
								<div class="accordion-body">
									<p>The Internship Programme at AYA Bank offers current undergraduate and/ or postgraduate students with real work insights and exposures to actual working life and allows our interns to gain foundation to their career choices and the chance to build valuable business networks. In addition, the Bank will have the opportunity to assess potential candidates and further develop their technical competence for possible employment upon intern’s graduation. Through this policy, the Bank commits to provide Interns with a quality experience that involves meaningful activities and the opportunity to learn and gain practical work experience in their chosen field of study and work. This policy is applicable to all Interns for undergraduate internship programme and post-graduate internship programme.</p>
									<p>More information of the policy can be found <a href="{{ url('/file/about-aya/corporate-policies/Internship-Policy.pdf') }}" target="_blank">here</a></p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingPeopleConcernsTwo">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeopleConcernsTwo" aria-expanded="true" aria-controls="collapsePeopleConcernsTwo" style="padding: 5px 20px 5px 20px !important;">
									Non-discrimination Policy and Procedure
								</button>
							</h2>
							<div id="collapsePeopleConcernsTwo" class="accordion-collapse collapse" aria-labelledby="headingPeopleConcernsTwo" data-bs-parent="#accordionPeopleConcernExample">
								<div class="accordion-body">
									<p>
										AYA Bank is committed to a work environment in which all individuals are treated with respect and dignity and has developed this policy to ensure that all its employees can enjoy in a working environment free from unlawful harassment, discrimination, and retaliation. We will make every reasonable effort to ensure that all concerned are familiar with these policies and are aware that any complaint in violation of such policies will be investigated and resolved appropriately.
										<ul style="list-style: lower-roman;">
											<li><b>Equal employment opportunity</b><br>We ensure equal employment opportunity without discrimination or harassment based on race, colour, religion, sex, sexual orientation, gender identity or expression, age, disability, marital status, citizenship, genetic information, or any other characteristic protected by law.</li>
											<li><b>Retaliation</b><br>We encourage prompt reporting of all perceived incidents of discrimination or harassment and prohibits retaliation against any individual who reports discrimination or harassment or participates in an investigation of such reports.</li>
											<li><b>Harassment</b><br>Harassment means verbal, written or physical conduct that denigrates or shows hostility or aversion toward an individual because of his or her race, colour, religion, sex, sexual orientation, gender identity or expression, national origin, age, disability, marital status, citizenship, genetic information, or any other characteristic protected by law, or that of his or her relatives, friends, or associates.<br>iii.Harassing conduct includes epithets, slurs, or negative stereotyping; threatening, intimidating or hostile acts; denigrating jokes; and written or graphic material that denigrates or shows hostility or aversion toward an individual or group that is placed on walls or elsewhere on the employer’s premises or circulated in the workplace, on company time or using company equipment by e-mail, phone (including voice messages), text messages, social networking sites or other means.</li>
										</ul>
									</p>
									<p class="fw-semibold">Reporting of instances</p>
									<p>AYA Bank encourages reporting of all perceived incidents of discrimination, harassment, or retaliation, regardless of the offender’s identity or position. Individuals who believe that they have been the victim of such conduct should discuss their concerns with their immediate supervisor, or Whistle Blowing Committee.</p>
									<p>Reporting Email: <a href="mailto:staffcommittee@ayabank.com">staffcommittee@ayabank.com</a></p>
									<p>More details can be found in our <a href="{{ url('/file/about-aya/corporate-policies/Non-discrimination-Policy-Procedure.pdf') }}" target="_blank">Non-discrimination Policy & Procedure</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingPeopleConcernsFour">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeopleConcernsFour" aria-expanded="true" aria-controls="collapsePeopleConcernsFour" style="padding: 5px 20px 5px 20px !important;">
									Recruitment & Selection Policy
								</button>
							</h2>
							<div id="collapsePeopleConcernsFour" class="accordion-collapse collapse" aria-labelledby="headingPeopleConcernsFour" data-bs-parent="#accordionPeopleConcernExample">
								<div class="accordion-body">
									<p>AYA Bank establishes Recruitment and Selection Policy to be able to recruit competent employee in accordance with the business requirement of AYA Bank; to select and recruit with transparency, unbiased and fair assessments; and to be able to select and recruit the suitable and qualified people at the suitable positions by matching the abilities with business requirements of the bank. This policy summarizes the guidelines to conduct the overall recruitment and selection process. AYA Bank believes that a fair and transparent recruitment process should be followed for all vacancies within the business. A clear recruitment policy also allows for greater internal development as well as the opportunity for new talent to join the business.</p> 
									<p>For more details, please follow the link <a href="{{ url('/file/about-aya/corporate-policies/Recruitment-and-Selection-Policy.pdf') }}" target="_blank">here</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<!-- <div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingPeopleConcernsFive">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeopleConcernsFive" aria-expanded="true" aria-controls="collapsePeopleConcernsFive" style="padding: 5px 20px 5px 20px !important;">
									Survey Development Policy
								</button>
							</h2>
							<div id="collapsePeopleConcernsFive" class="accordion-collapse collapse" aria-labelledby="headingPeopleConcernsFive" data-bs-parent="#accordionPeopleConcernExample">
								<div class="accordion-body">
									<p>As being part of contributing to the community development, AYA Bank creates a systematic process of survey data collection for quality assured academic research papers which have significant impact for the development of higher education sector. AYA Bank classifies survey data collection policies into (4) different phases such as Survey Requisition, Survey Approval, Survey Data Collection and Post-survey Documentation.</p> 
									<p>Detailed guidelines can be found <a href="{{ url('/file/about-aya/corporate-policies/Survey-Deployment-Policy.pdf') }}" target="_blank">here</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div> -->
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingPeopleConcernsSix">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeopleConcernsSix" aria-expanded="true" aria-controls="collapsePeopleConcernsSix" style="padding: 5px 20px 5px 20px !important;">
									Whistleblowing Policy
								</button>
							</h2>
							<div id="collapsePeopleConcernsSix" class="accordion-collapse collapse" aria-labelledby="headingPeopleConcernsSix" data-bs-parent="#accordionPeopleConcernExample">
								<div class="accordion-body">
									<p>AYA Bank seeks to conduct its business honestly and with integrity. We expect all staff to maintain high standards of business conduct and to report any wrongdoing that falls short of these fundamental principles. It is the responsibility of all employees, contractors and those working on the Bank’s premises to raise any concerns that they might have about malpractice within the workplace.</p>
									<p>AYA Bank’s Whistle Blowing Policy sets out the procedure by which staff can report concerns about workplace practices and any recommendations for action resulting from investigations into complaints lies with Whistle Blowing Committee. The Committee will ensure that employees are able to raise concerns without fear of reprisals.</p>
									<p>All employees should ensure that they take steps to disclose any wrongdoing or malpractice of which they become aware. This policy can be found in detail in the Whistle Blowing Policy or the Standard Operating Procedure. AYA Bank encourages all employees to make your immediate supervisors/ Heads of Departments/ Branch Managers your first resource should you have any questions. For further questions or clarifications that you may require, the People team will be glad to help you with your concerns. Staff concerns or issues can also be raised via email to <a href="mailto:staffcommittee@ayabank.com">staffcommittee@ayabank.com</a>.</p>
									<p>More details can be found in our <a href="{{ url('/file/about-aya/corporate-policies/Whistleblowing-Policy.pdf') }}" target="_blank">Whistleblowing Policy</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingPeopleConcernsTwo">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeopleConcernsTwo" aria-expanded="true" aria-controls="collapsePeopleConcernsTwo" style="padding: 5px 20px 5px 20px !important;">
									Talent Acquisition Process
								</button>
							</h2>
							<div id="collapsePeopleConcernsTwo" class="accordion-collapse collapse" aria-labelledby="headingPeopleConcernsTwo" data-bs-parent="#accordionPeopleConcernExample">
								<div class="accordion-body">
									<p>
										With a strategic intent, AYA Bank establishes ‘Talent Acquisition Process’ to be able to
										<ul style="list-style: lower-roman;">
											<li>Recruit competent talent in accordance with the business requirement of AYA Bank.</li>
											<li>Acquire and onboard transparently with fair and unbiased assessments.</li>
											<li>Select and recruit the suitable and qualified talents at the suitable positions with competencies required to operate the bank.</li>
										</ul>
									</p>
									
									<p>This process analyzes the Bank’s long-term talent needs in the context of business goals and encompasses step by step activities of Identification of Talent Requirement, Talent Sourcing, Preliminary Screening, Talent Assessments & Personal Interview(s), Talent Selection, Offer Issuing & Negotiation, Pre-Onboarding Activities and Onboarding.</p>
									<p>More details can be found in our <a href="{{ url('/file/about-aya/corporate-policies/Talent-Acquisition-Process.pdf') }}" target="_blank">Talent Acquisition Process</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingPeopleConcernsTwo">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeopleConcernsTwo" aria-expanded="true" aria-controls="collapsePeopleConcernsTwo" style="padding: 5px 20px 5px 20px !important;">
									Employee-Handbook
								</button>
							</h2>
							<div id="collapsePeopleConcernsTwo" class="accordion-collapse collapse" aria-labelledby="headingPeopleConcernsTwo" data-bs-parent="#accordionPeopleConcernExample">
								<div class="accordion-body">
									<p>
										This handbook is for the information and use of all employees of the AYA Bank PCL. It contains 
										<ul style="list-style-type:disc;">
											<li>‘Workplace Commitment’ of the Bank related to non-discrimination declaration, open door statement, whistleblowing policy, membership in political associations and participation in unlawful activities/ assemblies; </li>
											<li>‘Policies’ related to all employees which covers from probation & recommendation, dress code, attendance, leave, provident fund, allowances and benefits, pay day, transfer, promotion, resignation to termination & dismissal;</li>
											<li>‘Employee Code of Conduct’ that all employees have to carry out duties and responsibilities in compliance with the policy and procedures of the Bank;</li>
											<li>‘Disciplinary Measures’ for those who commits a breach of any of the regulation, directions, orders, instructions or requirements of the Bank</li>
											<li>‘Corporate Employee Health and Safety Policy’ for safety practices and preventive measures in place to keep our workplace as healthy and safe environment.</li>
										</ul>
									</p>
									<p>More details can be found in our <a href="{{ url('/file/about-aya/corporate-policies/Employee-Handbook.pdf') }}" target="_blank">Employee Handbook</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingPeopleConcernsTwo">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeopleConcernsTwo" aria-expanded="true" aria-controls="collapsePeopleConcernsTwo" style="padding: 5px 20px 5px 20px !important;">
									Workplace Lactation Policy
								</button>
							</h2>
							<div id="collapsePeopleConcernsTwo" class="accordion-collapse collapse" aria-labelledby="headingPeopleConcernsTwo" data-bs-parent="#accordionPeopleConcernExample">
								<div class="accordion-body">
									<p>
										The purpose of AYA Bank Lactation Support Program is to support the working mothers at their start of the journey working as a mother and encourage the breastfeeding activity which is the best for the early development of a child. AYA Bank developed this lactation program under the closed guidance of UNICEF Myanmar. This program encourages our working mothers to be able to have a comfortable working environment while they could keep the breastfeeding activity for their children.
									</p>
									<p>More details can be found in our <a href="{{ url('/file/about-aya/corporate-policies/Workplace Lactation Policy.pdf') }}" target="_blank">Workplace Lactation Policy</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
					</div>
					

					<div class="space-40" id="corporate_affairs"></div>
					<h4 class="fw-bold theme_text_color">Corporate Affairs</h4>
					<div class="accordion" id="accordionCorporateAffairExample">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingCorporateAffairOne">
								<button class="accordion-button corporate-policies-accor-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCorporateAffairOne" aria-expanded="true" aria-controls="collapseCorporateAffairOne" style="padding: 5px 20px 5px 20px !important;">
									Corporate Communications Policy
								</button>
							</h2>
							<div id="collapseCorporateAffairOne" class="accordion-collapse collapse show" aria-labelledby="headingCorporateAffairOne" data-bs-parent="#accordionCorporateAffairExample">
								<div class="accordion-body">
									<p>AYA Bank’s Communication Policy establishes a set of principles and guidelines to ensure that communication across AYA Bank is effective and appropriate and responds to the diverse information needs of all our stakeholders. This policy applies to AYA Bank’s employees with respect to all information (general, confidential, or material) in whatever form or means, regarding the bank that is shared between the bank, employees, and other parties. The objective of the policy is to help preserve and enhance the Bank’s reputation, both internally and externally, and to help ensure that relevant information reaches the targeted audience in the right format and at the right time.</p>
									<p>More details can be found in our <a href="{{ url('/file/about-aya/corporate-policies/Corporate-Communications-Policy.pdf') }}" target="_blank">Corporate Communication Policy</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingCorporateAffairTwo">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCorporateAffairTwo" aria-expanded="true" aria-controls="collapseCorporateAffairTwo" style="padding: 5px 20px 5px 20px !important;">
									Corporate Social Responsibility Policy
								</button>
							</h2>
							<div id="collapseCorporateAffairTwo" class="accordion-collapse collapse" aria-labelledby="headingCorporateAffairTwo" data-bs-parent="#accordionCorporateAffairExample">
								<div class="accordion-body">
									<p>
										Corporate Social Responsibility Policy intends to establish a reference framework, from which AYA Bank can develop and strengthen socially responsible behavior in the business environment where it operates. To be a responsible business, the Bank is committed to the mission “Sharing and Contributing to our Community”. We have therefore brought together CSR strategies and practices into one framework policy and applied to our existing operating principles. The objective of the policy is to create and promote behavior that generates value to all interest groups (customers, suppliers, employees, shareholders, business partners, stakeholders, environment, and society) in the context of a socially responsible culture that is reflected in the development of a sustainable business strategy. AYA Bank’s CSR policy represents our commitment to operate in an economically, socially, and environmentally sustainable manner, while reaching out to the integration of social and business goals.</p> 
										<p>For more details, please follow the link <a href="{{ url('/file/about-aya/corporate-policies/Corporate-Social-Responsibility-Policy.pdf') }}" target="_blank">here</a>.
									</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingCorporateAffairThree">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCorporateAffairThree" aria-expanded="true" aria-controls="collapseCorporateAffairThree" style="padding: 5px 20px 5px 20px !important;">
									Environmental Policy
								</button>
							</h2>
							<div id="collapseCorporateAffairThree" class="accordion-collapse collapse" aria-labelledby="headingCorporateAffairThree" data-bs-parent="#accordionCorporateAffairExample">
								<div class="accordion-body">
									<p>We strive to be a responsible steward of the environment and acknowledge that we have a responsibility to our customers, employees, investors, and the communities that we serve, to better understand the need that can help environmental protection. We recognize that our bank business activities may impact upon the environment both through local operations and, more broadly, in terms of raw materials usage, energy usage, water discharges and pollution to water and air. The Bank shall ensure ecological balance and protects the environment by adopting environmentally friendly technologies and actively conducted environmental conservation activities.</p> 
									<p>More information of the policy can be found <a href="{{ url('/file/about-aya/corporate-policies/Environmental-Policy.pdf') }}" target="_blank">Here</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingCorporateAffairFour">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCorporateAffairFour" aria-expanded="true" aria-controls="collapseCorporateAffairFour" style="padding: 5px 20px 5px 20px !important;">
									Social Media Policy
								</button>
							</h2>
							<div id="collapseCorporateAffairFour" class="accordion-collapse collapse" aria-labelledby="headingCorporateAffairFour" data-bs-parent="#accordionCorporateAffairExample">
								<div class="accordion-body">
									<p>The rise of social media has changed the world’s perspective on communication and will continue to dominate business communications. AYA Bank, as a leading Bank in Myanmar, is adapting the changes in communication as quickly as possible to remain competitive in the marketplace. We recognize the vital importance of keeping abreast with digital communication and are committed to ensuring that we participate in social media communication in the right way. AYA Bank Senior Management has determined to provide a detailed set of guidelines for employees on using social media which will aid protecting their personal safety, as well as Bank’s business reputation.</p> 
									<p>Detailed guidelines can be found <a href="{{ url('/file/about-aya/corporate-policies/Social_Media_Policy.pdf') }}" target="_blank">here</a></p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingCorporateAffairSix">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCorporateAffairSix" aria-expanded="true" aria-controls="collapseCorporateAffairSix" style="padding: 5px 20px 5px 20px !important;">
									Donation / Philanthropy
								</button>
							</h2>
							<div id="collapseCorporateAffairSix" class="accordion-collapse collapse" aria-labelledby="headingCorporateAffairSix" data-bs-parent="#accordionCorporateAffairExample">
								<div class="accordion-body">
									<p>
										To create impact beyond banking, we expand our reach through philanthropy or donations that help needy families or society. AYA Bank has always been at the forefront in promoting the livelihood of others which mainly includes
										<ul style="list-style: disc;">
											<li>one-time or recurring donations</li>
											<li>monetary or in-kind donations</li>
											<li>charitable contributions or volunteering works</li>
										</ul>

										The initial step of our strategic philanthropy is identifying foundational value – “Sharing and contributing to our community by inclusion, collaboration and transparency”, before we decide “Where (or to whom) do we give?”.</p> 
										<p>More information can be found <a href="{{ url('/file/about-aya/corporate-policies/Donations-Philanthropy.pdf') }}" target="_blank">here</a>.
									</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingCorporateAffairSeven">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCorporateAffairSeven" aria-expanded="true" aria-controls="collapseCorporateAffairSeven" style="padding: 5px 20px 5px 20px !important;">
									Health and Safety Policy
								</button>
							</h2>
							<div id="collapseCorporateAffairSeven" class="accordion-collapse collapse" aria-labelledby="headingCorporateAffairSeven" data-bs-parent="#accordionCorporateAffairExample">
								<div class="accordion-body">
									<p>AYA Bank strongly believes that excellent health, and safety standards of our employees, directly contribute to the success of the Bank and as such we are committed to ensure a safe working environment to enhance our employees’ health and safety. Health and Safety is a collective task shared between the Bank and employees. We encourage that all of our employees must coordinate and comply with policies and procedures of health and safety to ensure that risks are minimized at all times.</p>
									<p>Not only do we take care for the health and safety of our employees but also take into consideration the well-being of our customers and the stakeholders around our environment that we are active in. We make sure that whatever and whoever we engage in our daily activities, stringent compliance to our Health and Safety Rules are being adhered.</p>
									<p>AYA Bank is committed to follow the standards and advisories of regulators and create a hazard-free workplace. Our Health and Safety Committee sets health and safety goals, develops guidelines, sufficient control measures, and financial support to ensure implementation and improvements of health and safety standards. The guidelines cover recommendations on health and safety which will help prevent and reduce accidents and occupational diseases in the workplace.</p>
									<p>Health and Safety Policy is established in two aspects, ‘Preventative Action’ and ‘Emergency Management’. Health and Safety Committee conducts periodical risk assessments, job hazard analysis and takes necessary action to prevent health and safety risks associated with our business activities in normal situation. Emergency Response Team is set up to control the situation effectively during sudden catastrophes, communicate with all employees and provide health and safety instructions to be able to work safely and productively.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
					</div>

					<div class="space-40" id="compliance_matters"></div>
					<h4 class="fw-bold theme_text_color">Compliance Matters</h4>
					<div class="accordion" id="accordionComplianceMatterExample">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingComplianceMattersOne">
								<button class="accordion-button corporate-policies-accor-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComplianceMattersOne" aria-expanded="true" aria-controls="collapseComplianceMattersOne" style="padding: 5px 20px 5px 20px !important;">
									Compliance Policy
								</button>
							</h2>
							<div id="collapseComplianceMattersOne" class="accordion-collapse collapse show" aria-labelledby="headingComplianceMattersOne" data-bs-parent="#accordionComplianceMatterExample">
								<div class="accordion-body">
									<p>AYA Bank sets up compliance policy to ensure that the Bank operates with integrity and adhere to applicable laws, regulations, and internal policies. AYA bank’s senior management is responsible for establishing a permanent and effective compliance functions within the bank as part of the bank’s compliance policy. This policy will take the significant role to generate line of defense for managing risks to safeguard customers’ deposits and the Bank’s financial services. Effective compliance and procedures must be followed, and management must take appropriate corrective action when compliance failures are identified. Compliance is to start at the top and should be part of the culture of the Bank. It will be most effective in a corporate culture that emphasizes standards of honesty and integrity and in which the board of directors and senior management lead by example. It concerns everyone within the bank and viewed as an integral part of the Bank’s business activities. The Bank shall hold itself to high standards when carrying on business, and at all times strive to observe the spirit.</p> 
									<p>More information of the policy can be found <a href="{{ url('/file/about-aya/corporate-policies/Compliance_Policy.pdf') }}" target="_blank">here</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingComplianceMattersTwo">
								<button class="accordion-button corporate-policies-accor-btn collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComplianceMattersTwo" aria-expanded="true" aria-controls="collapseComplianceMattersTwo" style="padding: 5px 20px 5px 20px !important;">
									Anti-Bribery and Corruption Policy
								</button>
							</h2>
							<div id="collapseComplianceMattersTwo" class="accordion-collapse collapse" aria-labelledby="headingComplianceMattersTwo" data-bs-parent="#accordionComplianceMatterExample">
								<div class="accordion-body">
									<p>
										AYA Bank formalizes its Anti-bribery and Corruption Policy to comply with Myanmar Anti-Corruption Law (2013) and United Nations Convention against Corruption (UNCAC) treaty (2003). It intends to conduct all of its business in an honest and ethical manner. AYA Bank takes a zero-tolerance approach to bribery and corruption and is committed to acting professionally, fairly and with integrity in all its business dealings and relationships. It is the goal of AYA Bank to avoid acts which might reflect adversely upon the integrity and reputation of the bank. The Policy applies to all directors, officers, employees, family members, consultants and contractors of AYA Bank and also extends across all of the Bank’s business dealings.</p> 
										<p>More details can be found in our <a href="{{ url('/file/about-aya/corporate-policies/Anti-bribery-and-Corruption-Policy.pdf') }}" target="_blank">Anti-bribery and Corruption Policy</a>.
									</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
					</div>

					<div class="space-40" id="creditors_rights"></div>
					<h4 class="fw-bold theme_text_color">Creditors’ Rights</h4>
					<div class="accordion" id="accordionCreditorsRightsExample">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingCreditorsRightssOne">
								<button class="accordion-button corporate-policies-accor-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCreditorsRightssOne" aria-expanded="true" aria-controls="collapseCreditorsRightssOne" style="padding: 5px 20px 5px 20px !important;">
									Creditors' Rights
								</button>
							</h2>
							<div id="collapseCreditorsRightssOne" class="accordion-collapse collapse show" aria-labelledby="headingCreditorsRightssOne" data-bs-parent="#accordionCreditorsRightsExample">
								<div class="accordion-body">
									<p>For decades, AYA Bank establishes a deed of trust with our creditors such as deposit holders, businesses, and other parties in the protection of creditor’s right. We secure creditors to enjoy the right to repayment of money by the Bank. Our strong creditor’s right deals not only with the right of creditors against the debtor, but also the potential for the higher growth. Under the debtor and creditor relationship, positioning of each creditor to others is clearly stated and secured creditors are first in line, in case the Bank goes into liquidation. Deposit holders and other creditors are given priority to get back their money, the Bank owed to them. We honor and comply with the Myanmar Financial Institution Law (2016) with respect to ‘Creditor’s Right’ in following:</p>
									<p>
										Clearly spell out, at the time of establishing a client relationship, the liability for losses, as well as the rights and responsibilities of all parties, in the event of products not performing as per specifications or things going wrong. However, the bank will not be liable for any losses caused by extraneous circumstances that are beyond its reasonable control (such as market changes, performance of the product due to market variables, etc.).
										<ul style="list-style: disc;">
											<li>Ensure the client is refunded without delay and demur, if the bank cannot show client liability beyond reasonable doubt on any disputed transaction (along with interest/charges)</li>
											<li>To make payment in full of any claim by a depositor or other creditor in winding up or voluntary liquidation of the Bank;</li>
											<li>To pay all lawful claims promptly and return all funds or other property held by the Bank to rightful owners within such maximum period as the Central Bank of Myanmar may determine</li>
										</ul>
									</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
					</div>

					<div class="space-40" id="finance_dealings"></div>
					<h4 class="fw-bold theme_text_color">Finance Dealings</h4>
					<div class="accordion" id="accordionFinanceDealingsExample">
						<!-- <div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingFinanceDealingssOne">
								<button class="accordion-button corporate-policies-accor-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFinanceDealingssOne" aria-expanded="true" aria-controls="collapseFinanceDealingssOne" style="padding: 5px 20px 5px 20px !important;">
									Supplier Code of Principle
								</button>
							</h2>
							<div id="collapseFinanceDealingssOne" class="accordion-collapse collapse show" aria-labelledby="headingFinanceDealingssOne" data-bs-parent="#accordionFinanceDealingsExample">
								<div class="accordion-body">
									<p>This principle is formalized for the purpose of ensuring that AYA Bank’s suppliers adhere to high standards of safe working conditions, fair and respectful treatment of employees, and ethical practices. Supplier Code of Principle mainly issues the compulsory requirements for the Stakeholders along the supply chain (i.e. Suppliers, Contractors, Subcontractors, Agents, Service Providers, etc.) of AYA Bank. The Bank fully acknowledges an aspect of culture, tradition and social norms dealing with the suppliers. AYA Bank fosters and ensures this code of principle in aspects of human rights, freedom of association, forced labor, non-discrimination, working hour, minimum wage, corruption, and money laundering. More information can be found <a href="{{ url('/file/about-aya/corporate-policies/Supplier-Code-of-Principle.pdf') }}" target="_blank">here</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div> -->
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingFinanceDealingssTwo">
								<button class="accordion-button corporate-policies-accor-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFinanceDealingssTwo" aria-expanded="true" aria-controls="collapseFinanceDealingssTwo" style="padding: 5px 20px 5px 20px !important;">
									Purchasing Policy
								</button>
							</h2>
							<div id="collapseFinanceDealingssTwo" class="accordion-collapse collapse show" aria-labelledby="headingFinanceDealingssTwo" data-bs-parent="#accordionFinanceDealingsExample">
								<div class="accordion-body">
									<p>
										The purposes of this policy are to,
										<ul style="list-style: lower-alpha;">
											<li>Establish a framework to promote value for money purchasing by developing a high-performing and reliable supplier base and delivering goods and services on time.</li>
											<li>Provide guideline which describes the policies and outlines the procedures for requesting, approving, purchasing, deliver and payment of capital and operating expenditure.</li>
											<li>Ensure that ethical, efficient and accountable practices are used for sourcing and procuring goods and services.</li>
										</ul>

										This procedure is applicable to all departments and covers all expenditure for goods and services.</p> 
										<p>More information of the policy can be found <a href="{{ url('/file/about-aya/corporate-policies/Purchasing_Committee_Guideline.pdf') }}" target="_blank">here</a>.
									</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
					</div>

					<div class="space-40" id="digital_channels"></div>
					<h4 class="fw-bold theme_text_color">Digital Channels</h4>
					<div class="accordion" id="accordionCreditorsRightsExample">
						<div class="accordion-item">
							<h2 class="accordion-header b-b-none" id="headingCorporateAffairFive">
								<button class="accordion-button corporate-policies-accor-btn" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCorporateAffairFive" aria-expanded="true" aria-controls="collapseCorporateAffairFive" style="padding: 5px 20px 5px 20px !important;">
									Privacy Policy
								</button>
							</h2>
							<div id="collapseCorporateAffairFive" class="accordion-collapse collapse show" aria-labelledby="headingCorporateAffairFive" data-bs-parent="#accordionCorporateAffairExample">
								<div class="accordion-body">
									<p>AYA Bank is devoted to ensuring that customer’s privacy is protected. AYA Bank has a firm policy of protecting the confidentiality and security of information that we collect from our customers. We do not share non‐public personal information with unaffiliated third parties. Information is only shared with customers’ consent, except for the specific purposes, in accordance with all applicable laws. We limit the collection and use of non‐public personal information to the minimum we believe is necessary to deliver superior service to you. The policy statement will give you important information about how we handle customers’ personal information.</p> 
									<p>Detailed guidelines can be found <a href="{{ url('/file/about-aya/corporate-policies/Privacy-Policy.pdf') }}" target="_blank">here</a>.</p>
								</div>
							</div>
							<div class="space-10"></div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

<script type="text/javascript">
	
</script>

@endsection('content')