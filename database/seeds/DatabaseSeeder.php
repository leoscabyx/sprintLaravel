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
        $this->call(prueba::class);
        $this->call(categoria::class);
        $this->call(productos::class);
    }
}
