<?php

namespace Database\Factories;

use App\Models\Issue;
use Illuminate\Database\Eloquent\Factories\Factory;

class IssueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Issue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Adding fake data to tables using Faker Lib
        return [
            'title' => $this->faker->word,
            'body' => $this->faker->paragraph,
            'uuid' => $this->faker->uuid,
            'slug' => $this->faker->text,
        ];
    }


}
