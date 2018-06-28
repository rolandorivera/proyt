<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $employee=App\Employee::create([
          'name'=> 'Carlos Rolando',
          'lastName'=>'Jacinto Rivera',
          'dui'=>'23432456-6',
          'nit'=>'5462-220993-109-6',
          'salary'=>'500',
          'afp'=> '312443565478',
          'isss'=> '312412436',
          'department_id'=> 1,
          'status'=>'Activo',
          'position'=>'Administrador',
          'admission'=>'2018-05-10',
          'photo'=> null

        ]);

        App\User::create([
          'name'=> 'Rolando Rivera',
          'email'=> 'rolando_basi@hotmail.com',
          'password'=>'Admin123',
          'employee_id'=>$employee->id
        ]);
    }
}
