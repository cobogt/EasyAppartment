<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePagos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagos', function($table) {
			$table -> increments('id');
			$table -> float('monto');
			$table -> float('impuestos') -> default(0);
			$table -> string('concepto');
			$table -> string('medio_pago');
			$table -> string('codigo_autorizacion') -> nullable();
			$table -> datetime('fecha');
			$table -> string('extra') -> default('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagos');
	}

}
