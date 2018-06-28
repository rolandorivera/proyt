<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Provider::create([
      'name'=> 'Ferrollaves',
      'business'=>'Comercializador',
      'address'=>'2A Avenida Norte 7, San Vicente',
      'phone'=>'2393-1038',
      'email'=>'ferrollaves@hotmail.com',
      'numrent'=> null,
      'dui'=> '34563423-9',
      'nit'=> '2312-634556-231-5',
      'photo'=> '1.jfif'
        ]);
    }
}
