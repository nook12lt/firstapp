<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'place_id' => 1,
            'content' => "It is a university in Vilnius", 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'place_id' => 2,
            'content' => "It is a modern sophisticated museum.", 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'place_id' => 3,
            'content' => "You can enjoy Lithuanian traditional dishes.", 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

    }
}
