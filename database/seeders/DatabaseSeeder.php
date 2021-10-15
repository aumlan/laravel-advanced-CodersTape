<?php

namespace Database\Seeders;

use App\Models\Chanel;
use App\Models\Channel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         Channel::factory()->count(20)->create();
    }
}
