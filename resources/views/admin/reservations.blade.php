@extends('admin.layouts.app')

@section('content')
	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">
		
			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-title">المواعيد المحجوزة</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
							<li class="breadcrumb-item active">المواعيد المحجوزة</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			<div class="row">
				<div class="col-md-12">
				
					<!-- Recent Orders -->
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="datatable table table-hover table-center mb-0">
										<thead>
										<tr>
											<th>الملعب</th>
											<th>المساحة</th>
											<th>العميل</th>
											<th>موعد الحجز</th>
											<th>الحالة</th>
											<th>المبلغ</th>
										</tr>
									</thead>
									<tbody>
										@forelse ($reservations as $reservation)
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/Admin/img/profiles/user.png') }}" alt="User Image"></a>
													<a href="profile.html">{{ $reservation->stadium_name }}</a>
												</h2>
											</td>
											<td>5x5</td>
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/Admin/img/profiles/user.png') }}" alt="User Image"></a>
													<a href="profile.html">{{ $reservation->user_name }}</a>
												</h2>
											</td>
											@php
                                                $data = explode(' ',$reservation->date);
                                                $data[2] = date('H:i:s', strtotime($data[1]. '-'.$reservation->hours));
                                            @endphp
                                            <td>{{ $data[0] }} <span class="text-primary d-block">{{ $data[1] }}-{{ $data[2] }}</span></td>
											<td>
												<div class="status-toggle">
													<input type="checkbox" onclick="updateStatus({{ $reservation->id }})"  id="status_{{ $reservation->id }}" class="check" {{ $reservation->status ? 'checked' : '' }}>
													<label for="status_{{ $reservation->id }}" class="checktoggle">checkbox</label>
												</div>		
											</td>
											<td>
												EGP{{ $reservation->money }}
											</td>
										</tr>
										@empty
										<tr>
                                            <td colspan="6">
                                                <div class="alert alert-warning">
                                                    No reservations
                                                </div>
                                            </td>
                                        </tr>
										@endforelse
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Recent Orders -->
					
				</div>
			</div>
		</div>			
	</div>
	<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->
@endsection
			
			
