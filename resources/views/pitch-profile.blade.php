@extends('registration.layouts.app')


@section('content')
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							<img src="{{ asset('assets/registration/img/main%20logo5.png') }}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="nav-item active">
								<a class="main-nav header-home"href="index.html">الرئيسية</a>
							</li>
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
						
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
									<li class="breadcrumb-item active" aria-current="page">صفحة الملعب</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">الملعب</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<!-- Pitch Widget -->
					<div class="card">
						<div class="card-body">
							<div class="pitch-widget">
								<div class="pitch-info-left">
									<div class="pitch-img">
										<img src="{{ asset('assets/registration/img/pitches/pitch-1.png') }}" class="img-fluid" alt="Pitch">
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
											<p class="pitch-location"><i class="fas fa-map-marker-alt"></i>{{ $stadium->address }}
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
                                    <div class="pitch-action">
										<a href="javascript:void(0)" class="btn btn-white fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pitch-infos">
										<ul>
											<li><i class="far fa-thumbs-up"></i> 92%</li>
											<li><i class="far fa-comment"></i> 35 تعليق</li>
											<li><i class="fas fa-map-marker-alt"></i>{{ $stadium->address }}</li>
											<li><i class="far fa-money-bill-alt"></i>سعر الساعة EGP {{ $stadium->hour_price }}</li>
										</ul>
									</div>
									<div class="pitch-booking">
										<a class="apt-btn" href="{{ route('match') }}">احجز موعدًا</a>
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
									<li class="nav-item">
										<a class="nav-link" href="#pitch_business_hours" data-toggle="tab">ساعات العمل</a>
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
													<li>{{ $stadium->size }}</li>
													<li>نوع العشب : صناعي</li>
													
													<li>العنوان : {{ $stadium->address }}</li>
													<li>نوع الحجز : ساعة - ساعتين</li>
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
														@foreach ($stadium->services as $service)
															
														@endforeach
														<li>
															<div class="experience-user">
                                                                <div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
                                                    			<img class="icon" src="{{ asset('assets/registration/img/features/') }}/{{ $service->type }}.png" alt="Feature">
																	<a href="#/" class="name">{{ $service->type }}</a>
																</div>
															</div>
														</li>
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
											<!-- /Experience Details -->
								
											<!-- map Details -->
											<div class="widget map-widget">
												<h4 class="widget-title">موقع الملعب </h4>
												<div class="experiencee-box">
                                                    <div class="google-maps">
                                                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27348.4401680817!2d31.38203322887423!3d31.03864503973191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79d38729675cf%3A0xb557a8cb5964ad71!2z2YXZhNin2LnYqCDYo9mF2YQg2YXYtdix!5e0!3m2!1sen!2seg!4v1640523762249!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                    </div>
												</div>
											</div>
											<!-- /map Details -->

										</div>
									</div>
								</div>
								<!-- /Overview Content -->
								
								
								
								<!-- Reviews Content -->
								<div role="tabpanel" id="pitch_reviews" class="tab-pane fade">
								
									<!-- Review Listing -->
									<div class="widget review-listing">
										<ul class="comments-list">
										
											<!-- Comment List -->
											<li>
												<div class="comment">
													<img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{ asset('') }}assets/registration/img/clients/user.png">
													<div class="comment-body">
														<div class="meta-data">
															<span class="comment-author">عميل 1</span>
															<span class="comment-date">تمت التقييم منذ يومين</span>
															<div class="review-count rating">
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star"></i>
															</div>
														</div>
														<p class="recommended"><i class="far fa-thumbs-up"></i>أنا أفضل هذا الملعب</p>
														<p class="comment-content">
															------------------------------------------------------------------
                                                            ------------------------------------------------------------------
                                                            ------------------------------------------------------------------
														</p>
														<div class="comment-reply">
															<a class="comment-btn" href="#">
																<i class="fas fa-reply"></i> رد
															</a>
														   <p class="recommend-btn">
															<span>هل تفضل هذا الملعب ؟</span>
															<a href="#" class="like-btn">
																<i class="far fa-thumbs-up"></i> نعم
															</a>
															<a href="#" class="dislike-btn">
																<i class="far fa-thumbs-down"></i> لا
															</a>
														</p>
														</div>
													</div>
												</div>
												
												<!-- Comment Reply -->
												<ul class="comments-reply">
													<li>
														<div class="comment">
															<img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{ asset('') }}assets/registration/img/clients/user.png">
															<div class="comment-body">
																<div class="meta-data">
																	<span class="comment-author">عميل 5</span>
																	<span class="comment-date">تم التقييم منذ ثلاثة أيام</span>
																	<div class="review-count rating">
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star filled"></i>
																		<i class="fas fa-star"></i>
																	</div>
																</div>
																<p class="comment-content">
															        ------------------------------------------------------------------
                                                                    ------------------------------------------------------------------
                                                                    ------------------------------------------------------------------
														        </p>
																<div class="comment-reply">
																	<a class="comment-btn" href="#">
																		<i class="fas fa-reply"></i> رد
																	</a>
																	<p class="recommend-btn">
															            <span>هل تفضل هذا الملعب ؟</span>
																		<a href="#" class="like-btn">
																			<i class="far fa-thumbs-up"></i> نعم
																		</a>
																		<a href="#" class="dislike-btn">
																			<i class="far fa-thumbs-down"></i> لا
																		</a>
																	</p>
																</div>
															</div>
														</div>
													</li>
												</ul>
												<!-- /Comment Reply -->
												
											</li>
											<!-- /Comment List -->
											
											<!-- Comment List -->
											<li>
												<div class="comment">
													<img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{ asset('') }}assets/registration/img/clients/user.png">
													<div class="comment-body">
														<div class="meta-data">
															<span class="comment-author">عميل 3</span>
															<span class="comment-date">تم التقييم منذ اربعة ايام</span>
															<div class="review-count rating">
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star"></i>
															</div>
														</div>
														<p class="comment-content">
															 ------------------------------------------------------------------
                                                             ------------------------------------------------------------------
                                                             ------------------------------------------------------------------
														</p>
														<div class="comment-reply">
															<a class="comment-btn" href="#">
																<i class="fas fa-reply"></i> رد
															</a>
															<p class="recommend-btn">
												                <span>هل تفضل هذا الملعب ؟</span>
																<a href="#" class="like-btn">
																	<i class="far fa-thumbs-up"></i> نعم
																</a>
																<a href="#" class="dislike-btn">
																	<i class="far fa-thumbs-down"></i> لا
																</a>
															</p>
														</div>
													</div>
												</div>
											</li>
											<!-- /Comment List -->
											
										</ul>
										
										<!-- Show All -->
										<div class="all-feedback text-center">
											<a href="#" class="btn btn-primary btn-sm">
												أظهر كل الآراء <strong>(167)</strong>
											</a>
										</div>
										<!-- /Show All -->
										
									</div>
									<!-- /Review Listing -->
								
									<!-- Write Review -->
									<div class="write-review">
										<h4>أكتب رأيك  <strong>لملاعب الأمل</strong></h4>
										
										<!-- Write Review Form -->
										<form>
											<div class="form-group">
												<label>قيم</label>
												<div class="star-rating">
                                                    
                        							<input id="star-1" type="radio" name="rating" value="star-1">
													<label for="star-1" title="ممتاز">
														<i class="active fa fa-star"></i>
													</label>
                                                    <input id="star-2" type="radio" name="rating" value="star-2">
													<label for="star-2" title="جيد جداً">
														<i class="active fa fa-star"></i>
													</label>
                                                    <input id="star-3" type="radio" name="rating" value="star-3">
													<label for="star-3" title="جيد">
														<i class="active fa fa-star"></i>
													</label>
                                                    <input id="star-4" type="radio" name="rating" value="star-4">
													<label for="star-4" title="مقبول">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-5" type="radio" name="rating" value="star-5">
													<label for="star-5" title="سئ">
														<i class="active fa fa-star"></i>
													</label>
													
													
													
												</div>
											</div>
											<div class="form-group">
												<label>عنوان تقييمك</label>
												<input class="form-control" type="text" placeholder="إذا كان بإمكانك قولها في جملة واحدة ، فماذا ستقول ؟">
											</div>
											<div class="form-group">
												<label>تقييمك</label>
												<textarea id="review_desc" maxlength="100" class="form-control"></textarea>
											  
											  <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> الأحرف المتبقية</small></div>
											</div>
											<hr>
											<div class="form-group">
												<div class="terms-accept">
													<div class="custom-checkbox">
													   <input type="checkbox" id="terms_accept">
													   <label for="terms_accept">لقد قرأت وقبلت الشروط والأحكام</label>
													</div>
												</div>
											</div>
											<div class="submit-section">
												<button type="submit" class="btn btn-primary submit-btn">أضف التقييم</button>
											</div>
										</form>
										<!-- /Write Review Form -->
										
									</div>
									<!-- /Write Review -->
						
								</div>
								<!-- /Reviews Content -->
								
								<!-- Business Hours Content -->
								<div role="tabpanel" id="pitch_business_hours" class="tab-pane fade">
									<div class="row">
										<div class="col-md-6 offset-md-3">
										
											<!-- Business Hours Widget -->
											<div class="widget business-widget">
												<div class="widget-content">
													<div class="listing-hours">
														<div class="listing-day">
															<div class="day">السبت</div>
															<div class="time-items">
																<span class="time">08:00 ص - 12:00 م</span>
															</div>
														</div>
                                                        <div class="listing-day">
															<div class="day">الأحد</div>
															<div class="time-items">
																<span class="time">08:00 ص - 12:00 م</span>
															</div>
														</div>
                                                        <div class="listing-day">
															<div class="day">الإثنين</div>
															<div class="time-items">
																<span class="time">08:00 ص - 12:00 م</span>
															</div>
														</div>
                                                        <div class="listing-day">
															<div class="day">الثلاثاء</div>
															<div class="time-items">
																<span class="time">08:00 ص - 12:00 م</span>
															</div>
														</div>
                                                        <div class="listing-day">
															<div class="day">الأربعاء</div>
															<div class="time-items">
																<span class="time">08:00 ص - 12:00 م</span>
															</div>
														</div>
                                                        <div class="listing-day">
															<div class="day">الخميس</div>
															<div class="time-items">
																<span class="time">08:00 ص - 12:00 م</span>
															</div>
														</div>
                                                        <hr>
														<div class="listing-day">
															<div class="day">الجمعة</div>
															<div class="time-items">
														         <span>1:00 م - 2:00 ص</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Business Hours Widget -->
									
										</div>
									</div>
								</div>
								<!-- /Business Hours Content -->
								
							</div>
						</div>
					</div>
					<!-- /pitch Details Tab -->

				</div>
			</div>		
			<!-- /Page Content -->
		</div>
		<!-- /Main Wrapper -->
@endsection
