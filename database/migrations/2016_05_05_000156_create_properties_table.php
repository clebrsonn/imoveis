<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties', function(Blueprint $table)
		{
			$table->string('UUID_Property', 36)->unique('UUID_Property_UNIQUE');
			$table->integer('Number_Bedrooms');
			$table->integer('Number_Suites')->nullable();
			$table->decimal('Area_Util', 20);
			$table->integer('Spaces_Garage')->nullable();
			$table->decimal('Value', 20)->nullable();
			$table->integer('Number_Banheiros')->nullable();
			$table->decimal('IPTU_Year', 20)->nullable();
			$table->decimal('Condominio_Mes', 20)->nullable();
			$table->string('Acess', 45)->nullable();
			$table->string('Desc_Property', 2000);
			$table->string('UUID_Address', 36)->index('fk_Prop_Address_idx');
			$table->string('UUID_Deal_Type', 36)->index('fk_Deal__idx');
			$table->string('UUID_Type_Property', 36)->index('fk_Prop_Types_idx');
			$table->string('UUID_Group_Property', 36)->index('fk_Properties_Groups_idx');
			$table->string('UUID_Status_Property', 36)->index('fk_Prop_Status_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('properties');
	}

}
