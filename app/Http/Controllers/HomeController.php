<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // if using query builder
        // $allCategories = DB::table('categories')->get(); 

        // if using Eloquent
        $categories = Category::all();
        $posts = Post::when(request('category_id'), function ($query) { 
            $query->where('category_id', request('category_id'));
        })->latest()->get();

        // return view('home', [
        //     'categories' => $allCategories,
        //     'posts' => $posts
        // ]); 

        // using compact
        return view('home', compact('categories', 'posts'));
    }
}
