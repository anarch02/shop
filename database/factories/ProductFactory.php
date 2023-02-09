<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Subcategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => ucfirst($this->faker->words(2, true)),
            'code'=> $this->faker->unique()->numberBetween(1000, 9999),
            'subcategory_id' => Subcategory::query()->inRandomOrder()->value('id'),
            'thumbnail' => $this->faker->image(null, 640, 480, null, true, true, null, false),
            'price' => $this->faker->numberBetween(1000, 10000),
            'discount' =>  $this->faker->numberBetween(0, 40),
            'prev' => $this->faker->text(300),
            'description' => $this->faker->text(1000),
        ];
    }
}
