<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Massage;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function index()
    {
        $massages = Massage::all();

        // dd($massages);
        return view('admin/massages/index', compact('massages'));
    }

    public function destroy($id)
    {
        $massage = Massage::findOrFail($id);
        $massage->delete();
        Toastr::success('Massage Send successfully');
        return redirect()->back();
    }
}
