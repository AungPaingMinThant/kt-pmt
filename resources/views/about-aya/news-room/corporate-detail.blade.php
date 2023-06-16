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
						<div class="row">
							<img src="{{ url($blog->featured_image) }}" class="img-fluid">
						</div>
						<div class="space-40"></div>
						<div class="row">
							<p class="news_title">{{ $blog->blog_title }}</p>
						</div>
						<div class="row">
							{!! html_entity_decode($blog->blog_desc) !!}
						</div>
						<div class="row">
							@if($blog->media_type == 1)
								<?php
									$blogfiles = App\Models\BlogFile::where('blog_id',$blog->id)->first();
								?>
								<img src="{{ url($blogfiles->file_path) }}" class="img-fluid">
							@endif
							@if($blog->media_type == 2)
								<?php
									$blogfiles = App\Models\BlogFile::where('blog_id',$blog->id)->get();
								?>
								@foreach($blogfiles as $b_file)
									<div class="col-md-4">
										<img src="{{ url($b_file->file_path) }}" class="img-fluid">
									</div>
								@endforeach
							@endif
							@if($blog->media_type == 3)
							@endif
						</div>
					</div>
					<div class="col-md-3">
						<div class="row pl-1">
							<h4 class="fw-semibold mt-minus-10 mb-0">Year</h4>
							<hr class="year-bottom-hr">
							@foreach($yearList as $y_list)
								<p>
									<a href="{{ url('/about-aya/news-room/corporate-news/year/'.$y_list->publish_year) }}" class="f-body-color">{{ $y_list->publish_year }}</a>
								</p>
							@endforeach
						</div>

						<div class="space-30"></div>

						<div class="row pl-1">
							<h4 class="fw-semibold mt-minus-10 mb-0">Categories</h4>
							<hr class="cat-bottom-hr">
							@foreach($categories as $cat)
								<p>
									<a href="#" class="f-body-color">{{ $cat->category_name }}</a>
								</p>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')