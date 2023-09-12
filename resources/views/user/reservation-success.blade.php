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
						<li class="breadcrumb-item active" aria-current="page">الحجز</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">إتمام الحجز</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<br>
	<div class="container-fluid">
	
		<div class="row justify-content-center">
			<div class="col-lg-6">
			
				<!-- Success Card -->
				<div class="card success-card">
					<div class="card-body">
						<div class="success-cont">
							<i class="fas fa-check"></i>
							<h3>تم حجز الموعد بنجاح!</h3>
							@php
								$timestamp = strtotime($data['time']) + 60*60;

								$afterHour = date('H:i', $timestamp);
							@endphp
							
							<p>تم حجز  <strong> {{ $data['stadium']->name }}</strong><br> في <strong>{{ $data['day'] }}<br>  {{ $afterHour }} <-- {{ $data['time'] }}</strong></p>
							{{-- <a href="{{ route('user.invoice',$data['reservation_id']) }}" class="btn btn-primary view-inv-btn">تفاصيل الفاتورة</a> --}}
						</div>
					</div>
				</div>
				<!-- /Success Card -->
				
			</div>
		</div>
		
	</div>
		
<!-- /Page Content -->
@endsection