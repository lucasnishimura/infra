<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatefuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('funcionarios')){
            Schema::create('funcionarios', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome');
                $table->string('endereco');
                $table->string('email');
                $table->integer('carteira_trabalho');
                $table->date('data_nascimento');
                $table->string('nome_conjuge');
                $table->integer('quantidade_beneficiarios');
                $table->date('data_admissao');
                $table->float('salario',8,2);
                $table->float('VT',8,2);
                $table->float('VR',8,2);
                $table->float('VA',8,2);
                $table->string('password');
                $table->timestamps();
            });
        }
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
