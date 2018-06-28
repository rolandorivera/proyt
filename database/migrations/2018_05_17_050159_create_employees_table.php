<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name',128);
            $table->string('lastName',128);
            $table->string('dui',10)->unique();
            $table->string('nit',17)->unique();
            $table->float('salary');
            $table->date('admission');
            $table->string('afp');
            $table->string('isss');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->enum('position',['Administrador','Usuario']);
            $table->enum('status',['Activo','Inactivo'])->default('Activo');
            $table->string('photo')->nullable();
            $table->string('pdf')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
