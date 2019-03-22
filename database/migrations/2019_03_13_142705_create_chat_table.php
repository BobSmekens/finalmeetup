<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('from_user')->unsigned();
            $table->foreign('from_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('to_user')->unsigned();
            $table->foreign('to_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('to_user')->references('id')->on('users');
            $table->string('message');
            $table->timestamps();
            $table->index('from_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat');
    }
}
