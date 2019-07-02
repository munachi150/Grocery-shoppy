<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddShippingChargeToGroceries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groceries', function (Blueprint $table) {
            $table->string('shippingCharge');
            $table->string('deletedPrice');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groceries', function (Blueprint $table) {
           $table->dropColum(['shippingCharge']);
        });
    }
}
