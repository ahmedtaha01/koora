@extends('admin.layouts.app')

@section('content')
	<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">المراجعات</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
						<li class="breadcrumb-item active">المراجعات</li>
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
										<th>اسم العميل</th>
										<th>اسم الملعب</th>
										
										<th>الوصف</th>
										<th>التاريخ</th>
										<th>إجراء</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($reviews as $review)
									<tr>
										<td>
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ $review->user->image ? url('storage/images/users/'.$review->user->image): asset('assets/admin/img/profiles/user.png') }}" alt="User Image"></a>
												<a href="profile.html">{{ $review->user->name }}</a>
											</h2>
										</td>
										<td>
											<h2 class="table-avatar">
												<a href="{{ route('admin.stadiums.show',$review->stadium_id) }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ url('storage/images/stadiums').'/'.$review->stadium->image }}" alt="User Image"></a>
												<a href="{{ route('admin.stadiums.show',$review->stadium_id) }}">{{ $review->stadium->name }}</a>
											</h2>
										</td>
										
										<td>
											{{ $review->comment }}
										</td>
										@php
											$data = explode(' ', $review->created_at)
										@endphp
											<td>{{ $data[0] }} <br><small>{{ $data[1] }}</small></td>
										<td class="text-right">
											
										<div class="actions">
											<a class="btn btn-sm bg-danger-light" onclick="deleteReview({{ $review->id }})" data-toggle="modal" href="#delete_modal">
												<i class="fe fe-trash"></i> حذف
											</a>
										</div>
											
										</td>
									</tr>
									@empty
									<tr>
										<td colspan="5">
											<div class="alert alert-warning text-center">
												No Reviews
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

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document" >
		<div class="modal-content">
		<!--	<div class="modal-header">
				<h5 class="modal-title">Delete</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>-->
			<div class="modal-body">
				<div class="form-content p-2">
						<h4 class="modal-title">حذف</h4>
						<p class="mb-4">هل أنت متأكد من أنك تريد الحذف؟</p>
						<input id="review_id" name="id" hidden>
						<button type="submit" class="btn btn-primary" onclick="deleteReview2()">حذف</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
			