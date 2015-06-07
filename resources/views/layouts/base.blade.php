<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.css">
	@yield('css')
	@yield('style')
	<title>Easy Appartment - @yield('title')</title>
</head>
<body>
@yield('header')
@yield('content-main')
<footer>
@yield('footer')
</footer>
</body>
<script type="text/javascript" src="/js/boostrap.min.js"></script>
<script type="text/javascript" src="/js/jquery_214.min.js"></script>
@yield('js')
@yield('script')
</html>