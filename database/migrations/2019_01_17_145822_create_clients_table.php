<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('nasc');
            $table->enum('genero', ['M', 'F']);
            $table->string('endereco');
            $table->string('rg');
            $table->string('cpf', 11);
            $table->string('email');
            $table->boolean('validade')->nullable();
            $table->enum('logradouro', ['Rua', 'Avenida', 'Estrada', 'Via', 'Viaduto', 'Viela']);
            $table->string('bairro');
            $table->string('cep');
            $table->string('complemento')->nullable();
            $table->string('image');
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
