<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaglinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taglines', function (Blueprint $table) {
            $table->id();
            $table->longText('page_slug')->nullable();
            $table->longText('tagline_title')->nullable();
            $table->longText('tagline_desc')->nullable();
            $table->longText('tagline_img')->nullable();
            $table->integer('created_by');
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
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
        Schema::dropIfExists('taglines');
    }
}
