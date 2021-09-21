<?php
use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'name' => 'Francisco',
        'apellido' => 'Hernandez',
        'fecha_nacimiento' => '19/11/2001',
        'direccion' => 'colonia san jose',
        'genero' => 'M',
        'telefono' => '75161157',
        'email' => 'franher144@gmail.com',
        'password' => bcrypt('fr123')
    ];
});
