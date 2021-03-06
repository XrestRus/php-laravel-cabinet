<?php

namespace Database\Factories;

use App\Models\Type__mark;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clock' => $this->faker->numberBetween(0, 8),
            'date' => $this->faker->dateTimeBetween('-4 month', '+4 month'),
            'type_mark_id' => Type__mark::all()->random(),
            'user_id' => User::all()->random(),
        ];
    }
}
