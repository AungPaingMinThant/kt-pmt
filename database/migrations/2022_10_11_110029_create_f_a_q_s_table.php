<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAQSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_a_q_s', function (Blueprint $table) {
            $table->id();
            $table->text('page_slug');
            $table->text('faq_question');
            $table->text('faq_answer');
            $table->text('faq_delete_flg');
            $table->text('updated_by');
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
        Schema::dropIfExists('f_a_q_s');
    }
}
