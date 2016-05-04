<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalhesHasImoveisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalhes_has_imoveis', function(Blueprint $table)
		{
			$table->string('UUID_detalhes', 36)->index('fk_Detalhes_idx');
			$table->string('UUid_Imovel', 36)->index('fk_Imoveis_idx');
			$table->primary(['UUID_detalhes','UUid_Imovel']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalhes_has_imoveis');
	}

}
