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


        $key = env('PERSONAL_API_KEY');
         \App\User::create([
                'name' => ucwords(str_replace("_", " ", $key)),
                'email' => $key.'@app.com',
                'password' => bcrypt('password'),
                'api_token' => bin2hex(openssl_random_pseudo_bytes(30))
            ]);
         \App\Player::create([
            'nickname'=>" ",
            'especialidad'=>" ",
            'experiencia'=>0,
            'millas'=>0,
         ]);

    }
}
