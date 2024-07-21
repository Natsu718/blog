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
        DB::table('categories')->insert([
                'name' => 'プログラミング',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        DB::table('posts')->insert([
                'title' => '命名の心得',
                'body' => '命名はデータを基準に考える',
                'category_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('posts')->insert([
                'title' => 'エラー文',
                'body' => '読めるようになれば怖くない',
                'category_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         
    }
}
