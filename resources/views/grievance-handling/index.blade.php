@extends('layouts.frontend-app')

@section('title', 'Grievance Handling – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/grievance.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
        	@include('layouts.header', ['page'=>'grievance_handling'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'grievance_handling'])

			<div class="container section_1">
				<div class="space-60"></div>			
				<div class="row" >
					<div class="col-md-12">
						<p>The grievance handling process allows stakeholders (customers, suppliers, and the public) to formally address grievances related to staff or services, helping identify and improve problem areas for better future experiences. This process is based on the following principles:</p>
						<ul style="list-style: disc;margin-left: 0;padding-left: 15px;">
							<li><p>Fair treatment of customers and stakeholders at all times</p></li>
							<li><p>Courteous, prioritized, private, and timely complaint resolution</p></li>
							<li><p>Information provided on escalation avenues, alternative remedies, and organizational rights</p></li>
							<li><p>Efficient, fair handling of grievances to protect the bank's reputation and business</p></li>
							<li><p>Good faith and prejudice-free work from employees in stakeholders' best interests</p></li>
						</ul>

						<div class="space-20"></div>

						<h4>Raising Grievances</h4>
					</div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/grievance-handling/contact_hotline_mail_icon.webp') }}" class="img-fluid raising_grievance_icon mb-20">
						<p class="fw-semibold mb-10">In Writing:</p>
						<p style="color: #555555;">Send grievances to <a href="mailto:info@ayabank.com" class="text-decoration-underline">info@ayabank.com</a></p>
					</div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/grievance-handling/contact_hotline_call_icon.webp') }}" class="img-fluid raising_grievance_icon mb-20">
						<p class="fw-semibold mb-10">By Phone:</p>
						<p style="color: #555555;">Call the 24/7 contact center at <a href="tel:+95 1 2317777" class="text-decoration-underline">+95 1 2317777</a></p>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/grievance-handling/suggestion_system.webp') }}" class="img-fluid raising_grievance_icon mb-20">
						<p class="fw-semibold mb-10">Suggestion System:</p>
						<p style="color: #555555;">Complete the 'Complaint Form' and place it in a suggestion box at branches</p>
					</div>
					<div class="col-md-4 mb-20">
						<img src="{{ url('/images/grievance-handling/in_person.webp') }}" class="img-fluid raising_grievance_icon mb-20">
						<p class="fw-semibold mb-10">In Person:</p>
						<p style="color: #555555;">Visit a branch and speak with a team member<br>(use the branch locator to find the nearest location)</p>
					</div>
					<div class="col-md-4"></div>

					<div class="col-md-12">
						<p>
							Stakeholders can openly address concerns through AYA's grievance channels. Complaints are recorded, resolved, or forwarded to relevant departments as needed for consistent support. Complaint management is monitored, reported, and recorded for timely resolution.
						</p>
					</div>
				</div>

				<div class="space-40"></div>

				<div class="row">
					<div class="col-md-12">
						<p>We strive for immediate complaint resolution. If not possible, we provide step-by-step updates:</p>
					</div>
					<div class="space-20"></div>
					
					<div class="col-md-3 complaint_step_outer">
						<div class="row complaint_step">
							<div class="col-6">
								<p class="fw-500 theme_text_color complaint_step_label mb-0">STEP</p>
							</div>
							<div class="col-6 text-right">
								<p class="fw-semibold theme_text_color complaint_step_number">01</p>
							</div>
						</div>
						<div class="row">
							<div class="space-20"></div>
							<p>If unresolved within one week, we'll contact you with a designated representative.</p>
						</div>
					</div>
					<div class="col-md-3 complaint_step_outer">
						<div class="row complaint_step">
							<div class="col-6">
								<p class="fw-semibold theme_text_color complaint_step_label mb-0">STEP</p>
							</div>
							<div class="col-6 text-right">
								<p class="fw-semibold theme_text_color complaint_step_number">02</p>
							</div>
						</div>
						<div class="row">
							<div class="space-20"></div>
							<p>We'll provide regular updates, and you may contact the representative directly with questions.</p>
						</div>
					</div>
					<div class="col-md-3 complaint_step_outer">
						<div class="row complaint_step">
							<div class="col-6">
								<p class="fw-semibold theme_text_color complaint_step_label mb-0">STEP</p>
							</div>
							<div class="col-6 text-right">
								<p class="fw-semibold theme_text_color complaint_step_number">03</p>
							</div>
						</div>
						<div class="row">
							<div class="space-20"></div>
							<p>We'll work to resolve the complaint quickly and keep you informed of progress. </p>
						</div>
					</div>
					<div class="col-md-3"></div>

					<div class="space-20"></div>
					<div class="col-md-12">
						<p>If unhappy with progress, contact the representative directly at any time.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')