<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the data to be seeded
        $data = [
            ['post_id' => 1, 'category_id' => 1],
            ['post_id' => 2, 'category_id' => 2],
            ['post_id' => 3, 'category_id' => 3],
            ['post_id' => 4, 'category_id' => 4],
            ['post_id' => 5, 'category_id' => 5],
            ['post_id' => 6, 'category_id' => 6],
        ];

        // Insert the data into the database
        DB::table('category_post')->insert($data);
    }
}
