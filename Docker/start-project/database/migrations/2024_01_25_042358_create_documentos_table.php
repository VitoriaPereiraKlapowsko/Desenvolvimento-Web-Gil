<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /*Criando a tabela documentos no banco */
    public function up(): void{
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->float('horas_in');
            $table->string('status');      
            $table->string('comentario');
            $table->float('horas_out');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('documentos');
    }
};
