<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('images')->nullable();
            $table->rememberToken();
           // $table->unsignedBigInteger('teacher_id')->nullable();
           // $table->unsignedBigInteger('student_id')->nullable();
           //  $table->foreign('teacher_id')
           //  ->references('id')
           //  ->on('teachers')
           //  ->onDelete('cascade');
           //  $table->foreign('student_id')
           //  ->references('id')
           //  ->on('students')
           //  ->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
