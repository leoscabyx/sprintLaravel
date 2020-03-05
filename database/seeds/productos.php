<?php

use App\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Producto::class)->times(12)->create();
    }
}
