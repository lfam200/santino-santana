<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Person::class, function (Faker\Generator $faker) {
    return [
        'dni'               => $faker->unique()->randomNumber(8),
        'first_name'        => $faker->firstName,
        'last_name'         => $faker->lastName,
        'avatar'            => $faker->imageUrl(),
        'sex'               => $faker->randomElement($array = array ('M','F')),
        'birthday'          => $faker->date($format = 'Y-m-d'),
        'city'              => $faker->city,
        'address'           => $faker->address,
        'ref_address'       => $faker->streetName,
        'phone'             => $faker->phoneNumber,
        'cell_phone'        => $faker->phoneNumber,

    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'              => $faker->firstName,
        'email'             => $faker->unique()->email,
        'password'          => bcrypt('secret'),
        'permissions'       => $faker->randomElement($array = array ('admin','vendedor','groomer','cliente')),
        'remember_token'    => str_random(10),

    ];
});


$factory->define(App\Pet::class, function (Faker\Generator $faker) {
    return [
        'race_id'           => $faker->numberBetween($min = 1, $max = 5),
        'code'              => $faker->unique()->randomNumber(8),
        'name'              => $faker->firstName,
        'sex'               => $faker->randomElement($array = array ('M','H')),
        'avatar'            => $faker->imageUrl(),
        'sterilization'     => $faker->randomElement($array = array ('Castrado','Vasectomia')),
        'birthday'          => $faker->date($format = 'Y-m-d'),


    ];
});

$factory->define(App\Race::class, function (Faker\Generator $faker) {
    return [
        'specie_id'         => $faker->numberBetween($min = 1, $max = 2),
        'name'              => $faker->unique()->randomElement($array = array ('Schanuzer','Bulldog','Poodle','Pastor Aleman','Beagle','Pitbull','Chihuahua','Angora','Persa','Siames')),
        'color'             => $faker->colorName,

    ];
});

$factory->define(App\Specie::class, function (Faker\Generator $faker) {
    return [
        'name'              => $faker->unique()->randomElement($array = array ('Canino','Felino')),

    ];
});

$factory->define(App\Pelage::class, function (Faker\Generator $faker) {
    return [
        'name'              => $faker->unique()->randomElement($array = array ('Grande Pelo Corto','Grande Pelo Largo','Mediano Pelo Corto', 'Mediano Pelo Largo','Pequeno Pelo Corto', 'Pequeno Pelo Largo', 'Sin Pelo')),

    ];
});
