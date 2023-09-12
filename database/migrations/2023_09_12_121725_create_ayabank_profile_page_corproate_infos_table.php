<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyabankProfilePageCorproateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayabank_profile_page_corproate_infos', function (Blueprint $table) {
            $table->id();
            $table->string('CIS_title')->nullable();
            $table->string('CIS_title_MM')->nullable();
            $table->string('CIS_desc')->nullable();
            $table->string('CIS_desc_MM')->nullable();
            $table->string('CIS_img')->nullable();
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
        Schema::dropIfExists('ayabank_profile_page_corproate_infos');
    }
}
