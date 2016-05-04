<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetalhesHasImoveisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('detalhes_has_imoveis', function(Blueprint $table)
		{
			$table->foreign('UUID_detalhes', 'fk_Detalhes')->references('UUID_detalhes')->on('detalhes_imoveis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUid_Imovel', 'fk_Imoveis')->references('UUid_Imovel')->on('imoveis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('detalhes_has_imoveis', function(Blueprint $table)
		{
			$table->dropForeign('fk_Detalhes');
			$table->dropForeign('fk_Imoveis');
		});
	}

}
