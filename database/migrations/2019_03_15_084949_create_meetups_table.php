<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetups', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('user_id1')->unsigned();
                $table->foreign('user_id1')->references('id')->on('users');
                $table->integer('user_id2');
                $table->integer('activity_id');
                // $table->string('date');
                $table->timestamps();
                $table->index('user_id1');
            


         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetups');
    }
}
