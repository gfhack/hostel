<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use App\Hotel;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'hotel_id' => factory(Hotel::class),
    ];
});
