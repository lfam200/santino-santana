<?php


use App\Pelage;
use App\Race;
use App\Specie;
use Illuminate\Database\Seeder;

use App\Customer;
use App\Person;
use App\User;
use App\Pet;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::truncate();
        User::truncate();
        Pet::truncate();
        Race::truncate();
        Pelage::truncate();
        Specie::truncate();

        factory(App\Person::class, 10)->create()->each( function($person) {

            $user = factory(App\User::class)->make();
            $person->user()->save($user);
        });

        factory(App\Race::class, 5)->create();
        factory(App\Specie::class, 2)->create();
        factory(App\Pelage::class, 5)->create();

        factory(App\Person::class, 10)->create()->each( function($person) {

            $user = factory(App\User::class)->make();
            $person->user()->save($user);

            $pet = factory(App\Pet::class)->make();
            $person->pets()->save($pet);

            $pet1 = factory(App\Pet::class)->make();

            $person->pets()->save($pet1);
        });


    }
}
