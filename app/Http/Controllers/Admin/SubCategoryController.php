<?php

namespace App\Http\Controllers\Admin;

use App\SubCategory;
use App\Category;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        $category = Category::all();
        return view('admin.subcategory.index', ['categorys' => $category, 'subcategories' => $subcategories]);
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
            'name' => 'required|max:255'
            // 'image' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        //
        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->slug = Str::slug($request->name, '-');
        $subcategory->category = $request->category;
        $subcategory->save();
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
    // public function update(Request $request, $id)
    // {
    public function update(Request $request, $id)
    {
        if ($request->name == SubCategory::findOrFail($id)->name) {
            $this->validate($request, [
                'name' => 'required|max:255'
                // 'image' => 'sometimes|image|mimes:jpg,png,jpeg'
            ]);
        } else {
            $this->validate($request, [
                'name' => 'required|max:255|unique:categories'
                // 'image' => 'sometimes|image|mimes:jpg,png,jpeg'
            ]);
        }
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->name = $request->name;
        $subcategory->slug = Str::slug($request->name, '-');
        $subcategory->category = $request->category;
        $subcategory->save();
        Toastr::success('SubCategory Updated  successfully');
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
        $category = SubCategory::findOrFail($id);
        $category->delete();
        // Storage::disk('public')->delete('subcategory/' . $category->image);
        Toastr::success('SubCategory Deleted successfully');
        return redirect()->back();
    }
}
