<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonajeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaje_models', function (Blueprint $table) {
            
            $table->increments('id');
            $table->double('vida')->default(50);
            $table->double('ataque')->default(1);
            $table->double('defensa')->default(0);
            $table->text('img')->default("/");
            $table->text('name')->default("");

            $table->text('Personaje')->default("Agu");
            $table->double('Velocidad')->default(0);
            $table->double('Fuerza')->default(0);
            $table->double('Inteligencia')->default(0);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personaje_models');
    }
}
