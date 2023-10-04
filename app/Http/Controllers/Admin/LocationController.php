<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BranchLocation;
use App\Models\AboutAYA\AyabankProfilePageConfigure;
use App\Models\AboutAYA\AyabankProfilePageCorproateInfo;
use App\Models\PageBanner;
use DB;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pagelocation()
    {
        return view('admin.location.list');
    }

    public function locationBranch()
    {
        return view('admin.location.branch');
    }

    public function locationAtm()
    {
        return view('admin.location.amt');
    }

    public function locationFx()
    {
        return view('admin.location.fx');
    }

    public function locationStore(Request $request)
    {
        $region = $request->region;
        $name = $request->name;
        $address = $request->address;
        $telephone = $request->telephone;
        $fax = $request->fax;
        
        $location = new location;
        $location->region = $region;
        $location->name = $name;
        $location->address = $address;
        $location->telephone = $telephone;
        $location->fax = $fax;

        $location->created_by = auth()->user()->id;
        $location->updated_by = auth()->user()-id;
        $location->save();

    }

}