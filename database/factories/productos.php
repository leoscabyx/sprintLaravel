<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use App\Model;
use Faker\Generator as Faker;



$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => 'Pulsera ' . $faker->word,
        'precio' => $faker->numberBetween(50, 300),
        'descripcion' => $faker->paragraph,
        'estado' => $faker->numberBetween(0, 1),
        'idCategoria' => 1,
        'imagen' => 'prod' . $faker->numberBetween(1, 12) . '.jpeg'
    ];
});