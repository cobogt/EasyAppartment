<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRentas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rentas', function($table) {
			$table -> integer('usuario_id') -> unsigned();
			$table -> foreign('usuario_id') -> references('id') -> on('usuarios');
			$table -> integer('casa_id') -> unsigned();
			$table -> foreign('casa_id') -> references('id') -> on('casa');
			$table -> datetime('publicacion');
			$table -> datetime('vencimiento') -> nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rentas'):
	}

}
