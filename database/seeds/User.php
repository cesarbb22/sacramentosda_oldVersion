<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('User')->insert([
            'Nombre' => 'Cesar',
            'PrimerApellido' => 'Bolaños',
            'SegundoApellido' => 'Brenes',
            'Email' => 'cesarb302@hotmail.com',
            'IDParroquia' => 1,
            'NumCelular' => '87524891',
            'IDPuesto' => 1,
            'IDRol' => 1,
            'Activo' => 1,
            'password' => bcrypt('password'),
        ]);
    }
}
