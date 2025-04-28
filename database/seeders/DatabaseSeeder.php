<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Author::factory(5)->create()->each(function ($author) {
            $author->posts()->saveMany(
                Post::factory(3)->make()
            )->each(function ($post) {
                $post->comments()->saveMany(
                    Comment::factory(2)->make()
                );
            });
        });
    }
}
