<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>横滨</title>

		<!-- Bootstrap CSS -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/portal/css/app.css" rel="stylesheet">

		<link href="/cdn/font-awesome.min.css" rel="stylesheet" type="text/css" />
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		@include('portal.partails.header')
		
		@yield('content')

		@include('portal.partails.footer')

		<!-- jQuery -->
		<script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>