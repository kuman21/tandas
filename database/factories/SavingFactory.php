<?php

namespace Database\Factories;

use App\Models\Saving;
use Illuminate\Database\Eloquent\Factories\Factory;

class SavingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Saving::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $periodicity = ['7', '15', '30'];

        return [
            'user_id' => rand(1, 2),
            'numbers' => rand(10, 15),
            'periodicity' => $periodicity[rand(0, 2)],
            'amount' => $this->$faker->randomDigit,
            'shared' => rand(0, 1),
            'date' => $this->faker->date,
            'active' => rand(0, 1)
        ];
    }
}
