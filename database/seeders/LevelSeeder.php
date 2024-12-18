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
            'condition' => 'Telah Bergabung di LMS A'
        ]);

         // Level B
        Level::create([
            'name' => 'Sertifikat Level B',
            'duration' => '3',
            'benefit' => 'Mendapatkan Sertifikat Level B',
            'condition' => 'Telah Bergabung di LMS B'
        ]);

        
         // Level C
        Level::create([
            'name' => 'Sertifikat Level C',
            'duration' => '3',
            'benefit' => 'Mendapatkan Sertifikat Level C',
            'condition' => 'Telah Bergabung di LMS C'
        ]);

    }
}
