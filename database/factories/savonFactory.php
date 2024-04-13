<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class savonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "title" => $this ->faker->sentence(),
            "tags" => "php, laravel, javascript",
            "location" => $this->faker->city(),
            "company" => $this->faker->company(),
            "email" => $this->faker->companyEmail(),
            "website" => $this->faker->url(),
            "description" => $this->faker->paragraph(4),
            
        ];
    }
}
