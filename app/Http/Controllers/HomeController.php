<?php

namespace App\Http\Controllers;

use App\Post;
use App\Home;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $results = DB::table('posts')
        //     ->join('categories', 'posts.category', '=', 'categories.name')
        //     ->select('posts.*', 'categories.name')
        //     ->get();

        // $results = DB::table('categories')
        //     ->join('posts', 'categories.name', '=', 'posts.category')
        //     ->select('categories.*', 'posts.category')
        //     ->get();

        // dd($results);
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

    public function postdetails(Request $request, $id)
    {
        $postdetail = Post::findOrFail($id);
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('postdetail', ['categorys' => $category, 'subcategorys' => $subcategory, 'postdetail' => $postdetail]);
        // return view('listing');
    }

    public function categorydetails(Request $request, $id)
    {
        $categorybase = Category::findOrFail($id);
        // dd($categorybase);
        $category = Category::all();
        $posts = Post::paginate(8);
        $subcategory = SubCategory::all();
        return view('listing', ['categorys' => $category, 'categorybase' => $categorybase, 'subcategorys' => $subcategory, 'posts' => $posts]);
        // return view('listing');
    }

    public function searchProduct(Request $request)
    {
        $select_cate = $request->select_cat;
        $search_field_data = $request->searchonproduct;
        $subcategory = SubCategory::all();
        $category = Category::all();
        $posts = Post::paginate(8);
        //$data = DB::table('categories')->select('categories.name', 'posts.category', 'posts.title')->join('posts', 'posts.category', '=', 'categories.name')->get();
        $serch_input = DB::table('posts')->where('title', 'like', '%' . $search_field_data . '%')->get();

        return view('listing', ['categorys' => $category, 'select_cate' => $select_cate, 'subcategorys' => $subcategory, 'search_field_data' => $search_field_data,  'posts' => $posts, 'serch_input' => $serch_input]);
    }

    public function categorychooselist(Request $request, $id)
    {
        $categorywise = Category::findOrFail($id);
        $Homepagecontant = Home::all();
        $category = Category::all();
        $posts = Post::paginate(8);
        return view('index', ['categorys' => $category, 'categorywise' => $categorywise, 'Homepagedata' => $Homepagecontant, 'posts' => $posts]);
    }
}
