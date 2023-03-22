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
					
						<!-- Checkout Form -->
						<form action="{{ route('user.reservation_success') }}" method="post">
							@csrf
							<input type="hidden" name="day" value="{{ $data['day'] }}">
							<input type="hidden" name="time" value="{{ $data['time'] }}">
							<input type="hidden" name="stadium" value="{{ $data['stadium']->id }}">
							<div class="payment-widget">
								<h4 class="card-title">طريقة الدفع او السداد</h4>
								
								<!-- Credit Card Payment -->
								<div class="payment-list">
									<label class="payment-radio credit-card-option">
										<input type="radio" name="radio" checked>
										<span class="checkmark"></span>
										<i class="far fa-credit-card"></i>
										بطاقة إئتمان
									</label>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group card-label">
												<label for="card_name">الأسم الموجود علي البطاقة</label>
												<input class="form-control" id="card_name" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group card-label">
												<label for="card_number">رقم البطاقة</label>
												<input class="form-control" id="card_number" placeholder="1234  5678  9876  5432" type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group card-label">
												<label for="expiry_month">شهر انتهاء الصلاحية</label>
												<input class="form-control" id="expiry_month" placeholder="MM" type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group card-label">
												<label for="expiry_year">سنة انتهاء الصلاحية</label>
												<input class="form-control" id="expiry_year" placeholder="YY" type="text">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group card-label">
												<label for="cvv">رمز التحقق</label>
												<input class="form-control" id="cvv" type="text">
											</div>
										</div>
									</div>
								</div>
								<!-- /Credit Card Payment -->
								
								<!-- Paypal Payment -->
								<div class="payment-list">
									<label class="payment-radio paypal-option">
										<input type="radio" name="radio">
										<span class="checkmark"></span>
										<i class="fab fa-paypal"></i>
										باي بال
									<img src="{{ asset('assets/registration/img/paypall.jpg') }}" alt="paypal">
									</label>
								</div>
								<!-- /Paypal Payment -->
								
								<!-- Cash Payment -->
								<div class="payment-list">
									<label class="payment-radio paypal-option">
										<input type="radio" name="radio">
										<span class="checkmark"></span>
										<i class="far fa-money-bill-alt"></i>
										دفع نقدي
									</label>
								</div>
								<!-- /Cash Payment -->
								
								<!-- Submit Section -->
								<div class="submit-section mt-4 text-center">
									<button type="submit" class="btn btn-primary submit-btn">أكد و ادفع</button>
								</div>
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

