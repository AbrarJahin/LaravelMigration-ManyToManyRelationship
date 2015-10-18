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
            $table->integer('customer_id')  ->unsigned()  ->index();  //index for being foreign key
            $table->integer('answer_id')    ->unsigned()  ->index();
                        //if answer is not "star_rating" then answer will be answer.possible_answer
                        //if answer is "star_rating" then answer will be answer.star_rating_value

            $table->foreign('customer_id')->references('id')->on('customer');
            $table->foreign('answer_id')->references('id')->on('answer');
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
