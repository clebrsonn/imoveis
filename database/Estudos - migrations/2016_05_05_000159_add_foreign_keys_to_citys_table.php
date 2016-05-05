<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCitysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('citys', function(Blueprint $table)
		{
			$table->foreign('Shorten_State', 'fk_States')->references('Shorten_State')->on('states')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('citys', function(Blueprint $table)
		{
			$table->dropForeign('fk_States');
		});
	}

}
