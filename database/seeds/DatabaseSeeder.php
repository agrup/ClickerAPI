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

        //DOY DE ALTA LOS MARKERS PARA EL MAPA
        DB::table('markers')->insert(['distancia'=>1000,'latitud'=>51.509865,'longitud'=>-0.118092,'oro'=>100,'millas'=>1000]);
        DB::table('markers')->insert(['distancia'=>1000,'latitud'=> -33.447487,'longitud'=>-70.673676,'millas'=>1000,'experiencia'=>'100']);
        DB::table('markers')->insert(['distancia'=>1000,'latitud'=>-23.533773,'longitud'=>-46.625290,'ataque'=>0.5,'vida'=>5]);
        DB::table('markers')->insert(['distancia'=>1000,'latitud'=>-12.592502,'longitud'=>18.723946,'experiencia'=>50,'ataque'=>0.1,'vida'=>5]);
        DB::table('markers')->insert(['distancia'=>1000,'latitud'=>-22.420846,'longitud'=>23.777657,'oro'=>80]);
        DB::table('markers')->insert(['distancia'=>1000,'latitud'=> -2.837668,'longitud'=>24.232843,'ataque'=>0.3,'vida'=>10]);
        DB::table('markers')->insert(['distancia'=>1000,'latitud'=>5.593246,'longitud'=>12.553059,'oro'=>50,'millas'=>1000]);

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
