@extends('admin.layouts.app')


@section('content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">قائمة الملاعب</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
								<li class="breadcrumb-item active">الملاعب</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="datatable table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>الملعب</th>
												<th>المساحة</th>
												<th>العنوان</th>
												<th>تاريخ الانضمام</th>
												<th>سعر الساعه</th>
												<th>الأرباح</th>
												<th>التقييم</th>
											</tr>
										</thead>
										<tbody>
											@forelse ($stadiums as $stadium)
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="{{ route('admin.stadiums.show',$stadium->id) }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ url('storage/images/stadiums').'/'.$stadium->image }}" alt="User Image"></a>
														<a href="{{ route('admin.stadiums.show',$stadium->id) }}">{{ $stadium->name }}</a>
													</h2>
												</td>
												<td>{{ $stadium->size }}</td>

												<td>{{ $stadium->address }}</td>
												
												<td>{{ $stadium->join_date }} </td>

												<td>{{ $stadium->hour_price }}</td>
												
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
												<td colspan="7">
													<div class="alert alert-warning text-center">
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
					</div>			
				</div>
				
			</div>			
		</div>
		<!-- /Page Wrapper -->
	

@endsection

