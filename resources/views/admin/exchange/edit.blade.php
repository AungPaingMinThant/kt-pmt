<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/ayaicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/ayaicon.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/ayaicon.png') }}" sizes="270x270" />

	<title>Update Exchange Rate – AYA Bank</title>

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />

    <style type="text/css">
    	.tox-statusbar__branding {
    		display: none;
    	}
    </style>

    <link rel="stylesheet" href="{{ url('/css/core.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/design.css') }}" />

    <link rel="stylesheet" href="{{ url('/css/perfect-scrollbar.css') }}" />

    <script src="{{ url('/js/helpers.js') }}"></script>

    <script src="{{ url('/js/config.js') }}"></script>
</head>
<body>
	<div class="layout-wrapper layout-content-navbar">
	   	<div class="layout-container">
			@include('layouts.admin_sidebar', ['page'=>'Exchange'])

			<div class="layout-page">
				@include('layouts.nav', ['nav'=>'Update Exchange Rate'])

				<div class="content-wrapper">
					<div class="container-xxl flex-grow-1 container-p-y">
						<div class="row">
							<div class="col-xl">
								<div class="card mb-4">
									<div class="card-body">
										<form class="mb-3" action="{{ url('/admin/exchange/store') }}" method="POST" id="blog_form" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<a href="{{ url('/admin/exchange-rate') }}" class="mb-3" style="cursor: pointer;"><label class="form-label" style="cursor: pointer;"><i class="menu-icon tf-icons bx bx-chevrons-left"></i> Back to list</label></a>
											<div class="row">
												<div class="col-md-12 mb-3">
													<div class="row">
														<h4>US DOLLAR</h4>
														<div class="col-md-6">
															<div class="mb-3">
																<label class="form-label" for="USD_buying">Buying</label>
																<input type="text" class="form-control" name="USD_buying" id="USD_buying" placeholder="Buying" value="{{$exchange_rate_buy_sell->USD_buying}}" required />
															</div>
														</div>
														<div class="col-md-6">
															<div class="mb-3">
																<label class="form-label" for="USD_selling">Selling</label>
																<input type="text" class="form-control" name="USD_selling" id="USD_selling" placeholder="Selling" value="{{$exchange_rate_buy_sell->USD_selling}}" required />
															</div>
														</div>
													</div>
												</div>

												<div class="col-md-12 mb-3">
													<div class="row">
														<h4>EURO</h4>
														<div class="col-md-6">
															<div class="mb-3">
																<label class="form-label" for="EUR_buying">Buying</label>
																<input type="text" class="form-control" name="EUR_buying" id="EUR_buying" placeholder="Buying" value="{{$exchange_rate_buy_sell->EUR_buying}}" required />
															</div>
														</div>
														<div class="col-md-6">
															<div class="mb-3">
																<label class="form-label" for="EUR_selling">Selling</label>
																<input type="text" class="form-control" name="EUR_selling" id="EUR_selling" placeholder="Selling" value="{{$exchange_rate_buy_sell->EUR_selling}}" required />
															</div>
														</div>
													</div>
												</div>

												<div class="col-md-12 mb-3">
													<div class="row">
														<h4>SINGAPORE DOLLAR</h4>
														<div class="col-md-6">
															<div class="mb-3">
																<label class="form-label" for="SGD_buying">Buying</label>
																<input type="text" class="form-control" name="SGD_buying" id="SGD_buying" placeholder="Buying" value="{{$exchange_rate_buy_sell->SGD_buying}}" required />
															</div>
														</div>
														<div class="col-md-6">
															<div class="mb-3">
																<label class="form-label" for="SGD_selling">Selling</label>
																<input type="text" class="form-control" name="SGD_selling" id="SGD_selling" placeholder="Selling" value="{{$exchange_rate_buy_sell->SGD_selling}}" required />
															</div>
														</div>
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-primary" id="submit_btn">Update</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/popper.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('/js/menu.js') }}"></script>
    <script src="{{ url('/js/main.js') }}"></script>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="{!! url('/assets/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
	<script>
		tinymce.init({
	        selector: 'textarea#blog_desc',
	        height: 600
	    });

		$("#media_type").change(function() {
			if($("#media_type").val() == '1') {
				$("#single_image_div").removeClass('d-none');
				$("#multiple_image_div").addClass('d-none');
				$("#multiple_image").removeAttr('required');
				$("#single_image").prop('required',true);
			} else {
				$("#multiple_image_div").removeClass('d-none');
				$("#single_image_div").addClass('d-none');
				$("#single_image").removeAttr('required');
				$("#multiple_image").prop('required',true);
			}
		});

		$("#draft_btn").click(function() {
			$("#status").val('1');
			$("#submit_btn").click();
		});
	</script>
</body>
</html>