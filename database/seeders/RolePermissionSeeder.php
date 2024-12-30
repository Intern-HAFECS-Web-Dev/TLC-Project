<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

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

        // Kategori Akses Level
        $permission_levels = [
            'acces_level_A',
            'acces_level_B',
            'acces_level_C',
            'bundling',
            'EXPIRED'
        ];

        foreach($permission_levels as $permission) {
            Permission::create(['name' => $permission]);
        };

        $permission_kategories = [
            'HOTS',
            'PCK',
            'NUMERASI',
            'LITERASI',
            'EXPIRED'
        ];

        foreach($permission_kategories as $permission_k) {
            Permission::create(['name' => $permission_k]);
        };

        $user->givePermissionTo('acces_level_A','bundling');
    }   
}
