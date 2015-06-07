<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function($table) {
			$table -> increments('id');
			$table -> string('nombre');
			$table -> string('password');
			$table -> integer('tipo_usuario');
			$table -> integer('privilegios');
			$table -> datetime('registro');
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
		Schema::drop('usuarios');
	}

}
