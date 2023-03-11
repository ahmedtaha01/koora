@extends('registration.layouts.app')


@section('content')
    <!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
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
			<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">	
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/registration/img/register.png"s class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>أنشئ حساب<a href="{{ route('register.owner') }}">هل لديك ملعب ؟</a></h3>
										</div>
										
										<!-- Register Form -->
										<form action="{{ route('register') }}" method="post">
											@csrf
											<div class="form-group form-focus">
												<input type="text" name="name" class="form-control floating">
												<label class="focus-label">الاسم</label>
												
											</div>
											@error('name')
												<div class="alert alert-danger">
													<span>{{ $message }}</span>
												</div>
											@enderror
                                            <div class="form-group form-focus">
												<input type="text" name="email" class="form-control floating">
												<label class="focus-label">البريد الإلكتروني</label>
											</div>
											@error('email')
												<div class="alert alert-danger">
													<span>{{ $message }}</span>
												</div>
											@enderror
											<div class="form-group form-focus">
												<input type="text" name="phone" class="form-control floating">
												<label class="focus-label">رقم الهاتف</label>
											</div>
											@error('phone')
												<div class="alert alert-danger">
													<span>{{ $message }}</span>
												</div>
											@enderror
											<div class="form-group form-focus">
                                                <input type="password" name="password" id="txtPassword" class="form-control floating" />
												<label class="focus-label">كلمة السر</label>
                                                <div id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></div> 
											</div>
											@error('password')
												<div class="alert alert-danger">
													<span>{{ $message }}</span>
												</div>
											@enderror
											<div class="form-group form-focus">
                                                <input type="password" name="confirm_password" id="txtPassword" class="form-control floating" name="txtPassword" />
												<label class="focus-label"> تاكيد كلمة السر </label>
                                                <div id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></div> 
											</div>
											@error('confirm_password')
												<div class="alert alert-danger">
													<span>{{ $message }}</span>
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
		</div>
@endsection