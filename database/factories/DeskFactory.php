<?php

namespace Database\Factories;

use App\Models\Desk;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeskFactory extends Factory
{
    protected $model = Desk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
