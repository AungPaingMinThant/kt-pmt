<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdateleadingatColToAyabankProfilePageConfiguresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ayabank_profile_page_configures', function (Blueprint $table) {
            $table->string('update_leading_at')->nullable()->after('leading_capabilities_title');
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
            $table->dropColumn('update_leading_at');
        });
    }
}
