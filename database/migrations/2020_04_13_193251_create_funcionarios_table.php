<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('IDFuncionario');
            $table->string('Nome',10);
            $table->string('Sobrenome',20);
            $table->string('Titulo',30)->nullable();
            $table->string('TituloCortesia',25)->nullable();
            $table->dateTime('DataNac')->nullable();
            $table->dateTime('DataAdmissao')->nullable();
            $table->string('Endereco',60)->nullable();
            $table->string('Cidade',15)->nullable();
            $table->string('Regiao',15)->nullable();
            $table->string('CEP',10)->nullable();
            $table->string('Pais',15)->nullable();
            $table->string('TelefoneResidencial',24)->nullable();
            $table->string('Extensao',4)->nullable();
            $table->binary('Foto')->nullable();
            $table->text('Notas')->nullable();
            $table->foreignId('Reportase')->nullable();
            $table->string('FotoCaminho',255)->nullable();
            $table->timestamps();

            $table->foreign('Reportase')->references('IDFuncionario')->on('funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
