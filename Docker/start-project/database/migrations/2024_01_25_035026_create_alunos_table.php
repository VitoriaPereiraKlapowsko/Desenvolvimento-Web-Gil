<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /*Criando a tabela alunos no banco */
    public function up(): void{
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('turma_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('turma_id')->references('id')->on('turmas');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('alunos');
    }
};
