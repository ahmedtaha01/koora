@extends('admin.layouts.app')


@section('content')
	<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">قائمة العملاء</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
						<li class="breadcrumb-item active">العملاء</li>
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
							<div class="table-responsive">
							<table class="datatable table table-hover table-center mb-0">
								<thead>
									<tr>
										<th>كود العميل</th>
										<th>اسم العميل</th>
										<th>البريد الألكتروني</th>
										<th>رقم الهاتف</th>
										<th>اخر زيارة</th>
										<th>مدفوع</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($clients as $client)
									<tr>
										<td>#{{ $client->code }}</td>
										<td>
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/admin/img/profiles/user.png') }}" alt="User Image"></a>
												<a href="profile.html">{{ $client->name }}</a>
											</h2>
										</td>
										<td>{{ $client->email }}</td>
										<td>{{ $client->phone }}</td>
										<td>{{ $client->updated_at }}</td>
										<td>EGP {{ $client->matchs->sum('money') }}</td>
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
			</div>
		</div>			
	</div>
		
</div>		
@endsection
	

	
		
