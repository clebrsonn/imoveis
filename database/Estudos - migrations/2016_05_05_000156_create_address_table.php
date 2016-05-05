<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address', function(Blueprint $table)
		{
			$table->string('UUID_Address', 36)->primary();
			$table->string('District', 45)->nullable();
			$table->string('Street', 45)->nullable();
			$table->string('CEP', 8)->nullable();
			$table->string('UUID_City', 36)->index('fk_Citys_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('address');
	}

}
