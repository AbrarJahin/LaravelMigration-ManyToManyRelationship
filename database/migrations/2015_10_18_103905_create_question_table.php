<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('question_set_id');
            $table->string('question');
            $table->string('type');
            /*
                question type may be int, but in that case debugging may be difficult, so string is better
                Question type may be
                1. y/n                  (may only one answer)
                2. star_rating          (may only one answer)
                3. multiple_choice      (may be one or more answer)
                4. radio group          (may only one answer)
            */

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
        Schema::drop('question');
    }
}
