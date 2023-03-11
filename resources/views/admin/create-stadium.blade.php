@extends('admin.layouts.app')

@section('content')
      
   <!-- Page Content --> 
   <div class="content mt-5"> 
    <div class="container-fluid"> 
     <div class="row"> 
      <div class="col-md-8 offset-md-2"> 
       
       <!-- Account Content --> 
       <div class="account-content mt-5"> 
        <div class="row align-items-center justify-content-center"> 
         
         <div class="col-md-12 col-lg-6 login-right"> 
          <div class="login-header"> 
           <h5><a href="{{ route('admin.dashboard') }}"> لوحه التحكم</a> / أدخال ملعب جديد </h5> 
          </div> 
           @if (session()->has('success'))
              <div class="alert alert-success">
                  {{ session()->get('success') }}
              </div>
           @endif
          <!-- Register Form --> 
          <form action="{{ route('admin.stadiums.store') }}" method='post' enctype="multipart/form-data">
            @csrf
           <div class="form-group form-focus"> 
            <input type="text" class="form-control floating" name='stadium_name'> 
            <label class="focus-label">أسم الملعب</label> 
            @error('stadium_name')
               <div class="alert alert-danger text-center">
                  {{ $message }}
               </div>
            @enderror
           </div> 
           <div class="form-group form-focus"> 
            <input type="text" class="form-control floating" name='address'> 
            <label class="focus-label"> موقع الملعب</label>
            @error('address')
               <div class="alert alert-danger text-center">
                  {{ $message }}
               </div>
            @enderror
           </div> 
            <div class="form-group form-focus"> 
            <input type="text" class="form-control floating" name='hour_price'> 
            <label class="focus-label"> تمن الساعه</label>
            @error('hour_price')
               <div class="alert alert-danger text-center">
                  {{ $message }}
               </div>
            @enderror
           </div>
           <div class="form-group form-focus"> 
            <input type="text" class="form-control floating" name='stadium_size'> 
            <label class="focus-label"> حجم الملعب </label>
            @error('stadium_size')
               <div class="alert alert-danger text-center">
                  {{ $message }}
               </div>
            @enderror
           </div>  
           <div class="form-group form-focus"> 
            <span>الصوره الملعب الاساسيه : </span>
            <input type="File" class="floating" name='main_image'>
            @error('main_image')
               <div class="alert alert-danger text-center">
                  {{ $message }}
               </div>
            @enderror
           </div> 
           <div class="form-group form-focus"> 
            <span>بعض الصور الفرعيه : </span>
            <input type="File" class="floating" name='images[]' multiple>
            @error('images[]')
               <div class="alert alert-danger text-center">
                  {{ $message }}
               </div>
            @enderror
           </div> 
            <div class="form-group form-focus"> 
            <textarea name="iframe" class="form-control"  cols="50"></textarea>
            <label class="focus-label"> iframe</label>   
            @error('iframe')
               <div class="alert alert-danger text-center">
                  {{ $message }}
               </div>
            @enderror
           </div> 
            <div class="form-group form-focus"> 
            <input type="text" class="form-control floating" name='google_link'> 
            <label class="focus-label">  google map link</label>
            @error('google_link')
               <div class="alert alert-danger text-center">
                  {{ $message }}
               </div>
            @enderror
           </div>
           <div class="form-group form-focus mb-5">
            <h6>services</h6>
            @foreach ($services as $service)
            <input type="checkbox" name="service[]" value="{{ $service->type }}">
            <span class="timeline-content">
               <img class="icon" width="50px" src="{{ asset('assets/registration/img/features') }}/{{ $service->type }}.png" alt="Feature">
            </span>
            @endforeach
            
           </div>
           <br>
           <button class="btn btn-primary btn-block btn-lg login-btn mt-5" type="submit">أضافه</button> 
           <div class="login-or"> 
            <span class="or-line"></span> 
           </div> 
          </form> 
          <!-- /Register Form --> 
           
         </div> 
        </div> 
       </div> 
       <!-- /Account Content --> 
         
      </div> 
     </div> 
 
    </div> 
 
   </div>   
   <!-- /Page Content --> 
    
    
@endsection

