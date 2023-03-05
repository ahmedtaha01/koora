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
                <li class="menu-title"> 
                    <span>الصفحات</span>
                </li>
                <li class="nav-item">
                  <a href="calendar/calendar.html" target="_blank"><i class="fe fe-calendar"></i> <span>التقويم</span></a>
                </li>
                 <li class="submenu">
                     <a href="#"><i class="fa fa-envelope"></i><span> صندوق البريد </span> <span class="menu-arrow"></span></a>
                     <ul style="display: none;">
                        <li><a href="mail/mailbox.html" target="_blank"><span class="fa fa-inbox"></span> صندوق الوارد </a></li>
                        <li><a href="mail/read-mail.html" target="_blank"><span class="fe fe-document"></span>إقرأ رسالة  </a></li>
                        <li><a href="mail/compose.html" target="_blank"><span class="fa fa-send"></span> إرسال رسالة </a></li>
                     </ul>
                </li>
                <li> 
                    <a href="{{ route('admin.profile.index') }}"><i class="fe fe-user-plus"></i> <span>الملف الشخصي</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-lock"></i> <span> المصادقة </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> تسجيل دخول </a></li>
                        <li><a href="register.html"> إنشاء حساب </a></li>
                        <li><a href="forgot-password.html"> نسيت كلمة السر </a></li>
                        <li><a href="lock-screen.html"> قفل الشاشة </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->