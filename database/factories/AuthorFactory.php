<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use App\Models\Author;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }

}
