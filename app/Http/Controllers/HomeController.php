<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use \App\Models\Post;
use \App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => 'Home',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            "categories" => Category::all(),
            "authors" => User::all()
        ]);
    }
}
