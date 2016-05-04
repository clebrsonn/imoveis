<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImoveisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imoveis', function(Blueprint $table)
		{
			$table->string('UUid_Imovel', 36)->unique('UUid_Imovel_UNIQUE');
			$table->integer('Numero_Quartos');
			$table->integer('Numero_Suites')->nullable();
			$table->decimal('Area_Util', 20);
			$table->integer('Vagas_Garagem')->nullable();
			$table->decimal('Valor', 20)->nullable();
			$table->integer('Numero_Banheiros')->nullable();
			$table->decimal('IPTU_Ano', 20)->nullable();
			$table->decimal('Condominio_Mes', 20)->nullable();
			$table->string('Acesso', 45)->nullable();
			$table->string('Descricao_Imovel', 2000);
			$table->string('UUId_Endereco', 36)->index('fk_Imoveis_Endereco_idx');
			$table->string('uuid_Tipo_Negocio', 36)->index('fk_Imoveis_Tipo_Negocio_idx');
			$table->string('uuId_Tipo_Imovel', 36)->index('fk_Tipo_Imoveis_idx');
			$table->string('uuid_Grupo_Imovel', 36)->index('fk_Imoveis_Grupo_idx');
			$table->string('uuid_Status_Imovel', 36)->index('fk_Imoveis_Status_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imoveis');
	}

}
