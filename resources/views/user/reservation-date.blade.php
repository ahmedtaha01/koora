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
						<li class="breadcrumb-item active" aria-current="page">حجز المواعيد</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">حجز المواعيد</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->
<br>
	<div class="container">
		<div class="row">
			<div class="col-12">
			
				<div class="card">
					<div class="card-body">
						<div class="booking-pitch-info">
							<a href="{{ route('user.stadiums.show',$stadium->id) }}" class="booking-pitch-img">
								<img src="{{ url('storage/images/stadiums/'.$stadium->image) }}" alt="User Image">
							</a>
							<div class="booking-info">
								<h4><a href="pitch-profile.html">{{ $stadium->name }} </a></h4>
								<div class="rating">
									@php
										$i=0;
										while($i < floor($stadium->rates->avg('rate'))){
											echo '<i class="fas fa-star filled"></i>';
											$i++;
										}
										while($i < 5){
											echo '<i class="fas fa-star"></i>';
											$i++;
										}
									@endphp
									<span class="d-inline-block average-rating">({{ $stadium->reviews->count('comment') }})</span>
								</div>
								<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i>{{ $stadium->address }}</p>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Schedule Widget -->
					<div class="row justify-content-center mx-0">
						<div class="col-lg-10">
							<div class="card border-0">
								<form action="{{ route('user.choose_payment') }}" method="get">
									<div class="card-header bg-dark">
										<div class="mx-0 mb-0 row justify-content-sm-center justify-content-start px-1"> 
											<input type="text" id="dp1" class="datepicker" placeholder="أختر التاريخ" name="day" readonly>
										</div>
										
									</div>
									
									<div class="card-body p-3 p-sm-5" onclick="Time()">
										@if (session()->has('failed'))
											<div class="alert alert-danger text-center">
												{{ session()->get('failed') }}
											</div>
										@endif
										@error('day')
											<div class="alert alert-danger text-center mt-2">
												{{ $message }}
											</div>
										@enderror
										<input type="hidden" name="time" id="time">
										<input type="hidden" name="stadium" value="{{ $stadium->id }}">
										<div class="row text-center mx-0">
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">12:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">1:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">2:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">3:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">4:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">5:00AM</div>
											</div>
										</div>
										<div class="row text-center mx-0">
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">6:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">7:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">8:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">9:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">10:00AM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">11:00AM</div>
											</div>
										</div>
										<div class="row text-center mx-0">
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">12:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">13:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">14:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">15:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">16:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">17:00PM</div>
											</div>
										</div>
										<div class="row text-center mx-0">
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">18:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">19:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">20:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">21:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">22:00PM</div>
											</div>
											<div class="col-md-2 col-4 my-1 px-2">
												<div class="cell py-1">23:00PM</div>
											</div>
										</div>
										@error('time')
											<div class="alert alert-danger text-center">
												{{ $message }}
											</div>
										@enderror
									</div>
								
									<div class="text-center mb-3">
										<button type="submit" class="btn btn-primary text-center"> استمر لإكمال الحجز</button>
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
			

