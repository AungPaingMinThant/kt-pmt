@extends('layouts.frontend-app')

@section('title', 'AYA Bank - Your Trusted Partner')
<link rel="stylesheet" href="{{ url('/css/landing.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar" id="layout-wrapper">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'home'])
        	<div class="menu-overlay"></div>

        	<div class="d-none d-sm-block">
        		<div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade landing_carousel" data-bs-ride="carousel" style="box-shadow: 0px 15px 20px 5px #f4f4f4;">
					<ol class="carousel-indicators">
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="3"></li>
						<li data-bs-target="#carouselExample-cf" data-bs-slide-to="4"></li>
					</ol>
					<div class="carousel-inner active">
<!-- 						<div class="carousel-item carousel-item-1 active">
							<video class="img-fluid xl_slide" autoplay loop muted plays-inline>
								<source src="{{ url('/images/home/landing_1920_600.webm') }}" type="video/webm" />
							</video>
							<video class="desk_slide" autoplay loop muted plays-inline>
								<source src="{{ url('/images/home/desk.webm') }}" poster="{{ url('/images/home/desk_poster.jpeg') }}" type="video/mp4" />
							</video>
							<video class="img-fluid tablet_slide" autoplay loop muted>
								<source src="{{ url('/images/home/landing_slide_1.mp4') }}" poster="{{ url('/images/home/landing_slide_1_poster.jpeg') }}" type="video/mp4" />
							</video>
							<div class="row carousel-caption">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<div class="carousel-left-1">
										<p class="carousel-caption-title">Creating</p>
										<p class="carousel-caption-desc">your Financial World in One Bank.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item carousel-item-2">
							<div class="row carousel-caption carousel-caption-2">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<div class="carousel-left-1">
										<p class="carousel-2-caption-title">Reaching New Heights,</p>
										<p class="carousel-2-caption-desc mb-10">Serving with Our Hearts!</p>
										<p class="carousel-2-caption-desc-2" >Treasure AYA.</p>
									</div>
								</div>
							</div>
						</div> -->
						<div class="carousel-item carousel-item-3 active">
							<div class="row carousel-caption carousel-caption-3">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<div class="carousel-left-1">
										<p class="carousel-3-caption-title">Moving Forward,</p>
										<p class="carousel-3-caption-desc mb-10">Going Digital,</p>
										<p class="carousel-3-caption-desc-2">Experience the New AYA on the Go!</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item carousel-item-4">
							<div class="row carousel-caption carousel-caption-4">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<div class="carousel-left-1">
										<p class="carousel-4-caption-title">Act Responsible,</p>
										<p class="carousel-caption-desc carousel-4-caption-desc mb-0">Think Sustainable to Make</p>
										<p class="carousel-caption-desc carousel-4-caption-desc-2">our Future Stronger.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="carousel-item carousel-item-5">
							<div class="row carousel-caption carousel-caption-4">
								<div class="col-md-6">
									<div class="carousel-right-1">
										<p class="carousel-5-caption-title">Learning Today,</p>
										<p class="carousel-caption-desc carousel-5-caption-desc mb-0">For Better Bankers Tomorrow.</p>
										<p class="carousel-caption-desc carousel-5-caption-desc-2">Learn & Grow with AYA.</p>
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
						</div> -->
					</div>
                </div>
            </div>
            <div class="d-block d-sm-none">
                <div id="carouselExample-cf-mobile" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel" style="box-shadow: 0px 15px 20px 5px #f4f4f4;">
					<div class="carousel-inner">
						<div class="carousel-item carousel-item-1-mobile active">
							<div class="row carousel-caption carousel-1-caption">
								<div class="col-md-12">
									<div class="carousel-left-1">
										<p class="carousel-caption-title carousel-1-caption-title">Creating</p>
										<p class="carousel-caption-desc mobile-carousel-caption-desc carousel-1-caption-desc">your Financial World in One Bank.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item carousel-item-2-mobile">
							<div class="row carousel-caption carousel-2-caption">
								<div class="col-md-12">
									<div class="carousel-left-1">
										<p class="carousel-caption-title carousel-2-caption-title">Reaching New Heights,</p>
										<p class="carousel-caption-desc mobile-carousel-caption-desc carousel-2-caption-desc">Serving with Our Hearts!</p>
										<p class="carousel-caption-desc carousel-2-caption-desc-2">Treasure AYA.</p>
									</div>
								</div>
							</div>
						</div> 
						<div class="carousel-item carousel-item-3-mobile">
							<div class="row carousel-caption carousel-3-caption">
								<div class="col-md-12">
									<div class="carousel-left-1">
										<p class="carousel-caption-title carousel-3-caption-title">Moving Forward,</p>
										<p class="carousel-caption-desc mobile-carousel-caption-desc carousel-3-caption-desc">Going Digital,</p>
										<p class="carousel-caption-desc carousel-3-caption-desc-2">Experience the New AYA on the Go!</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item carousel-item-4-mobile">
							<div class="row carousel-caption carousel-4-caption">
								<div class="col-md-12">
									<div class="carousel-left-1">
										<p class="carousel-caption-title carousel-4-caption-title">Act Responsible,</p>
										<p class="carousel-caption-desc mobile-carousel-caption-desc carousel-4-caption-desc">Think Sustainable to Make</p>
										<p class="carousel-caption-desc carousel-4-caption-desc-2">our Future Stronger.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item carousel-item-5-mobile">
							<div class="row carousel-caption carousel-5-caption">
								<div class="col-md-12">
									<div class="carousel-left-1">
										<p class="carousel-caption-title carousel-5-caption-title">Learning Today,</p>
										<p class="carousel-caption-desc mobile-carousel-caption-desc carousel-5-caption-desc">For Better Bankers Tomorrow.</p>
										<p class="carousel-caption-desc carousel-5-caption-desc-2">Learn & Grow with AYA.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <a class="carousel-control-prev" href="#carouselExample-cf-mobile" role="button" data-bs-slide="prev">
                      	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      	<span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample-cf-mobile" role="button" data-bs-slide="next">
                      	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                     	<span class="visually-hidden">Next</span>
                    </a>
                </div>
        	</div>

			<div class="container section_1">
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-6 mbaning_div">
						<div class="row" style="width: 100%">
							<div class="col-md-12" style="position: relative;">
								<div class="row app_detail_div">
									<p class="app_title">AYA mBaning 2.0 Mobile APP</p>
									<p class="app_desc">Everyday banking made easy with AYA mBanking</p>
									<div class="col-md-10 apps_link_div">
										<a href="http://bit.ly/ayambankingios">
											<img src="{{ url('/images/apple.png') }}" class="img-fluid mbaning_img_ios" loading="lazy">
										</a>
										<a href="http://bit.ly/ayambankingandriod">
											<img src="{{ url('/images/google.png') }}" class="img-fluid mbaning_img_andriod" loading="lazy">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 ayapay_div">
						<div class="row" style="width: 100%">
							<div class="col-md-12" style="position: relative;">
								<div class="row ayapay_app_detail_div">
									<p class="app_title">AYA PAY Wallet Mobile APP</p>
									<p class="ayapay_app_desc">AYA PAY Digital Wallet Built with Love</p>
									<div class="col-md-10 ayapay_app_link_div">
										<a href="https://apps.apple.com/us/app/aya-pay-wallet/id1485836756">
											<img src="{{ url('/images/apple.png') }}" class="img-fluid ayapay_img_ios">
										</a>
										<a href="https://play.google.com/store/apps/details?id=com.ayaplus.subscriber">
											<img src="{{ url('/images/google.png') }}" class="img-fluid ayapay_img_andriod">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="space-20"></div>
			</div>

			<div class="CTA_section_1">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6" style="position: relative;">
							<div class="row CTA_section_1_info d-none d-sm-block" id="CTA_section_1_info">
								<div class="col-md-12">
									<p class="CTA_desc mb-0">Match your needs with our comprehensive personal borrowing plan</p>
									<div class="input-group">
										<label class="input-group-text" for="inputGroupSelect01">I want to &nbsp;</label>
										<select class="form-select inputGroupSelect01" name="inputGroupSelect01" id="inputGroupSelect01">
											<option value="0">get a home loan to fulfil my dream</option>
											<option value="1">get a home loan to fulfil my dream</option>
											<option value="2">apply car loan to own my dream car</option>
											<option value="3">plan my child future with education loan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row CTA_section_1_info d-block d-sm-none">
								<div class="col-md-12 text-center">
									<p class="CTA_desc mb-10">Match your needs with our comprehensive personal borrowing plan</p>
									<label class="theme_text_color" for="inputGroupSelect01mobile" style="font-size: 16px;margin-bottom: 5px;">I want to &nbsp;</label>
									<select class="form-select" name="inputGroupSelect01mobile" id="inputGroupSelect01mobile">
										<option value="1" id="inputGroupSelect01_option_1" selected>get a home loan to fulfil my dream</option>
										<option value="2" class="inputGroupSelect01_option">apply car loan to own my dream car</option>
										<option value="3" class="inputGroupSelect01_option">plan my child future with education loan</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="CTA_section_2">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-6" style="position: relative;">
							<div class="row CTA_section_2_info d-none d-sm-block" id="CTA_section_2_info">
								<div class="col-md-12">
									<p class="CTA_desc mb-0">Let us guide you what you are looking for your business</p>
									<div class="input-group">
										<label class="input-group-text" for="inputGroupSelect02">I want to &nbsp;</label>
										<select class="form-select inputGroupSelect02" id="inputGroupSelect02">
											<option value="">get corporate loan for business expansion</option>
											<option value="0">get corporate loan for business expansion</option>
											<option value="1">get business loan for project / tender contract</option>
											<option value="2">start a small business</option>
											<option value="3">grow towards a modern  agricultural sector</option>
											<option value="4">get financing for heavy machinery purchases</option>
											<option value="5">get financing for my shop to take new step</option>
											<option value="6">get commercial vehicle loan for business needs</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row CTA_section_2_info d-block d-sm-none">
								<div class="col-md-12 text-center">
									<p class="CTA_desc mb-10">Let us guide you what you are looking for your business</p>
									<label class="theme_text_color" for="inputGroupSelect02mobile" style="font-size: 16px;margin-bottom: 5px;">I want to &nbsp;</label>
									<select class="form-select" id="inputGroupSelect02mobile">
										<option value="0" selected>get corporate loan for business expansion</option>
										<option value="1">get business loan for project / tender contract</option>
										<option value="2">start a small business</option>
										<option value="3">grow towards a modern  agricultural sector</option>
										<option value="4">get financing for heavy machinery purchases</option>
										<option value="5">get financing for my shop to take new step</option>
										<option value="6">get commercial vehicle loan for business needs</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6"></div>
					</div>
				</div>
			</div>

			<div class="CTA_section_3">
				<div class="container section_1">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6" style="position: relative;">
							<div class="row CTA_section_3_info d-none d-sm-block" id="CTA_section_3_info">
								<div class="row">
									<p class="CTA_desc mb-0">ATM / Branch / FX Counter Locator</p>
									<div class="input-group CTA_3_input_group" style="width: 70% !important;">
										<label class="input-group-text" for="inputGroupSelect03">I want to find &nbsp;</label>
										<select class="form-select inputGroupSelect03" id="inputGroupSelect03" style="width: 50%">
											<option value="">Branch</option>
											<option value="0">Branch</option>
											<option value="1">ATM</option>
											<option value="2">FX Counter</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row CTA_section_3_info d-block d-sm-none">
								<div class="col-md-12 text-center">
									<p class="CTA_desc mb-10">ATM / Branch / FX Counter Locator</p>
									<label class="theme_text_color" for="inputGroupSelect03mobile" style="font-size: 16px;margin-bottom: 5px;">I want to find &nbsp;</label>
									<select class="form-select" id="inputGroupSelect03mobile">
										<option value="0" selected>Branch</option>
										<option value="1">ATM</option>
										<option value="2">FX Counter</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="space-40"></div>

			<div class="container insights_container">
				<div class="row text-center">
					<p class="insights_title">INSIGHTS</p>
					<p class="insights_sub_title">Keep pace with Aya Bank news and update</p>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<a href="">
								<img src="{{ url('/public/'.$first_blog->featured_image) }}" class="img-fluid">
							</a>
						</div>
						<div class="news_content_div">
							<div class="news_title_div">
								<a href="{{ url('/about-aya/news-room/corporate-news/'.$first_blog->permalink) }}">
									<p class="news_title">{{ $first_blog->blog_title }}</p>
								</a>
							</div>
							<p class="news_desc mb-20">AYA Bank organized ‘National Apprenticeship Program’ in partnership with the National Management Acdemy (NMA) to shape the future of students with a wide range of opportunities to learn a specific skill in the financial services industry.</p>
							<p class="mb-0"><span class="news_category">CORPORATE NEWS</span><span class="news_break">|</span><span class="news_date">{{ date('d M Y', strtotime($first_blog->publish_date)) }}</span></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="row news_img_div" style="background-image:  url('{{ url($second_blog->featured_image) }}');"></div>
								<div class="news_content_div">
									<a href="{{ url('/about-aya/news-room/corporate-news/'.$second_blog->permalink) }}">
										<p class="news_title">{{ $second_blog->blog_title }}</p>
									</a>
									<p class="mb-0"><span class="news_category">CORPORATE NEWS</span><span class="news_break">|</span><span class="news_date">{{ date('d M Y', strtotime($second_blog->publish_date)) }}</span></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row news_img_div" style="background-image:  url('{{ url($third_blog->featured_image) }}');"></div>
								<div class="news_content_div">
									<a href="{{ url('/about-aya/news-room/corporate-news/'.$third_blog->permalink) }}">
										<p class="news_title">{{ $third_blog->blog_title }}</p>
									</a>
									<p class="mb-0"><span class="news_category">CORPORATE NEWS</span><span class="news_break">|</span><span class="news_date">{{ date('d M Y', strtotime($third_blog->publish_date)) }}</span></p>
								</div>
							</div>
						</div>

						<div class="space-20"></div>
						<div class="row view_all_news">
							<div class="col-md-6 view_all_news_col"></div>
							<div class="col-md-6 text-center view_all_news_div" style="display: table;height: auto;">
								<a href="{{ url('/about-aya/news-room/corporate-news/') }}" style="display: table-cell;vertical-align: middle;">
									<p class="mb-0" style="color: #fff;">View All <i class="menu-icon tf-icons bx bx-chevron-right"></i></p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="space-80"></div>

			<div class="award_accolade_div">
				<div class="container insights_container">
					<div class="d-none d-sm-block">
						<div class="row">
							<div class="col-md-5 accolades_text_div">
								<p class="mb-0">Discover about our achievements</p>
								<p style="font-size: 30px;font-weight: 800">Awards and Accolades</p>
								<!-- <a class="view_more_desk_link" href="https://saltnpixel.com/AYABank/AYABank_Awards.html" target="_blank">
									<p class="mb-0 theme_text_color fw-bold">Discover More <i class="tf-icons bx bx-chevron-right"></i></p>
								</a> -->
							</div>
							<div class="col-md-7 award_icon_div">
								<div class="row">
									<div class="col">
										<img src="{{ url('/images/home/3-Fastest-Growing-Retail-Bank-2014.png') }}" class="img-fluid" style="width: 70%;">
									</div>
									<div class="col">
										<img src="{{ url('/images/home/2-Best-Regional-Banking-Partner-2017.png') }}" class="img-fluid" style="width: 70%;">
									</div>
									<div class="col">
										<img src="{{ url('/images/home/2-un_global_compact.png') }}" class="img-fluid" style="width: 70%;">
									</div>
									<div class="col">
										<img src="{{ url('/images/home/2-Banker-of-the-Year-2014.png') }}" class="img-fluid" style="width: 70%;">
									</div>
									<div class="col text-center">
										<img src="{{ url('/images/home/2-CSR-Award-2017.png') }}" class="img-fluid">
									</div>
								</div>
								<a class="view_more_tab_link" href="https://saltnpixel.com/AYABank/AYABank_Awards.html" target="_blank">
									<p class="mb-0 theme_text_color fw-bold">Discover More <i class="tf-icons bx bx-chevron-right"></i></p>
								</a>
							</div>
						</div>
					</div>

					<div class="row d-block d-sm-none">
						<div class="col-md-12 text-center">
							<p class="mb-0">Discover about our achievements</p>
							<p style="font-size: 28px;font-weight: 800">Awards and Accolades</p>
							<!-- <a href="https://saltnpixel.com/AYABank/AYABank_Awards.html" target="_blank">
								<p class="mb-20 theme_text_color fw-bold">Discover More <i class="tf-icons bx bx-chevron-right"></i></p>
							</a> -->


							<div class="row">
								<div class="col-12">
									<img src="{{ url('/images/home/3-Fastest-Growing-Retail-Bank-2014.webp') }}" class="img-fluid" style="width: 20%;">
								</div>
								<div class="col-12">
									<img src="{{ url('/images/home/2-Best-Regional-Banking-Partner-2017.webp') }}" class="img-fluid" style="width: 20%;">
								</div>
								<div class="col-12">
									<img src="{{ url('/images/home/2-un_global_compact.webp') }}" class="img-fluid" style="width: 20%;">
								</div>
								<div class="col-12">
									<img src="{{ url('/images/home/2-Banker-of-the-Year-2014.webp') }}" class="img-fluid" style="width: 20%;">
								</div>
								<div class="col-12 text-center">
									<img src="{{ url('/images/home/2-CSR-Award-2017.webp') }}" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.footer', ['page'=>'mobilebanking'])

<script type="text/javascript">
	var APP_URL = {!! json_encode(url('/')) !!};

	var previousValue;
	var previousValue2;
	var previousValue3;

	// var dropdown = document.getElementById('inputGroupSelect01');
  	// dropdown.selectedIndex = -1;
  	// dropdown.options[1].selected = true;

  	// var dropdown2 = document.getElementById('inputGroupSelect02');
  	// dropdown2.selectedIndex = -1;
  	// dropdown2.options[1].selected = true;

  	// var dropdown3 = document.getElementById('inputGroupSelect03');
  	// dropdown3.selectedIndex = -1;
  	// dropdown3.options[1].selected = true;

	document.getElementById('CTA_section_1_info').addEventListener('click', function(event) {
		if (event.target.classList.contains('inputGroupSelect01')) {
			$('select[id=inputGroupSelect01] > option:first-child').text('-- Select an option --');
		}
	});

  	document.getElementById('layout-wrapper').addEventListener('click', function(event) {
  		console.log(event.target.classList);
		if (!event.target.classList.contains('CTA_section_1_info') && !event.target.classList.contains('inputGroupSelect01') && !event.target.classList.contains('input-group')) {
			$('select[id=inputGroupSelect01] > option:first-child').text('get a home loan to fulfil my dream');
		}
	});

	$("#inputGroupSelect01").change(function(e) {
		var dropdown = document.getElementById("inputGroupSelect01");
		var open = $(this).data("isopen");

		if (this.value === previousValue) {
			if (this.value == 1) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/home-loan';
			}
			if (this.value == 2) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/auto-loan';
			}
			if (this.value == 3) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/education-loan';
			}
		} else {
			if ($('#inputGroupSelect01 option:selected').val() == 1) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/home-loan';
			}
			if ($('#inputGroupSelect01 option:selected').val() == 2) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/auto-loan';
			}
			if ($('#inputGroupSelect01 option:selected').val() == 3) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/education-loan';
			}
		}

		previousValue = this.value;

		$(this).data("isopen", !open);
		event.stopPropagation();
	});

	$("#inputGroupSelect01mobile").mouseup(function() {
		var dropdown = document.getElementById("inputGroupSelect01");
		var open = $(this).data("isopen");

		if (this.value === previousValue) {
			if (this.value == 1) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/home-loan';
			}
			if (this.value == 2) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/auto-loan';
			}
			if (this.value == 3) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/education-loan';
			}
		} else {
			if ($('#inputGroupSelect01 option:selected').val() == 1) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/home-loan';
			}
			if ($('#inputGroupSelect01 option:selected').val() == 2) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/auto-loan';
			}
			if ($('#inputGroupSelect01 option:selected').val() == 3) {
				window.location.href = APP_URL+'/personal-banking/borrowing/hire-purchase/education-loan';
			}
		}

		previousValue = this.value;

		$(this).data("isopen", !open);
	});

	document.getElementById('CTA_section_2_info').addEventListener('click', function(event) {
		if (event.target.classList.contains('inputGroupSelect02')) {
			$('select[id=inputGroupSelect02] > option:first-child').text('-- Select an option --');
		}
	});

  	document.getElementById('layout-wrapper').addEventListener('click', function(event) {
  		console.log(event.target.classList);
		if (!event.target.classList.contains('CTA_section_2_info') && !event.target.classList.contains('inputGroupSelect02') && !event.target.classList.contains('input-group')) {
			$('select[id=inputGroupSelect02] > option:first-child').text('get corporate loan for business expansion');
		}
	});

	$('#inputGroupSelect02').change(function(e){
		var dropdown = document.getElementById("inputGroupSelect02");
		var open = $(this).data("isopen");
			
		if (this.value === previousValue2) {
			if ($('#inputGroupSelect02 option:selected').val() == 0) {
				window.location.href = APP_URL+'/business/borrowing/corporate-business-loan#demand_loan';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 1) {
				window.location.href = APP_URL+'/business/borrowing/corporate-business-loan#project_loan_tender_contract_loan';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 2) {
				window.location.href = APP_URL+'/business/borrowing/sme#aya_sme_loan';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 3) {
				window.location.href = APP_URL+'/business/borrowing/sme#agriculture_loan';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 4) {
				window.location.href = APP_URL+'/business/borrowing/hire-purchase#heavy_mahine_hp';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 5) {
				window.location.href = APP_URL+'/business/borrowing/hire-purchase#shop_house';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 6) {
				window.location.href = APP_URL+'/business/borrowing/hire-purchase#auto_loan_corporate';
			}
		} else {
			if ($('#inputGroupSelect02 option:selected').val() == 0) {
				window.location.href = APP_URL+'/business/borrowing/corporate-business-loan#demand_loan';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 1) {
				window.location.href = APP_URL+'/business/borrowing/corporate-business-loan#project_loan_tender_contract_loan';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 2) {
				window.location.href = APP_URL+'/business/borrowing/sme#aya_sme_loan';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 3) {
				window.location.href = APP_URL+'/business/borrowing/sme#agriculture_loan';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 4) {
				window.location.href = APP_URL+'/business/borrowing/hire-purchase#heavy_mahine_hp';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 5) {
				window.location.href = APP_URL+'/business/borrowing/hire-purchase#shop_house';
			}
			if ($('#inputGroupSelect02 option:selected').val() == 6) {
				window.location.href = APP_URL+'/business/borrowing/hire-purchase#auto_loan_corporate';
			}
		}

		previousValue2 = this.value;

		$(this).data("isopen", !open);
	});

	$('#inputGroupSelect02mobile').mouseup(function(){
		var open = $(this).data("isopen");
		if (open) {
			if (this.value === previousValue2) {
				if ($('#inputGroupSelect02mobile option:selected').val() == 0) {
					window.location.href = APP_URL+'/business/borrowing/corporate-business-loan#demand_loan';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 1) {
					window.location.href = APP_URL+'/business/borrowing/corporate-business-loan#project_loan_tender_contract_loan';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 2) {
					window.location.href = APP_URL+'/business/borrowing/sme#aya_sme_loan';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 3) {
					window.location.href = APP_URL+'/business/borrowing/sme#agriculture_loan';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 4) {
					window.location.href = APP_URL+'/business/borrowing/hire-purchase#heavy_mahine_hp';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 5) {
					window.location.href = APP_URL+'/business/borrowing/hire-purchase#shop_house';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 6) {
					window.location.href = APP_URL+'/business/borrowing/hire-purchase#auto_loan_corporate';
				}
			} else {
				if ($('#inputGroupSelect02mobile option:selected').val() == 0) {
					window.location.href = APP_URL+'/business/borrowing/corporate-business-loan#demand_loan';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 1) {
					window.location.href = APP_URL+'/business/borrowing/corporate-business-loan#project_loan_tender_contract_loan';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 2) {
					window.location.href = APP_URL+'/business/borrowing/sme#aya_sme_loan';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 3) {
					window.location.href = APP_URL+'/business/borrowing/sme#agriculture_loan';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 4) {
					window.location.href = APP_URL+'/business/borrowing/hire-purchase#heavy_mahine_hp';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 5) {
					window.location.href = APP_URL+'/business/borrowing/hire-purchase#shop_house';
				}
				if ($('#inputGroupSelect02mobile option:selected').val() == 6) {
					window.location.href = APP_URL+'/business/borrowing/hire-purchase#auto_loan_corporate';
				}
			}
		}

		previousValue2 = this.value;

		$(this).data("isopen", !open);
	});

	document.getElementById('CTA_section_3_info').addEventListener('click', function(event) {
		if (event.target.classList.contains('inputGroupSelect03')) {
			$('select[id=inputGroupSelect03] > option:first-child').text('-- Select an option --');
		}
	});

  	document.getElementById('layout-wrapper').addEventListener('click', function(event) {
  		console.log(event.target.classList);
		if (!event.target.classList.contains('CTA_section_3_info') && !event.target.classList.contains('inputGroupSelect03') && !event.target.classList.contains('input-group')) {
			$('select[id=inputGroupSelect03] > option:first-child').text('Branch');
		}
	});

	$('#inputGroupSelect03').change(function(){
		var dropdown = document.getElementById("inputGroupSelect03");
		var open = $(this).data("isopen");

		if (this.value === previousValue2) {
			// if ($('#inputGroupSelect03 option:selected').val() == 0) {
			// 	window.location.href = APP_URL+'/insurance/life/universal';
			// }
			if ($('#inputGroupSelect03 option:selected').val() == 1) {
				window.location.href = APP_URL+'/digital-services/atm';
			}
			// if ($('#inputGroupSelect03 option:selected').val() == 2) {
			// 	window.location.href = APP_URL+'/insurance/motor';
			// }
		} else {
			// if ($('#inputGroupSelect03 option:selected').val() == 0) {
			// 	window.location.href = APP_URL+'/insurance/life/universal';
			// }
			if ($('#inputGroupSelect03 option:selected').val() == 1) {
				window.location.href = APP_URL+'/digital-services/atm';
			}
			// if ($('#inputGroupSelect03 option:selected').val() == 2) {
			// 	window.location.href = APP_URL+'/insurance/motor';
			// }
		}

		previousValue3 = this.value;

		$(this).data("isopen", !open);
	});

	$('#inputGroupSelect03mobile').mouseup(function(){
		var open = $(this).data("isopen");
		if (open) {
			if (this.value === previousValue2) {
				// if ($('#inputGroupSelect03mobile option:selected').val() == 0) {
				// 	window.location.href = APP_URL+'/insurance/life/universal';
				// }
				if ($('#inputGroupSelect03mobile option:selected').val() == 1) {
					window.location.href = APP_URL+'/digital-services/atm';
				}
				// if ($('#inputGroupSelect03mobile option:selected').val() == 2) {
				// 	window.location.href = APP_URL+'/insurance/motor';
				// }
			} else {
				// if ($('#inputGroupSelect03mobile option:selected').val() == 0) {
				// 	window.location.href = APP_URL+'/insurance/life/universal';
				// }
				if ($('#inputGroupSelect03mobile option:selected').val() == 1) {
					window.location.href = APP_URL+'/digital-services/atm';
				}
				// if ($('#inputGroupSelect03mobile option:selected').val() == 2) {
				// 	window.location.href = APP_URL+'/insurance/motor';
				// }
			}
		}

		previousValue3 = this.value;

		$(this).data("isopen", !open);
	});
</script>

@endsection('content')