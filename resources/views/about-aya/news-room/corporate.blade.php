@extends('layouts.frontend-app')

@section('title', 'Corporate News – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/news.css') }}">

@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'news','news_year'=>$news_year])

			<div class="space-60"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							@foreach($blog_list as $b_list)
								<div class="news_blog col-md-4 mb-4">
									<div class="row news_img_div" style="background-image: url('{{ url("/public/".$b_list->featured_image) }}')">
										<!-- <img src="{{ url($b_list->featured_image) }}" class="img-fluid"> -->
									</div>
									<div class="news_content_div">
										<div class="news_title_div">
											<a href="{{ url('/about-aya/news-room/corporate-news/'.$b_list->permalink) }}" class="news_title_link">
												<p class="news_title">{{ $b_list->blog_title }}</p>
											</a>
										</div>
										{!! html_entity_decode($b_list->blog_desc) !!}
										<span class="news_date mb-0">{{ date('d M Y', strtotime($b_list->publish_date)) }}</span>
									</div>
								</div>
							@endforeach
						</div>
					</div>
					<div class="col-md-3">
						<div class="row pl-1">
							<h4 class="fw-semibold mt-minus-10 mb-0">Year</h4>
							<hr class="year-bottom-hr">
							@foreach($yearList as $y_list)
								<p>
									<a href="{{ url('/about-aya/news-room/corporate-news/year/'.$y_list->publish_year) }}" class="f-body-color year_link">{{ $y_list->publish_year }}</a>
								</p>
							@endforeach
						</div>

						<div class="space-30"></div>

<!-- 						<div class="row pl-1">
							<h4 class="fw-semibold mt-minus-10 mb-0">Categories</h4>
							<hr class="cat-bottom-hr">
							@foreach($categories as $cat)
								<p>
									<a href="#" class="f-body-color">{{ $cat->category_name }}</a>
								</p>
							@endforeach
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')