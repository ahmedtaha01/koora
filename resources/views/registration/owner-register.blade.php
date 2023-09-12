@extends('registration.layouts.app')


@section('content')
<header class="header">
				
	<div class="navbar-header">
		<a href="{{ route('index') }}" class="navbar-brand logo">
			<img src="{{ asset('assets/registration/img/main logo 3.png') }}" class="img-fluid" alt="Logo">
		</a>
	</div>
	<div class="main-menu-wrapper">
		<div class="menu-header">
			<a href="{{ route('index') }}" class="menu-logo">
				<img src="assets/registration/img/main%20logo%203.png {{ asset('assets/registration/img/main logo 3.png') }}" class="img-fluid" alt="Logo">
			</a>
		</div>
	</div>
</header>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="account-content">
					<div class="row align-items-center justify-content-center">
						<div class="col-md-7 col-lg-6 login-left">
							<img src="{{ asset('assets/registration/img/owner%20register.png') }}" class="img-fluid" alt="Login Banner">	
						</div>
						<div class="col-md-12 col-lg-6 login-right">
							<div class="login-header">
								<h3>إنشاء حساب لصاحب الملعب <a href="{{ route('register') }}">ليس لديك ملعب ؟</a></h3>
							</div>
							
							<!-- Register Form -->
							<form action="{{ route('register.owner') }}" method="post">
								@csrf
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="name">
									<label class="focus-label">الاسم</label>
								</div>
								@error('name')
									<div class="alert alert-danger text-center">
										{{ $message }}
									</div>
								@enderror
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="email">
									<label class="focus-label">البريد الإلكتروني</label>
								</div>
								@error('email')
									<div class="alert alert-danger text-center">
										{{ $message }}
									</div>
								@enderror
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="phone">
									<label class="focus-label">رقم الهاتف</label>
								</div>
								@error('phone')
									<div class="alert alert-danger text-center">
										{{ $message }}
									</div>
								@enderror
								<div class="form-group form-focus">
									<input type="password" id="txtPassword" class="form-control floating" name="password" />
									<label class="focus-label">كلمة السر</label>
									<div id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></div>
								</div>
								@error('password')
									<div class="alert alert-danger text-center">
										{{ $message }}
									</div>
								@enderror
								<div>
									<a class="forgot-link" href="{{ route('login') }}">لديك حساب ؟</a>
								</div>
								<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">أنشئ حساب </button>
								<div class="login-or">
									<span class="or-line"></span>
								</div>
							</form>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>		 

@endsection


