<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleServicios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_servicios', function($table) {
			$table -> integer('servicio_id') -> unsigned();
			$table -> foreign('servicio_id') -> references('id') -> on('servicios');
			$table -> integer('casa_id') -> unsigned();
			$table -> foreign('casa_id') -> references('id') -> on('casa');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_servicios');
	}

}
