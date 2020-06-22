<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens_detalhes', function (Blueprint $table) {
            $table->foreignId('IDOrdem');
            $table->foreignId('IDProduto');
            $table->double('PrecoUnitario',10,2);
            $table->smallInteger('Quantidade');
            $table->float('Desconto',10,2);
            $table->timestamps();

            $table->foreign('IDOrdem')->references('IDOrdem')->on('ordens');
            $table->foreign('IDProduto')->references('IDProduto')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordens_detalhes');
    }
}
