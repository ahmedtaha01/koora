@extends('admin.layouts.app')

@section('content')
	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">
		
			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-title">المواعيد المحجوزة</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">لوحة التحكم</a></li>
							<li class="breadcrumb-item active">المواعيد المحجوزة</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			<div class="row">
				<div class="col-md-12">
				
					<!-- Recent Orders -->
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="datatable table table-hover table-center mb-0">
										<thead>
										<tr>
											<th>رقم الفاتورة</th>
											<th>الملعب</th>
											<th>العميل</th>
											<th>موعد الحجز</th>
											<th>الساعات</th>
											<th>الحالة</th>
											<th>المبلغ</th>
											<th>إجراء</th>
										</tr>
									</thead>
									<tbody>
										@forelse ($reservations as $reservation)
										<tr>
											<td><a href="{{ route('admin.reservations.show',$reservation->id) }}">{{ $reservation->match_code }}</td>
											
											<td>
												<h2 class="table-avatar">
													<a href="{{ route('admin.stadiums.show',$reservation->stadium_id) }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/Admin/img/profiles/user.png') }}" alt="User Image"></a>
													<a href="{{ route('admin.stadiums.show',$reservation->stadium_id) }}">{{ $reservation->stadium_name }}</a>
												</h2>
											</td>
											
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('assets/Admin/img/profiles/user.png') }}" alt="User Image"></a>
													<a href="profile.html">{{ $reservation->user_name }}</a>
												</h2>
											</td>
											@php
                                                $data = explode(' ',$reservation->date);
                                                $data[2] = date('H:i:s', strtotime($data[1]. '-'.$reservation->hours));
                                            @endphp
                                            <td>{{ $data[0] }} <span class="text-primary d-block">{{ $data[1] }}-{{ $data[2] }}</span></td>
											<td>{{ $reservation->hours }}</td>
											<td>
												<div class="status-toggle">
													<input type="checkbox" onclick="updateStatus({{ $reservation->id }})"  id="status_{{ $reservation->id }}" class="check" {{ $reservation->status ? 'checked' : '' }}>
													<label for="status_{{ $reservation->id }}" class="checktoggle">checkbox</label>
												</div>		
											</td>
											<td>
												EGP{{ $reservation->money }}
											</td>
											<td>
												<div class="actions">
													{{-- <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
														<i class="fe fe-pencil"></i> تعديل
													</a> --}}
													<a class="btn btn-sm bg-danger-light" onclick="sendTransactionId({{ $reservation->id }})" data-toggle="modal" href="#delete_modal">
														<i class="fe fe-trash"></i> حذف
													</a>
												</div>
											</td>
										</tr>
										@empty
										<tr>
                                            <td colspan="6">
                                                <div class="alert alert-warning">
                                                    No reservations
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
			<div class="modal-body">
				<div class="form-content p-2">
					<h4 class="modal-title">حذف</h4>
					<p class="mb-4">هل أنت متأكد من أنك تريد الحذف؟</p>
					<input hidden id='transaction_id' name="transaction_id">
					<button type="button" class="btn btn-primary" onclick="deleteTransaction()">حفظ</button>
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
			
			
