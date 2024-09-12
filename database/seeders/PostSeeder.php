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
        // Post::factory(count:5)->create();

        $posts = collect([
            [
                'title' => 'Post One',
                'slug' => 'post_one',
                'excerpt' => 'Excerpt of post one',
                'description' => 'Description of post one',
                'is_published' => true,
                'min_to_read' => 2,
            ],
            [
                'title' => 'Post Two',
                'slug' => 'post_two',
                'excerpt' => 'Excerpt of post two',
                'description' => 'Description of post two',
                'is_published' => true,
                'min_to_read' => 3,
            ],
        ]);

        $posts->each(function($post){
            // Post::insert($post);
            Post::create([
                'title' => $post['title'],
                'slug' => $post['slug'],
                'excerpt' => $post['excerpt'],
                'description' => $post['description'],
                'is_published' => $post['is_published'],
                'min_to_read' => $post['min_to_read'],
            ]);
        });

        // Post::create([
        //     'title' => 'Post One',
        //     'slug' => 'post_one',
        //     'excerpt' => 'Excerpt of post one',
        //     'description' => 'Description of post one',
        //     'is_published' => true,
        //     'min_to_read' => 2,
        // ]);

       
    }
}
