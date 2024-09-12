<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence;
        $slug = str::slug($title, separator: '_');

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => fake()->sentence,
            'description' => fake()->sentence,
            'is_published' => fake()->boolean,
            'min_to_read' => fake()->randomDigit(),
        ];
    }
}
