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
            //data
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->decimal('lat', 10, 6);
            $table->decimal('lng', 10, 6);

            //bio
            $table->string('name');
            $table->text('about');
            $table->string('gender');
            $table->integer('age');

            //social
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('line');
            $table->string('bbm');
            $table->string('wa');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('likes', function (Blueprint $table) {
            //data
            $table->increments('id');
            $table->integer('me');
            $table->integer('you');
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
