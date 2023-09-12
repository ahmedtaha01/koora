<!DOCTYPE html> 
<html lang="ar">
	
<head>
	@include('user.includes.header')
</head>
	<body class="account-page">
	@include('user.includes.navbar')
	@yield('content')
   
			
	@include('user.includes.footer')	
	</body>
</html>