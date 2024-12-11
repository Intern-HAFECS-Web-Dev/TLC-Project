<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolePermissionSeeder::class);
        $this->call(IndoRegionSeeder::class);
        // $this->call(UserProfileSeeder::class);

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'testing@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('user');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        $assessor = User::create([
            'name' => 'Assessor',
            'email' => 'assessor@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $assessor->assignRole('asesor');

    }
}
