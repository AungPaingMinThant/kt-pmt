<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyabankProfileSubPageConfiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayabank_profile_sub_page_configures', function (Blueprint $table) {
            $table->id();
            $table->string('sub_flag')->comment('0: corporate_info, 1:leading_capa')->nullable();
            $table->string('sub_mm_title')->nullable();
            $table->string('sub_en_title')->nullable();
            $table->string('sub_mm_detail')->nullable();
            $table->string('sub_en_detail')->nullable();
            $table->string('sub_icon')->nullable();
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
        Schema::dropIfExists('ayabank_profile_sub_page_configures');
    }
}
