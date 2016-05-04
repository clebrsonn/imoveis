<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImoveisHasBeneficiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imoveis_has_beneficios', function(Blueprint $table)
		{
			$table->string('UUid_Imovel', 36)->index('fk_Imoveis_Condominio_idx');
			$table->string('UUID_Beneficios', 36)->index('fk_Condominio_idx');
			$table->primary(['UUid_Imovel','UUID_Beneficios']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imoveis_has_beneficios');
	}

}
