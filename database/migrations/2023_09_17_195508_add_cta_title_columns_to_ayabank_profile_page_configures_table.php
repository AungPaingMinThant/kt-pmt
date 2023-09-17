<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCtaTitleColumnsToAyabankProfilePageConfiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ayabank_profile_page_configures', function (Blueprint $table) {
            $table->string('cta_section_1_title')->nullable()->after('update_leading_at');
            $table->string('cta_section_2_title')->nullable()->after('cta_section_1_link');
            $table->string('cta_section_3_title')->nullable()->after('cta_section_2_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ayabank_profile_page_configures', function (Blueprint $table) {
            $table->dropColumn('cta_section_1_title');
            $table->dropColumn('cta_section_2_title');
            $table->dropColumn('cta_section_3_title');
        });
    }
}
