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
            'color' => 'purple',
        ]);
        
        Category::create([
            'name' => 'Phyton',
            'slug' => 'phyton',
            'color' => 'blue',
        ]);
        
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
            'color' => 'black',
        ]);
        
        Category::create([
            'name' => 'JavaScript',
            'slug' => 'javascript',
            'color' => 'yellow',
        ]);
        
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => 'red',
        ]);
    }
}
