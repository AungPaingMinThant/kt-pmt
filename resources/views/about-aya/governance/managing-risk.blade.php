@extends('layouts.frontend-app')

@section('title', 'Managing Risk – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/risk-management.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'managing_risk'])

			<div class="container risk_container">
				<div class="space-40"></div>
				<div class="col-md-12">
					<h4 class="fw-bold">Managing Risk</h4>
				</div>
				<div class="row">
					<div class="col-md-8" style="padding-right: 40px;">
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="padding: 10px 0px 10px 0px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Credit Risk Management
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body" style="padding: 20px 20px 0px 0px !important;">
										<div class="row">
											<p>The Credit Department within the Risk Management Unit is responsible for the comprehensive management of credit risk. This department drafts and administers credit policies, the internal rating system, credit authority guidelines, credit application guidelines, manages nonperforming loans (NPLs) and other aspects of credit portfolio management. The department also cooperates with the Enterprise Risk Management Department in quantifying credit risk (risk capital and risk-weighted assets) and controls the Bank’s entire credit risk.</p>
											<p>The Credit Department is responsible for handling NPLs of borrowers classified as potentially bankrupt or lower, drawing up plans for their workouts including write-offs, and corporate rehabilitation. The department closely liaises with Business Units which engage in related services and works to efficiently reduce the amount of NPLs by such means as the sell-off of claims. Lending portfolios are classified and monitored based on the nature of the borrowers such as Corporate, SME and Retail.</p>
											<p>Internal Audit Department is operating independently of the business units, audits asset quality, accuracy of gradings and self-assessment, and state of credit risk management, and reports the results directly to the Board of Directors and the Audit Committee.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingTwo">
									<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="padding: 10px 0px 10px 0px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Market and Liquidity Risk Management
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body" style="padding: 20px 20px 0px 0px !important;">
										<div class="row">
											<p>The Assets-Liability Committee authorizes important matters relating to the management of market and liquidity risks, such as basic policies and risk limits decided by the Treasury Department. Furthermore, the Committee meets monthly basis to examine reports on the state of observance of Bank’s limits on market and liquidity risks and to review the Bank’s Access Liability and Management operations.</p>
											<p>The Enterprise Risk Management Department not only monitors the current risk situations in the market, but also reports regularly to the Board Risk and Compliance Committee and the Board.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingThree">
									<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="padding: 10px 0px 10px 0px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Operational Risk Management
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body" style="padding: 20px 20px 0px 0px !important;">
										<div class="row">
											<p>Bank has designed and implemented an operational risk management framework as per Risk Management Guidelines of the Central Bank of Myanmar. The Executive Management Committee of the Bank makes decisions on important matters such as basic policies for operational risk management, and these decisions are further authorized by the Board, if needed. In addition, the Bank has established its Operational Risk Management function, within the Enterprise Risk Management Department as an integrated operational risk management function. This Section works together with other operational departments responsible for controlling processing risk and system risk.</p>
											<p>The operational risk management outlined as follows: operational risk is managed by (a) collecting and analyzing internal loss data, and (b) comprehensively identifying risk scenarios in each business process through a regular risk control assessment to estimate the loss severity and frequency.</p>
											<p>Operational risk impact is assessed for each risk scenario. When high-severity scenarios are identified, each branch and department establish a risk mitigation plan, and the Operational Risk Management Department monitors the progress. Related Risk Managers who are assigned from each department are needed to submit Risk Register to the Board Risk and Compliance Committee. Furthermore, operational risk is quantified using the internal loss data and scenarios, and the results of quantification are used to manage and reduce operational risk. The Committee comprises all relevant units of the bank, where operational risk information is reported, and risk mitigation plans are discussed. </p>
											<p>The operational risk situation is also reported to the Board of Directors on a regular basis, for review of the basic policies on operational risk management. Moreover, the Bank’s independent Internal Audit Department conducts periodic audits to ensure that the operational risk management system is functioning properly.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingFour">
									<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="padding: 10px 0px 10px 0px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Risk in Environmental, Social (Human resources / Society), Governance, Finance
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body" style="padding: 20px 20px 0px 0px !important;">
										<div class="row">
											<p>Risks associated with environmental, social (including human resources and societal aspects), governance, and financial factors hold significant sway over an organization's stability and growth.</p>
											<p>Environmental and social risks arise from potential harm to the environment or society that could devalue the collateral associated with a transaction. Market risks due to environmental and social issues can be mitigated through strict adherence to environmental and social regulations. However, these risks are not stationary; they are dynamic, evolving over time, and subject to change based on various factors such as new legislation, societal norms, or ecological changes.</p>
											<p>Some environmental and social risks might seem inconsequential or irrelevant during the approval stage of a financial transaction. However, these risks can evolve and become significant during the execution phase, particularly as regulatory standards tighten, and enforcement levels increase. On the other hand, certain environmental and social risks might seem unlikely, such as accidents leading to spills or explosions. Still, if they occur, their impact on the environment and society could be catastrophic.</p>
											<p>To minimize the risk exposure stemming from our clients' and investees' environmental and social risks, we commit to ensuring their financial and operational sustainability is not compromised by adverse impacts on the environment and the surrounding communities. Before entering a transaction, we strive to develop a comprehensive understanding of potential environmental and social risks. We examine how these risks could affect our clients' and investees' operations, which is an essential step in managing potential uncertainties associated with any transaction. This proactive approach allows us to anticipate risks and prepare appropriate mitigation strategies.</p>
										</div>
										<div class="space-20"></div>
										<div class="row text-center">
											<p class="fw-semibold" style="font-size: 18px;">Environmental and Social Risk</p>
											<img src="{{ url('/images/about-aya/risk-management/environmental_social.webp') }}" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingFive">
									<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="padding: 10px 0px 10px 0px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Human Capital Risk
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
									<div class="accordion-body" style="padding: 20px 20px 0px 0px !important;">
										<div class="row">
											<p>AYA Bank identifies human capital risk as the potential for operational risk arising from human skills, knowledge, and ethical behavior. It is typically characterized as the risk associated with an organization's human resources failing to achieve two core objectives: a) operational goals, which encompass preventing or mitigating financial losses during routine operations, and b) business resilience and continuity goals, such as sustaining operations during severe business disruptions like a pandemic.</p>
											<p>Human capital risk is not confined to one dimension but rather stretches across the entire spectrum of enterprise risk impact. The following are some areas where human capital risk could potentially manifest:</p>
											<p><b class="text-decoration-underline">Financial risk at the enterprise level:</b> This includes potential government fines, costly organization-wide revamps in risk management controls and governance structures. A lapse in human capital management can lead to severe financial implications, which could have a lasting impact on the bank's financial health.</p>
											<p><b class="text-decoration-underline">Legal and Reputational risk:</b> This incorporates potential criminal and civil prosecutions against the organization and executives. Breaches in ethical conduct can lead to legal implications, tarnishing the organization's reputation and diminishing the trust of stakeholders.</p>
											<p><b class="text-decoration-underline">Strategic risk:</b> This could arise from regulator-mandated controls on growth. If human capital does not meet strategic goals, it could potentially stifle the growth and expansion of the organization.</p>
											<p><b class="text-decoration-underline">Compliance risk:</b> This involves potentially expensive remediations required by consent orders. If human capital fails to adhere to regulatory and compliance guidelines, it could lead to expensive rectifications, which could significantly drain resources.</p>
											<p>In essence, human capital risk encompasses a wide range of potential challenges and threats, all of which can significantly impact an organization's growth, profitability, reputation, and regulatory compliance.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header b-b-none" id="headingSix">
									<button class="accordion-button collapsed" id="trust_receipt_ac_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" style="padding: 10px 0px 10px 0px !important;">
										<span class="accordion-open">
											<i class="menu-icon tf-icons bx bx-plus"></i>
										</span>
										<span class="accordion-close">
											<i class="menu-icon tf-icons bx bx-minus"></i>
										</span>
										Governance Risk
									</button>
								</h2>
								<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
									<div class="accordion-body" style="padding: 20px 20px 0px 0px !important;">
										<div class="row">
											<p>AYA Bank plays a vital role in the economy by channeling the resources of savers and depositors towards activities that stimulate enterprise growth and drive the economic progression of Myanmar. Our central aim for corporate governance is to protect stakeholders' interests in harmony with public interest on a sustainable basis.</p>
											
											<p>The essence of corporate governance lies in its power to define the distribution of authority and responsibilities. It outlines how the business affairs of the Bank are conducted by the Board and Senior Management, encapsulating several key aspects:</p>
											
											<p><b class="text-decoration-underline">Strategy and Objectives:</b> One of the primary responsibilities of the Board and Senior Management is to establish the Bank's strategic direction and objectives. This process requires comprehensive planning, diligent oversight, and timely execution.</p>
											
											<p><b class="text-decoration-underline">Personnel Selection and Oversight:</b> The selection of qualified personnel and effective oversight of their roles is vital to the Bank's success. By choosing the right people and effectively managing their performance, the Bank ensures it has the human capital to achieve its strategic goals.</p>
											
											<p><b class="text-decoration-underline">Day-to-Day Operations:</b> The daily operation of the Bank's business requires constant attention and effective management. This helps ensure that the Bank remains productive and operates efficiently.</p>
											
											<p><b class="text-decoration-underline">Stakeholder Interests:</b> The Bank's corporate governance framework ensures the protection of depositors' interests, meets shareholder obligations, and acknowledges the interests of other recognized stakeholders. The aim is to build a balance between meeting the needs of depositors and shareholders and maintaining a healthy relationship with other stakeholders.</p>

											<p><b class="text-decoration-underline">Corporate Culture and Compliance:</b> The governance structure works to align corporate culture, activities, and behavior with the expectation that the Bank will operate safely and soundly. This alignment ensures integrity in all dealings and compliance with all applicable laws and regulations.</p>

											<p><b class="text-decoration-underline">Control Functions Establishment:</b> The Board and Senior Management are responsible for establishing and implementing control functions to manage risk, ensure compliance, and maintain the financial health of the Bank.</p>

											<p>In summary, governance risk in the context of AYA Bank involves the potential pitfalls and threats related to these aspects of corporate governance. By effectively managing these risks, the Bank ensures its sustainability, growth, and contribution to Myanmar's economic development.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						@include('about-aya.governance.sidebar', ['side_page'=>'managing_risk'])
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

@endsection('content')