<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

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
        $name = $this->faker->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(200),
            'content' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(1280, 720),
            'status' => $this->faker->randomElement(['PUBLISHED', 'DRAFT']),
            'category_id' => Category::inRandomOrder()->value('id'),
        ];
    }
}
