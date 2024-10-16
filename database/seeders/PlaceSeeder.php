<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places')->insert([
            'category_id' => 1,
            'name' => 'Vilnius universitetas',
            'latitude' => 54.682743137220264, 
            'longitude' => 25.288000948845113,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('places')->insert([
            'category_id' => 3,
            'name' => 'MO muziejus',
            'latitude' => 54.679517069436045, 
            'longitude' => 25.27741804688676,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('places')->insert([
            'category_id' => 1,
            'name' => 'etno dvaras',
            'latitude' => 54.68362444772173, 
            'longitude' => 25.28993565243049,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    
    }
    
}
