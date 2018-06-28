<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->float('tot');
            $table->integer('numberBill')->unique();
            $table->integer('num');
            $table->date('admission');
            $table->integer('processes_id')->unsigned();
            $table->foreign('processes_id')->references('id')->on('processes');
            $table->integer('providers_id')->unsigned();
            $table->foreign('providers_id')->references('id')->on('providers');
            $table->enum('status',['Aprobada','Denegada','En proceso'])->default('En proceso');
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
        Schema::dropIfExists('bills');
    }
}
