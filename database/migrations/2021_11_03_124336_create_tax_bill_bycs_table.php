<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxBillBycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_bill_bycs', function (Blueprint $table) {
            $table->id();
            $table->string('sellBillId');
            $table->string('date');
            $table->string('clientName');
            $table->string('address');
            $table->string('totalPrice');
            $table->string('count');
            $table->string('carPrice');
            $table->string('brand');
            $table->string('model');
            $table->string('chase');
            $table->string('motor');
            $table->string('price');
            $table->string('addedMoney');
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
        Schema::dropIfExists('tax_bill_bycs');
    }
}
