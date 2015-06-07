<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArrendadores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('arrendadores', function($table) {
			$table -> increments('id');
			$table -> string('nombre');
			$table -> datetime('fecha_registro');
			$table -> datetime('ultima_conexion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('arrendadores');
	}

}
