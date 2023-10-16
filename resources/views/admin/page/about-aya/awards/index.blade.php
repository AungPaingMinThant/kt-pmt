@extends('layouts.frontend-app')

@section('title', 'Awards – AYA Bank')
@section('content')
<link rel="stylesheet" href="{{ url('/css/about-aya/award.css') }}">
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
            @include('layouts.nav', ['nav'=>'AYA Bank Profile', 'page'=>'awards'])
            <br>
            @include('layouts.admin_banner', ['page'=>'awards', 'mobilebanking'=>''])

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<div class="full_service_col_1 col-md-12">
						<p>As a leading private bank in Myanmar, we are proud of our products and services delivered to customers is awarded by well known financial publications and awarding bodies.</p>
					</div>
				</div>
				<div class="space-30"></div>
				<div class="row">
					<div class="col-md-9 timeline-col">
						<div class="row 2020" id="2020">
							<div class="col-md-2">
								<h3 class="fw-bold">2020</h3>
							</div>
							<div class="col-md-10 award_row_box">
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2020_SMEs_Award.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Myanmar's Best Bank for SMEs</span><br>
											Asiamoney Awards
										</p>
									</div>
								</div>
							</div>
							<div class="space-60"></div>
							<hr>
							<div class="space-60"></div>
						</div>
						<div class="row 2019" id="2019">
							<div class="col-md-2">
								<h3 class="fw-bold">2019</h3>
							</div>
							<div class="col-md-10 award_row_box">
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2019_EDGE_Certificate.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">EDGE Certificate for Gender Equality</span><br>
											The Business Coalition for Gender Equality (BCGE)
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2019_CSR_Award.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Myanmar’s Best Bank for CSR</span><br>
											Asiamoney Awards 
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2019_SMEs_Award.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Myanmar’s Best Bank for SMEs</span><br>
											Asiamoney Awards
										</p>
									</div>
								</div>
							</div>
							<div class="space-60"></div>
							<hr>
							<div class="space-60"></div>
						</div>
						<div class="row 2018" id="2018">
							<div class="col-md-2">
								<h3 class="fw-bold">2018</h3>
							</div>
							<div class="col-md-10 award_row_box">
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2018_Best_Bank_Award.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Myanmar’s Best Domestic Bank</span><br>
											Asiamoney Awards
										</p>
									</div>
								</div>
							</div>
							<div class="space-60"></div>
							<hr>
							<div class="space-60"></div>
						</div>
						<div class="row 2017" id="2017">
							<div class="col-md-2">
								<h3 class="fw-bold">2017</h3>
							</div>
							<div class="col-md-10 award_row_box">
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2017_CSR_Award.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Myanmar’s Best Bank for CSR</span><br>
											Asiamoney Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2017_Best_Regional_Banking_Partner.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Regional Banking Partner, Southeast Asia</span><br>
											CFI.co Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2017_Best_Commercial_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Commercial Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2017_Best_Retail_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Retail Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
							</div>
							<div class="space-60"></div>
							<hr>
							<div class="space-60"></div>
						</div>
						<div class="row 2016" id="2016">
							<div class="col-md-2">
								<h3 class="fw-bold">2016</h3>
							</div>
							<div class="col-md-10 award_row_box">
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2016_Most_Sustainable_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Most Sustainable Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2016_Best_Banking_Group.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Banking Group , Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2016_Best_Private_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Private Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
							</div>
							<div class="space-60"></div>
							<hr>
							<div class="space-60"></div>
						</div>
						
						<div class="row 2015" id="2015">
							<div class="col-md-2">
								<h3 class="fw-bold">2015</h3>
							</div>
							<div class="col-md-10 award_row_box">
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2015_Most_Sustainable_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Most Sustainable Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2015_Best_Banking_Group.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Banking Group , Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2015_Best_Private_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Private Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
							</div>
							<div class="space-60"></div>
							<hr>
							<div class="space-60"></div>
						</div>

						<div class="row 2014" id="2014">
							<div class="col-md-2">
								<h3 class="fw-bold">2014</h3>
							</div>
							<div class="col-md-10 award_row_box">
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2014_Banker_of_the_Year.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Banker of the Year</span><br>
											The Myanmar Times
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2014_Most_Innovative_Banking_Services.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Most Innovative Banking Services, Myanmar</span><br>
											Global Banking and Finance Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2014_Fastest_Growing_Retail_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Fastest Growing Retail Bank, Myanmar</span><br>
											Global Banking and Finance Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2014_Best_Retail_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Retail Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2014_Best_Private_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Private Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
							</div>
							<div class="space-60"></div>
							<hr>
							<div class="space-60"></div>
						</div>
						<div class="row 2013" id="2013">
							<div class="col-md-2">
								<h3 class="fw-bold">2013</h3>
							</div>
							<div class="col-md-10 award_row_box">
								<div class="row award_box">
									<div class="col-md-2 award_img_col">
										<img src="{{ url('/images/about-aya/corporate-profile/award/2013_Best_Private_Bank.webp') }}" class="img-fluid award_img">
									</div>
									<div class="col-md-8 award_desc_col">
										<p class="mb-0 award_desc">
											<span class="fw-semibold award_title">Best Private Bank, Myanmar</span><br>
											World Finance Awards
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 space-80"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-1 space-col"></div>
					<div class="col-md-2 year-col">
						<nav class="awards_side_bar" id="myScrollspy">
							<ul class="nav nav-pills flex-column side_bar">
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_title">
										<span class="pr-5 fw-bold">Year</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link active" id="2020_link" href="#2020">
										<span>2020</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2019_link" href="#2019">
										<span>2019</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2018_link" href="#2018">
										<span>2018</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2017_link" href="#2017">
										<span>2017</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2016_link" href="#2016">
										<span>2016</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2015_link" href="#2015">
										<span>2015</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2014_link" href="#2014">
										<span>2014</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link milestones_sidebar_link" id="2013_link" href="#2013">
										<span>2013</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])

<script type="text/javascript">
	$(window).on('scroll', function() {
		var scrollTop = $(this).scrollTop();

		var y_2020 = $("#2020");
		if (scrollTop > y_2020.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2020_link").addClass('active');
		}

		var y_2019 = $("#2019");
		if (scrollTop > y_2019.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2019_link").addClass('active');
		}

		var y_2018 = $("#2018");
		if (scrollTop > y_2018.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2018_link").addClass('active');
		}

		var y_2017 = $("#2017");
		if (scrollTop > y_2017.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2017_link").addClass('active');
		}

		var y_2016 = $("#2016");
		if (scrollTop > y_2016.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2016_link").addClass('active');
		}

		var y_2015 = $("#2015");
		if (scrollTop > y_2015.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2015_link").addClass('active');
		}

		var y_2014 = $("#2014");
		if (scrollTop > y_2014.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2014_link").addClass('active');
		}

		var y_2013 = $("#2013");
		if (scrollTop > y_2013.offset().top - 60) {
			$(".nav-link").removeClass('active');
  			$("#2013_link").addClass('active');
		}
	});
</script>

@endsection('content')