<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyabankProfileBusinessPracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayabank_profile_business_practices', function (Blueprint $table) {
            $table->id();
            $table->string('page_title')->nullable();
            $table->longText('first_desc')->nullable();
            $table->longText('cta_section_1_title')->nullable();
            $table->longText('cta_section_1_img')->nullable();
            $table->longText('cta_section_1_desc')->nullable();
            $table->longText('cta_section_2_title')->nullable();
            $table->longText('cta_section_2_img')->nullable();
            $table->longText('cta_section_2_desc')->nullable();
            $table->longText('cta_section_3_title')->nullable();
            $table->longText('cta_section_3_img')->nullable();
            $table->longText('cta_section_3_desc')->nullable();
            $table->longText('cta_section_4_title')->nullable();
            $table->longText('cta_section_4_img')->nullable();
            $table->longText('cta_section_4_desc')->nullable();
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
        Schema::dropIfExists('ayabank_profile_business_practices');
    }
}
