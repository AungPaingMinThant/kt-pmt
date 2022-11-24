<div class="space-40"></div>
@if($page == 'mobilebanking')
	<div class="row">
		<div class="col-md-12 text-right">
			<button class="btn" data-bs-toggle="modal" data-bs-target="#mobilebanking_tagline" style="float: right;">Edit Tagline Section</button>
		</div>
		<div class="col-md-4 tag_line">
			<p style="font-size: 20px;">{{$mobilebanking->tag_line}}</p>
		</div>
		<div class="col-md-8 tag_desc">
			<p>{{$mobilebanking->tag_desc}}</p>
		</div>
	</div>

	<div class="modal fade" id="mobilebanking_tagline" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<form class="modal-content" action="{{ url('/admin/mbanking/tagline/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					{{ csrf_field() }}
					<div class="mb-3">
						<label class="form-label" for="tag_line">Tagline</label>
						<input type="text" class="form-control" name="tag_line" id="tag_line" value="{{$mobilebanking->tag_line}}" placeholder="Tagline" required />
					</div>
					<div class="mb-3">
						<label class="form-label" for="tag_desc">Tagline Description</label>
						<input type="text" class="form-control" name="tag_desc" id="tag_desc" value="{{$mobilebanking->tag_desc}}" placeholder="Tagline Description" required />
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				<div class="modal-footer">
					
				</div>
			</form>
		</div>
	</div>
@endif

@if($page == 'internetbanking')
	<div class="row">
		<div class="col-md-4 tag_line">
			<p style="font-size: 20px;">Simplify your day-to-day banking with AYA i-Banking!</p>
		</div>
		<div class="col-md-8 tag_desc">
			<p>AYA iBanking will allow you real time banking transactions via PCs, Laptops, Smartphone or other devices with access to the internet. Make payments, go paperless, view and download statements and more from the comfort of your home. Simplify your day-to-day banking with AYA i-Banking!</p>
		</div>
	</div>
@endif
<div class="space-40"></div>