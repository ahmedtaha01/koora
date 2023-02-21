<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\StadiumSeeder;
use Database\Seeders\CommentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        //$this->call(RoleSeeder::class);
        // $this->call(StadiumSeeder::class);
        //$this->call(ServiceSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
