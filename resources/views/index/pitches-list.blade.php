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
											<img src="{{ url('storage/images/stadiums/'.$stadium->image) }}" class="img-fluid" alt="Pitch">
										</a>
									</div>
										<div class="pitch-info-cont">
										<h4 class="pitch-name">{{ $stadium->name }}</h4>
										<p class="pitch-department">{{ $stadium->size }}</p>
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
										<div class="pitch-details">
											<p class="pitch-location"><i class="fas fa-map-marker-alt"></i>{{ $stadium->address }}
												<a href="{{ $stadium->google_link }}" target="_blank">موقع الملعب</a>
											</p>
											<ul class="pitch-gallery">
												{{-- foor loop here --}}
												@forelse ($stadium->images as $image)
												<li>
													<a href="{{ url('storage/images/stadiums/'.$image->image) }}" data-fancybox="gallery">
														<img src="{{ url('storage/images/stadiums/'.$image->image) }}" alt="Pitch">
													</a>
												</li>
												@empty
													<div class="alert alert-warning">
														No Images
													</div>
												@endforelse
											</ul>
										</div>
										</div>
								</div>
								<div class="pitch-info-right">
									<div class="pitch-infos">
										<ul>
											<li><i class="far fa-thumbs-up"></i> {{ $stadium->rating()}}%</li>
											<li><i class="far fa-comment"></i> {{ $stadium->reviews->count('comment') }} تعليق</li>
											<li><i class="fas fa-map-marker-alt"></i>{{ $stadium->address }}</li>
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

