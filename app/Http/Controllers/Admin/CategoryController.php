<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
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
        $this->validate($request, [
            'name' => 'required|max:255|unique:categories',
            'description' => 'sometimes|max:755',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'iconimage' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        //image
        $image = $request->image;
        $imagename = Str::slug($request->name, '-') . uniqid() . '.' . $image->getClientOriginalExtension();
        if (!Storage::disk('public')->exists('category')) {
            Storage::disk('public')->makeDirectory('category');
        }
        //store image
        $image->storeAs('category', $imagename, 'public');


        //image
        $iconimage = $request->iconimage;
        $iconimagename = Str::slug($request->name, '-') . uniqid() . '.' . $iconimage->getClientOriginalExtension();
        if (!Storage::disk('public')->exists('cat_icon')) {
            Storage::disk('public')->makeDirectory('cat_icon');
        }
        //store image
        $iconimage->storeAs('cat_icon', $iconimagename, 'public');
        //
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->description = $request->description;
        $category->image = $imagename;
        $category->iconimage = $iconimagename;
        $category->save();
        Toastr::success('Category created successfully');
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
        // dd($request->name);
        if ($request->name == Category::findOrFail($id)->name) {

            $this->validate($request, [
                // 'name' => 'required|max:255',
                'description' => 'sometimes|max:755',
                'image' => 'sometimes|image|mimes:jpg,png,jpeg',
                'iconimage' => 'required|image|mimes:jpg,png,jpeg'
            ]);
        } else {
            $this->validate($request, [
                // 'name' => 'required|max:255|unique:categories',
                'description' => 'sometimes|max:755',
                'image' => 'sometimes|image|mimes:jpg,png,jpeg',
                'iconimage' => 'required|image|mimes:jpg,png,jpeg'
            ]);
        }

        $category = Category::findOrFail($id);
        if ($request->image != null) {
            //image
            $image = $request->image;
            $imagename = Str::slug($request->name, '-') . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('category')) {
                Storage::disk('public')->makeDirectory('category');
            }
            //delete image
            if (Storage::disk('public')->exists('category/' . $category->image)) {
                Storage::disk('public')->delete('category/' . $category->image);
            }
            //store image
            $image->storeAs('category', $imagename, 'public');
            //
        } else {
            $imagename = $category->image;
        }

        if ($request->iconimage != null) {
            //image
            $iconimage = $request->iconimage;
            $iconimagename = Str::slug($request->name, '-') . uniqid() . '.' . $iconimage->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('cat_icon')) {
                Storage::disk('public')->makeDirectory('cat_icon');
            }
            //delete image
            if (Storage::disk('public')->exists('cat_icon/' . $category->iconimage)) {
                Storage::disk('public')->delete('cat_icon/' . $category->iconimage);
            }
            //store image
            $iconimage->storeAs('cat_icon', $iconimagename, 'public');
            //
        } else {
            $iconimagename = $category->iconimage;
        }

        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->description = $request->description;
        $category->image = $imagename;
        $category->iconimage = $iconimagename;
        $category->save();
        Toastr::success('Category created successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        Storage::disk('public')->delete('category/' . $category->image);
        Storage::disk('public')->delete('cat_icon/' . $category->iconimage);
        Toastr::success('Category Deleted successfully');
        return redirect()->back();
    }
}
