<?php

namespace Database\Factories;
use App\Models\Machine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detection>
 */
class DetectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'machine_id' => Machine::inRandomOrder()->first()->id,
            'image_path' => $this->faker->imageUrl(),
            'detected_items' => $this->faker->words(5, true),  // Generar algunos items detectados
            'missing_items' => $this->faker->words(3, true),   // Generar valores para missing_items
        ];
    }
}
