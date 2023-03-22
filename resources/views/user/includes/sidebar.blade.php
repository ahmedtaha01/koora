<!-- Profile Sidebar -->
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">
                <a href="#" class="booking-pitch-img">
                    <img src="{{ auth()->user()->image ? url('storage/images/users/'.auth()->user()->image): asset('assets/admin/img/profiles/user.png') }}" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3>{{ auth()->user()->name }}</h3>
                    <div class="client-details">
                        <h5><i class="fas fa-birthday-cake"></i>{{ auth()->user()->dob }}</h5>
                        <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>{{ auth()->user()->phone }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li class="{{ Route::currentRouteName() == 'user.dashboard' ? 'active' : '' }}">
                        <a href="{{ route('user.dashboard') }}">
                            <i class="fas fa-columns"></i>
                            <span>لوحة التحكم</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="favourites.html">
                            <i class="fas fa-bookmark"></i>
                            <span>الملاعب المفضلة</span>
                        </a>
                    </li> --}}
                    <li class="{{ Route::currentRouteName() == 'user.profile_settings' ? 'active' : '' }}">
                        <a href="{{ route('user.profile_settings') }}">
                            <i class="fas fa-user-cog"></i>
                            <span>إعدادات الملف الشخصي</span>
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'user.update_password' ? 'active' : '' }}">
                        <a href="{{ route('user.update_password') }}">
                            <i class="fas fa-lock"></i>
                            <span>تغيير كلمة السر</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>تسجيل خروج</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>
<!-- /Profile Sidebar -->