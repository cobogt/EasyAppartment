<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePublicaciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicaciones', function($table) {
			$table -> increments('id');
			$table -> integer('casa_id') -> unsigned();
			$table -> foreign('casa_id') -> references('id') -> on('casa');
			$table -> integer('usuario_id') -> unsigned();
			$table -> foreign('usuario_id') -> references('id') -> on('usuarios');
			$table -> datetime('fecha_creacion');
			$table -> datetime('fecha_caducidad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('publicaciones');
	}

}
