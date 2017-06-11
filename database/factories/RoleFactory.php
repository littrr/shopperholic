<?php
/**
 * Created by PhpStorm.
 * User: ntimyeboah
 * Date: 22/05/2017
 * Time: 8:51 PM
 */
use Shopperholic\Entities\Role;

$factory->define(Role::class, function(Faker\Generator $faker) {
    $name = $faker->name;

    return [
        'name' => str_slug($name),
        'display_name' => $name,
        'description' => $faker->sentence
    ];
});