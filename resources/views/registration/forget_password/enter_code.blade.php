@extends('registration.layouts.app')



@section('content')
<div class="main-wrapper">
		
    <!-- Header -->
    <header class="header">
        
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand logo">
                    <img src="{{ asset('assets/img/main logo 3.png') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="{{ asset('assets/img/main logo 3.png') }}" class="img-fluid" alt="Logo">
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
                    
                    <!-- Account Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="{{ asset('assets/img/reset pass.png') }}" class="img-fluid" alt="Login Banner">	
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>هل نسيت كلمة السر ؟</h3>
                                    <p class="small text-muted">أدخل الرقم السري الذي تم بعته الي البريد الالكتروني خاصتك</p>
                                </div>
                                
                                <!-- Forgot Password Form -->
                                <form action="{{ route('login.send_code') }}" method="post">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input type="text" name="code" class="form-control floating">
                                        <label class="focus-label">الرقم السري</label>
                                    </div>
                                    {{-- @error('email_or_phone')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    @if(session()->has('data'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('data')['code'] }}
                                        </div>
                                    @endif
                                    <div>
                                        <a class="forgot-link" href="{{ route('login') }}">تذكرت كلمة السر ؟</a>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">تأكيد</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    		
@endsection