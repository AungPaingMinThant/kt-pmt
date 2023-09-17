<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAyabankProfilePageConfiguresTableColumnType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ayabank_profile_page_configures', function (Blueprint $table) {
           $table->longText('cta_section_1_desc')->change();
           $table->longText('cta_section_2_desc')->change();
           $table->longText('cta_section_3_desc')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
