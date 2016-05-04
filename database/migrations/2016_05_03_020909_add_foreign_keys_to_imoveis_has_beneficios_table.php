<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToImoveisHasBeneficiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('imoveis_has_beneficios', function(Blueprint $table)
		{
			$table->foreign('UUID_Beneficios', 'fk_Condominio')->references('UUID_beneficios')->on('beneficios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUid_Imovel', 'fk_Condominios_has_Imoveis')->references('UUid_Imovel')->on('imoveis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('imoveis_has_beneficios', function(Blueprint $table)
		{
			$table->dropForeign('fk_Condominio');
			$table->dropForeign('fk_Condominios_has_Imoveis');
		});
	}

}
