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
            $table->longText('banner_title')->nullable();
            $table->longText('page_title_1')->nullable();
            $table->longText('page_desc_1')->nullable();
            $table->longText('page_title_2')->nullable();
            $table->longText('page_desc_2')->nullable();
            $table->longText('aspect_1')->nullable();
            $table->longText('aspect_2')->nullable();
            $table->longText('aspect_3')->nullable();
            $table->longText('aspect_4')->nullable();
            $table->longText('aspect_5')->nullable();
            $table->longText('aspect_6')->nullable();
            $table->longText('aspect_1_title')->nullable();
            $table->longText('aspect_1_desc')->nullable();
            $table->longText('aspect_2_title')->nullable();
            $table->longText('aspect_2_desc')->nullable();
            $table->longText('aspect_3_title')->nullable();
            $table->longText('aspect_3_desc')->nullable();
            $table->longText('aspect_4_title')->nullable();
            $table->longText('aspect_4_desc')->nullable();
            $table->longText('aspect_5_title')->nullable();
            $table->longText('aspect_5_desc')->nullable();
            $table->longText('aspect_5_desc_text')->nullable();
            $table->longText('aspect_6_title')->nullable();
            $table->longText('aspect_6_desc')->nullable();
            $table->longText('aspect_cta_1_img')->nullable();
            $table->longText('aspect_cta_1_title')->nullable();
            $table->longText('aspect_cta_1_link')->nullable();
            $table->longText('aspect_cta_2_img')->nullable();
            $table->longText('aspect_cta_2_title')->nullable();
            $table->longText('aspect_cta_2_link')->nullable();
            $table->longText('aspect_cta_3_img')->nullable();
            $table->longText('aspect_cta_3_title')->nullable();
            $table->longText('aspect_cta_3_link')->nullable();
            $table->longText('brand_title')->nullable();
            $table->longText('brand_desc_1')->nullable();
            $table->longText('brand_desc_2')->nullable();
            $table->longText('brand_img')->nullable();
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
        Schema::dropIfExists('mission_cop_brand_promises');
    }
}
