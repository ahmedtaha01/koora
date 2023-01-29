@extends('admin.layouts.app')

@section('content')
<div class="main-wrapper">
		
    
    
    <!-- Page Wrapper -->
    <div class="page-wrapper">
    
        <div class="content container-fluid">
            
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">أهلا بك!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">لوحة التحكم</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-primary border-primary">
                                    <i class="fa fa-futbol-o"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>168</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">الملاعب</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-success">
                                    <i class="fe fe-users"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>487</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                
                                <h6 class="text-muted">العملاء</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-danger border-danger">
                                    <i class="fe fe-layout"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>50</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                
                                <h6 class="text-muted">المواعيد المحجوزة</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-warning border-warning">
                                    <i class="fe fe-money"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>5000 EGP</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                
                                <h6 class="text-muted">الأرباح</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                
                    <!-- Sales Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">الأرباح</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisArea"></div>
                        </div>
                    </div>
                    <!-- /Sales Chart -->
                    
                </div>
                <div class="col-md-12 col-lg-6">
                
                    <!-- Invoice Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">الاحصائيات</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisLine"></div>
                        </div>
                    </div>
                    <!-- /Invoice Chart -->
                    
                </div>	
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">
                
                    <!-- Recent Orders -->
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">قائمة الملاعب</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>أسم الملعب</th>
                                            <th>المساحة</th>
                                            <th>الأرباح</th>
                                            <th>المراجعات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 1</a>
                                                </h2>
                                            </td>
                                            <td>5x5</td>
                                            <td>EGP3200.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 2</a>
                                                </h2>
                                            </td>
                                            <td>5x5</td>
                                            <td>EGP2000.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 3</a>
                                                </h2>
                                            </td>
                                            <td>7x7</td>
                                            <td>EGP4000.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 4</a>
                                                </h2>
                                            </td>
                                            <td>5x5</td>
                                            <td>EGP5000.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 5</a>
                                                </h2>
                                            </td>
                                            <td>7x7</td>
                                            <td>EGP6500.00</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->
                    
                </div>
                <div class="col-md-6 d-flex">
                
                    <!-- Feed Activity -->
                    <div class="card  card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">قائمة العملاء</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>													
                                            <th>اسم العميل</th>
                                            <th>رقم الهاتف</th>
                                            <th>البريد الألكتروني</th>
                                            <th>مدفوع</th>													
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 1</a>
                                                </h2>
                                            </td>
                                            <td>01009547862</td>
                                            <td>user@user.com</td>
                                            <td class="text-right">EGP300.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 2 </a>
                                                </h2>
                                            </td>
                                            <td>01007861590</td>
                                            <td>user@user.com</td>
                                            <td class="text-right">EGP150.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 3</a>
                                                </h2>
                                            </td>
                                            <td>01027539842</td>
                                            <td>user@user.com</td>
                                            <td class="text-right">EGP600.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 4</a>
                                                </h2>
                                            </td>
                                            <td>01554719543</td>
                                            <td>user@user.com</td>
                                            <td class="text-right">EGP450.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 5</a>
                                                </h2>
                                            </td>
                                            <td>01027578264</td>
                                            <td>user@user.com</td>
                                            <td class="text-right">EGP350.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Feed Activity -->
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                
                    <!-- Recent Orders -->
                    <div class="card card-table">
                        <div class="card-header">
                            <h4 class="card-title">قائمة المواعيد</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>الملعب</th>
                                            <th>المساحة</th>
                                            <th>العميل</th>
                                            <th>موعد الحجز</th>
                                            <th>الحالة</th>
                                            <th>المبلغ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 5</a>
                                                </h2>
                                            </td>
                                            <td>5x5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 2 </a>
                                                </h2>
                                            </td>
                                            <td>15 Dec 2021 <span class="text-primary d-block">11.00 AM - 01.00 AM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_1" class="check" checked>
                                                    <label for="status_1" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                EGP140.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 4</a>
                                                </h2>
                                            </td>
                                            <td>5x5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 5 </a>
                                                </h2>
                                            </td>
                                            
                                            <td>5 Nov 2021 <span class="text-primary d-block">12.00 AM - 02.00 AM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_2" class="check">
                                                    <label for="status_2" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                EGP300.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 1</a>
                                                </h2>
                                            </td>
                                            <td>7x7</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 3</a>
                                                </h2>
                                            </td>
                                            <td>30 Nov 2021 <span class="text-primary d-block">05.00 PM - 07.00 PM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_3" class="check" checked>
                                                    <label for="status_3" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                EGP150.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 2</a>
                                                </h2>
                                            </td>
                                            <td>5x5</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 4</a>
                                                </h2>
                                            </td>
                                            <td>1 Jan 2022<span class="text-primary d-block">10.00 PM - 12.00 PM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_4" class="check" checked>
                                                    <label for="status_4" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                EGP200.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">ملعب 5</a>
                                                </h2>
                                            </td>
                                            <td>7x7</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/admin/profiles/user.png" alt="User Image"></a>
                                                    <a href="profile.html">عميل 1</a>
                                                </h2>
                                            </td>
                                            
                                            <td>20 Dec 2021<span class="text-primary d-block">08.00 PM - 09.30 PM</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_5" class="check">
                                                    <label for="status_5" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                EGP200.00
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->
                    
                </div>
            </div>
            
        </div>			
    </div>
    <!-- /Page Wrapper -->

</div>
@endsection