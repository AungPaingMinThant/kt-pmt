<div class="space-40"></div>

@if($page == 'foreign_currency_exchange')
	@php
		$tagline_data = App\Models\Tagline::where('page_slug',$page)->first();
	@endphp
	<div class="row">
		<div class="col-md-4 tag_line" style="font-size: 20px !important;">
			<p style="font-size: 20px !important;">
				{!! $tagline_data->tagline_title !!}
			</p>
		</div>
		<div class="col-md-7 tag_desc">
			<p>{!! $tagline_data->tagline_desc !!}</p>
		</div>
		<div class="col-md-1 tag_desc">
			<i class="bx bx-pencil page_edit_icon" data-bs-toggle="modal" data-bs-target="#section_tagline_modal"></i>
		</div>
	</div>
@endif

<div class="space-40" id="foreign_currency_exchange_rate"></div>

<!-- Modals -->
<div class="modal fade" id="section_tagline_modal" data-bs-backdrop="static" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
		<form class="modal-content" action="{{ url('/admin/tagline/update') }}" method="POST" enctype="multipart/form-data">
			<div class="modal-header">					
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="padding: 0px 40px;">
				{{ csrf_field() }}
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-md-12">
						<div class="mb-3 row">
							<h4 class="mb-0">Tagline Section Update</h4>
							<br><br>
							<div class="col-md-12" style="margin-bottom: 10px;">
								<label class="col-md-2 col-form-label">Tagline Title</label>
								<textarea class="form-control" id="tagline_title" name="tagline_title" rows="3" spellcheck="false" >{{$tagline_data->tagline_title}}</textarea>
								
								<div class="space-20"></div>
								
								<label class="col-md-2 col-form-label">Tagline Desc</label>
								<textarea class="form-control" id="tagline_desc" name="tagline_desc" rows="3" spellcheck="false" >{{$tagline_data->tagline_desc}}</textarea>

								<div class="space-20"></div>
								
								<label for="desktop_banner_image" class="col-md-2 col-form-label">Tagline Image</label>
								<input class="form-control" type="file" name="tagline_img" id="tagline_img" />

								<input type="hidden" name="tagline_img_old" id="tagline_img_old" value="{{ $tagline_data->tagline_img }}">
								<input type="hidden" name="page_slug" id="page_slug" value="{{ $tagline_data->page_slug }}">
							</div>
						</div>
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" style="float: right;">Update</button>
			</div>
			<div class="modal-footer"></div>
		</form>
	</div>
</div>

<script type="text/javascript">
	tinymce.init({
        selector: 'textarea#tagline_title',
        height: 300
    });

    tinymce.init({
        selector: 'textarea#tagline_desc',
        height: 400
    });

    $("#tagline_img").change(function() {
    	$("#tagline_img_old").val('');
    });
</script>