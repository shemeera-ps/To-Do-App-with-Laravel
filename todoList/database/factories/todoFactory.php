<?php

namespace Database\Factories;
use App\Models\todo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todo>
 */
class todoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = todo::class;
    public function definition(): array
    {
        return [
            'task' => $this->faker->sentence,
            'completed' => $this->faker->boolean,
        ];
    }
}
