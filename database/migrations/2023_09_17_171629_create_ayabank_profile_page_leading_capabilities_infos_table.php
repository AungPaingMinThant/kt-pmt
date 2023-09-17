<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyabankProfilePageLeadingCapabilitiesInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayabank_profile_page_leading_capabilities_infos', function (Blueprint $table) {
            $table->id();
            $table->string('leading_number')->nullable();
            $table->string('leading_postfix')->nullable();
            $table->string('leading_label')->nullable();
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
        Schema::dropIfExists('ayabank_profile_page_leading_capabilities_infos');
    }
}
