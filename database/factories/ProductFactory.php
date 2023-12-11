<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use FakerRestaurant\Provider\id_ID\Restaurant;

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
    protected function withFaker()
    {
        $faker = parent::withFaker();
        $faker->addProvider(new Restaurant($faker));
        return $faker;
    }
     public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->foodName(),
            'price' => round(fake()->unique()->numberBetween(20000, 100000)/5000) * 5000,
        ];
    }
}
