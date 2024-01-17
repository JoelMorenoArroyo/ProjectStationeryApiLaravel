<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->Name(),
            'title' => $this->faker->company,
            'stock' => $this->faker->numberBetween(5, 150),
            'price' => $this->faker->numberBetween(100, 150000),
            'image' => $this->faker->imageUrl(),
            'category_id' => function (){
                return Category::inRandomOrder()->first()->id;
            }
        ];
    }
}
