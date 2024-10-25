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
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'assessor']);
        Role::create(['name' => 'user']);
    }
}
