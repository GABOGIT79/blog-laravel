<?php

namespace Database\Seeders;

use App\Models\Category;

use App\Models\Tag;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factoory(8)->create();
        $this->call(PostSeeder::class);

    }
}
