<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_set', function (Blueprint $table)
        {
            //Any company can choose a question set from here and if they want, they also can create a new question set
            $table->increments('id');
            $table->string('type'); //this question set is appropriate for what kind of business
            $table->string('name');
            /*
            .................
            Any additional data needed????
            .................
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('question_set');
    }
}
