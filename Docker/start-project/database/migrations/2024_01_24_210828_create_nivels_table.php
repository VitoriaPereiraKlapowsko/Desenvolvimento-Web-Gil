<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{  
    /*Criando a tabela niveis no banco */
    public function up(): void{
        Schema::create('niveis', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('niveis');
    }
};
