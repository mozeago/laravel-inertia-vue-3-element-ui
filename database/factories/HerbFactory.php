<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Herb>
 */
class HerbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'herb_name' => $this->faker->word(),
            'herb_used_for' => $this->faker->word(),
            'herb_description' => $this->faker->paragraph(2),
            'herb_common_location_found' => $this->faker->word(),
        ];
    }
}
