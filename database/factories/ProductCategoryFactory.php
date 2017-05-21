<?php
/**
 * Created by PhpStorm.
 * User: ntimyeboah
 * Date: 20/05/2017
 * Time: 12:35 PM
 */
use Shopperholic\Entities\ProductCategory;
use Shopperholic\Entities\User;

$factory->define(ProductCategory::class, function(Faker\Generator $faker) {
    $name = $faker->name;

    return [
        'name' => $name,
        'slug' => str_slug($name),
        'description' => $faker->sentence,
        'user_id' => factory(User::class)->create()->id
    ];
});