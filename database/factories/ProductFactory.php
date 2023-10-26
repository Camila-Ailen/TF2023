<?php

namespace Database\Factories;

use App\Models\Subcategory;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

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
        $subcategory = Subcategory::all()->random();

        $unit = Unit::all()->random();

        return [
            'name' => $this->faker->sentence(2),
            'slug' => Str::slug($this->faker->name),
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'subcategory_id' => $subcategory->id,
            'quantity' => $this->faker->numberBetween(1, 100),
            'unit_id' => $unit->id,
        ];
    }
}
