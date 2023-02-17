<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\Stadium;
use App\Models\Service;

class StadiumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Stadium::class;

    public function definition()
    {
        return [
            'name'          => $this->faker->name,
            'address'       => $this->faker->address,
            'hour_price'    => '100',
            'size'          => '5X5',
            'join_date'     => $this->faker->date,
            'user_id'       => $this->faker->randomElement(DB::table('users')->pluck('id')),
        ];
    }


    public function configure()
    {
        return $this->afterCreating(function (Stadium $stadium) {
            DB::table('service_stadium')->insert([
                'stadium_id' => $stadium->id,
                'service_id' => Service::all()->random()->id,
            ]);
        });
    }
    
}
