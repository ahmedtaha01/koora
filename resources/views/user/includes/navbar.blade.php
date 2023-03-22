	
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
                        <a class="main-nav header-home"href="{{ route('index') }}">الرئيسية</a>
                    </li>
                </ul>			 
            </div>	
            <ul class="nav header-navbar-rht">
                <!--<li class="nav-item">
                    <a class="nav-link header-login" href="login.html">سجل دخول/أنشئ حساب</a>
                </li>-->
                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ auth()->user()->image ? url('storage/images/users/'.auth()->user()->image): asset('assets/admin/img/profiles/user.png') }}" width="31" alt="User">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ auth()->user()->image ? url('storage/images/users/'.auth()->user()->image): asset('assets/admin/img/profiles/user.png') }}" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6> {{ auth()->user()->name }}</h6>
                                <p class="text-muted mb-0">{{ auth()->user()->role->type }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('user.dashboard') }}">لوحة التحكم</a>
                        <a class="dropdown-item" href="{{ route('user.profile_settings') }}">إعدادات الملف الشخصي</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">تسجيل الخروج</a>
                    </div>
                </li>
                <!-- /User Menu -->
                
            </ul>
        </nav>
    </header>
