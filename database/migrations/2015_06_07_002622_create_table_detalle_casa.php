<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleCasa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_casa', function($table) {
			$table -> increments('id');
			$table -> string('ciudad');
			$table -> string('estado');
			$table -> string('domicilio');
			$table -> string('palabras_clave', 400) -> nullable();
			$table -> float('precio');
			$table -> integer('latitud');
			$table -> integer('longitud');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_casa');
	}

}
