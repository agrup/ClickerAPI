<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('distancia')->default(0);
            $table->double('latitud')->default(0);
            $table->double('longitud')->default(0);
            $table->integer('oro')->nullable()->defualt(null);
            $table->integer('millas')->nullable()->defualt(null);
            $table->integer('experiencia')->nullable()->defualt(null);
            $table->double('ataque')->nullable()->defualt(null);
            $table->double('vida')->nullable()->defualt(null);
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
        Schema::dropIfExists('markers');
    }
}
