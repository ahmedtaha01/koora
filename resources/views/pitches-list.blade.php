@extends('index.layouts.app')

@section('content')
<div class="main-wrapper">
	
	<!-- Page Content -->
	<div class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9 cardd">

					<!-- Pitch Widget -->
					@forelse ($stadiums as $stadium)
					<div class="card">
						<div class="card-body">
							<div class="pitch-widget">
								<div class="pitch-info-left">
									<div class="pitch-img">
										<a href="pitch-profile.html">
											<img src="{{ asset('assets/registration/img/pitches/pitch-1.png') }}" class="img-fluid" alt="Pitch">
										</a>
									</div>
										<div class="pitch-info-cont">
										<h4 class="pitch-name">{{ $stadium->name }}</h4>
										<p class="pitch-department">{{ $stadium->size }}</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(35)</span>
										</div>
										<div class="pitch-details">
											<p class="pitch-location"><i class="fas fa-map-marker-alt"></i>المنصورة
												<a href="https://goo.gl/maps/j3hP3RQpffv7xkgE8" target="_blank">موقع الملعب</a>
											</p>
												<ul class="pitch-gallery">
													<li>
														<a href="{{ asset('assets/registration/img/pitches/pitch-1.png') }}" data-fancybox="gallery">
															<img src="{{ asset('assets/registration/img/pitches/pitch-1.png') }}" alt="Pitch">
														</a>
													</li>
													<li>
														<a href="{{ asset('assets/registration/img/pitches/pitch-1-1.png') }}" data-fancybox="gallery">
															<img  src="{{ asset('assets/registration/img/pitches/pitch-1-1.png') }}" alt="Pitch">
														</a>
													</li>
													<li>
														<a href="{{ asset('assets/registration/img/pitches/pitch-1-2.png') }}" data-fancybox="gallery">
															<img src="{{ asset('assets/registration/img/pitches/pitch-1-2.png') }}" alt="Pitch">
														</a>
													</li>
													<li>
														<a href="{{ asset('assets/registration/img/pitches/pitch-1-3.png') }}" data-fancybox="gallery">
															<img src="{{ asset('assets/registration/img/pitches/pitch-1-3.png') }}" alt="Pitch">
														</a>
													</li>
												</ul>
										</div>
										</div>
								</div>
								<div class="pitch-info-right">
									<div class="pitch-infos">
										<ul>
											<li><i class="far fa-thumbs-up"></i> 92%</li>
											<li><i class="far fa-comment"></i> 35 تعليق</li>
											<li><i class="fas fa-map-marker-alt"></i>المنصورة</li>
											<li><i class="far fa-money-bill-alt"></i>سعر الساعة EGP {{ $stadium->hour_price }}</li>
										</ul>
									</div>
									<div class="pitch-booking">
										<a class="view-pro-btn" href="{{ route('stadium.show',$stadium->id) }}">عرض التفاصيل</a>
										<a class="apt-btn" href="booking.html">أحجز الأن</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@empty
						No Stadiums
					@endforelse
					
					<!-- Pitch Widget -->

					<div class="load-more  w-50 ml-0 mr-0 mx-auto text-center">
						
						{{ $stadiums->links() }}
						
						{{-- <a class="btn btn-primary btn-sm" href="javascript:void(0);">تحميل المزيد</a>	 --}}
					</div>	
				</div>
			</div>

		</div>

	</div>		
	<!-- /Page Content -->
</div>
@endsection

