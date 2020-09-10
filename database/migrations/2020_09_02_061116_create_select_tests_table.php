<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('select_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('test_id')->unsigned()->comment('テストのID');
            $table->string('question', 255)->comment('問題');
            $table->integer('answer')->length(11)->comment('問題の答え');
            $table->integer('question_number')->length(11)->unsigned()->comment('何問目の問題か');
            $table->timestamps();

            // 外部キーの設定
            $table->foreign('test_id')->references('id')->on('tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('select_tests');
    }
}