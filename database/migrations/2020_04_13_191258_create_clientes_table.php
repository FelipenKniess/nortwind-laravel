<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('IdCliente');
            $table->string('NomeCompanhia',40);
            $table->string('NomeContato',30)->nullable();
            $table->string('TituloContato',30)->nullable();
            $table->string('Endereco',60)->nullable();
            $table->string('Cidade',15)->nullable();
            $table->string('Regiao',15)->nullable();
            $table->string('CEP',10)->nullable();
            $table->string('Pais',15)->nullable();
            $table->string('Telefone',24)->nullable();
            $table->string('Fax',24)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
