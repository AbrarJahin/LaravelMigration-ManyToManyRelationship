<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessQuestionSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business-question_set', function (Blueprint $table)
        {
            //Cross table for question_set and adjusent business
            $table->integer('business_id');
            $table->integer('question_set_id');

            //$table->foreign('business_id')->references('id')->on('business');
            //$table->foreign('question_set_id')->references('id')->on('question_set');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('business-question_set');
    }
}
