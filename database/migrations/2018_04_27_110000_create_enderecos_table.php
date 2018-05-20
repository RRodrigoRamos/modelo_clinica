<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('bairro_id')->nullable()->unsigned();
            $table->foreign('bairro_id')->references('id')->on('bairros');
            $table->string('complement')->nullable();
            $table->string('cep')->nullable();
            $table->enum('tipo_local', ['Apartamento','Prédio','Casa','Alugada'])->nullable();
            $table->string('endereco')->nullable();
            $table->integer('numero')->nullable();
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
        Schema::dropIfExists('enderecos');
    }
}
