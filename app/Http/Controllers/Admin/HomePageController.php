<?php

namespace App\Http\Controllers\Admin;

use App\Home;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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


        $banner_image = $request->banner_image;
        $banner_imge_name = $banner_image->getClientOriginalName();
        //store image
        $banner_image->storeAs('homepg_img', $banner_imge_name, 'public');

        //latest image
        $latestlist_image = $request->latestlist_image;
        $latestlist_imge_name = $latestlist_image->getClientOriginalName();
        //store image
        $latestlist_image->storeAs('homepg_img', $latestlist_imge_name, 'public');

        //add post image
        $addpost_image = $request->addpost_image;
        $addpost_imge_name = $addpost_image->getClientOriginalName();
        //store image
        $addpost_image->storeAs('homepg_img', $addpost_imge_name, 'public');



        //image bussiness 
        $bussiness_image = $request->bussiness_image;
        $bussiness_imge_name = $bussiness_image->getClientOriginalName();
        //store image
        $bussiness_image->storeAs('homepg_img', $bussiness_imge_name, 'public');


        // find whatyou image  
        $find_whatyou_image = $request->find_whatyou_image;
        $find_whatyou_name = $find_whatyou_image->getClientOriginalName();
        //store image
        $find_whatyou_image->storeAs('homepg_img', $find_whatyou_name, 'public');



        // explore amezing image  
        $explore_amezing = $request->explore_amezing;
        $explore_amezing_name = $explore_amezing->getClientOriginalName();
        //store image
        $explore_amezing->storeAs('homepg_img', $explore_amezing_name, 'public');





        // if ($request->hasfile('banner_image')) {
        //     $bannerimage = $request->file('banner_image');
        //     $banner_imge_name = $bannerimage->getClientOriginalName();
        //     $bannerimage->move(public_path() . '/home_imag/', $banner_imge_name);
        // }

        // if ($request->hasfile('latestlist_image')) {
        //     $latestlistimage = $request->file('latestlist_image');
        //     $latest_imagename = $latestlistimage->getClientOriginalName();
        //     $latestlistimage->move(public_path() . '/home_imag/', $latest_imagename);
        // }
        // if ($request->hasfile('addpost_image')) {
        //     $addpost_img = $request->file('addpost_image');
        //     $addpostname = $addpost_img->getClientOriginalName();
        //     $addpost_img->move(public_path() . '/home_imag/', $addpostname);
        // }

        // if ($request->hasfile('bussiness_image')) {
        //     $bussiness_img = $request->file('bussiness_image');
        //     $buss_name = $bussiness_img->getClientOriginalName();
        //     $bussiness_img->move(public_path() . '/home_imag/', $buss_name);
        // }


        // if ($request->hasfile('find_whatyou_image')) {
        //     $find_whatyou_img = $request->file('find_whatyou_image');
        //     $find_whatyouname = $find_whatyou_img->getClientOriginalName();
        //     $find_whatyou_img->move(public_path() . '/home_imag/', $find_whatyouname);
        // }
        // if ($request->hasfile('explore_amezing')) {
        //     $explore_amezing_img = $request->file('explore_amezing');
        //     $explore_amezingname = $explore_amezing_img->getClientOriginalName();
        //     $explore_amezing_img->move(public_path() . '/home_imag/', $explore_amezingname);
        // }

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
        $data->banner_image = $banner_imge_name;
        $data->latestlist_image = $latestlist_imge_name;
        $data->addpost_image = $addpost_imge_name;
        $data->bussiness_image = $bussiness_imge_name;
        $data->find_whatyou_image = $find_whatyou_name;
        $data->explore_amezing = $explore_amezing_name;
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

        // dd($request->all());
        $data = Home::findOrFail($id);
        if ($request->banner_image != null) {
            //image
            $banner_image = $request->banner_image;
            // if ($request->hasfile('banner_image')) {

            // $bannerimage = $request->file('banner_image');
            $banner_imge_name = $banner_image->getClientOriginalName();

            if (!Storage::disk('public')->exists('homepg_img')) {
                Storage::disk('public')->makeDirectory('homepg_img');
            }
            //delete image
            if (Storage::disk('public')->exists('homepg_img/' . $data->banner_image)) {
                Storage::disk('public')->delete('homepg_img/' . $data->banner_image);
            }
            //store image
            $banner_image->storeAs('homepg_img', $banner_imge_name, 'public');
            //
            // $bannerimage->move(public_path() . '/home_imag/', $banner_imge_name);
            // }
        } else {
            $banner_imge_name = $data->banner_image;
        }


        if ($request->latestlist_image != null) {
            //image
            $latestlist_image = $request->latestlist_image;
            $latestlist_imge_name = $latestlist_image->getClientOriginalName();
            if (!Storage::disk('public')->exists('homepg_img')) {
                Storage::disk('public')->makeDirectory('homepg_img');
            }
            //delete image
            if (Storage::disk('public')->exists('homepg_img/' . $data->latestlist_image)) {
                Storage::disk('public')->delete('homepg_img/' . $data->latestlist_image);
            }
            //store image
            $latestlist_image->storeAs('homepg_img', $latestlist_imge_name, 'public');
        } else {
            $latestlist_imge_name = $data->latestlist_image;
        }


        if ($request->addpost_image != null) {
            //image
            $addpost_image = $request->addpost_image;
            $addpost_imge_name = $addpost_image->getClientOriginalName();
            if (!Storage::disk('public')->exists('homepg_img')) {
                Storage::disk('public')->makeDirectory('homepg_img');
            }
            //delete image
            if (Storage::disk('public')->exists('homepg_img/' . $data->addpost_image)) {
                Storage::disk('public')->delete('homepg_img/' . $data->addpost_image);
            }
            //store image
            $addpost_image->storeAs('homepg_img', $addpost_imge_name, 'public');
        } else {
            $addpost_imge_name = $data->addpost_image;
        }


        if ($request->bussiness_image != null) {
            //image
            $bussiness_image = $request->bussiness_image;
            $bussiness_imge_name = $bussiness_image->getClientOriginalName();
            if (!Storage::disk('public')->exists('homepg_img')) {
                Storage::disk('public')->makeDirectory('homepg_img');
            }
            //delete image
            if (Storage::disk('public')->exists('homepg_img/' . $data->bussiness_image)) {
                Storage::disk('public')->delete('homepg_img/' . $data->bussiness_image);
            }
            //store image
            $bussiness_image->storeAs('homepg_img', $bussiness_imge_name, 'public');
        } else {
            $bussiness_imge_name = $data->bussiness_image;
        }

        if ($request->find_whatyou_image != null) {
            //image  
            $find_whatyou_image = $request->find_whatyou_image;
            $find_whatyou_name = $find_whatyou_image->getClientOriginalName();
            if (!Storage::disk('public')->exists('homepg_img')) {
                Storage::disk('public')->makeDirectory('homepg_img');
            }
            //delete image
            if (Storage::disk('public')->exists('homepg_img/' . $data->find_whatyou_image)) {
                Storage::disk('public')->delete('homepg_img/' . $data->find_whatyou_image);
            }
            //store image
            $find_whatyou_image->storeAs('homepg_img', $find_whatyou_name, 'public');
        } else {
            $find_whatyou_name = $data->find_whatyou_image;
        }

        if ($request->explore_amezing != null) {
            //image  
            $explore_amezing = $request->explore_amezing;
            $explore_amezing_name = $explore_amezing->getClientOriginalName();
            if (!Storage::disk('public')->exists('homepg_img')) {
                Storage::disk('public')->makeDirectory('homepg_img');
            }
            //delete image
            if (Storage::disk('public')->exists('homepg_img/' . $data->explore_amezing)) {
                Storage::disk('public')->delete('homepg_img/' . $data->explore_amezing);
            }
            //store image
            $explore_amezing->storeAs('homepg_img', $explore_amezing_name, 'public');
        } else {
            $explore_amezing_name = $data->explore_amezing;
        }


        // if ($request->hasfile('latestlist_image')) {
        //     $latestlistimage = $request->file('latestlist_image');
        //     $latest_imagename = $latestlistimage->getClientOriginalName();
        //     $latestlistimage->move(public_path() . '/home_imag/', $latest_imagename);
        // }
        // if ($request->hasfile('addpost_image')) {
        //     $addpost_img = $request->file('addpost_image');
        //     $addpostname = $addpost_img->getClientOriginalName();
        //     $addpost_img->move(public_path() . '/home_imag/', $addpostname);
        // }

        // if ($request->hasfile('bussiness_image')) {
        //     $bussiness_img = $request->file('bussiness_image');
        //     $buss_name = $bussiness_img->getClientOriginalName();
        //     $bussiness_img->move(public_path() . '/home_imag/', $buss_name);
        // }


        // if ($request->hasfile('find_whatyou_image')) {
        //     $find_whatyou_img = $request->file('find_whatyou_image');
        //     $find_whatyouname = $find_whatyou_img->getClientOriginalName();
        //     $find_whatyou_img->move(public_path() . '/home_imag/', $find_whatyouname);
        // }
        // if ($request->hasfile('explore_amezing')) {
        //     $explore_amezing_img = $request->file('explore_amezing');
        //     $explore_amezingname = $explore_amezing_img->getClientOriginalName();
        //     $explore_amezing_img->move(public_path() . '/home_imag/', $explore_amezingname);
        // }

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
        $data->banner_image = $banner_imge_name;
        $data->latestlist_image = $latestlist_imge_name;
        $data->addpost_image = $addpost_imge_name;
        $data->bussiness_image = $bussiness_imge_name;
        $data->find_whatyou_image = $find_whatyou_name;
        $data->explore_amezing = $explore_amezing_name;
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
