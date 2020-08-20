<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMadeordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('user_id')->comment('ユーザの主キー');
          $table->integer('role')->comment('権限1、ユーザー2、講師3、営業');
          $table->string('user_name', 255)->comment('ユーザの名前');
          $table->string('password')->comment('パスワード');
          $table->timestamps();
        });
      }
      if (!Schema::hasTable('tests')) {
        Schema::create('tests', function (Blueprint $table) {
          $table->increments('test_id');
          $table->integer('user_id')->comment('ユーザの主キー');
          $table->string('test_title', 255)->comment('テスト名');
          $table->integer('question_id')->comment('問題の数');
          //$table->integer('c_question')->comment('選択問題');　１、２、３、４、とかの番号で保存する？
          $table->string('e_question')->comment('記述問題');
          $table->integer('c_answer')->comment('選択問題回答');
          $table->string('e_answer')->comment('記述問題回答');
          //$table->integer('correct')->comment('正解');　正解判定をどうするか？　１、正解　２、不正解
          $table->integer('score')->comment('点数');
          $table->string('image_name')->comment('画像名');
          $table->timestamps();
        });
      }
      if (!Schema::hasTable('surveys')) {
        Schema::create('surveys', function (Blueprint $table) {
          $table->increments('survey_id');
          $table->integer('user_id')->comment('ユーザの主キー');
          $table->integer('question_id')->comment('問題の数');
          //$table->integer('c_question')->comment('選択問題');　１、２、３、４、とかの番号で保存する？
          $table->string('e_question')->comment('記述問題');
          $table->integer('c_answer')->comment('選択問題回答');
          $table->string('e_answer')->comment('記述問題回答');
          $table->timestamps();
        });
      }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('madeorders');
    }
}
