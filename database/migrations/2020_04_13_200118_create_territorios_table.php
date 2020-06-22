<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerritoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('territorios', function (Blueprint $table) {
            $table->id('IDTerritorio');
            $table->string('DescricaoTerritorio', 50);
            $table->foreignId('IDRegiao');
            $table->timestamps();

            $table->foreign('IDRegiao')->references('IDRegiao')->on('regiao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('territorios');
    }
}
