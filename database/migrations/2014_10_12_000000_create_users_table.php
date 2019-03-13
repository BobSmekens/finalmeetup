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
            $table->string('phone')->nullable(true);
            $table->string('photo')->nullable(true);
            $table->string('skills')->nullable(true);
            $table->string('password')->nullable(true);
            $table->rememberToken();
            $table->timestamps();
        });

        // Schema::create('accounts', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name');
        //     // $table->integer('user_id')->unsigned()->nullable();
        //     // $table->foreign('user_id')
        //     // ->references('id')
        //     // ->on('users');
        //     $table->string('email')->unique();
        //     $table->string('phone')->default('100');
        //     $table->string('photo')->default('100');
        //     $table->string('skills')->default('100');
        //     $table->timestamps();


        // });
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
