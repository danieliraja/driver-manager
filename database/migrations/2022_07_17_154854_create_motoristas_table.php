<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motoristas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->bigInteger('cnh');
            $table->string('tipo_cnh');
            $table->string('veiculo_marca');
            $table->string('veiculo_modelo');
            $table->string('veiculo_placa');
            $table->string('veiculo_cor');
            $table->longText('endereco');
            $table->string('cidade');
            $table->string('estado');
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
        Schema::dropIfExists('motoristas');
    }
};
