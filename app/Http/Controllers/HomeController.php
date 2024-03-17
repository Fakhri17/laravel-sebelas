<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // if using query builder
        // $allCategories = DB::table('categories')->get(); 

        // if using Eloquent
        $allCategories = Category::all();

        return view('home', ['categories' => $allCategories]); 
    }
}
