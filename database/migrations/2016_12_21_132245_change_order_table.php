<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('orders', function ($table) {
            $table->boolean('hasBeenCalled')->default(false);
            $table->string('pickUpLocation');
            $table->string('deliveryLocation');
            $table->string('clientObservations')->nullable();
            $table->string('adminObservations')->nullable();
            $table->dropColumn('country');
            $table->dropColumn('county');
            $table->dropColumn('city');
            $table->dropColumn('address');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
