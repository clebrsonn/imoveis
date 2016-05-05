<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('properties', function(Blueprint $table)
		{
			$table->foreign('UUID_Address', 'fk_Prop_Address')->references('UUID_Address')->on('address')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUID_Deal_Type', 'fk_Prop_Deal')->references('UUID_Deal_Type')->on('deal_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUID_Group_Property', 'fk_Prop_Groups')->references('UUID_Group_Property')->on('properties_groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUID_Status_Property', 'fk_Prop_Status')->references('UUID_Status_Property')->on('properties_status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('UUID_Type_Property', 'fk_Prop_Types')->references('UUID_Type_Property')->on('properties_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('properties', function(Blueprint $table)
		{
			$table->dropForeign('fk_Prop_Address');
			$table->dropForeign('fk_Prop_Deal');
			$table->dropForeign('fk_Prop_Groups');
			$table->dropForeign('fk_Prop_Status');
			$table->dropForeign('fk_Prop_Types');
		});
	}

}
