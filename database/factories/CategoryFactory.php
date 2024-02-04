<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryNames = ['Electronics', 'Clothing', 'Home & Garden', 'Sports', 'Books', 'Toys', 'Beauty', 'Automotive'];
        $categoryImgs = ['category-1.jpg', 'category-2.jpg', 'category-3.jpg', 'category-4.jpg', 'category-5.jpg', 'category-6.jpg'];

        return [
            'title' => $this->faker->randomElement($categoryNames),
            'description' => $this->faker->sentence,
            'imgUrl'=>$this->faker->randomElement($categoryImgs),
        ];
    }
}
