<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostListController extends Controller
{
    public function index()
    {
        $posts = Posts::simplePaginate(5);
        $categories = Category::all();
        return view('frontend.posts', compact('posts', 'categories'));
    }
}
