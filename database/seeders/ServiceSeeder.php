<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::factory()->times(8)->state(new Sequence(
            ['type' => 'parking'],
            ['type' => 'prayer'],
            ['type' => 'water'],
            ['type' => 'shower'],
            ['type' => 'toilet'],
            ['type' => 'whistle'],
            ['type' => 'ball'],
            ['type' => 'shirt'],
        ))->create();
    }
}
