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
            'access_level_A_unpaid',
            'access_level_B_unpaid',
            'access_level_C_unpaid',
            'level_a_pending_payment',
            'level_b_pending_payment',
            'level_c_pending_payment',
            'access_level_A',
            'access_level_B',
            'access_level_C',
            'bundling',
            'EXPIRED_LEVEL'
        ];

        foreach($permission_levels as $permission) {
            Permission::create(['name' => $permission]);
        };

        $permission_kategories = [
            'HOTS',
            'PCK',
            'NUMERASI',
            'LITERASI',
            'EXPIRED_KATEGORY'
        ];

        foreach($permission_kategories as $permission_k) {
            Permission::create(['name' => $permission_k]);
        };

        $user->givePermissionTo('access_level_A_unpaid','bundling');
    }   
}
