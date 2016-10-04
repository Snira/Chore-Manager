<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserChoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_chore', function (Blueprint $table) {
            $table->integer('chores_id')->unsigned();
            $table->integer('users_id')->unsigned();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('chores_id')->references('id')->on('chores');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
