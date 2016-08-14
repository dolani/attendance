<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->enum('title', ['permanent_staff', 'nysc', 'student_teacher', 'volunteers', 'security_personnel']);
            $table->string('first_name', 50);
            $table->string('last_name', 50); 
            $table->text('subject')->nullable();
            $table->string('password');
            $table->string('remember_token', 100)->nullable();
            $table->string('picture_url')->nullable();
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
        Schema::drop('users');
    }
}
