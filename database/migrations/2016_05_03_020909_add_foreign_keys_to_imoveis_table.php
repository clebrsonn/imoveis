<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToImoveisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('imoveis', function(Blueprint $table)
		{
			$table->foreign('uuid_Grupo_Imovel', 'fk_Grupo_Imoveis')->references('uuid_Grupo_Imovel')->on('grupo_imoveis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUId_Endereco', 'fk_Imoveis_Endereco')->references('UUId_Endereco')->on('enderecos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('uuid_Status_Imovel', 'fk_Imoveis_Status')->references('uuid_Status_Imovel')->on('status_imoveis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('uuId_Tipo_Imovel', 'fk_Imoveis_Tipo')->references('uuId_Tipo_Imovel')->on('tipo_imoveis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('uuid_Tipo_Negocio', 'fk_Imoveis_Tipo_Negocio')->references('uuid_Tipo_Negocio')->on('tipo_negocio')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('imoveis', function(Blueprint $table)
		{
			$table->dropForeign('fk_Grupo_Imoveis');
			$table->dropForeign('fk_Imoveis_Endereco');
			$table->dropForeign('fk_Imoveis_Status');
			$table->dropForeign('fk_Imoveis_Tipo');
			$table->dropForeign('fk_Imoveis_Tipo_Negocio');
		});
	}

}
