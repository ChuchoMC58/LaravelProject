<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $post = new Post();
        // $post->title = 'Post 1';
        // $post->contenido = 'Contenido del post 1';

        // $post->published_at = now();

        // $post->save();

        Post::factory(50)
            ->create();
    }
}
