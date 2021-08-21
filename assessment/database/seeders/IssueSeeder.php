<?php

namespace Database\Seeders;

use App\Models\Issue;

use Database\Factories\IssueFactory;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Issue::factory()->count(10)->create();

    }
}

