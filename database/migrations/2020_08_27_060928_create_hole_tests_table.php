<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoleTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hole_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hile_test_id')->length(11)->unsigned()->comment('テストのID');
            $table->string('question', 255)->comment('問題');
            $table->string('answer', 255)->comment('問題の答え');
            $table->integer('question_number')->length(11)->unsigned()->comment('何問目の問題か');
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
        Schema::dropIfExists('hole_tests');
    }
}
