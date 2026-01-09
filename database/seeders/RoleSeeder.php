<?php
//database/seeders/RoleSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nombre' => 'Administrador'],
            ['nombre' => 'Desarrollo'],
            ['nombre' => 'BackOffice'],
            ['nombre' => 'Asesor'],
            ['nombre' => 'Supervisor'],
            ['nombre' => 'Expedientes'],
        ];
    
        foreach ($roles as $rol) {
            \App\Models\Rol::create($rol);
        }
    }
}
