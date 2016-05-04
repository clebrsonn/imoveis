<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalhesImoveisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalhes_imoveis', function(Blueprint $table)
		{
			$table->string('UUID_detalhes', 36)->primary();
			$table->string('Beneficios_Imovel', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalhes_imoveis');
	}

}
