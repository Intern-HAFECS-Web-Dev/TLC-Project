<?php

namespace Database\Seeders;

use App\Models\location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location = location::create([
            'location' => 'Toilet Atas',
            'floor' => '2',
            'area' => 'testing area',
            'keterangan' => 'testing keterangan',
            'image' => 'images/blankProfile.png',
            'status' => 'yes'
        ]);

        $location_2 = location::create([
            'location' => 'Toilet Bawah',
            'floor' => '3',
            'area' => 'area testing',
            'keterangan' => 'keterangan toilet bawah',
            'image' => 'images/blankProfile.png',
            'status' => 'yes'
        ]);

        $location_3 = location::create([
            'location' => 'Toilet Samping',
            'floor' => '3',
            'area' => 'area Samping',
            'keterangan' => 'keterangan toilet Samping',
            'image' => 'images/blankProfile.png',
            'status' => 'yes'
        ]);
    }
}
