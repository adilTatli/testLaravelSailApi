<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'card_id' => Card::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}