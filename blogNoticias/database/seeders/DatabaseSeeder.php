<?php

namespace Database\Seeders;

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
       \App\Models\Author::factory(5)->create();
       \App\Models\Category::factory(5)->create();
       \App\Models\News::factory(100)->create();
    }
}
