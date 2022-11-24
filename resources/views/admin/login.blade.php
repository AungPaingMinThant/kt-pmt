@extends('layouts.app')

@section('title', 'Login – AYA Bank')

<link rel="stylesheet" href="{{ url('/css/page-auth.css') }}" />
@section('content')

<div class="container-xxl">
	<div class="authentication-wrapper authentication-basic container-p-y">
		<div class="authentication-inner">
			<!-- Register -->
			<div class="card">
				<div class="card-body">
					<!-- Logo -->
					<div class="app-brand justify-content-center">
						<a href="" class="app-brand-link gap-2">
							<img src="{{ url('/images/logo_wo_tagline_2.png') }}" class="img-fluid" style="width: 60%;margin: 0 auto;">
						</a>
					</div>
					@include('layouts.message')
					<form id="formAuthentication" class="mb-3" action="{{ url('/authlogin') }}" method="POST">
						{{ csrf_field() }}
						<div class="mb-3">
							<label for="email" class="form-label">Email or Username</label>
							<input
							type="text"
							class="form-control"
							id="email"
							name="email_username"
							placeholder="Enter your email or username"
							autofocus required
							/>
						</div>
						<div class="mb-3 form-password-toggle">
							<div class="d-flex justify-content-between">
								<label class="form-label" for="password">Password</label>
									<a href="#">
									<small>Forgot Password?</small>
								</a>
							</div>
							<div class="input-group input-group-merge">
								<input
								type="password"
								id="password"
								class="form-control"
								name="password"
								placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
								aria-describedby="password" required
								/>
								<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
							</div>
						</div>
						<div class="mb-3">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="remember-me" />
								<label class="form-check-label" for="remember-me"> Remember Me </label>
							</div>
						</div>
						<input type="hidden" name="user_ip" id="user_ip">
						<div class="mb-3">
							<button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$.getJSON("https://api.ipify.org?format=json",
                                          function(data) {
        $("#user_ip").val(data.ip);
        console.log(data.ip);
    });
</script>
@endsection