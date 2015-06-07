<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleArrendadores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalles_arrendadores', function($table) {
			$table -> integer('arrendador_id') -> unsigned();
			$table -> foreign('arrendador_id') -> references('id') -> on('arrendadores');
			$table -> string('telefono');
			$table -> string('direccion');
			$table -> integer('calificacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalles_arrendadores');
	}

}
