<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetHasPropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('det_has_properties', function(Blueprint $table)
		{
			$table->foreign('UUID_details', 'fk_Det')->references('UUID_details')->on('det_properties')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUID_Property', 'fk_Properties')->references('UUID_Property')->on('properties')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('det_has_properties', function(Blueprint $table)
		{
			$table->dropForeign('fk_Det');
			$table->dropForeign('fk_Properties');
		});
	}

}
