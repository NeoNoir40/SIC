<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name'=> $this->faker->name(2),
            'last_name'=> $this->faker->sentence(2),
            'id_student'=> $this->faker->randomNumber(8),
            'birth_date'=> $this->faker->date(),
            'comments'=> $this->faker->sentence(40),
            

        ];
    }
}
