<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 11; $i++) {
            DB::table("posts")->insert([
                'title' => "hello world",
                'content'  => "Just Do it.",
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
