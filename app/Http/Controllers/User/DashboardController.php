<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Post;
use App\Category;
use App\SubCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard.index');
    }
    public function displyprofile()
    {
        $user = User::find(Auth::user()->id);
        return view('user.profile', compact('user'));
    }
    public function displypassword()
    {
        $userpass = User::find(Auth::user()->id);
        return view('user.privacysetting', compact('userpass'));
    }

    public function updateprofile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'image' => 'sometimes|image|mimes:jpg,png,jpeg|max:2000'
        ]);
        // return view('admin.index');
        $user = User::find(Auth::user()->id);
        if ($request->image != null) {
            //image
            $image = $request->image;
            $imagename = Str::slug($request->name, '-') . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('user')) {
                Storage::disk('public')->makeDirectory('user');
            }
            //delete image
            if (Storage::disk('public')->exists('user/' . $user->image)) {
                Storage::disk('public')->delete('user/' . $user->image);
            }
            //store image
            $userimage = Image::make($image)->fit(200, 200)->stream();
            Storage::disk('public')->put('user/' . $imagename, $userimage);
            //
        } else {
            $imagename = $user->image;
        }

        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->userid  = $request->userid;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->zipcode = $request->zipcode;
        $user->fb_link = $request->fb_link;
        $user->linkind_link = $request->linkind_link;
        $user->twitter_link = $request->twitter_link;
        $user->whatsapp_link = $request->whatsapp_link;
        $user->image = $imagename;
        $user->save();
        Toastr::success('User updated successfully');
        return redirect()->back();
    }

    public function changePassword(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|max:255|confirmed'
        ]);
        /// chech old password
        $oldpass = Auth::user()->password;
        if (Hash::check($request->old_password, $oldpass)) {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            //logout 
            Auth::logout();
            return redirect()->back();
        } else {
            Toastr::error('Enter old Correct Password');
            return redirect()->back();
        }
    }
}
