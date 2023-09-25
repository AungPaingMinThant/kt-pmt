<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedAtColumnsToCorporatePoliciesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corporate_policies_details', function (Blueprint $table) {
            $table->integer('created_by')->after('policies_desc')->nullable();
            $table->timestamp('created_at')->after('created_by')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corporate_policies_details', function (Blueprint $table) {
            $table->dropColumn('created_by');
            $table->dropColumn('created_at');
        });
    }
}
