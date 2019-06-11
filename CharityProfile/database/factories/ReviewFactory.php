<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Review;
use Faker\Generator as Faker;
use App\Model\Products;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'product_id'=>function(){
          return Products::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(0,5)
    ];
});