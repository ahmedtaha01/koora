	
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
                {{-- <a href="index.html" class="navbar-brand logo">
                    <img src="{{ asset('assets/registration/img/main%20logo5.png') }}" class="img-fluid" alt="Logo">
                </a> --}}
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
                @if (! Auth::check())
                    <li class="nav-item">
                        <a class="nav-link header-login" href="{{ route('login') }}">سجل دخول/أنشئ حساب</a>
                    </li>
                @endif
                
            </ul>	
            
            
            
            
        </nav>
    </header>
    <!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('index') }}">الرئيسية</a></li>
									<li class="breadcrumb-item active" aria-current="page">صفحة الملعب</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">الملعب</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->