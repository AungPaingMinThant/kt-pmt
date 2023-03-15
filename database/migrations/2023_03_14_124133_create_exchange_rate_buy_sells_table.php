<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeRateBuySellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rate_buy_sells', function (Blueprint $table) {
            $table->id();
            $table->string('USD_buying');
            $table->string('USD_selling');
            $table->string('EUR_buying');
            $table->string('EUR_selling');
            $table->string('SGD_buying');
            $table->string('SGD_selling');
            $table->integer('updated_by');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchange_rate_buy_sells');
    }
}
