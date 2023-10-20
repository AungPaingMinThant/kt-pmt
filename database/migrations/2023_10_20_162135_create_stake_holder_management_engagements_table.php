<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStakeHolderManagementEngagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stake_holder_management_engagements', function (Blueprint $table) {
            $table->id();
            $table->text('engage_table_stakeholders');
            $table->text('engage_table_method_engagement');
            $table->text('engage_table_involvement');
            $table->text('engage_table_scope');
            $table->text('engage_table_party');
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
        Schema::dropIfExists('stake_holder_management_engagements');
    }
}
