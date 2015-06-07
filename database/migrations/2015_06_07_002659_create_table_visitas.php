<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVisitas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visitas', function($table) {
			$table -> integer('usuario_id') -> unsigned();
			$table -> foreign('usuario_id') -> references('id') -> on('usuarios');
			$table -> integer('casa_id') -> unsigned();
			$table -> foreign('casa_id') -> references('id') -> on('casas');
			$table -> datetime('fecha_visita');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('visitas');
	}

}
