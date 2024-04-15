<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
     return view('home', [
            'featuredPosts' => Post::published()->featured()->with('categories')->latest('published_at')->take(6)->get(),
            'latestPosts' => Post::published()->with('categories')->take(6)->latest('published_at')->get()
        ]);
    }
}
