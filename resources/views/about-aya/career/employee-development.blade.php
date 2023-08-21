@extends('layouts.frontend-app')

@section('title', 'Employee Development – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/career.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'employee_development'])

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-12">
						<p class="drop-cap">We value our people. We nurture, develop and respect them, celebrate their success together, and are respected for our highly professional approach. We take bold steps to invest in the trainings and development of workforce to become future-ready as the financial industry evolves.</p>
					</div>
				</div>
				<div class="space-20"></div>
			</div>

			<div class="space-60"></div>
			<div class="CTA_div our_continuous_learning_journey_section">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-4 emp_dev_CTA_detail_col_1"></div>
						<div class="col-md-8 CTA_detail_col_2 our_continuous_learning_journey">
							<p class="f-white fw-semibold" style="font-size: 20px;">Our Continuous Learning Journey</p>
							<p class="f-white">AYA Bank is committed to be at the forefront of the future of banking, with the ability of nurturing future talents. We help our people improve their competencies, gain new skills, increase the knowledge horizon, and grow them in both personal and professional lives. Continuous learning journeys are being provided to our employees for their capacity development and upgrading for future-proof skillsets.</p>
							<p class="f-white">To fuel the culture of learning, we provide employees at all levels with access to the Bank’s online learning portal which is reachable on their fingertips at any time. We organize strategy programs with global management consulting firms to develop new ways of thinking, and learn to lead with purpose.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA2_div">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-8 emp_dev_CTA2_detail_col_1">
							<p class="theme_text_color fw-semibold" style="font-size: 20px;">Mentoring @ Workplace</p>
							<p>We are constantly on the move of encouraging our people learning at every day from workplace and further development to ensure having the skills required for the jobs of today and tomorrow. We create an opened working culture for raising questions, learning from mistakes, developing new skills, and acquiring wisdom. It enables employee to get connected with those who have more experience and who can pass on their hard-earned knowledge and career advice.</p>
							<p>Furthermore, we use our collective capacity to foster partnership with colleagues for the purposes of learning and growth. By developing our employee at all levels, enabling the Bank to build a strong succession pipeline of future leaders.</p>
						</div>
						<div class="col-md-4 emp_dev_CTA2_detail_col_2"></div>
					</div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA_div">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-4 emp_dev_CTA_detail_2_col_1"></div>
						<div class="col-md-8 CTA_bond_detail_col_2 open_opportunity_col">
							<p class="f-white fw-semibold" style="font-size: 20px;">Open opportunity for all</p>
							<p class="f-white fw-semibold">Enhance Your Career With Us!</p>
							<p class="f-white">Whether you are a banking-experienced person or not, an experienced or fresh graduate, we are committed to offer equal employment opportunity and career advancement for all. We recognize the crucial need for innovation and the creation of fresh prospects, both within our organization and the broader society.</p>
							<p class="f-white">By implementing a 'Policy and Procedure for Non-discrimination', we guarantee employment opportunities free from prejudice, regardless of race, religion, gender, age, or any other legally protected characteristics.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA2_div">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-8 emp_dev_CTA2_detail_col_1">
							<p class="theme_text_color fw-semibold" style="font-size: 20px;">Performance Management</p>
							<p>With the swift expansion of branches and the new functions assigned, it is more critical to place the right people at the right position in the right time. In that effort, performance management is a key success factor. Our performance management system is an ongoing process to identify talents for their strengths and areas of improvement; to craft their career paths.  Managers try to create positive experiences to motivate employee and drive high performance.</p>
							<p>By utilizing modern-digital evaluating system (which includes strong Key Performance Indicators (KPIs) with Two-way Feedbacks and communication), we achieve continual development and progress of our people as well as their commitment to AYA Bank.</p>
						</div>
						<div class="col-md-4 emp_dev_CTA4_detail_col_2"></div>
					</div>
				</div>
			</div>

			<div class="space-60"></div>
			<div class="CTA_div">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-4 emp_dev_CTA_detail_5_col_1"></div>
						<div class="col-md-8 CTA_bond_detail_col_2 open_opportunity_col">
							<p class="f-white fw-semibold" style="font-size: 20px;">Career Development</p>
							<p class="f-white">As being an employee at AYA Bank, you will find potential prospects to grow across the organization. To ensure the success of everyone in AYA, we offer both lateral and vertical career growth opportunities. A wide range of career support is placed to ensure our employee are continuously developing. The immediate reporting person will be guiding you to set clear career goals with positive feedbacks in achieving them. We also set the culture to take self-responsibility for chasing own career development.</p>
							<p class="f-white">Our people management team recognizes the skill set of the individual employee, identifies development programs to help you strengthen quality of work and outreach to next level in career journey.</p>
						</div>
					</div>
				</div>
			</div>

			<div style="background-color: #f9f9fb;">
				<div class="space-60"></div>
				<div class="container section_1">
					<h4 class="fw-semibold mb-10">Meet Our People Growing With AYA</h4>
					<hr class="bottom_hr">
					<p>At AYA Bank, we give everyone opportunity to take ownership of their work – we empower them to be responsible for the successful execution of tasks and projects and write their own story.  Our 6000+ employees are proud to be part of our vibrant, friendly and growing team.</p>
					<div class="space-20"></div>
					<div class="row">
						<div class="col-md-6 our_people_col">
							<div class="row our_people_row">
								<div class="col-md-3 our_people_img_col">
									<img src="{{ url('/images/about-aya/career/employee-development/khine_swe_thaw.webp') }}" alt="Khine Swe Thaw | People Department" class="img-fluid our_people_img">
								</div>
								<div class="col-md-9">
									<p class="mb-0 fw-semibold" style="font-size: 18px;">Khine Swe Thaw</p>
									<p class="mb-10 fw-semibold" style="font-size: 16px;">People Department</p>
									<p>I have felt highly-valued and have been invested in developing my skills and reach my career goals.</p>
									<p class="mb-0 fw-500 theme_text_color our_people_view_bio" data-bs-toggle="modal" data-bs-target="#khine_swe_thaw_modal">View Bio&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 our_people_col">
							<div class="row our_people_row">
								<div class="col-md-3 our_people_img_col">
									<img src="{{ url('/images/about-aya/career/employee-development/ye_aung.webp') }}" alt="Ye Aung | Corporate Domestic Banking" class="img-fluid our_people_img">
								</div>
								<div class="col-md-9">
									<p class="mb-0 fw-semibold" style="font-size: 18px;">Ye Aung</p>
									<p class="mb-10 fw-semibold" style="font-size: 16px;">Corporate Domestic Banking</p>
									<p>I’ve received a huge amount of support and training from the business, and I am really enjoying the new challenge.</p>
									<p class="mb-0 fw-500 theme_text_color our_people_view_bio" data-bs-toggle="modal" data-bs-target="#ye_aung_modal">View Bio&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="space-60"></div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="khine_swe_thaw_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-3">
						<img src="{{ url('/images/about-aya/career/employee-development/khine_swe_thaw_popup.webp') }}" class="img-fluid rounded mb-20">
					</div>
					<div class="col-md-9">
						<h5 class="card-title theme_text_color fw-semibold mb-0">Khine Swe Thaw</h5>
						<p>People Department</p>
						<p class="mb-10 bio_detail">Khine Swe Thaw started her career at AYA Bank as a Trainer and Learning Program Developer in 2015. Specializing in staff development and performance management, she believes in the Bank’s power of investing to help individuals create a better tomorrow. </p>
						<p class="py-1">“I have felt highly-valued and have been invested in developing my skills and reach my career goals. I’m so proud to be part of AYA Bank and see the growing business together with enriched operation and support; whilst still keeping the personal touch among teams.”</p>
						<p>Currently, she is Head of Talent Acquisition, OD, Performance Management and HR Transformation Projects and taking responsibilities relentlessly with her rich background knowledge, experiences in both Human Resource Management and Organizational Development fields.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="ye_aung_modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-3">
						<img src="{{ url('/images/about-aya/career/employee-development/ye_aung_popup.webp') }}" class="img-fluid rounded mb-20">
					</div>
					<div class="col-md-9">
						<h5 class="card-title theme_text_color fw-semibold mb-0">Ye Aung</h5>
						<p>Corporate Domestic Banking</p>
						<p class="mb-10 bio_detail">Ye Aung embarked on his banking career with an entry-level position in AYA Bank in 2012. Together with his strong devotion to duty, extensive upskilling and AYA Bank’s development programs prepared him for the next step in his career journey.</p>
						<p class="py-1">“Since becoming part of AYA Bank, I have been promoted to team leader role at the Business Unit Department. I’ve received a huge amount of support and training from the business, and I am really enjoying the new challenge. I continue to learn something new every day as the role and business evolve.”</p>
						<p>In his current role as Head of Corporate Domestic Banking, he is responsible for managing local corporate businesses that involves commercial growth in terms of the loan book, customer base and income for the Bank’s corporate targets. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.footer', ['page'=>''])


@endsection('content')