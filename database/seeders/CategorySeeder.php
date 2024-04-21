<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            [
                'id'=>1,
                'title' => 'Laravel Development',
                'slug' => 'Laravel-Development',
                'bg_color' => 'red',
                'text_color' => 'blue',
            ],
            [
                'id'=>2,

                'title' => 'Laravel Tutorials',
                'slug' => 'Laravel-Tutorials',
                'bg_color' => 'red',
                'text_color' => 'pink',
            ],
            [
                'id'=>3,

                'title' => 'Laravel Packages',
                'slug' => 'Laravel-Packages',
                'bg_color' => 'yellow',
                'text_color' => 'green',
            ],
            [
                'id'=>4,

                'title' => 'Laravel News',
                'slug' => 'Laravel-News',
                'bg_color' => 'lime',
                'text_color' => 'indigo',
            ],
            [
                'id'=>5,

                'title' => 'PHP',
                'slug' => 'PHP',
                'bg_color' => 'pink',
                'text_color' => 'blue',
            ],
            [
                'id'=>6,

                'title' => 'Css',
                'slug' => 'Css',
                'bg_color' => 'indigo',
                'text_color' => 'lime',
            ],
        ];

        // Insert categories into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
