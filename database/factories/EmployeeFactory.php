<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {

  return [

      'name'=> 'Carlos Rolando',
      'lastName'=>'Jacinto Rivera',
      'dui'=>'23432456-6',
      'nit'=>'5462-220993-109-6',
      'salary'=>'500',
      'afp'=> '312456432345',
      'isss'=> '312412786',
      'department_id'=> 1,
      'status'=>'Activo',
      'position'=>'Administrador',
      'admission'=>'2018-05-10',
      'photo'=> null

  ];
});
