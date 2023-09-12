<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>الرئيسية</span>
                    
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}"> 
                    <a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>لوحة التحكم</span></a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.reservations.index' ? 'active' : '' }}"> 
                    <a href="{{ route('admin.reservations.index') }}"><i class="fe fe-layout"></i> <span>المواعيد المحجوزة</span></a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.stadiums.index' ? 'active' : '' }}"> 
                    <a href="{{ route('admin.stadiums.index') }}"><i class="fa fa-futbol-o"></i> <span>الملاعب</span></a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.clients.index' ? 'active' : '' }}"> 
                    <a href="{{ route('admin.clients.index') }}"><i class="fe fe-users"></i> <span>العملاء</span></a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.reviews.index' ? 'active' : '' }}"> 
                    <a href="{{ route('admin.reviews.index') }}"><i class="fe fe-star-o"></i> <span>المراجعات</span></a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.stadiums.create' ? 'active' : '' }}"> 
                    <a href="{{ route('admin.stadiums.create') }}"><i class="fe fe-star-o"></i> <span>اضافه ملعب</span></a>
                </li>
                <li class="menu-title"> 
                    <span>الصفحات</span>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.profile.index' ? 'active' : '' }}"> 
                    <a href="{{ route('admin.profile.index') }}"><i class="fe fe-user-plus"></i> <span>الملف الشخصي</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-lock"></i> <span> المصادقة </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        {{-- <li><a href="login.html"> تسجيل دخول </a></li>
                        <li><a href="register.html"> إنشاء حساب </a></li>
                        <li><a href="forgot-password.html"> نسيت كلمة السر </a></li> --}}
                        <li><a href="{{ route('admin.lockscreen') }}"> قفل الشاشة </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->