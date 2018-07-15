<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('personaje_models')->insert(['name'=>'Freezer','Velocidad'=>0.2,'Fuerza'=>-0.2,'img'=>'/freezer']);
        DB::table('personaje_models')->insert(['name'=>'Boo','Fuerza'=>0.2,'Inteligencia'=>-0.2,'img'=>'/boo']);
        DB::table('personaje_models')->insert(['name'=>'Goku','Inteligencia'=>0.2,'Velocidad'=>-0.2,'img'=>'/goku']);

    }
}
