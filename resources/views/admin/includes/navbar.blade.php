<!-- Header -->
<div class="header">
    
    <!-- Logo -->
    <div class="header-right">
        <a href="index.html" class="logo">
            <img src="{{ asset('assets/admin/img/main%20logo5.png') }}" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="{{ asset('assets/admin/img/main%20logo%203.png') }}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <!-- /Logo -->
    
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-right"></i>
    </a>
    
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="ابحث هنا">
            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    
    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->
    
    <!-- Header Right Menu -->
    <ul class="nav user-menu">

        <!-- Notifications -->
        <li class="nav-item dropdown noti-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fe fe-bell"></i> <span class="badge badge-pill">+2</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">الإشعارات الواردة</span>
                    <a href="javascript:void(0)" class="clear-noti"> مسح الكل </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/admin/img/profiles/user.png') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">عميل 1</span> حجز  <span class="noti-title">ملعب 5 لساعتين</span></p>
                                        <p class="noti-time"><span class="notification-time">منذ 1 دقيقة</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/admin/img/profiles/user.png') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">عميل 1</span> حجز  <span class="noti-title">ملعب 5 لساعتين</span></p>
                                        <p class="noti-time"><span class="notification-time">منذ 4 دقائق</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/admin/img/profiles/user.png') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">عميل 1</span> حجز  <span class="noti-title">ملعب 5 لساعتين</span></p>
                                        <p class="noti-time"><span class="notification-time">منذ 15 دقيقة</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media">
                                    <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/admin/img/profiles/user.png') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">عميل 2</span> حجز  <span class="noti-title">ملعب 4 لساعة</span></p>
                                        <p class="noti-time"><span class="notification-time">منذ 30 دقيقة</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="#">عرض جميع الإشعارات</a>
                </div>
            </div>
        </li>
        <!-- /Notifications -->
        
        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="{{ asset('assets/admin/img/profiles/user.png') }}" width="31" alt="user"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{ asset('assets/admin/img/profiles/user.png') }}" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>مستخدم</h6>
                        <p class="text-muted mb-0">مسئول</p>
                    </div>
                </div>
                <a class="dropdown-item" href="profile.html">ملفي الشخصي</a>
                <a class="dropdown-item" href="lock-screen.html">قفل الشاشة</a>
                <a class="dropdown-item" href="login.html">تسجيل خروج</a>
            </div>
        </li>
        <!-- /User Menu -->
        
    </ul>
    <!-- /Header Right Menu -->
    
</div>
<!-- /Header -->