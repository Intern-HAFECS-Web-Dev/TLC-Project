<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
            ])->assignRole('user');

            UserProfile::create([
                'user_id' => $user->id,
                'nik' => $faker->numerify('################'),
                'fullname' => $faker->name,
                'instansi' => $faker->company,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d', '2005-12-31'), 
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'no_wa' => $faker->phoneNumber,
                'profile_image' => 'images/blankProfile.png', 
                'provinsi' =>  $faker->city,
                'kabupaten' => $faker->city,
                'kelurahan' => $faker->city,
                'kecamatan' => $faker->city,
                // 'custom_instansi' => $faker->companySuffix,
            ]);
        }
    }
}