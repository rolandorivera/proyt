<?php

use Faker\Generator as Faker;

$factory->define(App\Department::class, function (Faker $faker) {
  $title=$faker->sentence(1);
  $title2=$faker->sentence(4);
  return [
      'name'=> $title,
      'description'=>$faker->text(100),
  ];
});
