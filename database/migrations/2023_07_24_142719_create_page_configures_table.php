<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageConfiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayabank_profile_page_configures', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('page_title')->nullable();
            $table->string('first_3_col_text')->nullable();
            $table->string('image_break')->nullable();
            $table->string('second_text')->nullable();
            $table->string('corporate_info_title')->nullable();
            $table->string('leading_capabilities_title')->nullable();
            $table->string('cta_section_1_img')->nullable();
            $table->string('cta_section_1_desc')->nullable();
            $table->string('cta_section_1_link')->nullable();
            $table->string('cta_section_2_img')->nullable();
            $table->string('cta_section_2_desc')->nullable();
            $table->string('cta_section_2_link')->nullable();
            $table->string('cta_section_3_img')->nullable();
            $table->string('cta_section_3_desc')->nullable();
            $table->string('cta_section_3_link')->nullable();
            $table->string('updated_by');
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
        Schema::dropIfExists('page_configures');
    }
}
