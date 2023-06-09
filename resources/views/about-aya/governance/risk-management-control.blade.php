@extends('layouts.frontend-app')

@section('title', 'Risk Management Framework – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/risk-management.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'risk_mgmt_ctl'])

			<div class="container risk_container">
				<div class="space-40"></div>
				<div class="col-md-12">
					<h4 class="fw-bold">Risk Management Control</h4>
				</div>
				<div class="row">
					<div class="col-md-8" style="padding-right: 40px;">
						<div class="row">
							<p>Effective risk management is fundamentally reliant on competent management and staff. It's crucial that personnel comprehend the Bank's mission, risk appetite, core values, policies, and processes. The management is tasked with creating and maintaining an organizational structure that guarantees clear delineations of responsibility, accountability, and supervision. Senior Management ensures the independence and prominence of personnel engaged in risk management and audit.</p>
						</div>

						<div class="space-20"></div>

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
										Three Lines of Defense Model
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body" style="padding: 20px 20px 0px 0px !important;">
										<div class="row">
											<p>For successful risk management governance that encompasses all potential risks, responsibilities are assigned across different units of the Bank. These assignments form three distinct lines of defense.</p>
											<p><b class="text-decoration-underline">The First Line of Defense</b> is executed by business units where risks are taken. As part of their everyday operations, staff in these units are at the forefront of accurately identifying, assessing, managing, and reporting risk exposures. This is done in line with the Bank's risk appetite, policies, procedures, and controls.</p>
											<p><b class="text-decoration-underline">The Second Line of Defense</b> is delivered by the independent risk management and compliance functions. The risk management function primarily oversees the Bank's risk-taking activities, carries out risk assessments, and reports independently from the business units. Meanwhile, the compliance function ensures adherence to laws, corporate governance rules, and internal policies.</p>
											<p><b class="text-decoration-underline">The Third Line of Defense</b> is ensured by an independent internal audit function. Their responsibility lies in offering assurance on the effectiveness of the Bank’s risk management framework, including the risk management governance arrangements (incorporating the first and second lines of defense).</p>
											<p>Effective risk management necessitates a reporting and review structure to ensure risks are effectively identified and assessed, and appropriate controls and responses are implemented. Regular audits of policy and standards compliance are conducted, and standards performance is reviewed to pinpoint areas for improvement.</p>
											<p>Considering we operate in evolving environments, changes within the Bank and its operating context are recognized, and necessary adjustments are made to systems. The monitoring process guarantees that there are appropriate controls for the Bank’s activities and that the procedures are understood and adhered to.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						@include('about-aya.governance.sidebar', ['side_page'=>'risk_mgmt_ctl'])
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

@endsection('content')