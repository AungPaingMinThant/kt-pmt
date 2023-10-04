<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_goals', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->longText('corporate_goal_desc');
       
            $table->longText('corporate_goal_img_1');
            $table->longText('corporate_text_1');
            $table->longText('corporate_goal_img_2');
            $table->longText('corporate_text_2');
            $table->longText('corporate_goal_img_3');
            $table->longText('corporate_text_3');
            $table->longText('corporate_goal_img_4');
            $table->longText('corporate_text_4');
            
            $table->longText('customer_title');
            $table->longText('customer_desc');
            $table->longText('customer_list');
       
            $table->longText('customer_card_desc_1');
            $table->longText('customer_card_img_1');
            $table->longText('customer_card_text_1');
            $table->longText('customer_card_link_1');
            $table->longText('customer_card_desc_2');
            $table->longText('customer_card_text_2');
            $table->longText('customer_card_img_2');
            $table->longText('customer_card_link_2');
       
            $table->longText('community_title');
            $table->longText('community_desc');
       
            $table->longText('community_card_desc_1');
            $table->longText('community_card_img_1');
            $table->longText('community_card_text_1');
            $table->longText('community_card_link_1');
            $table->longText('community_card_desc_2');
            $table->longText('community_card_img_2');
            $table->longText('community_card_text_2');
            $table->longText('community_card_link_2');
       
            $table->longText('staff_title');
            $table->longText('staff_desc');
       
            $table->longText('staff_card_desc_1');
            $table->longText('staff_card_img_1');
            $table->longText('staff_card_text_1');
            $table->longText('staff_card_link_1');
            $table->longText('staff_card_desc_2');
            $table->longText('staff_card_img_2');
            $table->longText('staff_card_text_2');
            $table->longText('staff_card_link_2');
       
            $table->longText('people_desc');
       
            $table->longText('stakeholder_title');
            $table->longText('stakeholder_desc');
       
            $table->longText('stakeholder_card_desc_1');
            $table->longText('stakeholder_card_img_1');
            $table->longText('stakeholder_card_text_1');
            $table->longText('stakeholder_card_link_1');
            $table->longText('stakeholder_card_desc_2');
            $table->longText('stakeholder_card_img_2');
            $table->longText('stakeholder_card_text_2');
            $table->longText('stakeholder_card_link_2');
       
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
        Schema::dropIfExists('corporate_goals');
    }
}
