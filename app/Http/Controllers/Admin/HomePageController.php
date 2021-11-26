<?php

namespace App\Http\Controllers\Admin;

use App\Home;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Homepagecontant = Home::all();
        return view('admin.page.home', ['Homepagedata' => $Homepagecontant]);
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
        $data = new Home();
        $data->banner_heading = $request->banner_heading;
        $data->banner_content = $request->banner_content;
        $data->latest_listingheading = $request->latest_listingheading;
        $data->latest_listingdescription = $request->latest_listingdescription;
        $data->post_addheading = $request->post_addheading;
        $data->post_adddescription = $request->post_adddescription;
        $data->bussiness_direc_heading = $request->bussiness_direc_heading;
        $data->bussiness_direc_description = $request->bussiness_direc_description;
        $data->descover_heading = $request->descover_heading;
        $data->mostpopulr_category = $request->mostpopulr_category;
        $data->listing_heading = $request->listing_heading;
        $data->populor_feuted_add = $request->populor_feuted_add;
        $data->why_we = $request->why_we;
        $data->we_are_mstpopular = $request->we_are_mstpopular;
        $data->top_categry_head = $request->top_categry_head;
        $data->top_categry_description = $request->top_categry_description;
        $data->qlity_adds_headings = $request->qlity_adds_headings;
        $data->qlity_adds_description = $request->qlity_adds_description;
        $data->top_bestlocation_headings = $request->top_bestlocation_headings;
        $data->top_bestlocation_description = $request->top_bestlocation_description;
        $data->new_directory_head = $request->new_directory_head;
        $data->new_bussinesslisting = $request->new_bussinesslisting;
        $data->find_whatyouwant_heading = $request->find_whatyouwant_heading;
        $data->find_whatyouwant_description = $request->find_whatyouwant_description;
        $data->explore_amezing_head = $request->explore_amezing_head;
        $data->explore_amezing_description = $request->explore_amezing_description;
        $data->bottom_content_heading = $request->bottom_content_heading;
        $data->bottom_content_description = $request->bottom_content_description;
        $data->save();
        Toastr::success('Form Field Created successfully');
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
        $data = Home::findOrFail($id);
        $data->banner_heading = $request->banner_heading;
        $data->banner_content = $request->banner_content;
        $data->latest_listingheading = $request->latest_listingheading;
        $data->latest_listingdescription = $request->latest_listingdescription;
        $data->post_addheading = $request->post_addheading;
        $data->post_adddescription = $request->post_adddescription;
        $data->bussiness_direc_heading = $request->bussiness_direc_heading;
        $data->bussiness_direc_description = $request->bussiness_direc_description;
        $data->descover_heading = $request->descover_heading;
        $data->mostpopulr_category = $request->mostpopulr_category;
        $data->listing_heading = $request->listing_heading;
        $data->populor_feuted_add = $request->populor_feuted_add;
        $data->why_we = $request->why_we;
        $data->we_are_mstpopular = $request->we_are_mstpopular;
        $data->top_categry_head = $request->top_categry_head;
        $data->top_categry_description = $request->top_categry_description;
        $data->qlity_adds_headings = $request->qlity_adds_headings;
        $data->qlity_adds_description = $request->qlity_adds_description;
        $data->top_bestlocation_headings = $request->top_bestlocation_headings;
        $data->top_bestlocation_description = $request->top_bestlocation_description;
        $data->new_directory_head = $request->new_directory_head;
        $data->new_bussinesslisting = $request->new_bussinesslisting;
        $data->find_whatyouwant_heading = $request->find_whatyouwant_heading;
        $data->find_whatyouwant_description = $request->find_whatyouwant_description;
        $data->explore_amezing_head = $request->explore_amezing_head;
        $data->explore_amezing_description = $request->explore_amezing_description;
        $data->bottom_content_heading = $request->bottom_content_heading;
        $data->bottom_content_description = $request->bottom_content_description;
        $data->save();
        Toastr::success('Updated successfully');
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
    }
}
