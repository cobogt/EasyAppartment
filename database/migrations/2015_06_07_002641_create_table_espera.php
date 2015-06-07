<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEspera extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('espera', function($table) {
			$table -> integer('usuario_id') -> unsigned();
			$table -> foriegn('usuario_id') -> references('id') -> on('usuarios');
			$table -> integer('casa_id') -> unsigned();
			$table -> foriegn('casa_id') -> references('id') -> on('casa');
			$table -> string('estado');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('espera');
	}

}
