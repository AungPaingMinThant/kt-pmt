<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionCopBrandPromisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_cop_brand_promises', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('page_title_1')->nullable();
            $table->string('page_desc_1')->nullable();
            $table->string('page_title_2')->nullable();
            $table->string('page_desc_2')->nullable();
            $table->string('aspect_1')->nullable();
            $table->string('aspect_2')->nullable();
            $table->string('aspect-3')->nullable();
            $table->string('aspect_4')->nullable();
            $table->string('aspect_5')->nullable();
            $table->string('aspect_6')->nullable();
            $table->string('aspect_1_title')->nullable();
            $table->string('aspect_1_desc')->nullable();
            $table->string('aspect_2_title')->nullable();
            $table->string('aspect_2_desc')->nullable();
            $table->string('aspect_3_title')->nullable();
            $table->string('aspect_3_desc')->nullable();
            $table->string('aspect_4_title')->nullable();
            $table->string('aspect_4_desc')->nullable();
            $table->string('aspect_5_title')->nullable();
            $table->string('aspect_5_desc')->nullable();
            $table->string('aspect_6_title')->nullable();
            $table->string('aspect_6_desc')->nullable();
            $table->string('aspect_cta_1_img')->nullable();
            $table->string('aspect_cta_1_title')->nullable();
            $table->string('aspect_cta_1_link')->nullable();
            $table->string('aspect_cta_2_img')->nullable();
            $table->string('aspect_cta_2_title')->nullable();
            $table->string('aspect_cta_2_link')->nullable();
            $table->string('aspect_cta_3_img')->nullable();
            $table->string('aspect_cta_3_title')->nullable();
            $table->string('aspect_cta_3_link')->nullable();
            $table->string('brand_title')->nullable();
            $table->string('brand_desc_1')->nullable();
            $table->string('brand_desc_2')->nullable();
            $table->string('brand_img')->nullable();
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
        Schema::dropIfExists('mission_cop_brand_promises');
    }
}
