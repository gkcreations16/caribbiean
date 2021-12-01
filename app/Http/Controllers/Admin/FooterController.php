<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Footercontant = Footer::all();
        return view('admin.footer.index', ['Footerdata' => $Footercontant]);
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
        // if ($request->hasfile('footer_bgimage')) {
        //     $footer_image = $request->file('footer_bgimage');
        //     $footer_bgimgname = $footer_image->getClientOriginalName();
        //     $footer_image->move(public_path() . '/home_imag/', $footer_bgimgname);
        // }
        // if ($request->hasfile('logoimage')) {
        //     $footer_logimage = $request->file('logoimage');
        //     $footer_logoimgname = $footer_logimage->getClientOriginalName();
        //     $footer_logimage->move(public_path() . '/home_imag/', $footer_logoimgname);
        // }

        $footer_bgimage = $request->footer_bgimage;
        $footer_bg_name = $footer_bgimage->getClientOriginalName();
        //store image
        $footer_bgimage->storeAs('homepg_img', $footer_bg_name, 'public');

        $logoimage = $request->logoimage;
        $logoimage_name = $logoimage->getClientOriginalName();
        //store image
        $logoimage->storeAs('homepg_img', $logoimage_name, 'public');


        $data = new Footer();
        $data->short_note = $request->short_note;
        $data->foot_address = $request->foot_address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->location_title = $request->location_title;
        $data->location_map = $request->location_map;
        $data->fb_title = $request->fb_title;
        $data->fb_videolink = $request->fb_videolink;
        $data->foot_fblink = $request->foot_fblink;
        $data->foot_insatalink = $request->foot_insatalink;
        $data->foot_twitterlink = $request->foot_twitterlink;
        $data->foot_Linkinlink = $request->foot_Linkinlink;
        $data->footer_bgimage = $footer_bg_name;
        $data->logoimage = $logoimage_name;
        $data->save();
        Toastr::success('Footer Created successfully');
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
        $data = Footer::findOrFail($id);

        // if ($request->hasfile('footer_bgimage')) {
        //     $footer_bgimg = $request->file('footer_bgimage');
        //     $footer_bgname = $footer_bgimg->getClientOriginalName();
        //     $footer_bgimg->move(public_path() . '/home_imag/', $footer_bgname);
        // }
        // if ($request->hasfile('logoimage')) {
        //     $logoimage_img = $request->file('logoimage');
        //     $logoimage_imgname = $logoimage_img->getClientOriginalName();
        //     $logoimage_img->move(public_path() . '/home_imag/', $logoimage_imgname);
        // }

        if ($request->footer_bgimage != null) {
            //image
            $footer_bgimage = $request->footer_bgimage;
            $footer_bg_name = $footer_bgimage->getClientOriginalName();

            if (!Storage::disk('public')->exists('homepg_img')) {
                Storage::disk('public')->makeDirectory('homepg_img');
            }
            //delete image
            if (Storage::disk('public')->exists('homepg_img/' . $data->footer_bgimage)) {
                Storage::disk('public')->delete('homepg_img/' . $data->footer_bgimage);
            }
            //store image
            $footer_bgimage->storeAs('homepg_img', $footer_bg_name, 'public');
        } else {
            $footer_bg_name = $data->footer_bgimage;
        }

        if ($request->logoimage != null) {
            //image
            $logoimage = $request->logoimage;
            $logoimage_name = $logoimage->getClientOriginalName();

            if (!Storage::disk('public')->exists('homepg_img')) {
                Storage::disk('public')->makeDirectory('homepg_img');
            }
            //delete image
            if (Storage::disk('public')->exists('homepg_img/' . $data->logoimage)) {
                Storage::disk('public')->delete('homepg_img/' . $data->logoimage);
            }
            //store image
            $logoimage->storeAs('homepg_img', $logoimage_name, 'public');
        } else {
            $logoimage_name = $data->logoimage;
        }

        $data->short_note = $request->short_note;
        $data->foot_address = $request->foot_address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->location_title = $request->location_title;
        $data->location_map = $request->location_map;
        $data->fb_title = $request->fb_title;
        $data->fb_videolink = $request->fb_videolink;
        $data->foot_fblink = $request->foot_fblink;
        $data->foot_insatalink = $request->foot_insatalink;
        $data->foot_twitterlink = $request->foot_twitterlink;
        $data->foot_Linkinlink = $request->foot_Linkinlink;
        $data->footer_bgimage = $footer_bg_name;
        $data->logoimage = $logoimage_name;
        $data->save();
        Toastr::success('Footer update successfully');
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
