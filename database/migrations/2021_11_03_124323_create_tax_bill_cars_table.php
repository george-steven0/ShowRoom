<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxBillCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_bill_cars', function (Blueprint $table) {
            $table->id();
            $table->string('sellBillId');
            $table->string('date');
            $table->string('clientName');
            $table->string('address');
            $table->string('totalPrice');
            $table->string('chase');
            $table->string('motor');
            $table->string('model');
            $table->string('brand');
            $table->string('carPrice');
            $table->string('addedMoney');
            $table->string('developFee');
            $table->string('insurance');
            $table->string('insuranceFee');
            $table->string('billTotal');
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
        Schema::dropIfExists('tax_bill_cars');
    }
}
