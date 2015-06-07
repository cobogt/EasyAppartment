@extends('layouts.base')

@section('header')
@stop

@section('content-main')

	@yield('content')

@stop

@section('footer')
<div class="wrapper footer">
	<ul>
		<li class="links">
			<ul>
				<li><a href="#">Acerca de Nosotros</a></li>
				<li><a href="#">Soporte</a></li>
				<li><a href="#">Términos y Condiciones</a></li>
				<li><a href="#">Politícas</a></li>
				<li><a href="#">Contactanos</a></li>
			</ul>
		</li>

		<li class="links">
			<ul>
				<li><a href="#">Apartamentos</a></li>
				<li><a href="#">Casas Compartidas</a></li>
				<li><a href="#">Apartamentos de Lujo</a></li>
			</ul>
		</li>

		<li class="links">
			<ul>
				<li><a href="#">Celaya</a></li>
				<li><a href="#">León</a></li>
				<li><a href="#">Guanajuato</a></li>
				<li><a href="#">Busqueda personalizada</a></li>
			</ul>
		</li>

		<li class="about">
			<p>Somos una empresa creada a partir de nuestro proyecto en el evento HackBajio 2015</p>
			<ul>
				<li><a href="http://facebook.com/easyappartament" class="facebook" target="_blank"></a></li>
				<li><a href="http://twitter.com/easyappartament" class="twitter" target="_blank"></a></li>
			</ul>
		</li>
	</ul>
</div>
@stop