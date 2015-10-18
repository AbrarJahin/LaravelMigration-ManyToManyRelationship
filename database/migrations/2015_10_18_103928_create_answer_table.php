<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table)
        {
            $table->integer('question_id');
            $table->string('possible_answer');
            $table->integer('star_rating_value');
                        //if any question has star rating,
                        //  then if we want to store that in "possible_answer",
                        //  then there may be many steps, so we are using a seperate field
                        // Someone thinks it is a loss of database storage, but if we store this data in user end, then it will be even more,
                        // So, storing it is best,
                        //what do u think????
            $table->foreign('question_id')->references('id')->on('question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answer');
    }
}
