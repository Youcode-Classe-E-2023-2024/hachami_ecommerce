<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
        $productNames = ['product 1', 'product 2', 'product 3', 'product 4', 'product 5',
            'product 7', 'product 8', 'product 9','product 10','product 11','product 12'];
        $productImgs = ['product1.jpg', 'product2.jpg', 'product3.jpg', 'product4.jpg', 'product5.jpg',
            'product 7', 'product8.jpg', 'product9.jpg','product10.jpg','product11.jpg','product12.jpg'];
        $categoryIds = Category::pluck('id')->toArray();

        $categoryId = $this->faker->randomElement($categoryIds);

        return [
            'title' => $this->faker->randomElement($productNames),
            'description' => $this->faker->paragraph,
            'current_price' => $this->faker->randomFloat(2, 10, 100),
            'old_price' =>$this->faker->randomFloat(2, 5, 90),
            'imgUrl'=>$this->faker->randomElement($productImgs),
            'category_id' => $categoryId,
        ];
    }
}
