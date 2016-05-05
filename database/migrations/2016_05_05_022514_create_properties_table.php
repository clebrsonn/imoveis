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

            $table->timestamps();


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
