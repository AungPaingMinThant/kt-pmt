<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreateColumnsToMissionCopBrandPromiseAspectSincerities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mission_cop_brand_promise_aspect_sincerities', function (Blueprint $table) {
            $table->integer('created_by');
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mission_cop_brand_promise_aspect_sincerities', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('created_at');
        });
    }
}
