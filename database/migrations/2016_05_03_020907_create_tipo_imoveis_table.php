<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoImoveisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_imoveis', function(Blueprint $table)
		{
			$table->string('uuId_Tipo_Imovel', 36)->primary();
			$table->string('Tipo_Imovel', 45)->unique('Tipo_Imovel_UNIQUE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_imoveis');
	}

}
