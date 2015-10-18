<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer-answer', function (Blueprint $table)
        {
            //business-question_set_id -> can't be used because it is too long name, so bq_id is used
            $table->integer('bq_id')        ->unsigned()  ->index();    //index for being foreign key
            $table->integer('customer_id')  ->unsigned()  ->index();    //index for being foreign key
            $table->integer('answer_id')    ->unsigned()  ->index();    //index for being foreign key
                        //if answer is not "star_rating" then answer will be answer.possible_answer
                        //if answer is "star_rating" then answer will be answer.star_rating_value

            $table->foreign('bq_id')->references('id')->on('business-question_set');
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->foreign('answer_id')->references('id')->on('answer');

            $table->unique(['bq_id', 'customer_id', 'answer_id']);   //If answer is given already by the user, then no need to answer again
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer-answer');
    }
}
