<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('lesson_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('description');
            $table->integer('standard');
            $table->string('time');
            $table->integer('status')->default('0');
            $table->timestamps();
            $table->foreign('teacher_id')
            ->references('id')
            ->on('teachers')
             ->onDelete('cascade');
             $table->foreign('lesson_id')
             ->references('id')
             ->on('lessons')
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
        Schema::dropIfExists('tests');
    }
}
