<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('/images/kt-logo.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ url('/images/kt-logo.png') }}" sizes="180x180" />
    <meta name="msapplication-TileImage" content="{{ url('/images/kt-logo.png') }}" sizes="270x270" />

	<title>Create Members – Khit Thit</title>

    <link rel="stylesheet" href="{{ url('/fonts/boxicons.css') }}" />

    <style type="text/css">
    	.tox-statusbar__branding {
    		display: none;
    	}
    	.file_section {
    		margin-bottom: 20px;
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
		@include('layouts.admin_sidebar', ['page'=>'CreateMember'])

		<div class="layout-page" style="background-color: #fff">
			@include('layouts.nav', ['nav'=>'Create Member', 'page'=>'Page'])

			<div class="content-wrapper" style="background-color:#fff">
				<div class="container-xxl flex-grow-1 container-p-y">
					
					<br>
					<div class="border border-9">
						<div class="row">
							<form id="formAuthentication" class="mb-3" action="{{ url('/admin/addmember') }}" method="POST">
								{{ csrf_field() }}
								<div class="row mb-3">
									<div class="col-md-3">
										<label for="employee_id" class="form-label">Member ID</label>
									</div>&nbsp;&nbsp;&nbsp;
									<!-- Assuming your view is list.blade.php -->
									{{-- @foreach($member_list as $member) --}}
									<div class="col-mb-2">
										<p class="form-control_member" id="employee_id" name="employee_id"></p>
									</div>
									{{-- @endforeach --}}

								</div>
								<div class="row mb-3">
									<div class="col-md-3">
										<label for="name" class="form-label">Name</label>
										<input type="text" class="form-control_create" id="name" name="name" placeholder=""/>
									</div>&nbsp;&nbsp;&nbsp;
									<div class="col-md-3">
										<label for="phone" class="form-label">Phone</label>
										<input type="text" class="form-control_create" id="phone" name="phone" placeholder="09 123 456 789"/>
									</div>&nbsp;&nbsp;&nbsp;
									<div class="col-md-3">
										<label for="amount" class="form-label">Expensed Amount</label>
										<input type="text" class="form-control_create" id="amount" name="amount" placeholder="100000.00"/>
									</div>
								</div>
								<br><br>
								<div class="row mb-3">
									<span class="point">Point By Expensed Amount</span>
								</div>
								<div class="mb-3">
									<p class="form-control_xpoint" id="memberPoints">0&nbsp;Pts</p>
								</div>
								<br><br>
								<div class="mb-3">
									<span class="fill">Fill in the bank information</span>
									<div class="space-10"></div>
										<button type="submit" class="btn  btn-outline-primary d-grid w-30">Save Change</button>
								</div>
							</form>
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

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="{!! url('/assets/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
	<script>
		$("#amount").keyup(function(){
			var amount = parseInt($("#amount").val());
			if(amount >= 5000){
				var point_gain = parseInt(amount/5000);
				$("#memberPoints").text(point_gain + ' Pt');
			} else {
				$("#memberPoints").text('0 Pt');
			}
		});
		var lastGeneratedNumber = 1000;

		function generateRandomEmployeeID() {
			
			lastGeneratedNumber += 1;
			if (lastGeneratedNumber > 9999) {
				lastGeneratedNumber = 1001;
			}
			return "KT_M_" + lastGeneratedNumber;
		}
		$("#employee_id").text(generateRandomEmployeeID());
        // $("#employee_id").focus(function(){
        //     var randomEmployeeID = generateRandomEmployeeID();
        //     $(this).val(randomEmployeeID);
        // });

		// function generateRandomEmployeeID() {
        // return "KT_M_" + Math.floor(Math.random() * 9000 + 1001);
        // }
	</script>
</body>
</html>