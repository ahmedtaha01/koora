@extends('admin.layouts.app')


@section('content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">قائمة الملاعب</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
								<li class="breadcrumb-item active">الملاعب</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="datatable table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>الملعب</th>
												<th>المساحة</th>
												<th>العنوان</th>
												<th>تاريخ الانضمام</th>
												<th>سعر الساعه</th>
												<th>الأرباح</th>
											</tr>
										</thead>
										<tbody>
											@forelse ($stadiums as $stadium)
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/admin/img/profiles/user.png') }}" alt="User Image"></a>
														<a href="profile.html">{{ $stadium->name }}</a>
													</h2>
												</td>
												<td>{{ $stadium->size }}</td>

												<td>{{ $stadium->address }}</td>
												
												<td>{{ $stadium->join_date }} </td>

												<td>{{ $stadium->hour_price }}</td>
												
												<td>EGP {{ $stadium->reservations->sum('money') }}</td>
												
											</tr>
											@empty
											<tr>
												<td colspan="4">
													<div class="alert alert-warning">
														No Stadiums
													</div>
												</td>
											</tr>
											@endforelse
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>			
				</div>
				
			</div>			
		</div>
		<!-- /Page Wrapper -->
	

@endsection

