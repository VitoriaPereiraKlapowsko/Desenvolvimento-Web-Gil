<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /*Criando a tabela resources no banco */
    public function up(): void {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('resources');
    }
};
