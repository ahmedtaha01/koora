<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Sequence;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Role::factory()->times(2)->state(new Sequence(
            ['type' => 'admin'],
            ['type' => 'user'],
        ))->create();
    }
}
