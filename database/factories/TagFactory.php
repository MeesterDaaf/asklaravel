<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\Enums\TagEnum;
use Spatie\Enum\Faker\FakerEnumProvider;

class TagFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new FakerEnumProvider($this->faker));

        $randomTag = $this->faker->unique()->randomEnumValue(TagEnum::class);

        return
            [
                'name' => $randomTag
            ];
    }
}
