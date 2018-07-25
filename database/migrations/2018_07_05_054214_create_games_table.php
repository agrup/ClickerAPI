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

            //player1
            $table->integer('host_id');
            $table->integer('personaje_p1');
            //player2
            $table->integer('opnente_id')->nullable()->defualt(null);
            $table->integer('personaje_p2')->nullable()->default(null);
            
            $table->text('url1')->nullable();
            $table->text('url2')->nullable();
            $table->boolean('Estado')->default(false);
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
        Schema::dropIfExists('games');
    }
}
