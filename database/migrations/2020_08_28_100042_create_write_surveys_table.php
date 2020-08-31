<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWriteSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('write_surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('write_survey_id')->length(11)->unsigned()->comment('アンケートのID');
            $table->string('question', 255)->comment('アンケートの内容');
            $table->integer('question_number')->length(11)->unsigned()->comment('何問目のアンケートか');
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
        Schema::dropIfExists('write_surveys');
    }
}
