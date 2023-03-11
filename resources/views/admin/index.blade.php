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
                        {{ session()->get('lockscreen') }}
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
                                    <h3>{{ $number_of_stadiums }}</h3>
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
                                    <h3>{{ $number_of_players }}</h3>
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
                                    <h3>{{ $number_of_matches }}</h3>
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
                                    <h3>{{ $whole_profits }} EGP</h3>
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
                                        @forelse ($stadiums as $stadium)
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{ route('admin.stadiums.show',$stadium->id) }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ url('storage/images/stadiums/'.$stadium->image) }}" alt="User Image"></a>
                                                    <a href="{{ route('admin.stadiums.show',$stadium->id) }}">{{ $stadium->name }}</a>
                                                </h2>
                                            </td>
                                            <td>{{ $stadium->size }}</td>
                                            <td>EGP {{ $stadium->reservations->sum('money') }}</td>
                                            <td>
                                                @php
                                                    $i=0;
                                                    while($i < floor($stadium->rates->avg('rate'))){
                                                        echo '<i class="fe fe-star text-warning"></i>';
                                                        $i++;
                                                    }
                                                    while($i < 5){
                                                        echo'<i class="fe fe-star-o text-secondary"></i>';
                                                        $i++;
                                                    }
                                                @endphp
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">
                                                <div class="alert alert-warning">
                                                    No Stadiums
                                                </div>
                                            </td>
                                        </tr>
                                        @endforelse
                                        
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
                                        @forelse ($players_info as $player)
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/admin/img/profiles/user.png') }}" alt="User Image"></a>
                                                    <a href="profile.html">{{ $player->name }}</a>
                                                </h2>
                                            </td>
                                            <td>{{ $player->phone }}</td>
                                            <td>{{ $player->email }}</td>
                                            <td class="text-right">EGP{{ $player->reservations->sum('money') }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">
                                                <div class="alert alert-warning">
                                                    No Clients
                                                </div>
                                            </td>
                                        </tr>
                                        @endforelse
                                        
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
                                        @forelse ($reservations as $reservation)
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{ route('admin.stadiums.show',$reservation->stadium_id) }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ url('storage/images/stadiums').'/'.$reservation->stadium_image }}" alt="User Image"></a>
                                                    <a href="{{ route('admin.stadiums.show',$reservation->stadium_id) }}">{{ $reservation->stadium_name }}</a>
                                                </h2>
                                            </td>
                                            <td>{{ $reservation->size }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/admin/img/profiles/user.png') }}" alt="User Image"></a>
                                                    <a href="profile.html">{{ $reservation->user_name }}</a>
                                                </h2>
                                            </td>
                                            @php
                                                $data = explode(' ',$reservation->date);
                                                $data[2] = date('H:i:s', strtotime($data[1]. '-'.$reservation->hours));
                                            @endphp
                                            <td>{{ $data[0] }} <span class="text-primary d-block">{{ $data[1] }}-{{ $data[2] }}</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" onclick="updateStatus({{ $reservation->id }})" id="status_{{ $reservation->id }}" class="check" {{ $reservation->status ? 'checked' : '' }}>
                                                    <label for="status_{{ $reservation->id }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                EGP{{ $reservation->money }}
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6">
                                                <div class="alert alert-warning">
                                                    No Matchs
                                                </div>
                                            </td>
                                        </tr>
                                        @endforelse
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