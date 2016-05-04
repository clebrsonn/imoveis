<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table)
		{
			$table->string('UUId_Endereco', 36)->primary();
			$table->string('Bairro', 45)->nullable();
			$table->string('Logradouro', 45)->nullable();
			$table->string('CEP', 8)->nullable();
			$table->string('UUid_Cidades', 36)->index('fk_Cidades_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enderecos');
	}

}
