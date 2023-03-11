@extends('admin.layouts.app')


@section('content')
	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col">
						<h3 class="page-title">الملف الشخصي</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"></a>لوحة التحكم</li>
							<li class="breadcrumb-item active">الملف الشخصي</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			
			<div class="row">
				<div class="col-md-12">
					<div class="profile-header">
						<div class="row align-items-center">
							<div class="col-auto profile-image">
								<a href="#">
									<img class="rounded-circle" alt="User Image" src="{{ auth()->user()->image ? url('storage/images/admins/'.auth()->user()->image): asset('assets/admin/img/profiles/user.png') }}">
								</a>
							</div>
							<div class="col ml-md-n2 profile-user-info">
								<h4 class="user-name mb-0">{{ auth()->user()->name }}</h4>
								<h6 class="text-muted">{{ auth()->user()->email }}</h6>
								<h6 class="text-muted">{{ auth()->user()->phone }}</h6>
								{{-- <div class="user-Location"><i class="fa fa-map-marker"></i>اسم الملعب</div>
								<div class="about-text">وصف للملعب والخدمات</div> --}}
							</div>
						</div>
					</div>
					<div class="profile-menu">
						<ul class="nav nav-tabs nav-tabs-solid">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#per_details_tab">حول</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#password_tab">كلمة السر</a>
							</li>
						</ul>
					</div>	
					@if(session()->has('success'))
						<div class="alert alert-success text-center">
							{{ session()->get('success') }}
						</div>	
					@endif
					@if(session()->has('error'))
						<div class="alert alert-success text-center">
							{{ session()->get('error') }}
						</div>	
					@endif
					<div class="tab-content profile-tab-cont">
						
						<!-- Personal Details Tab -->
						<div class="tab-pane fade show active" id="per_details_tab">
						
							<!-- Personal Details -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title d-flex justify-content-between">
												<span>بيانات شخصية</span> 
												<a class="edit-link" data-toggle="modal" onclick="sendProfileData()" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>تعديل</a>
											</h5>
											<div class="row">
												<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">الاسم:</p>
												<p class="col-sm-10" id="user_name">{{ auth()->user()->name }}</p>
												
											</div>
											<div class="row">
												<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">تاريخ الميلاد:</p>
												<p class="col-sm-10" id="date_of_birth">{{ auth()->user()->dob }}</p>
												
											</div>
											<div class="row">
												<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">البريد الإلكتروني:</p>
												<p class="col-sm-10" id="email">{{ auth()->user()->email }}</p>
												
											</div>
											<div class="row">
												<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">رقم الهاتف:</p>
												<p class="col-sm-10" id="phone">{{ auth()->user()->phone }}</p>
												
											</div>
											<div class="row">
												<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">كود العميل</p>
												<p class="col-sm-10" id="code">{{ auth()->user()->code }}</p>
												
											</div>
										</div>
									</div>
									
									<!-- Edit Details Modal -->
									<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
										<div class="modal-dialog modal-dialog-centered" role="document" >
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">البيانات الشخصية</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
														@csrf
														@method('PUT')
														<div class="row form-row">
															<div class="col-12 col-sm-6">
															   <div class="form-group">
																   <label>صورة المسئول او الملعب</label>
																   <input type="file" name="photo"  class="form-control">
															   </div>
															 </div>
															<div class="col-12 col-sm-6">
																<div class="form-group">
																	<label>الاسم</label>
																	<input type="text" id="user_name_modal" class="form-control" name="user_name">
																</div>
																@error('user_name')
																	<div class="alert alert-danger text-center">
																		{{ $message }}
																	</div>
																@enderror
															</div>
															<div class="col-12">
																<div class="form-group">
																	<label>تاريخ الميلاد</label>
																	<div>
																		<input type="date" id="date_of_birth_modal" name="birthday">
																	</div>
																</div>
																@error('birthday')
																	<div class="alert alert-danger text-center">
																		{{ $message }}
																	</div>
																@enderror
															</div>
															<div class="col-12 col-sm-6">
																<div class="form-group">
																	<label>البريد الإلكتروني</label>
																	<input type="email" id="email_modal" class="form-control" name="email">
																</div>
																@error('email')
																	<div class="alert alert-danger text-center">
																		{{ $message }}
																	</div>
																@enderror
															</div>
															<div class="col-12 col-sm-6">
																<div class="form-group">
																	<label>رقم الهاتف</label>
																	<input type="text" id="phone_modal" class="form-control" name="phone">
																</div>
																@error('phone')
																	<div class="alert alert-danger text-center">
																		{{ $message }}
																	</div>
																@enderror
															</div>
															<div class="col-12 col-sm-6">
																<div class="form-group">
																	<label>كود العميل</label>
																	<input type="text" id="code_modal" class="form-control" name="code">
																</div>
																@error('code')
																	<div class="alert alert-danger text-center">
																		{{ $message }}
																	</div>
																@enderror
															</div>
														</div>
														<button type="submit" class="btn btn-primary btn-block">حفظ التغييرات</button>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- /Edit Details Modal -->
									
								</div>

							
							</div>
							<!-- /Personal Details -->
						
						</div>
						<!-- /Personal Details Tab -->
						
						<!-- Change Password Tab -->
						
						<div id="password_tab" class="tab-pane fade">
						
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">تغيير كلمة السر</h5>
									<div class="row">
										<div class="col-md-10 col-lg-6">
											<form action="{{ route('admin.profile.update_password',auth()->user()->id) }}" method="post">
												@csrf
												@method('put')
												<div class="form-group">
													<label>كلمة السر القديمة</label>
													<input type="password" class="form-control" name="old_password">
													@error('old_password')
														<div class="alert alert-danger text-center mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
												
												<div class="form-group">
													<label>كلمة السر الجديدة</label>
													<input type="password" class="form-control" name="new_password">
													@error('new_password')
														<div class="alert alert-danger text-center mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
												<div class="form-group">
													<label>تأكيد كلمة السر الجديدة</label>
													<input type="password" class="form-control" name="confirm_password">
													@error('confirm_password')
														<div class="alert alert-danger text-center mt-2">
															{{ $message }}
														</div>
													@enderror
												</div>
												<button class="btn btn-primary" type="submit">حفظ التغييرات</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Change Password Tab -->
						
					</div>
				</div>
			</div>
		
		</div>			
	</div>
	<!-- /Page Wrapper -->
@endsection

		
