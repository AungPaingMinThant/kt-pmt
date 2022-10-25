<style type="text/css">
	.col-form-label {
		padding-top: 0px;
	}
</style>
<div class="modal fade" id="why_use_AYA_first_modal" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
			<form class="modal-content" action="{{ url('/admin/mbanking/banner/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="padding: 0px 40px;">
					{{ csrf_field() }}
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-12">
							<button type="button" class="btn" data-bs-dismiss="modal" aria-label="">Add New</button>
						</div>
					</div>
					<input type="hidden" name="factcount" id="factcount" value="{{ count($mobilebankingfact) }}">
					@php $factcount = 1; @endphp
					@foreach($mobilebankingfact as $mbfact)
						<div class="row" style="margin-bottom: 20px;border-bottom: 1px solid #4e4e4e;">
							<div class="col-md-11">
								<div class="mb-3 row">
									<label for="section1_fact_icon_{{$factcount}}" class="col-md-2 col-form-label">Icon</label>
									<div class="col-md-9" style="margin-bottom: 10px;">
										<a href="{{ url($mbfact->section1_fact_icon) }}" target="_blank" style="color: #000;text-decoration: underline;">
											{{ $mbfact->icon_name }}
										</a><br>
										<a style="color: #65acc9;">
											<span class="tf-icons bx bx-cloud-upload"></span>Upload new icon
										</a>
										<input class="form-control" type="file" name="section1_fact_icon_{{$factcount}}" id="section1_fact_icon_{{$factcount}}" style="display: none;" />
										<input type="hidden" name="section1_fact_icon_{{$factcount}}_old" id="section1_fact_icon_{{$factcount}}_old" value="{{ $mbfact->section1_fact_icon }}">
									</div>

									<label for="section1_fact_img_{{$factcount}}" class="col-md-2 col-form-label">Image</label>
									<div class="col-md-9" style="margin-bottom: 10px;">
										<a href="{{ url($mbfact->section1_fact_img) }}" target="_blank" style="color: #000;text-decoration: underline;">
											{{ $mbfact->img_name }}
										</a>
										<br>
										<a style="color: #65acc9;">
											<span class="tf-icons bx bx-cloud-upload"></span>Upload new image
										</a>
										<input class="form-control" type="file" name="section1_fact_img_{{$factcount}}" id="section1_fact_img_{{$factcount}}" style="display: none;" />
										<input type="hidden" name="section1_fact_img_{{$factcount}}_old" id="section1_fact_img_{{$factcount}}_old" value="{{ $mbfact->section1_fact_img }}">
									</div>

									<label for="section1_fact_title_{{$factcount}}" class="col-md-2 col-form-label">Title</label>
									<div class="col-md-9" style="margin-bottom: 10px;">
										<input type="text" class="form-control" name="section1_fact_title_{{$factcount}}_old" id="section1_fact_title_{{$factcount}}_old" value="{{ $mbfact->section1_fact_title }}">
									</div>

									<label for="section1_fact_title_{{$factcount}}" class="col-md-2 col-form-label">Detail</label>
									<div class="col-md-9" style="margin-bottom: 10px;">
										<textarea class="ckeditor form-control" name="wysiwyg-editor">{{ $mbfact->section1_fact_desc }}</textarea>
									</div>
								</div>
							</div>
							<div class="col-md-1">
								<button type="button" class="btn" aria-label="">
									<span class="tf-icons bx bx-trash"></span>
								</button>
							</div>
						</div>
						@php $factcount = $factcount + 1; @endphp
						@if($factcount == 5)
							@break
						@endif
					@endforeach
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				<div class="modal-footer">
					
				</div>
			</form>
		</div>
	</div>