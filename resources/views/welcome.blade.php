@extends('registration.layouts.app')


@section('content')
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
                    <a href="index.html" class="menu-logo">
                        <img src="{{ asset('assets/registration/img/main%20logo5.png') }}" class="img-fluid" alt="Logo">
                    </a>
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
                <li class="nav-item">
                    <a class="nav-link header-login" href="login.html">سجل دخول/أنشئ حساب</a>
                </li>
                
            </ul>
        </nav>
    </header>
    <!-- /Header -->
    
    <!-- Home Banner -->
             <div class="home-slider5">
              <div id="thmg-slideshow" class="thmg-slideshow">
                <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                  <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                    <ul>
                      <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{ asset('assets/registration/plugins/slider/images/slide-1.jpg') }}'><img src='{{ asset('assets/registration/plugins/slider/images/slide-1.jpg') }}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                        <div class="container">
                          <div class="content_slideshow">
                            <div class="row">
                              <div>
                                <div class="info">
                                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>85:45</span> </div>
                                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">موقع لحجز الملاعب</span><br>بكل سهولة</div><br>
                                  <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>أحجز ملعبك الأن</div>
                                  <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-            easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href="pitches-list.html" class="buy-btn">احجز موعدًا</a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{ asset('assets/registration/plugins/slider/images/slide-2.jpg') }}'><img src='{{ asset('assets/registration/plugins/slider/images/slide-2.jpg') }}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                        <div class="container">
                          <div class="content_slideshow">
                            <div class="row">
                              <div>
                                <div class="info">
                                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>85:45</span> </div>
                                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">موقع لحجز الملاعب</span><br> بكل سهولة </div><br>
                                  <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-            easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>أحجز ملعبك الأن</div>
                                  <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href="pitches-list.html" class="buy-btn">احجز موعدًا</a> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{ asset('assets/registration/plugins/slider/images/slide-3.jpg') }}'><img src='{{ asset('assets/registration/plugins/slider/images/slide-3.jpg') }}'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                       <div class="container">
                         <div class="content_slideshow">
                           <div class="row">
                             <div>
                               <div class="info">
                                 <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>85:45</span> </div>
                                 <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">موقع لحجز الملاعب</span><br> بكل سهولة </div><br>
                                 <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>أحجز ملعبك الأن</div>
                                 <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href="pitches-list.html" class="buy-btn">احجز موعدًا</a> </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>	
    <!-- /Home Banner -->
      
    <!-- pitch and Specialities -->
    <section class="section section-specialities">
        <div class="container-fluid">
            <div class="section-header text-center">
                <h2>انتظر, هناك الكثير!</h2>
                <p class="sub-title">فملعبك يبعد عنك بضعة نقرات سريعة</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <!-- Slider -->
                    <div class="specialities-slider slider">
                    
                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="{{ asset('assets/registration/img/specialities/specialities-1.png') }}" class="img-fluid" alt="Speciality">
                            </div>
                            <h4>حجز فوري وسريع</h4>
                            <p>أحجز ملعبك بكل سهولة</p>
                        </div>	
                        <!-- /Slider Item -->
                        
                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img special">
                                <img src="{{ asset('assets/registration/img/specialities/specialities-2.png') }}" class="img-fluid" alt="Speciality">
                            </div>
                            <h4>اختر ساعة الحجز</h4>
                            <p>تعرف على ساعات توفر الملعب</p>	
                            <p>وخطط جدول لعب الفريق دون عناء البحث</p>	
                        </div>							
                        <!-- /Slider Item -->
                        
                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img specialy">
                                <img src="{{ asset('assets/registration/img/specialities/specialities-3.png') }}" class="img-fluid" alt="Speciality">
                            </div>	
                            <h4>اكتشف الملاعب حولك</h4>
                            <p>تعرف من خلال الخريطة</p>
                            <p>على المكان الذي ستلعب فبه</p>
                        </div>							
                        <!-- /Slider Item -->
                        
                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img special">
                                <img src="{{ asset('assets/registration/img/specialities/specialities-4.png') }}" class="img-fluid" alt="Speciality">
                            </div>	
                            <h4>الجودة وأراء المستخدمين</h4>
                            <p>عملاءنا يستطيعون تقييم جودة الملعب</p>
                            <p>واخبارنا عن مدى رضاهم</p>
                        </div>							
                        <!-- /Slider Item -->
                        
                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img speciall">
                                <img src="{{ asset('assets/registration/img/specialities/specialities-5.png') }}" class="img-fluid" alt="Speciality">
                            </div>	
                            <h4>أدر حجوزاتك بسهولة</h4>
                            <p>متابعة حجوزاتك الحالية</p>
                            <p>مع الاحتفاظ بحجوزاتك السابقة</p>
                        </div>							
                        <!-- /Slider Item -->
                        
                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img specially">
                                <img src="{{ asset('assets/registration/img/specialities/specialities-6.png') }}" class="img-fluid" alt="Speciality">
                            </div>	
                            <h4>ألعب مع أصدقاءك في ملعبكم المفضل</h4>
                            <p>أحجز وألعب في ملعبك المفضل</p>
                            <p>مع أصدقائك وفريقك بسهولة</p>
                        </div>							
                        <!-- /Slider Item -->
                        
                    </div>
                    <!-- /Slider -->
                    
                </div>
            </div>
        </div>   
    </section>	 
    <!-- pitch and Specialities -->
  
    <!-- Popular Section -->
    <section class="section section-pitch">
        <div class="container-fluid">
           <div class="row">
                <div class="col-lg-4">
                    <div class="section-header ">
                        <h2>تعرف علي ملاعبنا</h2>
                    </div>
                    <div class="about-content">
                        <p>أختر ملعبك المفضل والمساحة المفضلة وبالموقع القريب منك بسهولة  </p>
                        <p>بالأسعار التي تناسبك</p>
                        <br>
                        <a href="pitches-list.html">أعرف المزيد</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="pitch-slider slider">
                        @forelse ($stadiums as $stadium)
                            <!-- Pitch Widget -->
                        <div class="profile-widget">
                            <div class="pitch-img">
                                <a href="pitch-profile.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets/registration/img/pitches/pitch-1.png') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="pitch-profile.html">{{ $stadium->name }}</a> 
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">{{ $stadium->size }}</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-rating">(17)</span>
                                </div>
                                <ul class="available-info">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>{{ $stadium->address }}
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i>متاح كل الايام
                                    </li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i>EGP {{ $stadium->hour_price }} سعر الساعة
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{ route('stadium.show',$stadium->id) }}" class="btn view-btn">عرض التفاصيل</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn">أحجز الأن</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /pitch Widget -->
                        @empty
                            <h1>No Stadiums</h1>
                        @endforelse
                        
                        
                    </div>
                </div>
           </div>
        </div>
    </section>
@endsection