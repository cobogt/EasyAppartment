<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSuscripciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suscripciones', function($table) {
			$table -> increments('id');
			$table -> integer('tipo_suscripcion_id') -> unsigned();
			$table -> foreign('tipo_suscripcion_id') -> references('id') -> on('tipo_suscripcion');
			$table -> integer('pago_id') -> unsigned() -> nullable();
			$table -> foreign('pago_id') -> references('id') -> on('pagos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	 	public function down()
	{
		Schema::drop('suscripciones');
	}

}
