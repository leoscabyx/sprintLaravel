<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prueba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => 'admin',
            'idTipoUsuario' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

    }
}
