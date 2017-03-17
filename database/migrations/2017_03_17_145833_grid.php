<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grid', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gamescore');
            $table->integer('win_pts');
            $table->integer('lose_pts');
            $table->integer('pts_total');
            $table->integer('pts_diff');
            $table->integer('count');
            $table->string('list_link');
            $table->string('last_game_link');
            $table->string('last_game_teams');
            $table->string('last_game_date');
            $table->string('last_game_year');
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
        Schema::table('grid', function (Blueprint $table) {
            //
        });
    }
}
