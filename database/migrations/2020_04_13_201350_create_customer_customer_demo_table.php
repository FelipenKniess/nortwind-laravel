<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerCustomerDemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_customer_demo', function (Blueprint $table) {
            $table->foreignId('IDCliente');
            $table->foreignId('IDTipoCliente');
            $table->timestamps();

            $table->foreign('IDCliente')->references('IDCliente')->on('clientes');
            $table->foreign('IDTipoCliente')->references('IDTipoCliente')->on('clientes_demograficos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_customer_demo');
    }
}
