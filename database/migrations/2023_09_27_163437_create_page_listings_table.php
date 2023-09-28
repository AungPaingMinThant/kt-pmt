<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_listings', function (Blueprint $table) {
            $table->id();
            $table->longText('parent_page_cat')->nullable();
            $table->longText('sub_page_cat_1')->nullable();
            $table->integer('page_depth');
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
        Schema::dropIfExists('page_listings');
    }
}
