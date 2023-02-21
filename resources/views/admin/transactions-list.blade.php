@extends('admin.layouts.app')

@section('content')
	<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">المعاملات</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
						<li class="breadcrumb-item active">المعاملات</li>
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
										<th>رقم الفاتورة</th>
										<th>كود العميل</th>
										<th>اسم العميل</th>
										<th>المبلغ الإجمالي</th>
										<th>الحالة</th>
										<th>إجراء</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($transactions as $transaction)
									<tr>
										<td><a href="invoice.html">#{{ $transaction->id }}</td>
										<td>#CL001</td>
										<td>
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/admin/img/profiles/user.png') }}" alt="User Image"></a>
												<a href="profile.html"> {{ $transaction->user_name }}</a>
											</h2>
										</td>
										<td>EGP{{ $transaction->money }}</td>
										<td>
											@if ($transaction->status == '1')
												<span class="badge badge-pill bg-success inv-badge">مدفوع</span>
											@else
											<span class="badge badge-pill bg-danger inv-badge"> ليس مدفوع </span>
											@endif
											
										</td>
										<td>
											<div class="actions">
												<a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
													<i class="fe fe-pencil"></i> تعديل
												</a>
												<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
													<i class="fe fe-trash"></i> حذف
												</a>
											</div>
										</td>
									</tr>
									@empty
									<tr>
										<td colspan="4">
											<div class="alert alert-warning">
												No Transactions
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
<!-- Edit Details Modal -->
<div class="modal fade" id="edit_invoice_report" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document" >
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">تعديل تقرير الفاتورة</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row form-row">
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label>رقم الفاتورة</label>
								<input type="text" class="form-control" value="#">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label>كود العميل</label>
								<input type="text" class="form-control" value="	#">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label>اسم العميل</label>
								<input type="text" class="form-control" value="#">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label>صورة العميل</label>
								<input type="file"  class="form-control">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label>المبلغ الإجمالي</label>
								<input type="text"  class="form-control" value="#">
							</div>
						</div>	
					</div>
					<button type="submit" class="btn btn-primary btn-block">حفظ التغييرات</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Details Modal -->

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
					<button type="button" class="btn btn-primary">حفظ</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Modal -->

</div>
<!-- /Main Wrapper -->
@endsection
			