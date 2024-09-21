<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'yellow',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'business',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'E-commerce',
            'slug' => 'e-commerce',
            'color' => 'purple',
        ]);
    }
}
