<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Despesa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->unsignedBigInteger('tipoDespesa_id');
            $table->foreign('tipoDespesa_id')->references('id')->on('tipoDespesa');
            $table->integer('valor');
            $table->integer('mes');
            $table->integer('ano');
            $table->date('vencimento');
            $table->unsignedBigInteger('tipoPagamento_id');
            $table->foreign('tipoPagamento_id')->references('id')->on('tipoPagamento');
            $table->integer('parcela')->nullable();
            $table->integer('situacao');
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
        Schema::dropIfExists('Despesa');
    }
}
