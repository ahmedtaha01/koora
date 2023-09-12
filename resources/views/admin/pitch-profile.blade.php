@extends('index.layouts.app')


@section('content')
				<!-- Page Content -->
				<div class="content">
					<div class="container">
	
						<!-- Pitch Widget -->
						<div class="card">
							<div class="card-body">
								<div class="pitch-widget">
									<div class="pitch-info-left">
										<div class="pitch-img">
											<img src="{{ url('storage/images/stadiums/'.$stadium->image) }}" class="img-fluid" alt="Pitch">
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
										<div class="pitch-action">
											<a href="javascript:void(0)" class="btn btn-white fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pitch-infos">
											<ul>
												<li><i class="far fa-thumbs-up"></i> {{ $stadium->rating()}}%</li>
												<li><i class="far fa-comment"></i> {{ $stadium->reviews->count('comment') }} تعليق</li>
												<li><i class="fas fa-map-marker-alt"></i>{{ $stadium->address }}</li>
												<li><i class="far fa-money-bill-alt"></i>سعر الساعة EGP {{ $stadium->hour_price }}</li>
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<!-- /pitch Widget -->
						
						<!-- pitch Details Tab -->
						<div class="card">
							<div class="card-body pt-0">
							
								<!-- Tab Menu -->
								<nav class="user-tabs mb-4">
									<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
										<li class="nav-item">
											<a class="nav-link active" href="#pitch_overview" data-toggle="tab">نظرة عامة</a>
										</li>
										
										<li class="nav-item">
											<a class="nav-link" href="#pitch_reviews" data-toggle="tab">الآراء</a>
										</li>
										
									</ul>
								</nav>
								<!-- /Tab Menu -->
								
								<!-- Tab Content -->
								<div class="tab-content pt-0">
								
									<!-- Overview Content -->
									<div role="tabpanel" id="pitch_overview" class="tab-pane fade show active">
										<div class="row">
											<div class="col-md-12 col-lg-9">
											
												<!-- About Details -->
												<div class="widget about-widget">
													<h4 class="widget-title">عن الملعب</h4>
													<ul class="clearfix">
														<li>المساحة :{{ $stadium->size }}</li>
														<li>{{ $stadium->address }} </li>				
													</ul>
												</div>
												<hr>
												<!-- /About Details -->
											
												<!-- service Details -->
												<div class="widget service-widget">
													<h4 class="widget-title">الخدمات</h4>
													<div class="experience-box">
													 <div class="service-listt">
														<ul class="experience-list">
															
															@forelse ($stadium->services as $service)
															<li>
																<div class="experience-user">
																	<div class="before-circle"></div>
																</div>
																<div class="experience-content">
																	<div class="timeline-content">
																	<img class="icon" src="{{ asset('assets/registration/img/features') }}/{{ $service->type }}.png" alt="Feature">
																		<a href="#/" class="name">{{ $service->type }}</a>
																	</div>
																</div>
															</li>
															@empty
																<div class="alert alert-warning text-center">
																	No Services
																</div>
															@endforelse
															
														</ul>
													</div>
												</div>
											</div>
												<hr>
												<!-- /service Details -->
										
												<!-- Experience Details -->
												<div class="widget experience-widget">
													<h4 class="widget-title">سياسة الإلغاء</h4>
													<div class="experience-box">
														<ul class="experience-list">
															<li>
																<div class="experience-user">
																	<div class="before-circle"></div>
																</div>
																<div class="experience-content">
																	<div class="timeline-content">
																		<a href="#/" class="name">يسمح بإلغاء الحجز بحد أقصى قبل 72 ساعة من موعد اللعب.</a>
																	</div>
																</div>
															</li>
															<li>
																<div class="experience-user">
																	<div class="before-circle"></div>
																</div>
																<div class="experience-content">
																	<div class="timeline-content">
																		<a href="#/" class="name">يجب دفع مبلغ تأميني بقيمة 100 جنيه مصري (في غضون 24 ساعة بعد إجراء الحجز الأول ويتم دفعه مرة واحدة فقط) ويمكن استرداده إذا كنت ترغب في إيقاف الحجوزات في الملعب.</a>
																	</div>
																</div>
															</li>
															<li>
																<div class="experience-user">
																	<div class="before-circle"></div>
																</div>
																<div class="experience-content">
																	<div class="timeline-content">
																		<a href="#/" class="name">في حال الرغبة بإلغاء الحجز خارج فترة السماح يرجى التواصل مع إدارة الملعب وسيتم أخذ 50% من مبلغ الحجز في حال عدم حصول الملعب على حجز آخر لنفس الفترة الملغاة.</a>
																	</div>
																</div>
															</li>
															<li>
																<div class="experience-user">
																	<div class="before-circle"></div>
																</div>
																<div class="experience-content">
																	<div class="timeline-content">
																		<a href="#/" class="name">عند التغيب بدون أي عذر وبدون إخبار إدارة الملعب سيتم أخذ مبلغ التأمين كاملاً (100% من المبلغ).</a>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
												
	
											</div>
										</div>
									</div>

									
									<!-- Reviews Content -->
									<div role="tabpanel" id="pitch_reviews" class="tab-pane fade">
									
										<!-- Review Listing -->
										<div class="widget review-listing">
											<ul class="comments-list">
											
												<!-- Comment List -->
												@forelse ($stadium->reviews as $review)
												<li>
													<div class="comment">
														<img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{ $review->user->image ? url('storage/images/users/'.$review->user->image): asset('assets/admin/img/profiles/user.png') }}">
														<div class="comment-body">
															<div class="meta-data">
																<span class="comment-author">{{ $review->user->name }}</span>
																<span class="comment-date">{{ $review->created_at }}</span>
															</div>
															<p class="comment-content">
																{{ $review->comment }}
															</p>
														</div>
													</div>
												</li>
												<!-- /Comment List -->
												@empty
													No reviews
												@endforelse				
											</ul>				
										</div>
										<!-- /Review Listing -->
									
										<!-- Write Review -->
										<div class="write-review">
											<h4>أكتب رأيك  <strong>ل {{ $stadium->name }}</strong></h4>
											
											<!-- Write Review Form -->
											<form action="{{ route('admin.reviews.store') }}" method="post">
												@csrf
												<div class="form-group">
													<label>قيم</label>
													<div class="star-rating">
														
														<input id="star-5" type="radio" name="rating" value="5">
														<label for="star-5" title="سئ">
															<i class="active fa fa-star"></i>
														</label>
														<input id="star-4" type="radio" name="rating" value="4">
														<label for="star-4" title="مقبول">
															<i class="active fa fa-star"></i>
														</label>
														<input id="star-3" type="radio" name="rating" value="3">
														<label for="star-3" title="جيد">
															<i class="active fa fa-star"></i>
														</label>
														<input id="star-2" type="radio" name="rating" value="2">
														<label for="star-2" title="جيد جداً">
															<i class="active fa fa-star"></i>
														</label>
														<input id="star-1" type="radio" name="rating" value="1">
														<label for="star-1" title="ممتاز">
															<i class="active fa fa-star"></i>
														</label>
													</div>
													@error('rating')
														<div class="alert alert-danger text-center">
															{{ $message }}
														</div>
													@enderror
												</div>
											
											
												
												<div class="form-group">
													<label>تقييمك</label>
													<textarea id="review_desc" name="review" maxlength="100" class="form-control"></textarea>
												  <input type="hidden" name="stadium_id" value="{{ $stadium->id }}">
												  <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> الأحرف المتبقية</small></div>
												</div>
												@error('review')
													<div class="alert alert-danger text-center">
														{{ $message }}
													</div>
												@enderror
												<hr>
												<div class="submit-section">
													<button type="submit" class="btn btn-primary submit-btn">أضف التقييم</button>
												</div>
											</form>
											
										</div>
										<!-- /Write Review -->
							
									</div>
									<!-- /Reviews Content -->
							</div>
						</div>
						<!-- /pitch Details Tab -->
	
					</div>
				</div>		
				<!-- /Page Content -->
@endsection
