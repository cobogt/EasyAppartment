@extends('layouts.base')

@section('header')
<header class="header-basic-light">
	<div class="header-limiter">

		<h1><a href="/"><img src="/img/logo.png" alt="" style="max-height: 50px;"></a></h1>
		<nav>
			<a href="/" @yield('selected_inicio')>Inicio</a>
			<a href="/buscar" @yield('selected_busqueda')>Busqueda</a>
			<a href="/faq" @yield('selected_faq')>FAQ's</a>
			<a href="/nosotros" @yield('selected_nosotros')>Nosotros</a>
			<a href="/registro" @yield('selected_registro')>Registro</a>
			<a href="/login" @yield('selected_login')>Login</a>
		</nav>
	</div>
</header>
@stop

@section('content-main')
	<div class="row">
		<div class="col-lg-2">
			
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
					<a href="#">Inicio</a>
					·
					<a href="#">Contacto</a>
					·
					<a href="#">Publicar casa en renta</a>
					·
					<a href="#">Favoritos</a>
					·
					<a href="#">Lugares</a>
					·
				</p>

				<p>Easy Appartament &copy; {{ date('Y') }}</p>
			</div>

		</footer>
@stop