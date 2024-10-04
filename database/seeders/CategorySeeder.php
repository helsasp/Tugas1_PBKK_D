<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

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
            'color' =>'red'
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing',
            'color' =>'green'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' =>'blue'
        ]);

        Category::create([
            'name' => 'Mobile Development',
            'slug' => 'Mobile Development',
            'color' =>'yellow'
        ]);

}

}