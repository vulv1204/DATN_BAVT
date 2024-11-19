<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        //getAll category
        $categories = Category::query()->latest('id')->paginate(5);

        //getAll blog
        $blogs = Blog::query()->latest('id')->paginate(5);

        //getAll blog đăng mới nhất
        $newBlogs = Blog::query()->latest('created_at')->paginate(5);

        return view('client.pages.about-blog.blog', compact('categories', 'blogs', 'newBlogs'));
    }
}
