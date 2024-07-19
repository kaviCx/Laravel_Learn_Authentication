<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'First Post',
                'content' => 'This is the content of the first post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'This is the content of the second post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Post',
                'content' => 'This is the content of the third post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'fourth Post',
                'content' => 'This is the content of the fourth post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fifth Post',
                'content' => 'This is the content of the fifth post.',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ];

        DB::table('posts')->insert($posts);
    }
}
