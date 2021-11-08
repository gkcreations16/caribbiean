<?php

namespace App\Http\Controllers;

use App\Post;
use App\Home;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        $Homepagecontant = Home::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('index', ['categorys' => $category, 'subcategorys' => $subcategory, 'posts' => $posts, 'Homepagedata' => $Homepagecontant]);
        // return view('index');
    }
}
