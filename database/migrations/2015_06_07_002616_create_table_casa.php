<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCasa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('casa', function($table) {
			$table -> increments('id');
			$table -> integer('arrendador_id') -> unsigned();
			$table -> foreign('arrendador_id') -> references('id') -> on('arrendadores');
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
		Schema::drop('casa');
	}

}
