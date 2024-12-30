<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $this->call(RolePermissionSeeder::class);
        $this->call(IndoRegionSeeder::class);
        $this->call(LevelSeeder::class);
        
        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('user');

            UserProfile::create([
            'user_id' => 1,
            'nik' => '123456789',
            'fullname' => 'Hamas Akif Sanie,.Spd',
            'instansi' => 'Pemerintah',
            'tempat_lahir' => 'Balikpapan',
            'tanggal_lahir' => $faker->date,
            'jenis_kelamin' => 'L',
            'no_wa' => '08234234234',
            'profile_image' => 'images/blankProfile.png', 
            'provinsi' =>  $faker->city,
            'kabupaten' => $faker->city,
            'kelurahan' => $faker->city,
            'kecamatan' => $faker->city,
        ]);

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
        
        $this->call(UserSeeder::class);

    }
}
