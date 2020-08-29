<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoleAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hole_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->length(11)->unsigned()->comment('回答者のID');
            $table->integer('test_id')->length(11)->unsigned()->comment('テストのID');
            $table->integer('question_number')->length(11)->unsigned()->comment('何問目の問題か');
            $table->string('answer', 225)->comment('回答');
            $table->integer('Judgment')->length(11)->comment('判定');
            $table->timestamps();

            // 外部キーの設定
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hole_answers');
    }
}
