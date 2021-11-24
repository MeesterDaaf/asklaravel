<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Database\Factories\TagEnum;

use Spatie\Enum\Faker\FakerEnumProvider;

class TagFactory extends Factory
{

    public $tag;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new FakerEnumProvider($this->faker));

        return
            [
                'name' => $this->faker->randomEnum(TagEnum::class)
            ];
    }
}
