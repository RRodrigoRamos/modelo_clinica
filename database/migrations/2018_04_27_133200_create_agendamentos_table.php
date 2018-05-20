<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_agenda');
            $table->string('hora_agenda');
            $table->enum('tipo_agenda', ['CONVÊNIO', 'PARTICULAR','RETORNO']);
            $table->string('agenda_de');
            $table->string('obs')->nullable();
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->integer('clinica_medicos_id')->unsigned();
            $table->foreign('clinica_medicos_id')->references('id')->on('clinica_medicos');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status_agendas');
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
        Schema::dropIfExists('agendamentos');
    }
}
