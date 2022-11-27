<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration {
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('sabores');
            $table->integer('quantidade');
            $table->string('observacao')->nullable();
            $table->timestamps();

        });
    }
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

