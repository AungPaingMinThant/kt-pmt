<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiryRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiry_records', function (Blueprint $table) {
            $table->id();
            $table->string('name_txt');
            $table->string('phone_txt');
            $table->string('email_txt')->nullable();
            $table->string('division_select');
            $table->string('company_txt');
            $table->string('product_check');
            $table->string('sub_prod_check');
            $table->string('comment_question_txt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enquiry_records');
    }
}
