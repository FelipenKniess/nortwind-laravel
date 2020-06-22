<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->id('IDOrdem')->nullable();
            $table->foreignId('IDCliente')->nullable();
            $table->foreignId('IDFuncionario')->nullable();
            $table->dateTime('DataOrdem')->nullable();
            $table->dateTime('DataRequisicao')->nullable();
            $table->dateTime('DataEntrega')->nullable();
            $table->foreignId('EnviadoPor')->nullable();
            $table->double('Frete',10,2)->nullable();
            $table->string('NomeDestinatario',40)->nullable();
            $table->string('EnderecoDestinatario',60)->nullable();
            $table->string('CidadeDestinatario',15)->nullable();
            $table->string('RegiaoDestinatario',15)->nullable();
            $table->string('CepDestinatario',10)->nullable();
            $table->string('PaisDestinatario',15)->nullable();
            $table->timestamps();

            $table->foreign('IDCliente')->references('IDCliente')->on('clientes');
            $table->foreign('IDFuncionario')->references('IDFuncionario')->on('funcionarios');
            $table->foreign('EnviadoPor')->references('IDTransportadora')->on('transportadoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordens');
    }
}
