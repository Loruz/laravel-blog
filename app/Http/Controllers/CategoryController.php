<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
       $posts = $category->posts;

       return view('category', compact('posts'));
    }
}
