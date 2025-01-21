<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 11; $i++) {
            $randomeStr = Str::random(5);
            DB::table("posts")->insert([
                'title' => "hello " . $randomeStr,
                'content'  => "Just Do it.",
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
