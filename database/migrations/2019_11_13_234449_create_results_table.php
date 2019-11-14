<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('student_id');
            $table->string('slug')->unique();
            $table->integer('isExam');
            $table->integer('isAnswer');
            $table->integer('notAnswer');
            $table->integer('isTrue');
            $table->integer('isFalse');
            $table->integer('score');
            $table->string('status');
            $table->timestamps();
            $table->foreign('test_id')
            ->references('id')
            ->on('tests')
            ->onDelete('cascade');
            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
