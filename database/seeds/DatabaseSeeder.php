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
    {/* INSERTAMOS USUARIO POR DESDE ESTE FRAMEWORK*/

        App\User::create([
            'name'=>'Usuari',
            'email'=>'conexio@hotmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
