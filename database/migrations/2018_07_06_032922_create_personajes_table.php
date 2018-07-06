<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personajes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Personaje');
            $table->integer('vida')->default(50);
            $table->integer('ataque')->default(1);
            $table->integer('Defensa')->default(0);
            $table->text('img')->default("");
            $table->integer('ataqueM')->default(0);
            $table->integer('ataqueX')->default(0);
            $table->integer('VidaEx')->default(0);
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
        Schema::dropIfExists('personajes');
    }
}
