<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $posts = [
            [
                'id'=>1,

                'user_id' => 1,
                'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=Laravel Introduction',
                'title' => 'Introduction to Laravel Development',
                'slug' => 'introduction-to-laravel-development',
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'body' => 'In this post, we will explore the basics of Laravel development and its core features. We will delve into topics such as routing, controllers, models, views, migrations, and more. By the end of this tutorial, you will have a solid understanding of how to build web applications using the Laravel framework.',
                'featured' => 1,
            ],
            [
                'id'=>2,

                'user_id' => 1,
                'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=Laravel Tutorials',
                'title' => 'Getting Started with Laravel Tutorials',
                'slug' => 'getting-started-with-laravel-tutorials',
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'body' => 'This post will guide you through the initial steps of learning Laravel through tutorials. We will cover setting up your development environment, creating your first Laravel project, understanding the Laravel directory structure, and basic concepts such as routing and views. By following along with this tutorial, you will be well-equipped to begin your journey into Laravel development.',
                'featured' => 1,
            ],
            [
                'id'=>3,

                'user_id' => 1,
                'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=Laravel Packages',
                'title' => 'Exploring Laravel Packages',
                'slug' => 'exploring-laravel-packages',
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'body' => 'This post will delve into various Laravel packages available in the Laravel ecosystem. We will discuss popular packages for authentication, authorization, caching, validation, and more. By the end of this exploration, you will have a good understanding of how to leverage Laravel packages to enhance your applications.',
                'featured' => 1,
            ],
            [
                'id'=>4,

                'user_id' => 1,
                'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=Laravel News',
                'title' => 'Latest Laravel News',
                'slug' => 'latest-laravel-news',
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'body' => 'Stay updated with the latest news and announcements from the Laravel community. In this post, we will cover recent releases, upcoming events, community highlights, and more. Whether you are a seasoned Laravel developer or just getting started, this post will keep you informed about the latest developments in the Laravel world.',
            ],
            [
                'id'=>5,

                'user_id' => 1,
                'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=PHP Introduction',
                'title' => 'Introduction to PHP',
                'slug' => 'introduction-to-php',
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'body' => 'PHP is a powerful server-side scripting language that is widely used for web development. In this post, we will provide an introduction to PHP, covering basic syntax, data types, control structures, functions, and more. Whether you are new to programming or experienced in other languages, this post will help you get started with PHP.',
            ],
            [
                'id'=>6,

                'user_id' => 1,
                'image' => 'https://via.placeholder.com/640x480.png/00ff00?text=Css Development',
                'title' => 'Essential CSS Concepts',
                'slug' => 'essential-css-concepts',
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'body' => 'CSS (Cascading Style Sheets) is a fundamental technology used for styling web pages. In this post, we will explore essential CSS concepts such as selectors, properties, values, inheritance, and specificity. Whether you are a beginner or looking to refresh your CSS skills, this post will provide a solid foundation in CSS.',
            ],

        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
