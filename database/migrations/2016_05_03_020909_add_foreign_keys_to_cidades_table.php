<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cidades', function(Blueprint $table)
		{
			$table->foreign('Sigla_Estados', 'fk_Estados')->references('Sigla_Estados')->on('estados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cidades', function(Blueprint $table)
		{
			$table->dropForeign('fk_Estados');
		});
	}

}
