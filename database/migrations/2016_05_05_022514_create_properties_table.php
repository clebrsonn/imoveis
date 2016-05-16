<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('number_bedrooms');
            $table->integer('number_suites')->nullable();
            $table->decimal('area_util', 20);
            $table->integer('spaces_garage')->nullable();
            $table->decimal('value', 20)->nullable();
            $table->integer('number_wc')->nullable();
            $table->decimal('iptu_Year', 20)->nullable();
            $table->decimal('cond_month', 20)->nullable();
            $table->string('access', 45)->nullable();
            $table->string('property_description', 2000);

            $table->timestamps();

            //fk
            $table->unsignedInteger('address_id');


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
