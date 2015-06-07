<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/global.css">
	<link rel="stylesheet" href="/css/slicknav.min.css">
	@yield('css')
	@yield('style')
	<title>Easy Appartment - @yield('title')</title>
</head>
<body>
@yield('header')
@yield('content-main')
@yield('footer')
</body>
<script type="text/javascript" src="/js/jquery_214.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
@yield('script-main')
@yield('js')
@yield('script')
</html>