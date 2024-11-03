<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // membuat 3 role user
        $admin = Role::create(['name' => 'admin']);
        $assessor = Role::create(['name' => 'asesor']);
        $user = Role::create(['name' => 'user']);
    }
}
