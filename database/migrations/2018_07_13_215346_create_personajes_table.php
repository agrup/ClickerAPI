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
            $table->text('name');
            $table->integer('Especie');
            $table->text('User')->default("");
            $table->integer('vida')->default(50);
            $table->integer('ataque')->default(1);
            $table->integer('Defensa')->default(0);
            $table->text('img')->default("/");
            $table->integer('Velocidad')->default(0);
            $table->integer('Fuerza')->default(0);
            $table->integer('Inteligencia')->default(0);
            $table->timestamps();
            //va
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
