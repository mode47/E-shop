<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'category_id'=>ProductCategory::factory(),

           'name' => $this->faker->word,
           'description' => $this->faker->sentence,
           'product_image' => $this->faker->imageUrl()
        ];
    }
}