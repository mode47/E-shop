<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PromotionCategory>
 */
class PromotionCategoryFactory extends Factory
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
            'promotion_id'=>Promotion::factory()


        ];
    }
}
