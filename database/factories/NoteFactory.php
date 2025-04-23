<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\note;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'note' => fake()->sentence
                (mt_rand(5, 10)),
            'user_id' => 1,
        ];
    }
}
