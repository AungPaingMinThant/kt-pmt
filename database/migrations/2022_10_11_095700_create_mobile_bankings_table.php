<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileBankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_bankings', function (Blueprint $table) {
            $table->id();
            $table->text('page_slug');
            $table->text('banner_img');
            $table->text('headline_1')->nullable();
            $table->text('headline_2')->nullable();
            $table->text('headline_3')->nullable();
            $table->text('tag_line');
            $table->text('tag_desc');
            $table->text('section_1_title');
            $table->text('section_2_title');
            $table->text('section_2_desc');
            $table->text('apply_now_link');
            $table->text('app_store_link');
            $table->text('play_store_link');
            $table->text('support_link_title');
            $table->text('support_link');
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
        Schema::dropIfExists('mobile_bankings');
    }
}
