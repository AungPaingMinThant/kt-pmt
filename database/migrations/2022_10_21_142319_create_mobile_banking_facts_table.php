<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileBankingFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_banking_facts', function (Blueprint $table) {
            $table->id();
            $table->integer('mobile_banking_id');
            $table->text('section1_fact_icon');
            $table->text('section1_fact_img');
            $table->text('section1_fact_title');
            $table->text('section1_fact_desc');
            $table->integer('delete_flg')->comment('0:active, 1:deleted')->default('0');
            $table->integer('updated_by');
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
        Schema::dropIfExists('mobile_banking_facts');
    }
}
