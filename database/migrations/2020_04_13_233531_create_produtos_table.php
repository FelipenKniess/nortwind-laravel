<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('IDProduto');
            $table->string('NomeProduto',40);
            $table->foreignId('IDFornecedor')->nullable();
            $table->foreignId('IDCategoria')->nullable();
            $table->string('QuantidadePorUnidade',20)->nullable();
            $table->double('PrecoUnitario',10,2)->nullable();
            $table->smallInteger('UnidadesEmEstoque')->nullable();
            $table->smallInteger('UnidadesEmOrdem')->nullable();
            $table->smallInteger('NivelDeReposicao')->nullable();
            $table->char('Descontinuado',1);
            $table->timestamps();

            $table->foreign('IDFornecedor')->references('IDFornecedor')->on('fornecedores');
            $table->foreign('IDCategoria')->references('IDCategoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
