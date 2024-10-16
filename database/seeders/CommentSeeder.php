<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'user_id' => 5,
            'post_id' => 1,
            'content' => "It was my dream to study in the uni!!", 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('comments')->insert([
            'user_id' => 6,
            'post_id' => 1,
            'content' => "My friend studied there.", 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('comments')->insert([
            'user_id' => 7,
            'post_id' => 2,
            'content' => "Lithuanian dishes...? WHAT IS IT?", 
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

    }
}
