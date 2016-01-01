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
           /* $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();*/
            $table->integer('id')->unique()->unsigned();
            $table->string('number')->unique();
            $table->string('name');
            $table->string('password');
            $table->integer('phone');
            $table->string('industry')->default('');
            $table->string('company')->default('');
            $table->string('address')->default('');
            $table->string('qq')->default('');
            $table->string('email')->default('');
            $table->string('cnumber')->default('');
            $table->rememberToken();
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
