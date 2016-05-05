<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertiesHasBeneficiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties_has_beneficios', function(Blueprint $table)
		{
			$table->string('UUID_Property', 36)->index('fk_Prop_Cond_idx');
			$table->string('UUID_Beneficios', 36)->index('fk_Condominio_idx');
			$table->primary(['UUID_Property','UUID_Beneficios']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('properties_has_beneficios');
	}

}
