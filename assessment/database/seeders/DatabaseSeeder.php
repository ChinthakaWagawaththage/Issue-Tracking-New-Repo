<?php

namespace Database\Seeders;

use Database\Factories\IssueFactory;
use Faker\Factory;
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
        // \App\Models();\User::factor();y(10)->create

        //seeding factory - Issue
        $this->call(IssueSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(CommentSeeder::class);

    }
}
