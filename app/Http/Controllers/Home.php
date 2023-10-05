<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;

use App\Models\User;

class Home extends Controller
{
    public function index()
    {
        return view('home/home', [
            "name" => "muhammad rafli",
            "email" => "muhammad.rafli@gmail.com",
            'title' => "home",
        ]);
    }

    public function about()
    {
        return view('home/about', [
            'title' => "about"
        ]);
    }

    public function blog()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug',  request('category'));
            $title = "IN " . $category->name;
        }
        if (request('user')) {
            $user = User::firstWhere('name',  request('user'));
            $title = "IN " . $user->name;
        }

        return view('home/blog', [

            'title' => "ALL POST " . $title,
            'blog' => Post::latest()->Filter(request(['search', 'category', 'user']))->paginate(7)
        ]);
    }


    public function post(Post $post)
    {
        return view('home/posts', [
            'title' => 'single post',
            'blog' => $post
        ]);
    }

    public function categories()
    {
        return view('home/categories', [
            'title' => "categories",
            'category' => Category::all()

        ]);
    }
}
