<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTerritoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios_territorios', function (Blueprint $table) {
            $table->foreignId('IDFuncionario');
            $table->foreignId('IDTerritorio');
            $table->timestamps();

            $table->foreign('IDFuncionario')->references('IDFuncionario')->on('funcionarios');
            $table->foreign('IDTerritorio')->references('IDTerritorio')->on('territorios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios_territorios');
    }
}
