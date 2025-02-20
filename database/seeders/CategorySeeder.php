<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'PHP',
            'slug' => 'php',
        ]);

        Category::create([
            'name' => 'Phyton',
            'slug' => 'phyton',
        ]);

        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
        ]);

        Category::create([
            'name' => 'JavaScript',
            'slug' => 'javascript',
        ]);

        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);
    }
}
