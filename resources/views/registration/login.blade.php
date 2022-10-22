@extends('registration.layouts.app')



@section('content')
<div class="main-wrapper">
		
    <!-- Header -->
    <header class="header">
        
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand logo">
                    <img src="assets/img/main%20logo%203.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="assets/img/main%20logo%203.png" class="img-fluid" alt="Logo">
                    </a>
                </div>
            </div>
    </header>
    <!-- /Header -->
    
    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    
                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="assets/img/login.png" class="img-fluid" alt="85:45 Login">	
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>تسجيل الدخول</h3>
                                </div>
                                <form action="login.html">
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating">
                                        <label class="focus-label">البريد الإكتروني أو رقم الهاتف</label>
                                    </div>
                                     <div class="form-group form-focus">
                                        <input type="password" id="txtPassword" class="form-control floating" name="txtPassword" />
                                        <label class="focus-label">كلمة السر</label>
                                        <div id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></div> 
                                    </div>
                                    <div class="remember">
                                        <label>
                                         <input class="check" type="checkbox" name="remember">&nbsp;تذكرني
                                         </label>
                                    </div>
                                    <div>
                                        <a class="forgot-link" href="forgot-password.html">هل نسيت كلمة السر ؟</a>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">سجل الدخول</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                    </div>
                                    <div class="text-center dont-have">ليس لديك حساب ؟ <a href="register.html">أنشئ حساب</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Tab Content -->
                        
                </div>
            </div>

        </div>

    </div>	
</div>    

@endsection