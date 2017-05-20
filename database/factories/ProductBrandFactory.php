<?php
/**
 * Created by PhpStorm.
 * User: ntim yeboah obed
 * Date: 5/18/17
 * Time: 11:52 PM
 */
use Shopperholic\Entities\ProductBrand;
use Shopperholic\Entities\User;

$factory->define(ProductBrand::class, function(Faker\Generator $faker) {
    $name = $faker->name;

    return [
        'name' => $name,
        'slug' => str_slug($name),
        'user_id' => factory(User::class)->create()->id
    ];
});