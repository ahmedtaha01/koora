@extends('user.layouts.app')


@section('content')
<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('user.index') }}">الرئيسية</a></li>
						<li class="breadcrumb-item active" aria-current="page">الدفع</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">الدفع</h2>
			</div>
		</div>
	</div>
</div>
<br>
	<div class="container">

		<div class="row">
									
			<div class="col-md-5 col-lg-4 theiaStickySidebar">
			
				<!-- Booking Summary -->
				<div class="card booking-card">
					<div class="card-header">
						<h4 class="card-title">تفاصيل الحجز</h4>
					</div>
					<div class="card-body">
					
						<!-- Booking Pitch Info -->
						<div class="booking-pitch-info">
							<a href="{{ route('user.stadiums.show',$data['stadium']->id) }}" class="booking-pitch-img">
								<img src="{{ url('storage/images/stadiums/'.$data['stadium']->image) }}" alt="User Image">
							</a>
							<div class="booking-info">
								<h4><a href="pitch-profile.html">{{ $data['stadium']->name }}</a></h4>
								<div class="rating">
									@php
										$i=0;
										while($i < floor($data['stadium']->rates->avg('rate'))){
											echo '<i class="fas fa-star filled"></i>';
											$i++;
										}
										while($i < 5){
											echo '<i class="fas fa-star"></i>';
											$i++;
										}
									@endphp
									<span class="d-inline-block average-rating">({{ $data['stadium']->reviews->count('comment') }})</span>
								</div>
								<div class="pitch-details">
									<p class="pitch-location"><i class="fas fa-map-marker-alt"></i>{{ $data['stadium']->address }}</p>
								</div>
							</div>
						</div>
						<!-- Booking Pitch Info -->
						
						<div class="booking-summary">
							<div class="booking-item-wrap">
								<ul class="booking-date">
									<li>التاريخ<span>{{ $data['day'] }}</span></li>
									<li>الساعة <span>{{ $data['time'] }}</span></li>
								</ul>
								<ul class="booking-fee">
									<li>سعر الساعة <span>EGP {{ $data['stadium']->hour_price }}</span></li>
									<li>مدة الحجز<span>ساعه</span></li>
								</ul>
								<div class="booking-total">
									<ul class="booking-total-list">
										<li>
											<span>الإجمالي</span>
											<span class="total-cost">EGP {{ $data['stadium']->hour_price }}</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Booking Summary -->
				
			</div>
			<div class="col-md-7 col-lg-8">
				<div class="card">
					<div class="card-body">
					
						<!-- stripe -->
						<form action="{{ route('user.booking') }}" method="post" id="card-form">
							@csrf
							<input type="hidden" name="day" value="{{ $data['day'] }}">
							<input type="hidden" name="time" value="{{ $data['time'] }}">
							<input type="hidden" name="stadium" value="{{ $data['stadium']->id }}">
							<div class="payment-widget">
								<h4 class="card-title">طريقة الدفع او السداد</h4>
								
								<img src="{{ asset('assets/payments/stripe.jpg') }}" width="200px" height="50px" alt="">

								<input type="hidden" name="payment" value="stripe" >
									
								
								<div class="mb-3">
									<label for="card-name" class="mt-2">الاسم</label>
									<input type="text" name="name" id="card-name" class="form-control floating">
								</div>
								<div class="mb-3">
									<label for="email" class="">البريد الالكتروني</label>
									<input type="email" name="email" id="email" class="form-control floating">
								</div>
								<div class="mb-3" dir="ltr">
									<label for="card" class="focus-label">Card details</label>
						
									<div class="focus-label">
										<div id="card"></div>
									</div>
								</div>
								<div class="submit-section mt-4 text-center">
									<button type="submit" class="btn btn-primary submit-btn"> ادفع</button>
								</div>
							</div>	
						</form>
								
								<hr>
								<!-- Paypal Payment -->
								<form action="{{ route('user.booking') }}"  method="post">
									@csrf
									<input type="hidden" name="day" value="{{ $data['day'] }}">
									<input type="hidden" name="time" value="{{ $data['time'] }}">
									<input type="hidden" name="stadium" value="{{ $data['stadium']->id }}">
									<div class="payment-list">
										<label class="payment-radio credit-card-option">
											<input type="hidden" name="payment" value="paypal">
											
											<i class="fab fa-paypal"></i>
											باي بال
										<img src="{{ asset('assets/registration/img/paypall.jpg') }}" alt="paypal">
										</label>
									</div>
									<div class="submit-section mt-4 text-center">
										<button type="submit"  class="btn btn-primary submit-btn"> ادفع</button>
									</div>
								</form>
								
								<!-- Paypal Payment -->
								<hr>
								<!-- checkout payment -->
								{{-- <div class="payment-list">
									
									<input type="hidden" name="payment" value="checkout">

									<form id="payment-form" method="POST" action="https://merchant.com/charge-card">
										<input type="hidden" name="day" id="day" value="{{ $data['day'] }}">
										<input type="hidden" name="time" id="time" value="{{ $data['time'] }}">
										<input type="hidden" name="stadium" id="stadium" value="{{ $data['stadium']->id }}">
											<div class="one-liner">
												<div class="card-frame">
													
												</div>
												 <button id="pay-button" disabled>PAY GBP 24.99</button> 
											</div>
										
										
										<p class="error-message"></p>
										<p class="success-payment-message"></p>
										<div class="submit-section mt-4 text-center">
											<button type="submit" id="pay-button"  class="btn btn-primary submit-btn"> ادفع</button>
										</div>
									</form> 
								</div> --}}
							
								<!-- checkout payment -->
								<hr>
								<!-- Cash Payment -->
								<div class="payment-list">
									<label class="payment-radio paypal-option">
										
										<i class="far fa-money-bill-alt"></i>
										دفع نقدي
									</label>
									<div class="submit-section mt-4 text-center">
										<form action="{{ route('user.booking') }}" method="post">
											@csrf
											<input type="hidden" name="day" value="{{ $data['day'] }}">
											<input type="hidden" name="time" value="{{ $data['time'] }}">
											<input type="hidden" name="stadium" value="{{ $data['stadium']->id }}">
											<input type="hidden" name="payment" value="cash" >
											<button type="submit"  class="btn btn-primary"> اكمل</button>
										</form>
									</div>
								</div>
								<!-- /Cash Payment -->
								
								<!-- Submit Section -->
								
								<!-- /Submit Section -->
								
							</div>
						</form>
						<!-- /Checkout Form -->	
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
