<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post::factory(count:5)->create();

        // Video 20 
        $json = File::get(path: 'database/json/posts.json');
        $posts = collect(json_decode($json));

        $posts->each(function($post){
            // Post::insert($post);
            Post::create([
                'title' => $post->title,
                'slug' => $post->slug,
                'excerpt' => $post->excerpt,
                'description' => $post->description,
                'is_published' => $post->is_published,
                'min_to_read' => $post->min_to_read,
            ]);
        });
        // Video 20 --


        // Video 19
        // $posts = collect([
        //     [
        //         'title' => 'Post One',
        //         'slug' => 'post_one',
        //         'excerpt' => 'Excerpt of post one',
        //         'description' => 'Description of post one',
        //         'is_published' => true,
        //         'min_to_read' => 2,
        //     ],
        //     [
        //         'title' => 'Post Two',
        //         'slug' => 'post_two',
        //         'excerpt' => 'Excerpt of post two',
        //         'description' => 'Description of post two',
        //         'is_published' => true,
        //         'min_to_read' => 3,
        //     ],
        // ]);

        // $posts->each(function($post){
        //     // Post::insert($post);
        //     Post::create([
        //         'title' => $post['title'],
        //         'slug' => $post['slug'],
        //         'excerpt' => $post['excerpt'],
        //         'description' => $post['description'],
        //         'is_published' => $post['is_published'],
        //         'min_to_read' => $post['min_to_read'],
        //     ]);
        // });
        // Video 19 --
        

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
