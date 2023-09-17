<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrefixColToLeadingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ayabank_profile_page_leading_capabilities_infos', function (Blueprint $table) {
            $table->string('leading_prefix')->nullable()->after('leading_postfix');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ayabank_profile_page_leading_capabilities_infos', function (Blueprint $table) {
            $table->dropColumn('leading_prefix');
        });
    }
}
