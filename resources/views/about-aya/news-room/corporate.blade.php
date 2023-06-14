@extends('layouts.frontend-app')

@section('title', 'Corporate News – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/news.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'news'])

			<div class="space-60"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="nav-align-top mb-4">
							<ul class="nav nav-pills " role="tablist" style="justify-content: left;">
								<li class="nav-item">
									<button type="button" class="tab_title nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-feature_benefit" aria-controls="navs-pills-top-feature_benefit" aria-selected="true" >
										All
									</button>
								</li>
								<li class="nav-item">
									<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-eligibility" aria-controls="navs-pills-top-eligibility" aria-selected="false" >
										2023
									</button>
								</li>
								<li class="nav-item">
									<button type="button" class="tab_title nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-apply" aria-controls="navs-pills-top-apply" aria-selected="false" >
										2021
									</button>
								</li>
							</ul>
							<div class="tab-content" style="background-color: transparent;padding: 20px 0px 0px 0px;">
								<div class="tab-pane fade feature_benefit show active" id="navs-pills-top-feature_benefit" role="tabpanel" style="padding-bottom: 30px;">
									<div class="row">
										@foreach($blog_list as $b_list)
											<div class="col-md-4">
												<div class="row">
													<a href="{{ url('/about-aya/news-room/corporate-news/'.$b_list->permalink) }}">
														<img src="{{ url('/images/'.$b_list->featured_image) }}" class="img-fluid">
													</a>
												</div>
												<div class="news_content_div">
													<div class="news_title_div">
														<a href="">
															<p class="news_title">AYA Bank Offering Apprenticeship Opportunity</p>
														</a>
													</div>
													<p class="news_desc mb-20">AYA Bank organized ‘National Apprenticeship Program’ in partnership with the National Management Acdemy (NMA) to shape the future of students with a wide range of opportunities to learn a specific skill in the financial services industry.</p>
													<p class="mb-0"><span class="news_date">16 May 2023</span></p>
												</div>
											</div>
										@endforeach
									</div>
								</div>
								<div class="tab-pane eligibility fade" id="navs-pills-top-eligibility" role="tabpanel">
									<div class="container tab_section_1">
										
									</div>
								</div>
								<div class="tab-pane apply fade" id="navs-pills-top-apply" role="tabpanel">
									<div class="container tab_section_1">
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')