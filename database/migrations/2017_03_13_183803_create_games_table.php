<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('home_team');
            $table->unsignedInteger('visiting_team');
            $table->unsignedInteger('winning_team');
            $table->integer('winner_score');
            $table->integer('loser_score');
            $table->timestamps();
            $table->foreign('home_team')->references('id')->on('teams');
            $table->foreign('visiting_team')->references('id')->on('teams');
            $table->foreign('winning_team')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
