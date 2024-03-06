<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /*Criando a tabela permissions no banco */
    public function up(): void{
        Schema::create('permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('resource_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('resource_id')->references('id')->on('resources');
            $table->primary(['role_id', 'resource_id']);
            $table->boolean('permission');
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('permissions');
    }
};
