<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 50 fake user profiles
        for ($i = 0; $i < 50; $i++) {
            UserProfile::create([
                'user_id' => $faker->numberBetween(1, 50), // Assuming user IDs are between 1 and 50
                'nik' => $faker->numerify('################'),
                'fullname' => $faker->name,
                'instansi' => $faker->company,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d', '2005-12-31'), // Random date before 2005
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                // 'alamat_jalan' => $faker->address,
                'no_wa' => $faker->phoneNumber,
                'profile_image' => $faker->imageUrl(200, 200, 'people'), // Placeholder image
                'provinsi' => $faker->city,
                'kabupaten' => $faker->city,
                'kelurahan' => $faker->city,
                'kecamatan' => $faker->city,
                // 'custom_instansi' => $faker->null
            ]);
        }
    }
}
