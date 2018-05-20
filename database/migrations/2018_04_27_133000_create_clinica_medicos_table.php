<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicaMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinica_medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clinica_id')->nullable()->unsigned();
            $table->foreign('clinica_id')->references('id')->on('clinicas');
            $table->integer('medicos_id')->nullable()->unsigned();
            $table->foreign('medicos_id')->references('id')->on('medicos');
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
        Schema::dropIfExists('clinica_medicos');
    }
}
