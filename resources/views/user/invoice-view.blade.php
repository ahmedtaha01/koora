@extends('user.layouts.app')

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('user.index') }}">الرئيسية</a></li>
						<li class="breadcrumb-item active" aria-current="page">الفاتورة</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">الفاتورة</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<br>
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="invoice-content">
					<div class="invoice-item">
						<div class="row">
							<div class="col-md-6">
								<div class="invoice-logo">
									<img src="{{ asset('assets/registration/img/main%20logo5.png') }}" alt="logo">
								</div>
							</div>
							<div class="col-md-6">
								<p class="invoice-detailss">
									<strong>رقم الفاتورة :</strong> {{ $reservation->code }} <br>
									<strong>التاريخ :</strong> {{ $reservation->date }}
								</p>
							</div>
						</div>
					</div>
					
					<!-- Invoice Item -->
					<div class="invoice-item">
						<div class="row">
							<div class="col-md-6">
								<div class="invoice-info">
									<strong class="customer-text">فاتورة من: </strong>
									<p class="invoice-details invoice-details-two">
										<li>ملعب :  {{ $reservation->stadium->name }} </li>
											<li>العنوان : {{ $reservation->stadium->address }}</li>
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="invoice-info invoice-info2">
									<strong class="customer-text">فاتورة ل:</strong>
									<p class="invoice-details">
										<li>اسم العميل :  {{ $reservation->user->name }}</li>
										<li>البريد الإلكتروني : {{ $reservation->user->email }}</li>
										<li>رقم الهاتف : {{ $reservation->user->phone }}</li>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /Invoice Item -->

					<!-- Invoice Item -->
					<div class="invoice-item invoice-table-wrap">
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="invoice-table table table-bordered">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th class="text-center">اسم الملعب</th>
												<th class="text-center">المساحة</th>
												<th class="text-center">تكلفة الساعة</th>
												<th class="text-center">عدد الساعات</th>
												<th class="text-center">وقت الحجز</th>
												<th class="text-center">الإجمالي</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">1</td>
												<td class="text-center">  {{ $reservation->stadium->name }}</td>
												<td class="text-center">{{ $reservation->stadium->size }}</td>
												<td class="text-center">EGP {{ $reservation->money }}</td>
												<td class="text-center">{{ $reservation->hours }}</td>
												@php
                                                	$data = explode(' ',$reservation->date);
                                                	$data[2] = date('H:i:s', strtotime($data[1]. '-'.$reservation->hours));
                                            	@endphp
                                            	
												<td class="text-center">{{ $data[1] }} : {{ $data[2] }} </td>
												<td class="text-center">EGP {{ $reservation->money }}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-md-6 col-xl-4 ml-auto">
								<div class="table-responsive">
									<table class="invoice-table-two table">
										<tbody>
										<tr>
											<th>إجمالي المبلغ :</th>
											<td><span>EGP {{ $reservation->money }}</span></td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /Invoice Item -->
				</div>
			</div>
		</div>
	</div>
@endsection
			
				

   
			
		
		   
