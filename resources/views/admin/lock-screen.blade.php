@extends('admin.includes.header')

	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left">
						<img class="img-fluid" src="{{ asset('assets/admin/img/main%20logo7.png') }}" alt="Logo">
					</div>
					<div class="login-right">
						<div class="login-right-wrap">
							<div class="lock-user">
								<img class="rounded-circle" src="{{ url('storage/images/admins/'.auth()->user()->image) }}" alt="User Image">
								<h4>{{ auth()->user()->name }}</h4>
							</div>
							
							<!-- Form -->
							<form action="{{ route('admin.unlock') }}" method="post">
								@csrf
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="كلمة السر">
									
								</div>
								@if (session()->has('error'))
										<div class="alert alert-danger text-center">
											{{ session()->get('error') }}
										</div>
									@endif
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">دخول</button>
								</div>
							</form>
							<!-- /Form -->
							
							<div class="text-center dont-have">تسجيل الدخول باسم مستخدم آخر؟ <a href="{{ route('logout') }}">تسجيل الدخول</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->


@extends('admin.includes.footer')
		
