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
						<li class="breadcrumb-item active" aria-current="page">لوحة التحكم</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">لوحة التحكم</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<br>
<div class="container-fluid">

	<div class="row">
		
		<!-- Profile Sidebar -->
		@include('user.includes.sidebar')
		<!-- / Profile Sidebar -->
		
		<div class="col-md-7 col-lg-8 col-xl-9">
			<div class="card">
				<div class="card-body pt-0">
				
					<!-- Tab Menu -->
					<nav class="user-tabs mb-4">
						<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
							<li class="nav-item">
								<a class="nav-link active" href="#pat_appointments" data-toggle="tab">المواعيد المحجوزة</a>
							</li>
						</ul>
					</nav>
					
					<div class="tab-content pt-0">
						
						<!-- Appointment Tab -->
						<div id="pat_appointments" class="tab-pane fade show active">
							<div class="card card-table mb-0">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>الملعب</th>
													<th>موعد الحجز</th>
													<th>عدد الساعات المحجوزة</th>
													<th>المبلغ المدفوع</th>
													<th>الحالة</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												@forelse ($data['reservations'] as $reservation)
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="pitch-profile.html" class="avatar avatar-sm mr-2">
																<img class="avatar-img rounded-circle" src="{{ url('storage/images/stadiums').'/'.$reservation->image }}" alt="Pitch">
															</a>
															<a href="pitch-profile.html">{{ $reservation->stadium_name }}<span>5x5</span></a>
														</h2>
													</td>
													@php
														$time = explode(' ',$reservation->date);
													@endphp
													<td>{{ $time[0] }} <span class="d-block text-info">{{ $time[1] }} </span></td>
													<td>{{ $reservation->hours }}</td>
													<td>EGP {{ $reservation->money }}</td>
													@if ($reservation->status == 1)
														<td><span class="badge badge-pill bg-success-light">تم</span></td>
													@elseif ($reservation->status == 2)
														<td><span class="badge badge-pill bg-danger-light">ملغي</span></td>
													@else
														<td><span class="badge badge-pill bg-warning-light">قيد الانتظار</span></td>
													@endif

													<td class="text-right">
														<div class="table-action">
															<a href="{{ route('user.invoice',$reservation->id) }}" class="btn btn-sm bg-info-light">
																<i class="far fa-eye"></i> معاينة
															</a>
														</div>
													</td>

												</tr>
												@empty
													<div class="alert alert-warning text-center">
														<p>you have no reservations</p>
													</div>
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
		</div>
	</div>
</div>
@endsection


				
		