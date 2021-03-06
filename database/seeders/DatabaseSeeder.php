<?php

namespace Database\Seeders;

use Database\Factories\Enums\TagEnum;
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
        \App\Models\Tag::factory(count(TagEnum::cases()))->create();
        \App\Models\Category::factory(3)->create();
        \App\Models\Subcategory::factory(3)->create();

        $this->call([
            QuestionSeeder::class
        ]);
    }
}
