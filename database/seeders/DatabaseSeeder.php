<?php

namespace Database\Seeders;

use App\Models\Chanel;
use App\Models\Channel;
use App\Models\Customer;
use App\Models\Post;
use App\Models\User;
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
//         Channel::factory()->count(20)->create();

         //Polymorphic Relationship
//        User::factory(1)->create();
//        Post::factory()->count(1)->create();
        Customer::factory()->count(10)->create();
    }
}
