@php
	$base_url = URL::to('/').'/';
@endphp
<style type="text/css">
	.mbanking_banner {
		background-image:url('{{ $base_url.$mobilebanking->banner_img }}');
		background-size: cover;
		height: 395px;
		background-position: center right;
	}
	.ibanking_banner{
		background-image:url('./images/IB_KV.jpg');
		background-size: cover;
		height: 395px;
		background-position: center right;
	}
	/*.banner_edit_section:hover .mbanking_banner {
		opacity: 0.1;
	}
	.banner_edit_section:hover .banner_edit_btn {
		opacity: 1;
	}*/
	.banner_edit_btn{
		opacity: 1;
	    position: absolute;
	    top: 130px;
    	right: 20px;
	    color: #fff;
	    background-color: #484848;
	    border: 1px solid #484848;
	}
	.form-control, .form-select, input::file-selector-button {
        color: #566a7f !important;
    }
	@media  only screen and (max-width: 576px) {
		.mbanking_banner {
			background-image:url('./images/MobileBanking_KV_mobile.jpg');
		}
		.ibanking_banner{
			background-image:url('./images/IB_KV_mobile.jpg');
			background-position: 70% center;
		}
	}
</style>
@if($page == 'mobilebanking')
<div class="banner_edit_section">
	<div class="mbanking_banner">
		<div class="container">
			<div class="row d-none d-sm-block">
				<div class="col-md-6 text-right" style="text-align: right;position: relative;">
					<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;position: absolute;top: 156px;right: 0;">{{$mobilebanking->headline_1}}</p>
					<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;color: #a02226;position: absolute;top: 193px;right: 0;">{{$mobilebanking->headline_2}}</p>
					<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;color: #a02226;position: absolute;top: 230px;right: 0;">{{$mobilebanking->headline_3}}</p>
				</div>
				<div class="col-md-6" style="text-align: right;">
					<p></p>
				</div>
			</div>
			<div class="row d-block d-sm-none">
				<div class="col-md-12 text-left" style="text-align: left;position: relative;">
					<div style="position: absolute;top: 45px;left: 25px;">
						<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 28px;">{{$mobilebanking->headline_1}}</p>
						<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 28px;color: #a02226;">{{$mobilebanking->headline_2}}</p>
						<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 28px;color: #a02226;">{{$mobilebanking->headline_3}}</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<button class="btn banner_edit_btn" data-bs-toggle="modal" data-bs-target="#mobilebanking_banner">Edit Banner Section</button>

	<div class="modal fade" id="mobilebanking_banner" data-bs-backdrop="static" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<form class="modal-content" action="{{ url('/admin/mbanking/banner/update') }}" method="POST" enctype="multipart/form-data">
				<div class="modal-header">					
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					{{ csrf_field() }}
					<div class="mb-3">
						<label class="form-label" for="headline_1">Headline 1</label>
						<input type="text" class="form-control" name="headline_1" id="headline_1" value="{{$mobilebanking->headline_1}}" placeholder="Headline 1" required />
					</div>
					<div class="mb-3">
						<label class="form-label" for="headline_2">Headline 2</label>
						<input type="text" class="form-control" name="headline_2" id="headline_2" value="{{$mobilebanking->headline_2}}" placeholder="Headline 2" required />
					</div>
					<div class="mb-3">
						<label class="form-label" for="headline_3">Headline 3</label>
						<input type="text" class="form-control" name="headline_3" id="headline_3" value="{{$mobilebanking->headline_3}}" placeholder="Headline 3" required />
					</div>
					<div class="mb-3">
						<label class="form-label" for="banner_img">Banner Image</label>
						<input class="form-control" type="file" name="banner_img" id="banner_img">
						<input type="hidden" name="banner_img_old" id="banner_img_old" value="{{ $mobilebanking->banner_img }}">
						<a href="{{ url($mobilebanking->banner_img) }}" target="_blank"><span><br>View Uploaded BannerImage</span></a>
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				<div class="modal-footer">
					
				</div>
			</form>
		</div>
	</div>
</div>

<div style="background-color: #f5f5f7;">
	<div class="container">
		<p style="margin: 1.5rem 0;">HOME&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;DIGITAL SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;ONLINE PAYMENT SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
			<span style="color: #a02226;">MOBILE BANKING</span>
		</p>
	</div>
</div>
@endif

@if($page == 'internetbanking')
<div class="ibanking_banner" style="">
	<div class="container">
		<div class="row d-none d-sm-block">
			<div class="col-md-6 text-right" style="text-align: right;position: relative;">
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;position: absolute;top: 156px;right: 0;color: #a02226;">Stay safe and bank</p>
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;position: absolute;top: 193px;right: 0;">from the comfort of your home</p>
				<p style="font-size: 30px;font-weight: 400;margin-bottom: 0;line-height: 34px;position: absolute;top: 230px;right: 0;"></p>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<p></p>
			</div>
		</div>
		<div class="row d-block d-sm-none">
			<div class="col-md-12 text-left" style="text-align: left;position: relative;">
				<div style="position: absolute;top: 45px;left: 25px;">
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 28px;color: #a02226;">Stay safe and bank</p>
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 28px;">from the comfort</p>
					<p style="font-size: 20px;font-weight: 400;margin-bottom: 0;line-height: 28px;">of your home</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background-color: #f5f5f7;">
	<div class="container">
		<p style="margin: 1.5rem 0;">HOME&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;DIGITAL SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;ONLINE PAYMENT SERVICES&nbsp;
			<i class='bx bxs-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;
			<span style="color: #a02226;">INTERNET BANKING</span>
		</p>
	</div>
</div>
@endif

