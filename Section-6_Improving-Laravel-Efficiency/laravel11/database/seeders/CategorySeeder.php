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
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'business',
        ]);

        Category::create([
            'name' => 'E-commerce',
            'slug' => 'e-commerce',
        ]);
    }
}
