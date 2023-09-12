<!DOCTYPE html> 
<html lang="ar">
	
<head>
	@include('admin.includes.header')
</head>
	<body class="account-page">
        @include('admin.includes.navbar')
    
        @include('admin.includes.sidebar')

	@yield('content')
   
			
	@include('admin.includes.footer')	
	</body>
</html>