<?php

use App\BloodGroup;
use Faker\Generator as Faker;


$factory->define(App\Donor::class, function (Faker $faker) {

    $type_id=BloodGroup::all()->pluck('id')->toArray();
    return [
        'name'=>$faker->name,
        'mobile'=>'03335645478',
        'age'=>'21',
        'type_id'=> $faker->randomElement($type_id)
    ];
});
