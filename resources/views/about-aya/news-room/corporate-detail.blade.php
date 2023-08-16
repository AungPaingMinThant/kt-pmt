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
							<img src="{{ url('/public/'.$blog->featured_image) }}" class="img-fluid">
						</div>
						<div class="space-40"></div>
						<div class="row">
							<p>Posted on {{ date('F d, Y',strtotime($blog->publish_date)) }}</p>
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
								<div class="col-md-12">
									<img src="{{ url('/public/'.$blogfiles->file_path) }}" class="img-fluid">
								</div>
							@endif
							@if($blog->media_type == 2)
								<?php
									$blogfiles = App\Models\BlogFile::where('blog_id',$blog->id)->get();
									$bfile_count = 1;
									$bfile_count_modal = 1;
								?>
								<div class="row">
									@foreach($blogfiles as $b_file)
										<div class="col-md-4 mb-30">
    										<div style="background-image: url('{{ url("/public/".$b_file->file_path) }}');height: 200px;background-size: cover;width: 100%;"></div>
    									</div>
										@php $bfile_count = $bfile_count + 1; @endphp
									@endforeach
								</div>
							@endif
							@if($blog->media_type == 3)
							@endif
							@if($blog->media_type == 4)
								<?php
									$blogfiles = App\Models\BlogFile::where('blog_id',$blog->id)->get();
									$bfile_count = 1;
								?>

								<div class="row">
									@foreach($blogfiles as $b_file)
										<div class="col-md-4 mb-30">
											@if($b_file->file_img_link != '')
    											<img src="{{ url('/public/'.$b_file->file_img_link) }}" class="img-fluid">
    										@else
    											
    										@endif

    										<a class="text-decoration-underline" href="{{ url('/public/'.$b_file->file_path) }}" target="_blank">Click here to view details</a>
    									</div>
										@php $bfile_count = $bfile_count + 1; @endphp
									@endforeach
								</div>
							@endif
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

						<div class="row pl-1">
							<?php
								$related = App\Models\Blog::where('id','!=',$blog->id)->where('blog_category',4)->where('status','0')->orderBy('publish_date', 'desc')->limit(3)->get();
							?>
							@if(count($related) > 0)
								<h4 class="fw-semibold mt-minus-10 mb-0">Related News</h4>
								<hr class="cat-bottom-hr">
							@endif
							@foreach($related as $rel)
								<div class="row">
									<div class="news_title_div">
										<a class="news_title_link" href="{{ url('/about-aya/news-room/corporate-news/'.$rel->permalink) }}">
											<p class="rel_news_title">{{ $rel->blog_title }}</p>
										</a>
									</div>
									<hr>
								</div>
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
<script type="text/javascript">
	
</script>

@endsection('content')