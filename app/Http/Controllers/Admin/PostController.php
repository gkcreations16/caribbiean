<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use App\SubCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin.post.addpost', ['categorys' => $category, 'subcategorys' => $subcategory, 'posts' => $posts]);
        // return view('admin.post.addpost', compact('category,subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/image/', $name);
                $data[] = $name;
            }
        }
        $post = new Post;
        $post->title = $request->title;
        $post->category = $request->category;
        $post->subcategory = $request->subcategory;
        $post->city = $request->city;
        $post->state = $request->state;
        $post->zipcode = $request->zipcode;
        $post->address = $request->address;
        $post->description = $request->description;
        $post->website = $request->website;
        $post->email = $request->email;
        $post->mobile = $request->mobile;
        $post->fb_link = $request->fb_link;
        $post->twitter_link = $request->twitter_link;
        $post->linkedind_link = $request->linkedind_link;
        $post->aircondition = $request->aircondition;
        $post->hometheter = $request->hometheter;
        $post->homedelivery = $request->homedelivery;
        $post->roomservice = $request->roomservice;
        $post->electric = $request->electric;
        $post->security = $request->security;
        $post->balcony = $request->balcony;
        $post->parking = $request->parking;
        $post->netbanking = $request->netbanking;
        $post->wifi = $request->wifi;
        $post->telephone = $request->telephone;
        $post->price = $request->price;
        $post->image = json_encode($data);
        $post->save();
        Toastr::success('Post created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
