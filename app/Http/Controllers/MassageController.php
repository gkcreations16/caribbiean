<?php

namespace App\Http\Controllers;

use App\Massage;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MassageController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, ['massage' => 'required|max:1000']);
        $massage = new Massage();
        $massage->post_id = $request->post_id;
        $massage->user_id = Auth::id();
        $massage->massage = $request->massage;
        $massage->save();
        Toastr::success('Massage Send successfully');
        return redirect()->back();
    }
}
