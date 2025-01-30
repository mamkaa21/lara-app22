<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
   public function __invoke()
   {
       $title = 'Create Post';
       $categories = Category::all();
       return view('posts.create', compact('title', 'categories'));
   }
}
