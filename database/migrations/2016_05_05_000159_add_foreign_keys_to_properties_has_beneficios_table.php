<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertiesHasBeneficiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('properties_has_beneficios', function(Blueprint $table)
		{
			$table->foreign('UUID_Property', 'fk_Cond_has_Prop')->references('UUID_Property')->on('properties')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUID_Beneficios', 'fk_beneficios')->references('UUID_beneficios')->on('beneficios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('properties_has_beneficios', function(Blueprint $table)
		{
			$table->dropForeign('fk_Cond_has_Prop');
			$table->dropForeign('fk_beneficios');
		});
	}

}
