<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyHasBenefitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_has_benefit', function(Blueprint $table)
        {

            $table->unsignedInteger('property_id')->index();
            $table->unsignedInteger('benefit_id')->index();
            $table->primary(['property_id','benefit_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('property_has_benefit');
    }
}
