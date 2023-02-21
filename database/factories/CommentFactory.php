<?php

namespace Database\Factories;

use App\Models\Stadium;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'       => User::all()->random()->id,
            'stadium_id'    => Stadium::all()->random()->id,
            'comment'       => $this->faker->text,
        ];
    }
}
