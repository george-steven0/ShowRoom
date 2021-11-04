<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellBillBycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_bill_bycs', function (Blueprint $table) {
            $table->id();
            $table->string('carNumber')->nullable();
            $table->string('trafficManger')->nullable();
            $table->string('type')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('chase')->nullable();
            $table->string('motor')->nullable();
            $table->string('liters')->nullable();
            $table->string('color')->nullable();
            $table->string('shape')->nullable();
            $table->string('passengerNum')->nullable();
            $table->string('weight')->nullable();
            $table->string('load')->nullable();
            $table->string('fuel')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('address')->nullable();
            $table->string('idNumber')->nullable();
            $table->string('comericalRecord')->nullable();
            $table->string('installments')->nullable();
            $table->string('date')->nullable();
            $table->string('serialNum')->nullable();

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
        Schema::dropIfExists('sell_bill_bycs');
    }
}
