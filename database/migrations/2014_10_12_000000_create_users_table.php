<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('cuenta')->nullable();
            $table->string('pais')->nullable();
            $table->string('hashtag1')->nullable();
            $table->string('hashtag2')->nullable();
            $table->string('hashtag3')->nullable();
            $table->string('hashtag4')->nullable();
            $table->string('referencia1')->nullable();
            $table->string('referencia2')->nullable();
            $table->string('referencia3')->nullable();
            $table->string('referencia4')->nullable();
            $table->string('igpassword')->nullable();
            $table->string('script')->nullable();
            $table->integer('estado')->default(0);
            
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
        Schema::dropIfExists('users');
    }
}
