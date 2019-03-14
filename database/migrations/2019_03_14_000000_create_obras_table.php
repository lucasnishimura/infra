<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('obras')){
            Schema::create('obras', function (Blueprint $table) {
                $table->increments('id');
                $table->string('logradouro');
                $table->string('complemento');
                $table->string('bairro');
                $table->string('cidade');
                $table->string('estado');
                $table->integer('cep');
                $table->string('latitudde');
                $table->string('longitude');
                $table->string('empresa');
                $table->string('contato');
                $table->string('email');
                $table->date('data_inicio');
                $table->date('data_revisao');
                $table->decimal('valor',10,2);
                $table->string('telefone');
                $table->string('password');
                $table->rememberToken();
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
        Schema::dropIfExists('obras');
    }
}
