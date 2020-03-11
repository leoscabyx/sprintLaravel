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
        // seeder para insetar un usuario predefinido 
        $this->call(prueba::class);

        // seeeder para insertar una categria Pulseras predefinida
        $this->call(categoria::class);

        // seeder para insertar 12 productos en la base de datos
        $this->call(productos::class);
    }
}
