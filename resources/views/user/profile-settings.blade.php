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
						<li class="breadcrumb-item active" aria-current="page">إعدادات الملف الشخصي</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">إعدادات الملف الشخصي</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<br>
	<div class="container-fluid">
		<div class="row">
		
			@include('user.includes.sidebar')
			
			<div class="col-md-7 col-lg-8 col-xl-9">
				<div class="card">
					<div class="card-body">
						@if (session()->has('success'))
							<div class="alert alert-success text-center">
								{{ session()->get('success') }}
							</div>
						@endif
						<!-- Profile Settings Form -->
						<form action="{{ route('user.update_profile') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="row form-row">
								<div class="col-12 col-md-12">
									<div class="form-group">
										<div class="change-avatar">
											<div class="profile-img">
												<img class="avatar-img rounded-circle" width="100" height="100" src="{{ auth()->user()->image ? url('storage/images/users/'.auth()->user()->image): asset('assets/admin/img/profiles/user.png') }}" alt="User Image">
											</div>
											<div class="upload-img">
												<div class="change-photo-btn">
													<span><i class="fa fa-upload"></i>حمل الصورة</span>
													<input type="file" name="image" class="upload">
													@error('image')
														<div class="alert alert-danger text-center mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
												<small class="form-text text-muted">مسموح JPG, GIF أو PNG. أقصى حجم 2 ميجا بايت</small>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>الاسم</label>
										<input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
									</div>
									@error('name')
										<div class="alert alert-danger">
											{{ $message }}
										</div>
									@enderror
								</div>
								
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>تاريخ الميلاد</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker" name="dob" value="{{ auth()->user()->dob }}">
										</div>
										@error('dob')
										<div class="alert alert-danger">
											{{ $message }}
										</div>
									@enderror
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>البريد الإلكتروني</label>
										<input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}">
									</div>
									@error('email')
										<div class="alert alert-danger">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>رقم الهاتف</label>
										<input type="text" class="form-control" name="phone" value="{{ auth()->user()->phone }}">
									</div>
									@error('phone')
										<div class="alert alert-danger">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="submit-section">
								<button type="submit" class="btn btn-primary submit-btn">حفظ التغييرات</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection	