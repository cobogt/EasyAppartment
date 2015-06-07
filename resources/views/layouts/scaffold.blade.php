@extends('layouts.base')

@section('header')
<nav class="menu-navigation-round">
			<a href="/" @yield('selected_inicio')>Inicio</a>
			<a href="/buscar" @yield('selected_busqueda')>Busqueda</a>
			<a href="/faq" @yield('selected_faq')>FAQ's</a>
			<a href="/nosotros" @yield('selected_nosotros')>Nosotros</a>
			<a href="/registro" @yield('selected_registro')>Registro</a>
			<a href="/login" @yield('selected_login')>Login</a>
</nav>

@stop

@section('content-main')
	<div class="row">
		<div class="col-lg-2">
			<aside class="sidebar-left">
				<a class="company-logo" href="/"><img src="/img/logo.png" alt="" width="80%"></a>
				<div class="sidebar-links">
					<a class="link-blue" href="#"><i class="fa fa-search"></i>Buscar</a>
					<a class="link-red" href="#"><i class="fa fa-heart-o"></i>Mis favoritos</a>
					<a class="link-green" href="#"><i class="fa fa-map-marker"></i>Mapa extendido</a>
				</div>

			</aside>
		</div>
		<div class="col-lg-10">
			@yield('content')
		</div>
	</div>

@stop

@section('footer')
		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/easy.appartment" target="__blank"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="https://github.com/cobogt/EasyAppartment" target="__blank"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="/">Inicio</a>
					·
					<a href="/contacto">Contacto</a>
					·
					<a href="/login">Publicar casa</a>
					·
					<a href="/populares">Más populares</a>
					·
				</p>

				<p>Easy Appartament &copy; {{ date('Y') }}</p>
			</div>

		</footer>
@stop

@section('script-main')
	<script>

		$(function () {

			var links = $('.sidebar-links > a');
			links.on('click', function () {
				links.removeClass('selected');
				$(this).addClass('selected');
			})
		});
	</script>
@stop