<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Level A
        Level::create([
            'name' => 'Sertifikat Level A',
            'duration' => '3',
            'benefit' => 'Mendapatkan Sertifikat Level A',
            'condition' => 'Telah Bergabung di LMS A',
            'price' => '400000',
            'discount' => '30',
            'final_price' => '280000',
        ]);

         // Level B
        Level::create([
            'name' => 'Sertifikat Level B',
            'duration' => '3',
            'benefit' => 'Mendapatkan Sertifikat Level B',
            'condition' => 'Telah Bergabung di LMS B',
            'price' => '500000',
            'discount' => '50',
            'final_price' => '250000',
        ]);

        
         // Level C
        Level::create([
            'name' => 'Sertifikat Level C',
            'duration' => '3',
            'benefit' => 'Mendapatkan Sertifikat Level C',
            'condition' => 'Telah Bergabung di LMS C',
            'price' => '400000',
            'discount' => '50',
            'final_price' => '200000',
        ]);

         // Bundling
        Level::create([
            'name' => 'Paket Bundling',
            'duration' => '3',
            'benefit' => 'Mendapatkan Akses Level A,B,C',
            'condition' => 'Telah Bergabung di TLC',
            'price' => '800000',
            'discount' => '50',
            'final_price' => '400000',
        ]);

    }
}
