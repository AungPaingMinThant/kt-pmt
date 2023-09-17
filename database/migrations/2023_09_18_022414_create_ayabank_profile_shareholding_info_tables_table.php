<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyabankProfileShareholdingInfoTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayabank_profile_shareholding_info_tables', function (Blueprint $table) {
            $table->id();
            $table->string('shareholding_info_id')->nullable();
            $table->longText('shareholding_name')->nullable();
            $table->longText('shareholding_board')->nullable()->comment('0: yes, 1:not');
            $table->longText('shareholding_percent')->nullable();
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
        Schema::dropIfExists('ayabank_profile_shareholding_info_tables');
    }
}
