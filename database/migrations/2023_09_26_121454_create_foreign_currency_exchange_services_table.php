<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignCurrencyExchangeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_currency_exchange_services', function (Blueprint $table) {
            $table->id();
            $table->longText('section_title')->nullable();
            $table->longText('section_desc')->nullable();
            $table->longText('disclaimer_title')->nullable();
            $table->longText('disclaimer_desc')->nullable();
            $table->integer('created_by');
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
            $table->integer('updated_by');
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
        Schema::dropIfExists('foreign_currency_exchange_services');
    }
}
