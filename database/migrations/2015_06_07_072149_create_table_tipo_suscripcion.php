<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTipoSuscripcion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_suscripcion', function($table) {
			$table -> increments('id');
			$table -> string('descripcion');
			$table -> integer('duracion');
			$table -> integer('cliente_id') -> unsigned();
			$table -> foreign('usuario_id') -> references('id') -> on('usuarios');
			$table -> float('precio_unitario') -> default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_suscripcion');
	}

}
