<?php

namespace Database\Factories;

use App\Models\Desk;
use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeskListFactory extends Factory
{
    protected $model = DeskList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'desk_id' => Desk::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
