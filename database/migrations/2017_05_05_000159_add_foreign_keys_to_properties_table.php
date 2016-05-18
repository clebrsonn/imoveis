<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropertiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('cities', function (Blueprint $table) {

            $table->foreign('state_id')->references('id')->on('states');
        });

        Schema::table('addresses', function (Blueprint $table) {

            $table->foreign('city_id')->references('id')->on('cities');
        });

        Schema::table('properties', function (Blueprint $table) {


//            $table->foreign('address_id')->references('id')->on('address');
//            $table->foreign('Deal_Type')->references('UUID_Deal_Type')->on('deal_types');
//            $table->foreign('group_id', 'fk_Prop_Groups')->references('UUID_Group_Property')->on('properties_groups');
//            $table->foreign('UUID_Status_Property', 'fk_Prop_Status')->references('UUID_Status_Property')->on('properties_status');
//            $table->foreign('UUID_Type_Property', 'fk_Prop_Types')->references('UUID_Type_Property')->on('properties_types');
        });


        Schema::table('property_has_detail', function (Blueprint $table) {
            $table->foreign('detail_id')->references('id')->on('prop_details');
            $table->foreign('property_id')->references('id')->on('properties');

        });

        Schema::table('property_has_benefit', function (Blueprint $table) {
            $table->foreign('benefit_id')->references('id')->on('benefits');
            $table->foreign('property_id')->references('id')->on('properties');

        });


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('properties', function(Blueprint $table)
//        {
////            $table->dropForeign('fk_Prop_Address');
////            $table->dropForeign('fk_Prop_Deal');
////            $table->dropForeign('fk_Prop_Groups');
////            $table->dropForeign('fk_Prop_Status');
////            $table->dropForeign('fk_Prop_Types');
//        });
    }

}
