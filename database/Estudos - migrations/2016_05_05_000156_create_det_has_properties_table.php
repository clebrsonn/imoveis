<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetHasPropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('det_has_properties', function(Blueprint $table)
		{
			$table->string('UUID_details', 36)->index('fk_Det_idx');
			$table->string('UUID_Property', 36)->index('fk_Properties_idx');
			$table->primary(['UUID_details','UUID_Property']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('det_has_properties');
	}

}
