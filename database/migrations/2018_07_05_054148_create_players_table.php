<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nickname');
            $table->text('especialidad');
            $table->string('avatar')->default('default.jpg');
            $table->integer('experiencia')->default(0);
            $table->integer('nivel')->default(1);
            $table->integer('oro')->default(0);
            $table->integer('millas')->default(1000);
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
        Schema::dropIfExists('players');
    }
}

