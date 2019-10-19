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
            //$table->integer('tipoDespesa');
            $table->integer('valor');
            $table->integer('mes');
            $table->integer('ano');
            $table->date('vencimento');
            $table->integer('tipoPagamento')->nullablle();
            $table->integer('parcela')->nullablle();
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
