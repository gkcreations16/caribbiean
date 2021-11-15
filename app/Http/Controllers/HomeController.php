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
    public function categorypage()
    {

        $category = Category::paginate(8);
        $subcategory = SubCategory::all();
        return view('category', ['categorys' => $category, 'subcategorys' => $subcategory]);
        // return view('category');
    }
    public function listingpage()
    {
        $posts = Post::paginate(3);
        $category = Category::paginate(8);
        $subcategory = SubCategory::all();
        return view('listing', ['categorys' => $category, 'posts' => $posts, 'subcategorys' => $subcategory]);
    }
    public function navbarfront()
    {
        $category = Category::paginate(8);
        $subcategory = SubCategory::all();
        return view('category', ['categorys' => $category, 'subcategorys' => $subcategory]);
        // return view('listing');
    }
}
