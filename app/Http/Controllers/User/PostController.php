<?php

namespace App\Http\Controllers\User;

use App\Post;
use App\Category;
use App\SubCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(4);
        $post_userid = Auth::user()->userid;
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('user.post.addpost', ['post_userid' => $post_userid, 'categorys' => $category, 'subcategorys' => $subcategory, 'posts' => $posts]);
    }

    public function GetSubCatAgainstMainCat($id)
    {

        echo json_encode(DB::table('sub_categories')->where('category', $id)->get());
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
        $post->userid = $request->userid;
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
        $post = Post::findOrFail($id);

        // if ($request->hasfile('image')) {
        //     foreach ($request->file('image') as $image) {
        //         $name = $image->getClientOriginalName();
        //         $image->move(public_path() . '/image/', $name);
        //         $data[] = $name;
        //     }
        // }
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
        // $post->image = json_encode($data);
        $post->save();
        Toastr::success('Post Updated successfully');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        Toastr::Error('Post Deleted successfully');
        return redirect()->back();
    }
}
