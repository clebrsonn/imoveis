<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyHasDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_has_detail', function(Blueprint $table)
        {

            $table->unsignedInteger('property_id')->index();
            $table->unsignedInteger('detail_id')->index();
            $table->primary(['property_id','detail_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('property_has_detail');
    }
}
