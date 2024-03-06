<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder{
    public function run(): void {
        $data = [
            // Esta parte é para o Administrador
            ["role_id" => 1, "resource_id" => 1, "permission" => true],
            ["role_id" => 1, "resource_id" => 2, "permission" => true],
            ["role_id" => 1, "resource_id" => 3, "permission" => true],
            ["role_id" => 1, "resource_id" => 4, "permission" => true],
            ["role_id" => 1, "resource_id" => 5, "permission" => true],

            // Esta parte é para o Coordenador
            ["role_id" => 2, "resource_id" => 1, "permission" => false],
            ["role_id" => 2, "resource_id" => 2, "permission" => false],
            ["role_id" => 2, "resource_id" => 3, "permission" => false],
            ["role_id" => 2, "resource_id" => 4, "permission" => false],
            ["role_id" => 2, "resource_id" => 5, "permission" => false],

            // Esta parte é para o Professor
            ["role_id" => 3, "resource_id" => 1, "permission" => false],
            ["role_id" => 3, "resource_id" => 2, "permission" => false],
            ["role_id" => 3, "resource_id" => 3, "permission" => false],
            ["role_id" => 3, "resource_id" => 4, "permission" => false],
            ["role_id" => 3, "resource_id" => 5, "permission" => false],
            
            // Esta parte é para o Aluno
            ["role_id" => 4, "resource_id" => 1, "permission" => false],
            ["role_id" => 4, "resource_id" => 2, "permission" => false],
            ["role_id" => 4, "resource_id" => 3, "permission" => false],
            ["role_id" => 4, "resource_id" => 4, "permission" => false],
            ["role_id" => 4, "resource_id" => 5, "permission" => false],
        ];
        DB::table('permissions')->insert($data);
    }
}
