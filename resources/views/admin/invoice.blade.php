@extends('admin.layouts.app')

@section('content')
				
	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">
		
			<!-- Invoice Container -->
			<div class="invoice-container">
				
				<div class="row">
					<div class="col-sm-6 m-b-20">
						<img alt="Logo" class="inv-logo img-fluid" src="{{ asset('assets/admin/img/main%20logo%203.png') }}"">
					</div>
					<div class="col-sm-6 m-b-20">
						<div class="invoice-details">
							<h3 class="text-uppercase">فاتورة {{ $invoice->code }}</h3>
							<ul class="list-unstyled mb-0">
								<li>Date: <span>{{ $invoice->created_at }}</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 m-b-20">
						<ul class="list-unstyled mb-0">
							<li>ملعب: {{ $invoice->stadium_name }}</li>
							<li>العنوان: {{ $invoice->address }}</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
						<h5><strong>فاتورة حجز</strong></h5>
						<ul class="list-unstyled mb-0">
							<li>اسم العميل: {{ $invoice->user_name }}</li>
							<li>البريد الإلكتروني:{{ $invoice->email }}</li>
							<li>رقم الهاتف:{{ $invoice->phone }}</li>
						</ul>
					</div>
					<div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
						<h6>تفاصيل الدفع</h6>
						<ul class="list-unstyled invoice-payment-details mb-0">
							<li><h5>إجمالي المبلغ:<span class="text-left">EGP{{ $invoice->money }}</span></h5></li>
							<li>طريقة الدفع:<span>cash</span></li>
							
						</ul>
					</div>
				</div>
				
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>اسم الملعب</th>
								<th class="text-nowrap">تكلفة الساعة</th>
								<th>عدد الساعات</th>
								<th>الإجمالي</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>{{ $invoice->stadium_name }}</td>
								<td>{{ $invoice->hour_price }}</td>
								<td>{{ $invoice->hours }}</td>
								<td>EGP{{ $invoice->money }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div>
					<div class="row invoice-payment">
						<div class="col-sm-7">
						</div>
						<div class="col-sm-5">
							<div class="m-b-20">
								<hr>
								<h6>Total due</h6>
								<div class="table-responsive no-border">
									<table class="table mb-0">
										<tbody>
											<tr>
												<th>المبلغ الإجمالي:</th>
												<td class="text-right text-primary"><h5>EGP{{ $invoice->money }}</h5></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="invoice-info">
						<h5>تعليمات</h5>
						<p class="text-muted mb-0">-------------------------------------------------------------------------
						----------------------------------------------------------------------------------------------------</p>
					</div>
				</div>
				
			</div>
			<!-- /Invoice Container -->
			
		</div>			
	</div>
	<!-- /Page Wrapper -->
@endsection

