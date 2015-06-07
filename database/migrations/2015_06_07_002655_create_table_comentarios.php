<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentarios', function($table) {
			$table -> integer('usuario_id') -> unsigned();
			$table -> foreign('usuario_id') -> references('id') -> on('usuarios');
			$table -> integer('casa_id') -> unsigned();
			$table -> foreign('casa_id') -> references('id') -> on('casas');
			$table -> string('contenido') -> nullable();
			$table -> string('remote_host');
			$table -> integer('calif_pos') -> default(0);
			$table -> integer('calif_neg') -> default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comentarios');
	}

}
