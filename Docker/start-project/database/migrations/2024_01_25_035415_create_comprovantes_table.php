<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        /*Criando a tabela comprovantes no banco */
        Schema::create('comprovantes', function (Blueprint $table) {
            $table->id();
            $table->float('horas');
            $table->string('atividade');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('comprovantes');
    }
};
