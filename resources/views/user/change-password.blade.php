@extends('user.layouts.app')


@section('content')
	<!-- Breadcrumb -->
<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('user.index') }}">الرئيسية</a></li>
						<li class="breadcrumb-item active" aria-current="page">تغيير كلمة السر</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">تغيير كلمة السر</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<br>
	<div class="container-fluid">
		@if (session()->has('success'))
			<div class="alert alert-success text-center">
				{{ session()->get('success') }}
			</div>
		@endif
		<div class="row">

			@include('user.includes.sidebar')

			<div class="col-md-7 col-lg-8 col-xl-9">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-lg-6">
							
								<!-- Change Password Form -->
								<form action="{{ route('user.update_password') }}" method="post">
									@csrf
									<div class="form-group">
										<label>كلمة السر القديمة</label>
										<input type="password" class="form-control" name="old_password">
									</div>
									@error('old_password')
										<div class="alert alert-danger text-center">
											{{ $message }}
										</div>
									@enderror
									<div class="form-group">
										<label>كلمة السر الجديدة</label>
										<input type="password" class="form-control" name="new_password">
									</div>
									@error('new_password')
										<div class="alert alert-danger text-center">
											{{ $message }}
										</div>
									@enderror
									<div class="form-group">
										<label>تأكيد كلمة السر الجديدة</label>
										<input type="password" class="form-control" name="confirm_password">
									</div>
									@error('confirm_password')
										<div class="alert alert-danger text-center">
											{{ $message }}
										</div>
									@enderror
									<div class="submit-section">
										<button type="submit" class="btn btn-primary submit-btn">حفظ التغييرات</button>
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


   
